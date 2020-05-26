<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\ROS\V20150901;

use AlibabaCloud\Tea\Roa\Roa;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\ROS\V20150901\Models\CreateChangeSetRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\ROS\V20150901\Models\CreateChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeChangeSetDetailRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeChangeSetDetailResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeChangeSetsRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeChangeSetsResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\ExecuteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\ExecuteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DeleteChangeSetRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DeleteChangeSetResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\ContinueCreateStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\ContinueCreateStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\CancelUpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\CancelUpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\GetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\GetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\SetStackPolicyRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\SetStackPolicyResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\UpdateStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\UpdateStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\WaitConditionsRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\WaitConditionsResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\InquiryStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\InquiryStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\PreviewStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\PreviewStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DoActionsRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DoActionsResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DeleteStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DeleteStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\CreateStacksRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\CreateStacksResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\AbandonStackRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\AbandonStackResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypesRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypesResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypeDetailRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypeDetailResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourcesRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourcesResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceDetailRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceDetailResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypeTemplateRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeResourceTypeTemplateResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeStacksRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeStacksResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeStackDetailRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeStackDetailResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\ValidateTemplateRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\ValidateTemplateResponse;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeTemplateRequest;
use AlibabaCloud\SDK\ROS\V20150901\Models\DescribeTemplateResponse;

class ROS extends Roa {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "central";
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param CreateChangeSetRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateChangeSetResponse
     * @throws \Exception
     */
    public function createChangeSetWithOptions(CreateChangeSetRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateChangeSetResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/changeSets", null, $request->headers, null, $runtime));
    }

    /**
     * @param CreateChangeSetRequest $request
     * @return CreateChangeSetResponse
     * @throws \Exception
     */
    public function createChangeSet(CreateChangeSetRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createChangeSetWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param DescribeChangeSetDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeChangeSetDetailResponse
     * @throws \Exception
     */
    public function describeChangeSetDetailWithOptions($stackName, $stackId, $changeSetName, DescribeChangeSetDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeChangeSetDetailResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/changeSets/" . $changeSetName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param DescribeChangeSetDetailRequest $request
     * @return DescribeChangeSetDetailResponse
     * @throws \Exception
     */
    public function describeChangeSetDetail($stackName, $stackId, $changeSetName, DescribeChangeSetDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeChangeSetDetailWithOptions($stackName, $stackId, $changeSetName, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeChangeSetsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeChangeSetsResponse
     * @throws \Exception
     */
    public function describeChangeSetsWithOptions($stackName, $stackId, DescribeChangeSetsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeChangeSetsResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/changeSets", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeChangeSetsRequest $request
     * @return DescribeChangeSetsResponse
     * @throws \Exception
     */
    public function describeChangeSets($stackName, $stackId, DescribeChangeSetsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeChangeSetsWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param ExecuteChangeSetRequest $request
     * @param RuntimeOptions $runtime
     * @return ExecuteChangeSetResponse
     * @throws \Exception
     */
    public function executeChangeSetWithOptions($stackName, $stackId, $changeSetName, ExecuteChangeSetRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ExecuteChangeSetResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" . $stackName . "/" . $stackId . "/changeSets/" . $changeSetName . "/execute", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param ExecuteChangeSetRequest $request
     * @return ExecuteChangeSetResponse
     * @throws \Exception
     */
    public function executeChangeSet($stackName, $stackId, $changeSetName, ExecuteChangeSetRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->executeChangeSetWithOptions($stackName, $stackId, $changeSetName, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param DeleteChangeSetRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteChangeSetResponse
     * @throws \Exception
     */
    public function deleteChangeSetWithOptions($stackName, $stackId, $changeSetName, DeleteChangeSetRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteChangeSetResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" . $stackName . "/" . $stackId . "/changeSets/" . $changeSetName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $changeSetName
     * @param DeleteChangeSetRequest $request
     * @return DeleteChangeSetResponse
     * @throws \Exception
     */
    public function deleteChangeSet($stackName, $stackId, $changeSetName, DeleteChangeSetRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteChangeSetWithOptions($stackName, $stackId, $changeSetName, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param ContinueCreateStackRequest $request
     * @param RuntimeOptions $runtime
     * @return ContinueCreateStackResponse
     * @throws \Exception
     */
    public function continueCreateStackWithOptions($stackName, $stackId, ContinueCreateStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ContinueCreateStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" . $stackName . "/" . $stackId . "/continue", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param ContinueCreateStackRequest $request
     * @return ContinueCreateStackResponse
     * @throws \Exception
     */
    public function continueCreateStack($stackName, $stackId, ContinueCreateStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->continueCreateStackWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param CancelUpdateStackRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelUpdateStackResponse
     * @throws \Exception
     */
    public function cancelUpdateStackWithOptions($stackName, $stackId, CancelUpdateStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelUpdateStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" . $stackName . "/" . $stackId . "/cancel", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param CancelUpdateStackRequest $request
     * @return CancelUpdateStackResponse
     * @throws \Exception
     */
    public function cancelUpdateStack($stackName, $stackId, CancelUpdateStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelUpdateStackWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param GetStackPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return GetStackPolicyResponse
     * @throws \Exception
     */
    public function getStackPolicyWithOptions($stackName, $stackId, GetStackPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetStackPolicyResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/policy", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param GetStackPolicyRequest $request
     * @return GetStackPolicyResponse
     * @throws \Exception
     */
    public function getStackPolicy($stackName, $stackId, GetStackPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getStackPolicyWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param SetStackPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return SetStackPolicyResponse
     * @throws \Exception
     */
    public function setStackPolicyWithOptions($stackName, $stackId, SetStackPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetStackPolicyResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" . $stackName . "/" . $stackId . "/policy", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param SetStackPolicyRequest $request
     * @return SetStackPolicyResponse
     * @throws \Exception
     */
    public function setStackPolicy($stackName, $stackId, SetStackPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setStackPolicyWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param UpdateStackRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateStackResponse
     * @throws \Exception
     */
    public function updateStackWithOptions($stackName, $stackId, UpdateStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "PUT", "AK", "/stacks/" . $stackName . "/" . $stackId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param UpdateStackRequest $request
     * @return UpdateStackResponse
     * @throws \Exception
     */
    public function updateStack($stackName, $stackId, UpdateStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateStackWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param WaitConditionsRequest $request
     * @param RuntimeOptions $runtime
     * @return WaitConditionsResponse
     * @throws \Exception
     */
    public function waitConditionsWithOptions(WaitConditionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return WaitConditionsResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "Anonymous", "/waitcondition", Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param WaitConditionsRequest $request
     * @return WaitConditionsResponse
     * @throws \Exception
     */
    public function waitConditions(WaitConditionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->waitConditionsWithOptions($request, $runtime);
    }

    /**
     * @param InquiryStackRequest $request
     * @param RuntimeOptions $runtime
     * @return InquiryStackResponse
     * @throws \Exception
     */
    public function inquiryStackWithOptions(InquiryStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return InquiryStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/inquiry", null, $request->headers, null, $runtime));
    }

    /**
     * @param InquiryStackRequest $request
     * @return InquiryStackResponse
     * @throws \Exception
     */
    public function inquiryStack(InquiryStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->inquiryStackWithOptions($request, $runtime);
    }

    /**
     * @param PreviewStackRequest $request
     * @param RuntimeOptions $runtime
     * @return PreviewStackResponse
     * @throws \Exception
     */
    public function previewStackWithOptions(PreviewStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PreviewStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/preview", null, $request->headers, null, $runtime));
    }

    /**
     * @param PreviewStackRequest $request
     * @return PreviewStackResponse
     * @throws \Exception
     */
    public function previewStack(PreviewStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->previewStackWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DoActionsRequest $request
     * @param RuntimeOptions $runtime
     * @return DoActionsResponse
     * @throws \Exception
     */
    public function doActionsWithOptions($stackName, $stackId, DoActionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DoActionsResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks/" . $stackName . "/" . $stackId . "/actions", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DoActionsRequest $request
     * @return DoActionsResponse
     * @throws \Exception
     */
    public function doActions($stackName, $stackId, DoActionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->doActionsWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRegionsResponse
     * @throws \Exception
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRegionsResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/regions", null, $request->headers, null, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     * @return DescribeRegionsResponse
     * @throws \Exception
     */
    public function describeRegions(DescribeRegionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeEventsResponse
     * @throws \Exception
     */
    public function describeEventsWithOptions($stackName, $stackId, DescribeEventsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeEventsResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/events", Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeEventsRequest $request
     * @return DescribeEventsResponse
     * @throws \Exception
     */
    public function describeEvents($stackName, $stackId, DescribeEventsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeEventsWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DeleteStackRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteStackResponse
     * @throws \Exception
     */
    public function deleteStackWithOptions($stackName, $stackId, DeleteStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" . $stackName . "/" . $stackId . "", Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DeleteStackRequest $request
     * @return DeleteStackResponse
     * @throws \Exception
     */
    public function deleteStack($stackName, $stackId, DeleteStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteStackWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param CreateStacksRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateStacksResponse
     * @throws \Exception
     */
    public function createStacksWithOptions(CreateStacksRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateStacksResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/stacks", null, $request->headers, null, $runtime));
    }

    /**
     * @param CreateStacksRequest $request
     * @return CreateStacksResponse
     * @throws \Exception
     */
    public function createStacks(CreateStacksRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createStacksWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param AbandonStackRequest $request
     * @param RuntimeOptions $runtime
     * @return AbandonStackResponse
     * @throws \Exception
     */
    public function abandonStackWithOptions($stackName, $stackId, AbandonStackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AbandonStackResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "DELETE", "AK", "/stacks/" . $stackName . "/" . $stackId . "/abandon", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param AbandonStackRequest $request
     * @return AbandonStackResponse
     * @throws \Exception
     */
    public function abandonStack($stackName, $stackId, AbandonStackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->abandonStackWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param DescribeResourceTypesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourceTypesResponse
     * @throws \Exception
     */
    public function describeResourceTypesWithOptions(DescribeResourceTypesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourceTypesResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types", Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeResourceTypesRequest $request
     * @return DescribeResourceTypesResponse
     * @throws \Exception
     */
    public function describeResourceTypes(DescribeResourceTypesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @param string $typeName
     * @param DescribeResourceTypeDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourceTypeDetailResponse
     * @throws \Exception
     */
    public function describeResourceTypeDetailWithOptions($typeName, DescribeResourceTypeDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourceTypeDetailResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" . $typeName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $typeName
     * @param DescribeResourceTypeDetailRequest $request
     * @return DescribeResourceTypeDetailResponse
     * @throws \Exception
     */
    public function describeResourceTypeDetail($typeName, DescribeResourceTypeDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourceTypeDetailWithOptions($typeName, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeResourcesRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourcesResponse
     * @throws \Exception
     */
    public function describeResourcesWithOptions($stackName, $stackId, DescribeResourcesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourcesResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/resources", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeResourcesRequest $request
     * @return DescribeResourcesResponse
     * @throws \Exception
     */
    public function describeResources($stackName, $stackId, DescribeResourcesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourcesWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $resourceName
     * @param DescribeResourceDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourceDetailResponse
     * @throws \Exception
     */
    public function describeResourceDetailWithOptions($stackName, $stackId, $resourceName, DescribeResourceDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourceDetailResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/resources/" . $resourceName . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param string $resourceName
     * @param DescribeResourceDetailRequest $request
     * @return DescribeResourceDetailResponse
     * @throws \Exception
     */
    public function describeResourceDetail($stackName, $stackId, $resourceName, DescribeResourceDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourceDetailWithOptions($stackName, $stackId, $resourceName, $request, $runtime);
    }

    /**
     * @param string $typeName
     * @param DescribeResourceTypeTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourceTypeTemplateResponse
     * @throws \Exception
     */
    public function describeResourceTypeTemplateWithOptions($typeName, DescribeResourceTypeTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourceTypeTemplateResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/resource_types/" . $typeName . "/template", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $typeName
     * @param DescribeResourceTypeTemplateRequest $request
     * @return DescribeResourceTypeTemplateResponse
     * @throws \Exception
     */
    public function describeResourceTypeTemplate($typeName, DescribeResourceTypeTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourceTypeTemplateWithOptions($typeName, $request, $runtime);
    }

    /**
     * @param DescribeStacksRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeStacksResponse
     * @throws \Exception
     */
    public function describeStacksWithOptions(DescribeStacksRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeStacksResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks", Utils::stringifyMapValue($request->query->toMap()), $request->headers, null, $runtime));
    }

    /**
     * @param DescribeStacksRequest $request
     * @return DescribeStacksResponse
     * @throws \Exception
     */
    public function describeStacks(DescribeStacksRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeStacksWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeStackDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeStackDetailResponse
     * @throws \Exception
     */
    public function describeStackDetailWithOptions($stackName, $stackId, DescribeStackDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeStackDetailResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeStackDetailRequest $request
     * @return DescribeStackDetailResponse
     * @throws \Exception
     */
    public function describeStackDetail($stackName, $stackId, DescribeStackDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeStackDetailWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param ValidateTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ValidateTemplateResponse
     * @throws \Exception
     */
    public function validateTemplateWithOptions(ValidateTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ValidateTemplateResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "POST", "AK", "/validate", null, $request->headers, null, $runtime));
    }

    /**
     * @param ValidateTemplateRequest $request
     * @return ValidateTemplateResponse
     * @throws \Exception
     */
    public function validateTemplate(ValidateTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->validateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeTemplateResponse
     * @throws \Exception
     */
    public function describeTemplateWithOptions($stackName, $stackId, DescribeTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeTemplateResponse::fromMap($this->doRequest("2015-09-01", "HTTPS", "GET", "AK", "/stacks/" . $stackName . "/" . $stackId . "/template", null, $request->headers, null, $runtime));
    }

    /**
     * @param string $stackName
     * @param string $stackId
     * @param DescribeTemplateRequest $request
     * @return DescribeTemplateResponse
     * @throws \Exception
     */
    public function describeTemplate($stackName, $stackId, DescribeTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeTemplateWithOptions($stackName, $stackId, $request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
