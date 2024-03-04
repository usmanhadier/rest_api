<?php
$mysqli = new mysqli("localhost", "root", "", "test");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



$datas = [
    'items' => [
        [
            'type' => 'backlink',
            'domain_from' => 'www.mansion.com',
            'url_from' => 'https://www.mansion.com/',
            'url_from_https' => 1,
            'domain_to' => 'www.casino.com',
            'url_to' => 'https://www.casino.com/',
            'url_to_https' => 1,
            'tld_from' => 'com',
            'is_new' => '',
            'is_lost' => '',
            'backlink_spam_score' => 0,
            'rank' => 357,
            'page_from_rank' => 517,
            'domain_from_rank' => 314,
            'domain_from_platform_type' => ['cms', 'blogs', 'organization'],
            'domain_from_is_ip' => '',
            'domain_from_ip' => '107.154.114.135',
            'domain_from_country' => '',
            'page_from_external_links' => 12,
            'page_from_internal_links' => 7,
            'page_from_size' => 100821,
            'page_from_encoding' => 'utf-8',
            'page_from_language' => 'en',
            'page_from_title' => 'Mansion | Mansion - Online Casino & Sports Betting',
            'page_from_status_code' => 200,
            'first_seen' => '2022-02-07 22:47:01 +00:00',
            'prev_seen' => '2023-02-12 23:00:56 +00:00',
            'last_seen' => '2023-04-13 23:49:44 +00:00',
            'item_type' => 'anchor',
            'attributes' => '',
            'dofollow' => 1,
            'original' => '',
            'alt' => '',
            'image_url' => '',
            'anchor' => 'Visit Now',
            'text_pre' => '',
            'text_post' => '',
            'semantic_location' => 'article',
            'links_count' => 2,
            'group_count' => 11,
            'is_broken' => '',
            'url_to_status_code' => 302,
            'url_to_spam_score' => 0,
            'url_to_redirect_target' => 'https://www.casino.com/forbidden/',
        ],
        [
            'type' => 'backlink',
            'domain_from' => 'pokerbeken.com',
            'url_from' => 'https://pokerbeken.com/',
            'url_from_https' => 1,
            'domain_to' => 'www.casino.com',
            'url_to' => 'https://www.casino.com/in/',
            'url_to_https' => 1,
            'tld_from' => 'com',
            'is_new' => '',
            'is_lost' => '',
            'backlink_spam_score' => 20,
            'rank' => 341,
            'page_from_rank' => 457,
            'domain_from_rank' => 337,
            'domain_from_platform_type' => ['cms', 'blogs'],
            'domain_from_is_ip' => '',
            'domain_from_ip' => '54.39.64.49',
            'domain_from_country' => '',
            'page_from_external_links' => 5,
            'page_from_internal_links' => 10,
            'page_from_size' => 118026,
            'page_from_encoding' => 'utf-8',
            'page_from_language' => 'en',
            'page_from_title' => 'Poker-Beken – Interesting facts to know about Poker games',
            'page_from_status_code' => 200,
            'first_seen' => '2022-07-27 21:56:11 +00:00',
            'prev_seen' => '2022-10-31 02:26:26 +00:00',
            'last_seen' => '2022-11-10 12:28:10 +00:00',
            'item_type' => 'anchor',
            'attributes' => '',
            'dofollow' => 1,
            'original' => '',
            'alt' => '',
            'image_url' => '',
            'anchor' => 'read the full info here',
            'text_pre' => 'casino, but if you choose the wrong method, your excitement might not last long. The choice of an appropriate online platform is a crucial factor in determining your success when utilizing an online casino. You can',
            'text_post' => '.',
            'semantic_location' => 'article',
            'links_count' => 1,
            'group_count' => 3,
            'is_broken' => '',
            'url_to_status_code' => 302,
            'url_to_spam_score' => 0,
            'url_to_redirect_target' => 'https://www.casino.com/forbidden/',
        ],
       
    ],
];


foreach ($datas['items'] as $data) {
  $type = $data['type'];
  $domain_from = $data['domain_from'];
  $url_from = $data['url_from'];
  $url_from_https = $data['url_from_https'];
  $domain_to = $data['domain_to'];
  $url_to = $data['url_to'];
  $url_to_https = $data['url_to_https'];
  $tld_from = $data['tld_from'];
  $is_new = $data['is_new'];
  $is_lost = $data['is_lost'];
  $backlink_spam_score = $data['backlink_spam_score'];
  $rank = $data['rank'];
  $page_from_rank = $data['page_from_rank'];
  $domain_from_rank = $data['domain_from_rank'];
  $domain_from_platform_type = implode(',', $data['domain_from_platform_type']); 
  $domain_from_is_ip = $data['domain_from_is_ip'];
  $domain_from_ip = $data['domain_from_ip'];
  $domain_from_country = $data['domain_from_country'];
  $page_from_external_links = $data['page_from_external_links'];
  $page_from_internal_links = $data['page_from_internal_links'];
  $page_from_size = $data['page_from_size'];
  $page_from_encoding = $data['page_from_encoding'];
  $page_from_language = $data['page_from_language'];
  $page_from_title = $data['page_from_title'];
  $page_from_status_code = $data['page_from_status_code'];
  $first_seen = $data['first_seen'];
  $prev_seen = $data['prev_seen'];
  $last_seen = $data['last_seen'];
  $item_type = $data['item_type'];
  $attributes = $data['attributes'];
  $dofollow = $data['dofollow'];
  $original = $data['original'];
  $alt = $data['alt'];
  $image_url = $data['image_url'];
  $anchor = $data['anchor'];
  $text_pre = $data['text_pre'];
  // $text_post = $data['text_post'];
  // $semantic_location = $data['semantic_location'];
  // $links_count = $data['links_count'];
  // $group_count = $data['group_count'];
  // $is_broken = $data['is_broken'];
  // $url_to_status_code = $data['url_to_status_code'];
  // $url_to_spam_score = $data['url_to_spam_score'];
  // $url_to_redirect_target = $data['url_to_redirect_target'];

 $insert_query ="INSERT INTO `user`(`type`, `domain_from`, `url_from`, `url_from_https`, `domain_to`, `url_to`, `url_to_https`, `tld_from`, `is_new`, `is_lost`, `backlink_spam_score`, `rank`, `page_from_rank`, `domain_from_rank`, `domain_from_platform_type`, `domain_from_is_ip`, `domain_from_ip`, `domain_from_country`, `page_from_external_links`, `page_from_internal_links`, `page_from_size`, `page_from_encoding`, `page_from_language`, `page_from_title`, `page_from_status_code`, `first_seen`, `prev_seen`, `last_seen`, `item_type`, `attributes`, `dofollow`, `original`, `alt`, `image_url`, `anchor`, `text_pre`) VALUES ('$type','$domain_from','$url_from','$url_from_https','$domain_to','$url_to','$url_to_https','$tld_from','$is_new','$is_lost','$backlink_spam_score','$rank','$page_from_rank','$domain_from_rank','$domain_from_platform_type','$domain_from_is_ip','$domain_from_ip','$domain_from_country','$page_from_external_links','$page_from_internal_links','$page_from_size','$page_from_encoding','$page_from_language','$page_from_title','$page_from_status_code','$first_seen','$prev_seen','$last_seen','$item_type','$attributes','$dofollow','$original','$alt','$image_url','$anchor','$text_pre')";
  
$insert_query= mysqli_query($mysqli , $insert_query);
  if($insert_query){
    echo "OK";
  }else{
    echo "NOT";
  }
}

 


// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>