<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/campaign_budget.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Resources;

class CampaignBudget
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac5030a3a676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f64656c69766572795f6d6574686f642e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73226f0a1842756467657444656c69766572794d6574686f64456e756d22530a1442756467657444656c69766572794d6574686f64120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a085354414e444152441002120f0a0b414343454c455241544544100342ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421942756467657444656c69766572794d6574686f6450726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a90030a31676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f706572696f642e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73224b0a10427564676574506572696f64456e756d22370a0c427564676574506572696f64120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112090a054441494c59100242e6010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734211427564676574506572696f6450726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a9f030a31676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73225a0a10427564676574537461747573456e756d22460a0c427564676574537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100342e6010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421142756467657453746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ab4030a2f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322730a0e42756467657454797065456e756d22610a0a42756467657454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a085354414e44415244100212180a14484f54454c5f4144535f434f4d4d495353494f4e1003120d0a0946495845445f435041100442e4010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73420f4275646765745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330acf0e0a37676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f63616d706169676e5f6275646765742e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a31676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f706572696f642e70726f746f1a31676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f7374617475732e70726f746f1a2f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6275646765745f747970652e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22f5090a0e43616d706169676e42756467657412150a0d7265736f757263655f6e616d6518012001280912270a02696418032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122a0a046e616d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0d616d6f756e745f6d6963726f7318052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512380a13746f74616c5f616d6f756e745f6d6963726f73180a2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565124c0a0673746174757318062001280e323c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e427564676574537461747573456e756d2e42756467657453746174757312650a0f64656c69766572795f6d6574686f6418072001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e42756467657444656c69766572794d6574686f64456e756d2e42756467657444656c69766572794d6574686f6412350a116578706c696369746c795f73686172656418082001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512340a0f7265666572656e63655f636f756e7418092001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565123a0a166861735f7265636f6d6d656e6465645f627564676574180b2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512450a207265636f6d6d656e6465645f6275646765745f616d6f756e745f6d6963726f73180c2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565124c0a06706572696f64180d2001280e323c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e427564676574506572696f64456e756d2e427564676574506572696f6412560a317265636f6d6d656e6465645f6275646765745f657374696d617465645f6368616e67655f7765656b6c795f636c69636b73180e2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565125b0a367265636f6d6d656e6465645f6275646765745f657374696d617465645f6368616e67655f7765656b6c795f636f73745f6d6963726f73180f2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565125c0a377265636f6d6d656e6465645f6275646765745f657374696d617465645f6368616e67655f7765656b6c795f696e746572616374696f6e7318102001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512550a307265636f6d6d656e6465645f6275646765745f657374696d617465645f6368616e67655f7765656b6c795f766965777318112001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512460a047479706518122001280e32382e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e42756467657454797065456e756d2e427564676574547970653a64ea41610a27676f6f676c656164732e676f6f676c65617069732e636f6d2f43616d706169676e4275646765741236637573746f6d6572732f7b637573746f6d65727d2f63616d706169676e427564676574732f7b63616d706169676e5f6275646765747d4280020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f7572636573421343616d706169676e42756467657450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

