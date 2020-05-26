<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DescribeStackDetailResponse extends Model {
    protected $_name = [
        'headers' => 'headers',
    ];
    public function validate() {
        Model::validateRequired('headers', $this->headers, true);
    }
    public function toMap() {
        $res = [];
        $res['headers'] = $this->headers;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeStackDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        return $model;
    }
    /**
     * @description headers
     * @var array
     */
    public $headers;

}