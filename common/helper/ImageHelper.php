<?php
/**
 * Created by PhpStorm.
 * User: MAS
 * Date: 2/23/2019
 * Time: 10:56 AM
 */

namespace common\helper;


use Melihovv\Base64ImageDecoder\Base64ImageDecoder;
use Melihovv\Base64ImageDecoder\Base64ImageEncoder;

class ImageHelper
{
    public $allowedFormats = ['jpeg', 'jpg', 'png', 'gif'];

    /**
     * @param $filePath
     * @param array $allowedFormats
     * @return Base64ImageEncoder
     */
    public function encodeImage($filePath)
    {
        $encoder = Base64ImageEncoder::fromFileName($filePath, $this->allowedFormats);
        $encoder->getMimeType(); // image/jpeg for instance
        $encoder->getContent(); // base64 encoded image bytes.
        $encoder->getDataUri(); // a base64 data-uri to use in HTML or CSS attributes.

        return $encoder;
    }

    /**
     * @param $dataUri
     * @param array $allowedFormats
     * @return Base64ImageDecoder
     */
    public function decodeImage($dataUri)
    {
        // We check that image is encoded properly in constructor, otherwise exception will be thrown.
// You can use this info in your validation rule.
        $decoder = new Base64ImageDecoder($dataUri, $this->allowedFormats);

        $decoder->getFormat(); // 'png', or 'jpeg', or 'gif', or etc.
        $decoder->getDecodedContent(); // base64 decoded raw image bytes.
        $decoder->getContent(); // base64 encoded raw image bytes.

        return $decoder;
    }
}