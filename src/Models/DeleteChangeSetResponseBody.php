<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class DeleteChangeSetResponseBody extends Model {
    protected $_name = [
        'dummy' => 'Dummy',
    ];
    public function validate() {
        Model::validateRequired('dummy', $this->dummy, true);
    }
    public function toMap() {
        $res = [];
        $res['Dummy'] = $this->dummy;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteChangeSetResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Dummy'])){
            $model->dummy = $map['Dummy'];
        }
        return $model;
    }
    /**
     * @description Dummy
     * @var string
     */
    public $dummy;

}
