<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Ads\GoogleAds\V3\Services\ReachPlanServiceClient;
use Google\Ads\GoogleAds\V3\Services\CampaignDuration;
use Google\Ads\GoogleAds\V3\Services\GenerateProductMixIdeasResponse;
use Google\Ads\GoogleAds\V3\Services\GenerateReachForecastResponse;
use Google\Ads\GoogleAds\V3\Services\ListPlannableLocationsResponse;
use Google\Ads\GoogleAds\V3\Services\ListPlannableProductsResponse;
use Google\Ads\GoogleAds\V3\Services\Preferences;
use Google\Ads\GoogleAds\V3\Services\Targeting;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Protobuf\Any;
use Google\Protobuf\Int32Value;
use Google\Protobuf\Int64Value;
use Google\Protobuf\StringValue;
use Google\Rpc\Code;
use stdClass;

/**
 * @group services
 * @group gapic
 */
class ReachPlanServiceClientTest extends GeneratedTest
{
    /**
     * @return TransportInterface
     */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /**
     * @return CredentialsWrapper
     */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return ReachPlanServiceClient
     */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];

        return new ReachPlanServiceClient($options);
    }

    /**
     * @test
     */
    public function listPlannableLocationsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new ListPlannableLocationsResponse();
        $transport->addResponse($expectedResponse);

        $response = $client->listPlannableLocations();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v3.services.ReachPlanService/ListPlannableLocations', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listPlannableLocationsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->listPlannableLocations();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listPlannableProductsTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new ListPlannableProductsResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $plannableLocationId = new StringValue();

        $response = $client->listPlannableProducts($plannableLocationId);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v3.services.ReachPlanService/ListPlannableProducts', $actualFuncCall);

        $actualValue = $actualRequestObject->getPlannableLocationId();

        $this->assertProtobufEquals($plannableLocationId, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listPlannableProductsExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $plannableLocationId = new StringValue();

        try {
            $client->listPlannableProducts($plannableLocationId);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function generateProductMixIdeasTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new GenerateProductMixIdeasResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $customerId = 'customerId-1772061412';
        $plannableLocationId = new StringValue();
        $currencyCode = new StringValue();
        $budgetMicros = new Int64Value();
        $preferences = new Preferences();

        $response = $client->generateProductMixIdeas($customerId, $plannableLocationId, $currencyCode, $budgetMicros, $preferences);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v3.services.ReachPlanService/GenerateProductMixIdeas', $actualFuncCall);

        $actualValue = $actualRequestObject->getCustomerId();

        $this->assertProtobufEquals($customerId, $actualValue);
        $actualValue = $actualRequestObject->getPlannableLocationId();

        $this->assertProtobufEquals($plannableLocationId, $actualValue);
        $actualValue = $actualRequestObject->getCurrencyCode();

        $this->assertProtobufEquals($currencyCode, $actualValue);
        $actualValue = $actualRequestObject->getBudgetMicros();

        $this->assertProtobufEquals($budgetMicros, $actualValue);
        $actualValue = $actualRequestObject->getPreferences();

        $this->assertProtobufEquals($preferences, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function generateProductMixIdeasExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $customerId = 'customerId-1772061412';
        $plannableLocationId = new StringValue();
        $currencyCode = new StringValue();
        $budgetMicros = new Int64Value();
        $preferences = new Preferences();

        try {
            $client->generateProductMixIdeas($customerId, $plannableLocationId, $currencyCode, $budgetMicros, $preferences);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function generateReachForecastTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new GenerateReachForecastResponse();
        $transport->addResponse($expectedResponse);

        // Mock request
        $customerId = 'customerId-1772061412';
        $currencyCode = new StringValue();
        $campaignDuration = new CampaignDuration();
        $cookieFrequencyCap = new Int32Value();
        $minEffectiveFrequency = new Int32Value();
        $targeting = new Targeting();
        $plannedProducts = [];

        $response = $client->generateReachForecast($customerId, $currencyCode, $campaignDuration, $cookieFrequencyCap, $minEffectiveFrequency, $targeting, $plannedProducts);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.ads.googleads.v3.services.ReachPlanService/GenerateReachForecast', $actualFuncCall);

        $actualValue = $actualRequestObject->getCustomerId();

        $this->assertProtobufEquals($customerId, $actualValue);
        $actualValue = $actualRequestObject->getCurrencyCode();

        $this->assertProtobufEquals($currencyCode, $actualValue);
        $actualValue = $actualRequestObject->getCampaignDuration();

        $this->assertProtobufEquals($campaignDuration, $actualValue);
        $actualValue = $actualRequestObject->getCookieFrequencyCap();

        $this->assertProtobufEquals($cookieFrequencyCap, $actualValue);
        $actualValue = $actualRequestObject->getMinEffectiveFrequency();

        $this->assertProtobufEquals($minEffectiveFrequency, $actualValue);
        $actualValue = $actualRequestObject->getTargeting();

        $this->assertProtobufEquals($targeting, $actualValue);
        $actualValue = $actualRequestObject->getPlannedProducts();

        $this->assertProtobufEquals($plannedProducts, $actualValue);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function generateReachForecastExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        // Mock request
        $customerId = 'customerId-1772061412';
        $currencyCode = new StringValue();
        $campaignDuration = new CampaignDuration();
        $cookieFrequencyCap = new Int32Value();
        $minEffectiveFrequency = new Int32Value();
        $targeting = new Targeting();
        $plannedProducts = [];

        try {
            $client->generateReachForecast($customerId, $currencyCode, $campaignDuration, $cookieFrequencyCap, $minEffectiveFrequency, $targeting, $plannedProducts);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
