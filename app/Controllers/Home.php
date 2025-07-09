<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Home extends BaseController
{

    private $product_categories_slugs = [
        'filter'                      => 'กรอง',
        'control-valve'               => 'ชุดควบคุมวาล์ว',
        'air-tank'                    => 'ถังพักลม',
        'water-tank'                  => 'ถังเก็บน้ำ',
        'pressure-tank'               => 'ถังแรงดัน',
        'pneumatic'                   => 'นิวเมติก',
        'pump'                        => 'ปั๊ม',
        'air-compressor'              => 'ปั๊มลม',
        'screw-compressor'            => 'ปั๊มลมสกรู',
        'booster-pump'                => 'ปั๊มแรงดัน',
        'electric-motor'              => 'มอเตอร์ไฟฟ้า',
        'hoist'                       => 'รอก',
        'valve'                       => 'วาล์ว',
        'actuator'                    => 'หัวขับวาล์ว',
        'electric-appliance'          => 'อุปกรณ์ไฟฟ้าโรงงาน',
        'diesel-generator-set'        => 'เครื่องกำเนิดไฟฟ้า',
        'air-dryer'                   => 'เครื่องทำลมแห้ง',
        'tools'                       => 'เครื่องมือช่าง',
        'process-instrument'          => 'เครื่องมือวัด',
        'roots-blower-n-turbo-blower' => 'เครื่องเติมอากาศ',
        'sludge-separator'            => 'เครื่องแยกกากตะกอน',
        'insect-trap-light'           => 'เครื่องไฟดักแมลง',
        'reverse-osmosis-membrane'    => 'เมมเบรนกรองน้ำอุตสาหกรรม',
        'solar-cell'                  => 'โซล่าร์เซล',
        'blower'                      => 'โบลเวอร์',
        'mixer-agitator'              => 'ใบกวน'
    ];

    /**
     * This is the homepage
     * @return string
     */
    public function index(): string
    {
        helper('wordpress');
        $locale     = service('request')->getLocale();
        $limit      = 8;
        $blog_url   = getenv('WORDPRESS_URL');
        $parent_id  = getenv('WORDPRESS_PRODUCT_CATEGORY_PARENT_ID');
        $categories = callWordPressCurl($blog_url . "categories?parent={$parent_id}&per_page={$limit}&orderby=name");
        $data       = [
            'slug'       => 'home',
            'locale'     => $locale,
            'categories' => $categories['body']
        ];
        return view('home', $data);
    }

    /**
     * This is the about us page
     * @return string
     */
    public function aboutUs(): string
    {
        $locale = service('request')->getLocale();
        $data   = [
            'slug'   => 'about-us',
            'locale' => $locale
        ];
        return view('about-us', $data);
    }

    /**
     * This is the contact us page
     * @return string
     */
    public function contactUs(): string
    {
        $locale = service('request')->getLocale();
        $data   = [
            'slug'   => 'contact-us',
            'locale' => $locale
        ];
        return view('contact-us', $data);
    }

    /**
     * This is the service page
     * @return string
     */
    public function services(): string
    {
        $locale = service('request')->getLocale();
        $data   = [
            'slug'   => 'services',
            'locale' => $locale
        ];
        return view('services', $data);
    }

    /**
     * This is the product page
     * @return string
     */
    public function products(): string
    {
        helper('wordpress');
        $locale     = service('request')->getLocale();
        $limit      = count($this->product_categories_slugs);
        $blog_url   = getenv('WORDPRESS_URL');
        $parent_id  = getenv('WORDPRESS_PRODUCT_CATEGORY_PARENT_ID');
        $categories = callWordPressCurl($blog_url . "categories?parent={$parent_id}&per_page={$limit}&orderby=name");
        $data       = [
            'slug'       => 'products',
            'locale'     => $locale,
            'categories' => $categories['body'],
        ];
        return view('products', $data);
    }

    /**
     * View products in category
     * @param string $category_slug
     * @return string
     */
    public function productsByCategory(string $category_slug): string
    {
        helper('wordpress');
        $locale     = service('request')->getLocale();
        $blog_url   = getenv('WORDPRESS_URL');
        $category   = callWordPressCurl($blog_url . "categories?slug=" . $category_slug);
        if (empty($category['body'])) {
            throw PageNotFoundException::forPageNotFound();
        }
        $category_id = $category['body'][0]['id'];
        $page         = $this->request->getVar('p');
        $query        = $this->request->getVar('q') ?? '';
        $page         = (empty($page)) ? 1 : $page;
        $query_string = '';
        if (!empty($query)) {
            $query_string = '&search=' . $query;
        }
        $limit        = getenv('WORDPRESS_PAGE_LIMIT');
        $products     = retrieveWordPressPosts("posts?page={$page}&per_page={$limit}&categories={$category_id}{$query_string}");
        $data = [
            'slug'          => 'products',
            'locale'        => $locale,
            'title'         => $category['body'][0]['name'],
            'category'      => $category['body'],
            'category_id'   => $category_id,
            'category_slug' => $category_slug,
            'products'      => $products,
            'page'          => $page,
            'query'         => $query,
        ];
        return view('product-category', $data);
    }

    /**
     * @param string $product_slug
     * @return string
     */
    public function productView(string $product_slug): string
    {
        helper('wordpress');
        $locale  = service('request')->getLocale();
        $product = generateWordPressPage($product_slug, 'product');
        $data    = [
            'slug'    => 'products',
            'locale'  => $locale,
            'product' => $product,
            'title'   => $product['title']
        ];
        return view('product-view', $data);
    }

    /**
     * This is the blog page
     * @return string
     */
    public function blog(): string
    {
        helper('wordpress');
        $locale       = service('request')->getLocale();
        $page         = $this->request->getVar('p');
        $page         = (empty($page)) ? 1 : $page;
        $limit        = getenv('WORDPRESS_PAGE_LIMIT');
        $tag          = $this->request->getVar('tag');
        $query        = $this->request->getVar('q');
        $query_string = '';
        $mode         = 'list';
        $term         = '';
        if (!empty($query)) {
            $query_string = '&search=' . $query;
            $mode         = 'search';
            $term         = $query;
        } else if (!empty($tag)) {
            $query_string = '&tags=' . $tag;
            $mode         = 'tag';
            $term         = $tag;
        }
        $category_id = getenv('WORDPRESS_LOCALE_TH');
        $posts  = retrieveWordPressPosts("posts?page={$page}&per_page={$limit}&categories={$category_id}{$query_string}");
        $data   = [
            'slug'   => 'blog',
            'locale' => $locale,
            'posts'  => $posts,
            'mode'   => $mode,
            'term'   => $term,
            'page'   => $page
        ];
        return view('blog-list', $data);
    }

    /**
     * This is the blog view page
     * @param string $blog_slug
     * @return string
     */
    public function blogView(string $blog_slug): string
    {
        helper('wordpress');
        $locale = service('request')->getLocale();
        $post   = generateWordPressPage($blog_slug);
        $data   = [
            'slug'   => 'blog',
            'locale' => $locale,
            'post'   => $post,
            'title'  => $post['title']
        ];
        return view('blog-view', $data);
    }

    /**
     * Generate sitemap.xml
     * @return ResponseInterface
     */
    public function sitemap(): ResponseInterface
    {
        // MAIN PAGES
        $main_pages = [
            ['/', '2025-01-01', 'monthly', '1.0'],
            ['/about-us', '2025-01-01', 'monthly', '0.8'],
            ['/contact-us', '2025-01-01', 'monthly', '0.8'],
            ['/blog', '2025-01-01', 'weekly', '0.6'],
            ['/terms-and-conditions', '2025-01-01', 'monthly', '0.5'],
            ['/privacy-policy', '2025-01-01', 'monthly', '0.5']
        ];
        $languages  = [
            '',
            '/en',
            '/th'
        ];
        $xml        = [];
        foreach ($main_pages as $page) {
            foreach ($languages as $lang) {
                $xml[] = [
                    'loc'        => base_url($lang . $page[0]),
                    'lastmod'    => $page[1],
                    'changefreq' => $page[2],
                    'priority'   => $page[3],
                ];
            }
        }
        // BLOG PAGES
        $blog_url           = getenv('BLOG_URL');
        $category_ids       = [
            getenv('WORDPRESS_LOCALE_EN') => '/en/blog/view/',
            getenv('WORDPRESS_LOCALE_TH') => '/th/blog/view/'
        ];
        foreach ($category_ids as $id => $path) {
            $url    = $blog_url . 'posts?context=embed&per_page=50&categories=' . $id;
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_HEADER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                $response   = curl_exec($ch);
                $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $body       = substr($response, $headerSize);
                $posts      = json_decode($body, true);
                foreach ($posts as $post) {
                    $published = strtotime(substr(@$post['date'], 0, 10));
                    $age       = (time() - $published) / 86400;
                    $priority  = 0.5;
                    if ($age < 180) {
                        $priority = 0.7;
                    } elseif ($age < 730) { // 2 years
                        $priority = 0.6;
                    }
                    $xml[]     = [
                        'loc'        => base_url($path . $post['id']),
                        'lastmod'    => date('Y-m-d', $published),
                        'changefreq' => 'monthly',
                        'priority'   => $priority,
                    ];
                }
                curl_close($ch);
            } catch (\Exception $e) {
                continue;
            }
        }
        $final_xml = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';
        foreach ($xml as $item) {
            $final_xml .= '<url>';
            foreach ($item as $key => $value) {
                $final_xml .= '<' . $key . '>' . $value . '</' . $key . '>';
            }
            $final_xml .= '</url>';
        }
        $final_xml .= '</urlset>';
        return $this->response->setXML($final_xml);
    }

    /**
     * This is the script to send the message to the email address
     * @return string
     */
    public function contactUsScript(): string
    {
        $name    = $this->request->getPost('name');
        $from    = $this->request->getPost('email');
        $phone   = $this->request->getPost('phone');
        $message = $this->request->getPost('message');
        if (empty($name) || empty($from) || empty($phone) || empty($message)) {
            return lang('Contact.form.responses.error');
        }
        $to      = getenv('CONTACT_FORM_EMAIL');
        $fr      = getenv('CONTACT_FORM_FROM');
        // Send the email
        $email   = Services::email();
        $email->setTo($to);
        $email->setFrom($fr);
        $email->setSubject('Contact Form Submission');
        $email->setMessage("Contact Form Submission\n\nName: $name\nEmail: $from\nPhone: $phone\nMessage: $message");
        if ($email->send()) {
            return 'OK';
        }
        return lang('Contact.form.responses.error');
    }
}
