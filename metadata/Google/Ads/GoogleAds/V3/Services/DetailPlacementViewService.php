<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/detail_placement_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class DetailPlacementViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af1030a32676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706c6163656d656e745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322a9010a11506c6163656d656e7454797065456e756d2293010a0d506c6163656d656e7454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0757454253495445100212170a134d4f42494c455f4150505f43415445474f5259100312160a124d4f42494c455f4150504c49434154494f4e100412110a0d594f55545542455f564944454f100512130a0f594f55545542455f4348414e4e454c100642e7010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734212506c6163656d656e745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330aa1070a3d676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f64657461696c5f706c6163656d656e745f766965772e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22d3030a1344657461696c506c6163656d656e745669657712150a0d7265736f757263655f6e616d65180120012809122f0a09706c6163656d656e7418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c646973706c61795f6e616d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512400a1a67726f75705f706c6163656d656e745f7461726765745f75726c18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a7461726765745f75726c18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512560a0e706c6163656d656e745f7479706518062001280e323e2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506c6163656d656e7454797065456e756d2e506c6163656d656e74547970653a74ea41710a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f44657461696c506c6163656d656e74566965771241637573746f6d6572732f7b637573746f6d65727d2f64657461696c506c6163656d656e7456696577732f7b64657461696c5f706c6163656d656e745f766965777d4285020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f7572636573421844657461696c506c6163656d656e745669657750726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f330aae060a44676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f64657461696c5f706c6163656d656e745f766965775f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f223b0a1d47657444657461696c506c6163656d656e745669657752657175657374121a0a0d7265736f757263655f6e616d651801200128094203e04102329d020a1a44657461696c506c6163656d656e74566965775365727669636512e1010a1647657444657461696c506c6163656d656e7456696577123f2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e47657444657461696c506c6163656d656e7456696577526571756573741a362e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e44657461696c506c6163656d656e7456696577224e82d3e493023812362f76332f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f64657461696c506c6163656d656e7456696577732f2a7dda410d7265736f757263655f6e616d651a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4286020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7365727669636573421f44657461696c506c6163656d656e74566965775365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

