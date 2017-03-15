<?php
namespace App\Transformers;

class TestTransformer {

    public function transform($test) {
        return [
            'nombresini' => $test->name
        ];
    }

}
