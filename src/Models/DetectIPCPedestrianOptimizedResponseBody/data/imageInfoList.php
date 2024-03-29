<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910\Models\DetectIPCPedestrianOptimizedResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20200910\Models\DetectIPCPedestrianOptimizedResponseBody\data\imageInfoList\elements;
use AlibabaCloud\Tea\Model;

class imageInfoList extends Model
{
    /**
     * @var elements[]
     */
    public $elements;
    protected $_name = [
        'elements' => 'Elements',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
