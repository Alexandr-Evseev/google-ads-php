<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/feed_item.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Resources;

class FeedItem
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
            "0ada030a35676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f637573746f6d5f706172616d657465722e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22690a0f437573746f6d506172616d6574657212290a036b657918012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122b0a0576616c756518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542ef010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e4214437573746f6d506172616d6574657250726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f330ad7030a30676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f666565645f636f6d6d6f6e2e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22700a054d6f6e657912330a0d63757272656e63795f636f646518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0d616d6f756e745f6d6963726f7318022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756542ea010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e420f46656564436f6d6d6f6e50726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f330ab6040a58676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f6465766963652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322a7010a32506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365456e756d22710a2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074445534b544f501002120b0a07414e44524f4944100312070a03494f5310044288020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734233506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e6744657669636550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a95040a3b676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f656e7472795f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322bd010a18506f6c696379546f706963456e74727954797065456e756d22a0010a14506f6c696379546f706963456e74727954797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a50524f484942495445441002120b0a074c494d49544544100412110a0d46554c4c595f4c494d495445441008120f0a0b44455343524950544956451005120e0a0a42524f4144454e494e47100612190a15415245415f4f465f494e5445524553545f4f4e4c59100742ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734219506f6c696379546f706963456e7472795479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af1040a57676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6d69736d617463685f75726c5f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322e4010a31506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065456e756d22ae010a2d506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120f0a0b444953504c41595f55524c1002120d0a0946494e414c5f55524c100312140a1046494e414c5f4d4f42494c455f55524c100412100a0c545241434b494e475f55524c100512170a134d4f42494c455f545241434b494e475f55524c10064287020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734232506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c5479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ae4040a60676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f646e735f6572726f725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322c7010a38506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065456e756d228a010a34506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112160a12484f53544e414d455f4e4f545f464f554e441002121c0a18474f4f474c455f435241574c45525f444e535f49535355451003428e020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734239506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ad41b0a2b676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f706f6c6963792e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a57676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6d69736d617463685f75726c5f747970652e70726f746f1a58676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f6465766963652e70726f746f1a60676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f746f7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f776f726b696e675f646e735f6572726f725f747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f227d0a12506f6c69637956696f6c6174696f6e4b657912310a0b706f6c6963795f6e616d6518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512340a0e76696f6c6174696e675f7465787418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522b4010a19506f6c69637956616c69646174696f6e506172616d65746572123d0a1769676e6f7261626c655f706f6c6963795f746f7069637318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512580a1c6578656d70745f706f6c6963795f76696f6c6174696f6e5f6b65797318022003280b32322e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c69637956696f6c6174696f6e4b657922af020a10506f6c696379546f706963456e747279122b0a05746f70696318012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565125a0a047479706518022001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f706963456e74727954797065456e756d2e506f6c696379546f706963456e7472795479706512460a0965766964656e63657318032003280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e6365124a0a0b636f6e73747261696e747318042003280b32352e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e7422c20b0a13506f6c696379546f70696345766964656e636512570a0c776562736974655f6c69737418032001280b323f2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e576562736974654c697374480012510a09746578745f6c69737418042001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e546578744c697374480012350a0d6c616e67756167655f636f646518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565480012680a1564657374696e6174696f6e5f746578745f6c69737418062001280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e546578744c697374480012670a1464657374696e6174696f6e5f6d69736d6174636818072001280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e4d69736d617463684800126c0a1764657374696e6174696f6e5f6e6f745f776f726b696e6718082001280b32492e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f70696345766964656e63652e44657374696e6174696f6e4e6f74576f726b696e6748001a370a08546578744c697374122b0a05746578747318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651a3d0a0b576562736974654c697374122e0a08776562736974657318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651a4e0a1344657374696e6174696f6e546578744c69737412370a1164657374696e6174696f6e5f746578747318012003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651aa9010a1344657374696e6174696f6e4d69736d617463681291010a0975726c5f747970657318012003280e327e2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c54797065456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4d69736d6174636855726c547970651a89040a1544657374696e6174696f6e4e6f74576f726b696e6712320a0c657870616e6465645f75726c18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651291010a0664657669636518042001280e3280012e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446576696365123c0a166c6173745f636865636b65645f646174655f74696d6518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512a7010a0e646e735f6572726f725f7479706518012001280e328c012e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065456e756d2e506f6c696379546f70696345766964656e636544657374696e6174696f6e4e6f74576f726b696e67446e734572726f7254797065480012360a0f687474705f6572726f725f636f646518022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565480042080a06726561736f6e42070a0576616c75652293060a15506f6c696379546f706963436f6e73747261696e74126e0a17636f756e7472795f636f6e73747261696e745f6c69737418012001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c697374480012670a13726573656c6c65725f636f6e73747261696e7418022001280b32482e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e526573656c6c6572436f6e73747261696e744800127a0a2363657274696669636174655f6d697373696e675f696e5f636f756e7472795f6c69737418032001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c69737448001282010a2b63657274696669636174655f646f6d61696e5f6d69736d617463685f696e5f636f756e7472795f6c69737418042001280b324b2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e744c69737448001ab2010a15436f756e747279436f6e73747261696e744c697374123d0a18746f74616c5f74617267657465645f636f756e747269657318012001280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c7565125a0a09636f756e747269657318022003280b32472e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963436f6e73747261696e742e436f756e747279436f6e73747261696e741a140a12526573656c6c6572436f6e73747261696e741a4c0a11436f756e747279436f6e73747261696e7412370a11636f756e7472795f637269746572696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542070a0576616c756542e6010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e420b506f6c69637950726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f330adc050a34676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706c616365686f6c6465725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732290030a13506c616365686f6c64657254797065456e756d22f8020a0f506c616365686f6c64657254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a08534954454c494e4b100212080a0443414c4c100312070a034150501004120c0a084c4f434154494f4e100512160a12414646494c494154455f4c4f434154494f4e1006120b0a0743414c4c4f5554100712160a12535452554354555245445f534e49505045541008120b0a074d455353414745100912090a055052494345100a120d0a0950524f4d4f54494f4e100b12110a0d41445f435553544f4d495a4552100c12150a1144594e414d49435f454455434154494f4e100d12120a0e44594e414d49435f464c49474854100e12120a0e44594e414d49435f435553544f4d100f12110a0d44594e414d49435f484f54454c101012170a1344594e414d49435f5245414c5f455354415445101112120a0e44594e414d49435f54524156454c101212110a0d44594e414d49435f4c4f43414c1013120f0a0b44594e414d49435f4a4f42101442e9010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734214506c616365686f6c6465725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330aec030a45676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7175616c6974795f617070726f76616c5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732281010a21466565644974656d5175616c697479417070726f76616c537461747573456e756d225c0a1d466565644974656d5175616c697479417070726f76616c537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a08415050524f5645441002120f0a0b444953415050524f564544100342f7010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734222466565644974656d5175616c697479417070726f76616c53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330aa8030a34676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73225e0a12466565644974656d537461747573456e756d22480a0e466565644974656d537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100342e8010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734213466565644974656d53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330ad1090a48676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7175616c6974795f646973617070726f76616c5f726561736f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322e0060a24466565644974656d5175616c697479446973617070726f76616c526561736f6e456e756d22b7060a20466565644974656d5175616c697479446973617070726f76616c526561736f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112220a1e50524943455f5441424c455f524550455449544956455f48454144455253100212260a2250524943455f5441424c455f524550455449544956455f4445534352495054494f4e100312210a1d50524943455f5441424c455f494e434f4e53495354454e545f524f57531004122a0a2650524943455f4445534352495054494f4e5f4841535f50524943455f5155414c4946494552531005121e0a1a50524943455f554e535550504f525445445f4c414e47554147451006122e0a2a50524943455f5441424c455f524f575f4845414445525f5441424c455f545950455f4d49534d415443481007122f0a2b50524943455f5441424c455f524f575f4845414445525f4841535f50524f4d4f54494f4e414c5f544558541008122c0a2850524943455f5441424c455f524f575f4445534352495054494f4e5f4e4f545f52454c4556414e54100912340a3050524943455f5441424c455f524f575f4445534352495054494f4e5f4841535f50524f4d4f54494f4e414c5f54455854100a12310a2d50524943455f5441424c455f524f575f4845414445525f4445534352495054494f4e5f52455045544954495645100b121e0a1a50524943455f5441424c455f524f575f554e5241544541424c45100c12210a1d50524943455f5441424c455f524f575f50524943455f494e56414c4944100d121f0a1b50524943455f5441424c455f524f575f55524c5f494e56414c4944100e12290a2550524943455f4845414445525f4f525f4445534352495054494f4e5f4841535f5052494345100f122e0a2a535452554354555245445f534e4950504554535f4845414445525f504f4c4943595f56494f4c41544544101012270a23535452554354555245445f534e4950504554535f52455045415445445f56414c5545531011122c0a28535452554354555245445f534e4950504554535f454449544f5249414c5f47554944454c494e45531012122c0a28535452554354555245445f534e4950504554535f4841535f50524f4d4f54494f4e414c5f54455854101342fa010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734225466565644974656d5175616c697479446973617070726f76616c526561736f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330adc030a3f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f76616c69646174696f6e5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73227d0a1c466565644974656d56616c69646174696f6e537461747573456e756d225d0a18466565644974656d56616c69646174696f6e537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a0750454e44494e471002120b0a07494e56414c4944100312090a0556414c4944100442f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421d466565644974656d56616c69646174696f6e53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330acc030a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f67656f5f746172676574696e675f7265737472696374696f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322700a1b47656f546172676574696e675265737472696374696f6e456e756d22510a1747656f546172676574696e675265737472696374696f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112180a144c4f434154494f4e5f4f465f50524553454e4345100242f1010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421c47656f546172676574696e675265737472696374696f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af0030a38676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f7265766965775f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73229d010a16506f6c696379526576696577537461747573456e756d2282010a12506f6c696379526576696577537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112160a125245564945575f494e5f50524f47524553531002120c0a085245564945574544100312100a0c554e4445525f41505045414c100412160a12454c494749424c455f4d41595f5345525645100542ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734217506f6c69637952657669657753746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af8030a3a676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f617070726f76616c5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322a1010a18506f6c696379417070726f76616c537461747573456e756d2284010a14506f6c696379417070726f76616c537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120f0a0b444953415050524f564544100212140a10415050524f5645445f4c494d495445441003120c0a08415050524f564544100412190a15415245415f4f465f494e5445524553545f4f4e4c59100542ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d734219506f6c696379417070726f76616c53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330acd1c0a3f676f6f676c652f6164732f676f6f676c656164732f76332f6572726f72732f666565645f6974656d5f76616c69646174696f6e5f6572726f722e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e6572726f727322e7190a1b466565644974656d56616c69646174696f6e4572726f72456e756d22c7190a17466565644974656d56616c69646174696f6e4572726f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112140a10535452494e475f544f4f5f53484f5254100212130a0f535452494e475f544f4f5f4c4f4e47100312170a1356414c55455f4e4f545f535045434946494544100412280a24494e56414c49445f444f4d45535449435f50484f4e455f4e554d4245525f464f524d4154100512180a14494e56414c49445f50484f4e455f4e554d4245521006122a0a2650484f4e455f4e554d4245525f4e4f545f535550504f525445445f464f525f434f554e545259100712230a1f5052454d49554d5f524154455f4e554d4245525f4e4f545f414c4c4f5745441008121a0a16444953414c4c4f5745445f4e554d4245525f54595045100912160a1256414c55455f4f55545f4f465f52414e4745100a122a0a2643414c4c545241434b494e475f4e4f545f535550504f525445445f464f525f434f554e545259100b122d0a29435553544f4d45525f4e4f545f57484954454c49535445445f464f525f43414c4c545241434b494e47100c12180a14494e56414c49445f434f554e5452595f434f4445100d12120a0e494e56414c49445f4150505f4944100e12210a1d4d495353494e475f415454524942555445535f464f525f4649454c4453100f12130a0f494e56414c49445f545950455f4944101012190a15494e56414c49445f454d41494c5f41444452455353101112150a11494e56414c49445f48545450535f55524c1012121c0a184d495353494e475f44454c49564552595f414444524553531013121d0a1953544152545f444154455f41465445525f454e445f44415445101412200a1c4d495353494e475f464545445f4954454d5f53544152545f54494d451015121e0a1a4d495353494e475f464545445f4954454d5f454e445f54494d45101612180a144d495353494e475f464545445f4954454d5f4944101712230a1f56414e4954595f50484f4e455f4e554d4245525f4e4f545f414c4c4f574544101812240a20494e56414c49445f5245564945575f455854454e53494f4e5f534e4950504554101912190a15494e56414c49445f4e554d4245525f464f524d4154101a12170a13494e56414c49445f444154455f464f524d4154101b12180a14494e56414c49445f50524943455f464f524d4154101c121d0a19554e4b4e4f574e5f504c414345484f4c4445525f4649454c44101d122e0a2a4d495353494e475f454e48414e4345445f534954454c494e4b5f4445534352495054494f4e5f4c494e45101e12260a225245564945575f455854454e53494f4e5f534f555243455f494e454c494749424c45101f12270a2348595048454e535f494e5f5245564945575f455854454e53494f4e5f534e49505045541020122d0a29444f55424c455f51554f5445535f494e5f5245564945575f455854454e53494f4e5f534e4950504554102112260a2251554f5445535f494e5f5245564945575f455854454e53494f4e5f534e49505045541022121f0a1b494e56414c49445f464f524d5f454e434f4445445f504152414d531023121e0a1a494e56414c49445f55524c5f504152414d455445525f4e414d45102412170a134e4f5f47454f434f44494e475f524553554c54102512280a24534f555243455f4e414d455f494e5f5245564945575f455854454e53494f4e5f544558541026122d0a29434152524945525f53504543494649435f53484f52545f4e554d4245525f4e4f545f414c4c4f574544102712200a1c494e56414c49445f504c414345484f4c4445525f4649454c445f4944102812130a0f494e56414c49445f55524c5f544147102912110a0d4c4953545f544f4f5f4c4f4e47102a12220a1e494e56414c49445f415454524942555445535f434f4d42494e4154494f4e102b12140a104455504c49434154455f56414c554553102c12250a21494e56414c49445f43414c4c5f434f4e56455253494f4e5f414354494f4e5f4944102d12210a1d43414e4e4f545f5345545f574954484f55545f46494e414c5f55524c53102e12240a204150505f49445f444f45534e545f45584953545f494e5f4150505f53544f5245102f12150a11494e56414c49445f46494e414c5f55524c103012180a14494e56414c49445f545241434b494e475f55524c1031122a0a26494e56414c49445f46494e414c5f55524c5f464f525f4150505f444f574e4c4f41445f55524c103212120a0e4c4953545f544f4f5f53484f5254103312170a13494e56414c49445f555345525f414354494f4e103412150a11494e56414c49445f545950455f4e414d451035121f0a1b494e56414c49445f4556454e545f4348414e47455f5354415455531036121b0a17494e56414c49445f534e4950504554535f4845414445521037121c0a18494e56414c49445f414e44524f49445f4150505f4c494e4b1038123b0a374e554d4245525f545950455f574954485f43414c4c545241434b494e475f4e4f545f535550504f525445445f464f525f434f554e5452591039121a0a1652455345525645445f4b4559574f52445f4f54484552103a121b0a174455504c49434154455f4f5054494f4e5f4c4142454c53103b121d0a194455504c49434154455f4f5054494f4e5f50524546494c4c53103c12180a14554e455155414c5f4c4953545f4c454e47544853103d121f0a1b494e434f4e53495354454e545f43555252454e43595f434f444553103e122a0a2650524943455f455854454e53494f4e5f4841535f4455504c4943415445445f48454144455253103f122e0a2a4954454d5f4841535f4455504c4943415445445f4845414445525f414e445f4445534352495054494f4e104012250a2150524943455f455854454e53494f4e5f4841535f544f4f5f4645575f4954454d53104112150a11554e535550504f525445445f56414c55451042121c0a18494e56414c49445f46494e414c5f4d4f42494c455f55524c104312250a21494e56414c49445f4b4559574f52444c4553535f41445f52554c455f4c4142454c104412270a2356414c55455f545241434b5f504152414d455445525f4e4f545f535550504f525445441045122a0a26554e535550504f525445445f56414c55455f494e5f53454c45435445445f4c414e4755414745104612180a14494e56414c49445f494f535f4150505f4c494e4b1047122c0a284d495353494e475f494f535f4150505f4c494e4b5f4f525f494f535f4150505f53544f52455f49441048121a0a1650524f4d4f54494f4e5f494e56414c49445f54494d45104912390a3550524f4d4f54494f4e5f43414e4e4f545f5345545f50455243454e545f4f46465f414e445f4d4f4e45595f414d4f554e545f4f4646104a123e0a3a50524f4d4f54494f4e5f43414e4e4f545f5345545f50524f4d4f54494f4e5f434f44455f414e445f4f52444552535f4f5645525f414d4f554e54104b12250a21544f4f5f4d414e595f444543494d414c5f504c414345535f535045434946494544104c121e0a1a41445f435553544f4d495a4552535f4e4f545f414c4c4f574544104d12190a15494e56414c49445f4c414e47554147455f434f4445104e12180a14554e535550504f525445445f4c414e4755414745104f121b0a1749465f46554e4354494f4e5f4e4f545f414c4c4f5745441050121c0a18494e56414c49445f46494e414c5f55524c5f535546464958105112230a1f494e56414c49445f5441475f494e5f46494e414c5f55524c5f535546464958105212230a1f494e56414c49445f46494e414c5f55524c5f5355464649585f464f524d4154105312300a2c435553544f4d45525f434f4e53454e545f464f525f43414c4c5f5245434f5244494e475f5245515549524544105412270a234f4e4c595f4f4e455f44454c49564552595f4f5054494f4e5f49535f414c4c4f5745441055121d0a194e4f5f44454c49564552595f4f5054494f4e5f49535f534554105612260a22494e56414c49445f434f4e56455253494f4e5f5245504f5254494e475f5354415445105712140a10494d4147455f53495a455f57524f4e471058122b0a27454d41494c5f44454c49564552595f4e4f545f415641494c41424c455f494e5f434f554e545259105912270a234155544f5f5245504c595f4e4f545f415641494c41424c455f494e5f434f554e545259105a121a0a16494e56414c49445f4c415449545544455f56414c5545105b121b0a17494e56414c49445f4c4f4e4749545544455f56414c5545105c12130a0f544f4f5f4d414e595f4c4142454c53105d12150a11494e56414c49445f494d4147455f55524c105e121a0a164d495353494e475f4c415449545544455f56414c5545105f121b0a174d495353494e475f4c4f4e4749545544455f56414c5545106012150a11414444524553535f4e4f545f464f554e441061121a0a16414444524553535f4e4f545f54415247455441424c45106242f7010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e6572726f7273421c466565644974656d56616c69646174696f6e4572726f7250726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f6572726f72733b6572726f7273a20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e4572726f7273ca021e476f6f676c655c4164735c476f6f676c654164735c56335c4572726f7273ea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a4572726f7273620670726f746f330ad41c0a31676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f666565645f6974656d2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a30676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f666565645f636f6d6d6f6e2e70726f746f1a2b676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f706f6c6963792e70726f746f1a45676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7175616c6974795f617070726f76616c5f7374617475732e70726f746f1a48676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7175616c6974795f646973617070726f76616c5f726561736f6e2e70726f746f1a34676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f7374617475732e70726f746f1a3f676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f666565645f6974656d5f76616c69646174696f6e5f7374617475732e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f67656f5f746172676574696e675f7265737472696374696f6e2e70726f746f1a34676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706c616365686f6c6465725f747970652e70726f746f1a3a676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f617070726f76616c5f7374617475732e70726f746f1a38676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f706f6c6963795f7265766965775f7374617475732e70726f746f1a3f676f6f676c652f6164732f676f6f676c656164732f76332f6572726f72732f666565645f6974656d5f76616c69646174696f6e5f6572726f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22fc050a08466565644974656d12150a0d7265736f757263655f6e616d65180120012809122a0a046665656418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512270a02696418032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512350a0f73746172745f646174655f74696d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d656e645f646174655f74696d6518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512530a106174747269627574655f76616c75657318062003280b32392e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e466565644974656d41747472696275746556616c756512750a1967656f5f746172676574696e675f7265737472696374696f6e18072001280e32522e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e47656f546172676574696e675265737472696374696f6e456e756d2e47656f546172676574696e675265737472696374696f6e124e0a1575726c5f637573746f6d5f706172616d657465727318082003280b322f2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e437573746f6d506172616d6574657212500a0673746174757318092001280e32402e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e466565644974656d537461747573456e756d2e466565644974656d53746174757312560a0c706f6c6963795f696e666f73180a2003280b32402e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e466565644974656d506c616365686f6c646572506f6c696379496e666f3a52ea414f0a21676f6f676c656164732e676f6f676c65617069732e636f6d2f466565644974656d122a637573746f6d6572732f7b637573746f6d65727d2f666565644974656d732f7b666565645f6974656d7d22ae040a16466565644974656d41747472696275746556616c756512360a11666565645f6174747269627574655f696418012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512320a0d696e74656765725f76616c756518022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512310a0d626f6f6c65616e5f76616c756518032001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512320a0c737472696e675f76616c756518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512320a0c646f75626c655f76616c756518052001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565123a0a0b70726963655f76616c756518062001280b32252e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4d6f6e657912330a0e696e74656765725f76616c75657318072003280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512320a0e626f6f6c65616e5f76616c75657318082003280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512330a0d737472696e675f76616c75657318092003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512330a0d646f75626c655f76616c756573180a2003280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756522b1070a1d466565644974656d506c616365686f6c646572506f6c696379496e666f12610a15706c616365686f6c6465725f747970655f656e756d180a2001280e32422e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506c616365686f6c64657254797065456e756d2e506c616365686f6c6465725479706512400a1a666565645f6d617070696e675f7265736f757263655f6e616d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565125f0a0d7265766965775f73746174757318032001280e32482e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379526576696577537461747573456e756d2e506f6c69637952657669657753746174757312650a0f617070726f76616c5f73746174757318042001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e506f6c696379417070726f76616c537461747573456e756d2e506f6c696379417070726f76616c537461747573124e0a14706f6c6963795f746f7069635f656e747269657318052003280b32302e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e506f6c696379546f706963456e747279126f0a1176616c69646174696f6e5f73746174757318062001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e466565644974656d56616c69646174696f6e537461747573456e756d2e466565644974656d56616c69646174696f6e53746174757312550a1176616c69646174696f6e5f6572726f727318072003280b323a2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e466565644974656d56616c69646174696f6e4572726f72127f0a177175616c6974795f617070726f76616c5f73746174757318082001280e325e2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e466565644974656d5175616c697479417070726f76616c537461747573456e756d2e466565644974656d5175616c697479417070726f76616c5374617475731289010a1b7175616c6974795f646973617070726f76616c5f726561736f6e7318092003280e32642e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e466565644974656d5175616c697479446973617070726f76616c526561736f6e456e756d2e466565644974656d5175616c697479446973617070726f76616c526561736f6e22a6020a17466565644974656d56616c69646174696f6e4572726f72126d0a1076616c69646174696f6e5f6572726f7218012001280e32532e676f6f676c652e6164732e676f6f676c656164732e76332e6572726f72732e466565644974656d56616c69646174696f6e4572726f72456e756d2e466565644974656d56616c69646174696f6e4572726f7212310a0b6465736372697074696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a12666565645f6174747269627574655f69647318032003280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0a65787472615f696e666f18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542fa010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f7572636573420d466565644974656d50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

