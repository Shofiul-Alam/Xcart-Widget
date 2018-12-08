<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;

/**
 * Class Instagram
 * @ListChild (list="footer.instagram", zone="customer")
 */
class Instagram extends \XLite\View\AView {

    public function getDefaultTemplate() {
        return 'modules/Taka/ToolmatesWidgets/Home/instagram.twig';
    }

    public function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function getInstagramFeed() {
        $result = fetchData("https://api.instagram.com/v1/users/e236f330332e42bab990bd5a6279fb2e/media/recent/?access_token=3195068834.1677ed0.ec01eb8eae494a8da88fdde8780d421a");
        $result = json_decode($result);
        foreach ($result->data as $post) {

        }
    }


}