<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/policy.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Common;

class Policy
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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab6040a58676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f6465766963652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322a7010a32506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365456e756d22710a2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074445534b544f501002120b0a07414e44524f4944100312070a03494f5310044288020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734233506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e6744657669636550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a95040a3b676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f656e7472795f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322bd010a18506f6c696379546f706963456e74727954797065456e756d22a0010a14506f6c696379546f706963456e74727954797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a50524f484942495445441002120b0a074c494d49544544100412110a0d46554c4c595f4c494d495445441008120f0a0b44455343524950544956451005120e0a0a42524f4144454e494e47100612190a15415245415f4f465f494e5445524553545f4f4e4c59100742ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734219506f6c696379546f706963456e7472795479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af1040a57676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6d69736d617463685f75726c5f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322e4010a31506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065456e756d22ae010a2d506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120f0a0b444953504c41595f55524c1002120d0a0946494e414c5f55524c100312140a1046494e414c5f4d4f42494c455f55524c100412100a0c545241434b494e475f55524c100512170a134d4f42494c455f545241434b494e475f55524c10064287020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734232506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c5479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ae4040a60676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f646e735f6572726f725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322c7010a38506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065456e756d228a010a34506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112160a12484f53544e414d455f4e4f545f464f554e441002121c0a18474f4f474c455f435241574c45525f444e535f49535355451003428e020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734239506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ad41b0a2b676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f706f6c6963792e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a57676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6d69736d617463685f75726c5f747970652e70726f746f1a58676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f6465766963652e70726f746f1a60676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f646e735f6572726f725f747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f227d0a12506f6c69637956696f6c6174696f6e4b657912310a0b706f6c6963795f6e616d6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512340a0e76696f6c6174696e675f7465787418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522b4010a19506f6c69637956616c69646174696f6e506172616d65746572123d0a1769676e6f7261626c655f706f6c6963795f746f7069637318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512580a1c6578656d70745f706f6c6963795f76696f6c6174696f6e5f6b65797318022003280b32322e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c69637956696f6c6174696f6e4b657922af020a10506f6c696379546f706963456e747279122b0a05746f70696318012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565125a0a047479706518022001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f706963456e74727954797065456e756d2e506f6c696379546f706963456e7472795479706512460a0965766964656e63657318032003280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e6365124a0a0b636f6e73747261696e747318042003280b32352e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e7422c20b0a13506f6c696379546f70696345766964656e636512570a0c776562736974655f6c69737418032001280b323f2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e576562736974654c697374480012510a09746578745f6c69737418042001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e546578744c697374480012350a0d6c616e67756167655f636f646518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565480012680a1564657374696e6174696f6e5f746578745f6c69737418062001280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e546578744c697374480012670a1464657374696e6174696f6e5f6d69736d6174636818072001280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e4d69736d617463684800126c0a1764657374696e6174696f6e5f6e6f745f776f726b696e6718082001280b32492e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e4e6f74576f726b696e6748001a370a08546578744c697374122b0a05746578747318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651a3d0a0b576562736974654c697374122e0a08776562736974657318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651a4e0a1344657374696e6174696f6e546578744c69737412370a1164657374696e6174696f6e5f746578747318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651aa9010a1344657374696e6174696f6e4d69736d617463681291010a0975726c5f747970657318012003280e327e2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c547970651a89040a1544657374696e6174696f6e4e6f74576f726b696e6712320a0c657870616e6465645f75726c18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651291010a0664657669636518042001280e3280012e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365123c0a166c6173745f636865636b65645f646174655f74696d6518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512a7010a0e646e735f6572726f725f7479706518012001280e328c012e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065480012360a0f687474705f6572726f725f636f646518022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565480042080a06726561736f6e42070a0576616c75652293060a15506f6c696379546f706963436f6e73747261696e74126e0a17636f756e7472795f636f6e73747261696e745f6c69737418012001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c697374480012670a13726573656c6c65725f636f6e73747261696e7418022001280b32482e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e526573656c6c6572436f6e73747261696e744800127a0a2363657274696669636174655f6d697373696e675f696e5f636f756e7472795f6c69737418032001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c69737448001282010a2b63657274696669636174655f646f6d61696e5f6d69736d617463685f696e5f636f756e7472795f6c69737418042001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c69737448001ab2010a15436f756e747279436f6e73747261696e744c697374123d0a18746f74616c5f74617267657465645f636f756e747269657318012001280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c7565125a0a09636f756e747269657318022003280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e741a140a12526573656c6c6572436f6e73747261696e741a4c0a11436f756e747279436f6e73747261696e7412370a11636f756e7472795f637269746572696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542070a0576616c756542e6010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e420b506f6c69637950726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

