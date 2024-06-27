<?php

namespace Docker\Api\Normalizer;

use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'Docker\\Api\\Model\\Port' => 'Docker\\Api\\Normalizer\\PortNormalizer',
            'Docker\\Api\\Model\\MountPoint' => 'Docker\\Api\\Normalizer\\MountPointNormalizer',
            'Docker\\Api\\Model\\DeviceMapping' => 'Docker\\Api\\Normalizer\\DeviceMappingNormalizer',
            'Docker\\Api\\Model\\DeviceRequest' => 'Docker\\Api\\Normalizer\\DeviceRequestNormalizer',
            'Docker\\Api\\Model\\ThrottleDevice' => 'Docker\\Api\\Normalizer\\ThrottleDeviceNormalizer',
            'Docker\\Api\\Model\\Mount' => 'Docker\\Api\\Normalizer\\MountNormalizer',
            'Docker\\Api\\Model\\MountBindOptions' => 'Docker\\Api\\Normalizer\\MountBindOptionsNormalizer',
            'Docker\\Api\\Model\\MountVolumeOptions' => 'Docker\\Api\\Normalizer\\MountVolumeOptionsNormalizer',
            'Docker\\Api\\Model\\MountVolumeOptionsDriverConfig' => 'Docker\\Api\\Normalizer\\MountVolumeOptionsDriverConfigNormalizer',
            'Docker\\Api\\Model\\MountTmpfsOptions' => 'Docker\\Api\\Normalizer\\MountTmpfsOptionsNormalizer',
            'Docker\\Api\\Model\\RestartPolicy' => 'Docker\\Api\\Normalizer\\RestartPolicyNormalizer',
            'Docker\\Api\\Model\\Resources' => 'Docker\\Api\\Normalizer\\ResourcesNormalizer',
            'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem' => 'Docker\\Api\\Normalizer\\ResourcesBlkioWeightDeviceItemNormalizer',
            'Docker\\Api\\Model\\ResourcesUlimitsItem' => 'Docker\\Api\\Normalizer\\ResourcesUlimitsItemNormalizer',
            'Docker\\Api\\Model\\Limit' => 'Docker\\Api\\Normalizer\\LimitNormalizer',
            'Docker\\Api\\Model\\ResourceObject' => 'Docker\\Api\\Normalizer\\ResourceObjectNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItem' => 'Docker\\Api\\Normalizer\\GenericResourcesItemNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItemNamedResourceSpec' => 'Docker\\Api\\Normalizer\\GenericResourcesItemNamedResourceSpecNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItemDiscreteResourceSpec' => 'Docker\\Api\\Normalizer\\GenericResourcesItemDiscreteResourceSpecNormalizer',
            'Docker\\Api\\Model\\HealthConfig' => 'Docker\\Api\\Normalizer\\HealthConfigNormalizer',
            'Docker\\Api\\Model\\Health' => 'Docker\\Api\\Normalizer\\HealthNormalizer',
            'Docker\\Api\\Model\\HealthcheckResult' => 'Docker\\Api\\Normalizer\\HealthcheckResultNormalizer',
            'Docker\\Api\\Model\\HostConfig' => 'Docker\\Api\\Normalizer\\HostConfigNormalizer',
            'Docker\\Api\\Model\\HostConfigLogConfig' => 'Docker\\Api\\Normalizer\\HostConfigLogConfigNormalizer',
            'Docker\\Api\\Model\\ContainerConfig' => 'Docker\\Api\\Normalizer\\ContainerConfigNormalizer',
            'Docker\\Api\\Model\\NetworkingConfig' => 'Docker\\Api\\Normalizer\\NetworkingConfigNormalizer',
            'Docker\\Api\\Model\\NetworkSettings' => 'Docker\\Api\\Normalizer\\NetworkSettingsNormalizer',
            'Docker\\Api\\Model\\Address' => 'Docker\\Api\\Normalizer\\AddressNormalizer',
            'Docker\\Api\\Model\\PortBinding' => 'Docker\\Api\\Normalizer\\PortBindingNormalizer',
            'Docker\\Api\\Model\\GraphDriverData' => 'Docker\\Api\\Normalizer\\GraphDriverDataNormalizer',
            'Docker\\Api\\Model\\Image' => 'Docker\\Api\\Normalizer\\ImageNormalizer',
            'Docker\\Api\\Model\\ImageRootFS' => 'Docker\\Api\\Normalizer\\ImageRootFSNormalizer',
            'Docker\\Api\\Model\\ImageMetadata' => 'Docker\\Api\\Normalizer\\ImageMetadataNormalizer',
            'Docker\\Api\\Model\\ImageSummary' => 'Docker\\Api\\Normalizer\\ImageSummaryNormalizer',
            'Docker\\Api\\Model\\AuthConfig' => 'Docker\\Api\\Normalizer\\AuthConfigNormalizer',
            'Docker\\Api\\Model\\ProcessConfig' => 'Docker\\Api\\Normalizer\\ProcessConfigNormalizer',
            'Docker\\Api\\Model\\Volume' => 'Docker\\Api\\Normalizer\\VolumeNormalizer',
            'Docker\\Api\\Model\\VolumeUsageData' => 'Docker\\Api\\Normalizer\\VolumeUsageDataNormalizer',
            'Docker\\Api\\Model\\Network' => 'Docker\\Api\\Normalizer\\NetworkNormalizer',
            'Docker\\Api\\Model\\IPAM' => 'Docker\\Api\\Normalizer\\IPAMNormalizer',
            'Docker\\Api\\Model\\NetworkContainer' => 'Docker\\Api\\Normalizer\\NetworkContainerNormalizer',
            'Docker\\Api\\Model\\BuildInfo' => 'Docker\\Api\\Normalizer\\BuildInfoNormalizer',
            'Docker\\Api\\Model\\BuildCache' => 'Docker\\Api\\Normalizer\\BuildCacheNormalizer',
            'Docker\\Api\\Model\\ImageID' => 'Docker\\Api\\Normalizer\\ImageIDNormalizer',
            'Docker\\Api\\Model\\CreateImageInfo' => 'Docker\\Api\\Normalizer\\CreateImageInfoNormalizer',
            'Docker\\Api\\Model\\PushImageInfo' => 'Docker\\Api\\Normalizer\\PushImageInfoNormalizer',
            'Docker\\Api\\Model\\ErrorDetail' => 'Docker\\Api\\Normalizer\\ErrorDetailNormalizer',
            'Docker\\Api\\Model\\ProgressDetail' => 'Docker\\Api\\Normalizer\\ProgressDetailNormalizer',
            'Docker\\Api\\Model\\ErrorResponse' => 'Docker\\Api\\Normalizer\\ErrorResponseNormalizer',
            'Docker\\Api\\Model\\IdResponse' => 'Docker\\Api\\Normalizer\\IdResponseNormalizer',
            'Docker\\Api\\Model\\EndpointSettings' => 'Docker\\Api\\Normalizer\\EndpointSettingsNormalizer',
            'Docker\\Api\\Model\\EndpointIPAMConfig' => 'Docker\\Api\\Normalizer\\EndpointIPAMConfigNormalizer',
            'Docker\\Api\\Model\\PluginMount' => 'Docker\\Api\\Normalizer\\PluginMountNormalizer',
            'Docker\\Api\\Model\\PluginDevice' => 'Docker\\Api\\Normalizer\\PluginDeviceNormalizer',
            'Docker\\Api\\Model\\PluginEnv' => 'Docker\\Api\\Normalizer\\PluginEnvNormalizer',
            'Docker\\Api\\Model\\PluginInterfaceType' => 'Docker\\Api\\Normalizer\\PluginInterfaceTypeNormalizer',
            'Docker\\Api\\Model\\PluginPrivilege' => 'Docker\\Api\\Normalizer\\PluginPrivilegeNormalizer',
            'Docker\\Api\\Model\\Plugin' => 'Docker\\Api\\Normalizer\\PluginNormalizer',
            'Docker\\Api\\Model\\PluginSettings' => 'Docker\\Api\\Normalizer\\PluginSettingsNormalizer',
            'Docker\\Api\\Model\\PluginConfig' => 'Docker\\Api\\Normalizer\\PluginConfigNormalizer',
            'Docker\\Api\\Model\\PluginConfigInterface' => 'Docker\\Api\\Normalizer\\PluginConfigInterfaceNormalizer',
            'Docker\\Api\\Model\\PluginConfigUser' => 'Docker\\Api\\Normalizer\\PluginConfigUserNormalizer',
            'Docker\\Api\\Model\\PluginConfigNetwork' => 'Docker\\Api\\Normalizer\\PluginConfigNetworkNormalizer',
            'Docker\\Api\\Model\\PluginConfigLinux' => 'Docker\\Api\\Normalizer\\PluginConfigLinuxNormalizer',
            'Docker\\Api\\Model\\PluginConfigArgs' => 'Docker\\Api\\Normalizer\\PluginConfigArgsNormalizer',
            'Docker\\Api\\Model\\PluginConfigRootfs' => 'Docker\\Api\\Normalizer\\PluginConfigRootfsNormalizer',
            'Docker\\Api\\Model\\ObjectVersion' => 'Docker\\Api\\Normalizer\\ObjectVersionNormalizer',
            'Docker\\Api\\Model\\NodeSpec' => 'Docker\\Api\\Normalizer\\NodeSpecNormalizer',
            'Docker\\Api\\Model\\Node' => 'Docker\\Api\\Normalizer\\NodeNormalizer',
            'Docker\\Api\\Model\\NodeDescription' => 'Docker\\Api\\Normalizer\\NodeDescriptionNormalizer',
            'Docker\\Api\\Model\\Platform' => 'Docker\\Api\\Normalizer\\PlatformNormalizer',
            'Docker\\Api\\Model\\EngineDescription' => 'Docker\\Api\\Normalizer\\EngineDescriptionNormalizer',
            'Docker\\Api\\Model\\EngineDescriptionPluginsItem' => 'Docker\\Api\\Normalizer\\EngineDescriptionPluginsItemNormalizer',
            'Docker\\Api\\Model\\TLSInfo' => 'Docker\\Api\\Normalizer\\TLSInfoNormalizer',
            'Docker\\Api\\Model\\NodeStatus' => 'Docker\\Api\\Normalizer\\NodeStatusNormalizer',
            'Docker\\Api\\Model\\ManagerStatus' => 'Docker\\Api\\Normalizer\\ManagerStatusNormalizer',
            'Docker\\Api\\Model\\SwarmSpec' => 'Docker\\Api\\Normalizer\\SwarmSpecNormalizer',
            'Docker\\Api\\Model\\SwarmSpecOrchestration' => 'Docker\\Api\\Normalizer\\SwarmSpecOrchestrationNormalizer',
            'Docker\\Api\\Model\\SwarmSpecRaft' => 'Docker\\Api\\Normalizer\\SwarmSpecRaftNormalizer',
            'Docker\\Api\\Model\\SwarmSpecDispatcher' => 'Docker\\Api\\Normalizer\\SwarmSpecDispatcherNormalizer',
            'Docker\\Api\\Model\\SwarmSpecCAConfig' => 'Docker\\Api\\Normalizer\\SwarmSpecCAConfigNormalizer',
            'Docker\\Api\\Model\\SwarmSpecCAConfigExternalCAsItem' => 'Docker\\Api\\Normalizer\\SwarmSpecCAConfigExternalCAsItemNormalizer',
            'Docker\\Api\\Model\\SwarmSpecEncryptionConfig' => 'Docker\\Api\\Normalizer\\SwarmSpecEncryptionConfigNormalizer',
            'Docker\\Api\\Model\\SwarmSpecTaskDefaults' => 'Docker\\Api\\Normalizer\\SwarmSpecTaskDefaultsNormalizer',
            'Docker\\Api\\Model\\SwarmSpecTaskDefaultsLogDriver' => 'Docker\\Api\\Normalizer\\SwarmSpecTaskDefaultsLogDriverNormalizer',
            'Docker\\Api\\Model\\ClusterInfo' => 'Docker\\Api\\Normalizer\\ClusterInfoNormalizer',
            'Docker\\Api\\Model\\JoinTokens' => 'Docker\\Api\\Normalizer\\JoinTokensNormalizer',
            'Docker\\Api\\Model\\Swarm' => 'Docker\\Api\\Normalizer\\SwarmNormalizer',
            'Docker\\Api\\Model\\TaskSpec' => 'Docker\\Api\\Normalizer\\TaskSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecPluginSpec' => 'Docker\\Api\\Normalizer\\TaskSpecPluginSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpec' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivileges' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecDNSConfigNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecSecretsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItemFile' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecSecretsItemFileNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecConfigsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItemFile' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecConfigsItemFileNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecUlimitsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecUlimitsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecNetworkAttachmentSpec' => 'Docker\\Api\\Normalizer\\TaskSpecNetworkAttachmentSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecResources' => 'Docker\\Api\\Normalizer\\TaskSpecResourcesNormalizer',
            'Docker\\Api\\Model\\TaskSpecRestartPolicy' => 'Docker\\Api\\Normalizer\\TaskSpecRestartPolicyNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacement' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementPreferencesItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItemSpread' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementPreferencesItemSpreadNormalizer',
            'Docker\\Api\\Model\\TaskSpecLogDriver' => 'Docker\\Api\\Normalizer\\TaskSpecLogDriverNormalizer',
            'Docker\\Api\\Model\\Task' => 'Docker\\Api\\Normalizer\\TaskNormalizer',
            'Docker\\Api\\Model\\TaskStatus' => 'Docker\\Api\\Normalizer\\TaskStatusNormalizer',
            'Docker\\Api\\Model\\TaskStatusContainerStatus' => 'Docker\\Api\\Normalizer\\TaskStatusContainerStatusNormalizer',
            'Docker\\Api\\Model\\ServiceSpec' => 'Docker\\Api\\Normalizer\\ServiceSpecNormalizer',
            'Docker\\Api\\Model\\ServiceSpecMode' => 'Docker\\Api\\Normalizer\\ServiceSpecModeNormalizer',
            'Docker\\Api\\Model\\ServiceSpecModeReplicated' => 'Docker\\Api\\Normalizer\\ServiceSpecModeReplicatedNormalizer',
            'Docker\\Api\\Model\\ServiceSpecModeReplicatedJob' => 'Docker\\Api\\Normalizer\\ServiceSpecModeReplicatedJobNormalizer',
            'Docker\\Api\\Model\\ServiceSpecUpdateConfig' => 'Docker\\Api\\Normalizer\\ServiceSpecUpdateConfigNormalizer',
            'Docker\\Api\\Model\\ServiceSpecRollbackConfig' => 'Docker\\Api\\Normalizer\\ServiceSpecRollbackConfigNormalizer',
            'Docker\\Api\\Model\\EndpointPortConfig' => 'Docker\\Api\\Normalizer\\EndpointPortConfigNormalizer',
            'Docker\\Api\\Model\\EndpointSpec' => 'Docker\\Api\\Normalizer\\EndpointSpecNormalizer',
            'Docker\\Api\\Model\\Service' => 'Docker\\Api\\Normalizer\\ServiceNormalizer',
            'Docker\\Api\\Model\\ServiceEndpoint' => 'Docker\\Api\\Normalizer\\ServiceEndpointNormalizer',
            'Docker\\Api\\Model\\ServiceEndpointVirtualIPsItem' => 'Docker\\Api\\Normalizer\\ServiceEndpointVirtualIPsItemNormalizer',
            'Docker\\Api\\Model\\ServiceUpdateStatus' => 'Docker\\Api\\Normalizer\\ServiceUpdateStatusNormalizer',
            'Docker\\Api\\Model\\ServiceServiceStatus' => 'Docker\\Api\\Normalizer\\ServiceServiceStatusNormalizer',
            'Docker\\Api\\Model\\ServiceJobStatus' => 'Docker\\Api\\Normalizer\\ServiceJobStatusNormalizer',
            'Docker\\Api\\Model\\ImageDeleteResponseItem' => 'Docker\\Api\\Normalizer\\ImageDeleteResponseItemNormalizer',
            'Docker\\Api\\Model\\ServiceUpdateResponse' => 'Docker\\Api\\Normalizer\\ServiceUpdateResponseNormalizer',
            'Docker\\Api\\Model\\ContainerSummary' => 'Docker\\Api\\Normalizer\\ContainerSummaryNormalizer',
            'Docker\\Api\\Model\\ContainerSummaryHostConfig' => 'Docker\\Api\\Normalizer\\ContainerSummaryHostConfigNormalizer',
            'Docker\\Api\\Model\\ContainerSummaryNetworkSettings' => 'Docker\\Api\\Normalizer\\ContainerSummaryNetworkSettingsNormalizer',
            'Docker\\Api\\Model\\Driver' => 'Docker\\Api\\Normalizer\\DriverNormalizer',
            'Docker\\Api\\Model\\SecretSpec' => 'Docker\\Api\\Normalizer\\SecretSpecNormalizer',
            'Docker\\Api\\Model\\Secret' => 'Docker\\Api\\Normalizer\\SecretNormalizer',
            'Docker\\Api\\Model\\ConfigSpec' => 'Docker\\Api\\Normalizer\\ConfigSpecNormalizer',
            'Docker\\Api\\Model\\Config' => 'Docker\\Api\\Normalizer\\ConfigNormalizer',
            'Docker\\Api\\Model\\ContainerState' => 'Docker\\Api\\Normalizer\\ContainerStateNormalizer',
            'Docker\\Api\\Model\\SystemVersion' => 'Docker\\Api\\Normalizer\\SystemVersionNormalizer',
            'Docker\\Api\\Model\\SystemVersionPlatform' => 'Docker\\Api\\Normalizer\\SystemVersionPlatformNormalizer',
            'Docker\\Api\\Model\\SystemVersionComponentsItem' => 'Docker\\Api\\Normalizer\\SystemVersionComponentsItemNormalizer',
            'Docker\\Api\\Model\\SystemInfo' => 'Docker\\Api\\Normalizer\\SystemInfoNormalizer',
            'Docker\\Api\\Model\\SystemInfoDefaultAddressPoolsItem' => 'Docker\\Api\\Normalizer\\SystemInfoDefaultAddressPoolsItemNormalizer',
            'Docker\\Api\\Model\\PluginsInfo' => 'Docker\\Api\\Normalizer\\PluginsInfoNormalizer',
            'Docker\\Api\\Model\\RegistryServiceConfig' => 'Docker\\Api\\Normalizer\\RegistryServiceConfigNormalizer',
            'Docker\\Api\\Model\\IndexInfo' => 'Docker\\Api\\Normalizer\\IndexInfoNormalizer',
            'Docker\\Api\\Model\\Runtime' => 'Docker\\Api\\Normalizer\\RuntimeNormalizer',
            'Docker\\Api\\Model\\Commit' => 'Docker\\Api\\Normalizer\\CommitNormalizer',
            'Docker\\Api\\Model\\SwarmInfo' => 'Docker\\Api\\Normalizer\\SwarmInfoNormalizer',
            'Docker\\Api\\Model\\PeerNode' => 'Docker\\Api\\Normalizer\\PeerNodeNormalizer',
            'Docker\\Api\\Model\\NetworkAttachmentConfig' => 'Docker\\Api\\Normalizer\\NetworkAttachmentConfigNormalizer',
            'Docker\\Api\\Model\\EventActor' => 'Docker\\Api\\Normalizer\\EventActorNormalizer',
            'Docker\\Api\\Model\\EventMessage' => 'Docker\\Api\\Normalizer\\EventMessageNormalizer',
            'Docker\\Api\\Model\\OCIDescriptor' => 'Docker\\Api\\Normalizer\\OCIDescriptorNormalizer',
            'Docker\\Api\\Model\\OCIPlatform' => 'Docker\\Api\\Normalizer\\OCIPlatformNormalizer',
            'Docker\\Api\\Model\\DistributionInspect' => 'Docker\\Api\\Normalizer\\DistributionInspectNormalizer',
            'Docker\\Api\\Model\\ContainersCreatePostBody' => 'Docker\\Api\\Normalizer\\ContainersCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ContainersCreatePostResponse201' => 'Docker\\Api\\Normalizer\\ContainersCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\ContainersIdJsonGetResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdJsonGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdTopGetResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdTopGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdChangesGetResponse200Item' => 'Docker\\Api\\Normalizer\\ContainersIdChangesGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ContainersIdUpdatePostBody' => 'Docker\\Api\\Normalizer\\ContainersIdUpdatePostBodyNormalizer',
            'Docker\\Api\\Model\\ContainersIdUpdatePostResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdUpdatePostResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdWaitPostResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdWaitPostResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdWaitPostResponse200Error' => 'Docker\\Api\\Normalizer\\ContainersIdWaitPostResponse200ErrorNormalizer',
            'Docker\\Api\\Model\\ContainersIdArchiveGetResponse400' => 'Docker\\Api\\Normalizer\\ContainersIdArchiveGetResponse400Normalizer',
            'Docker\\Api\\Model\\ContainersIdArchiveHeadResponse400' => 'Docker\\Api\\Normalizer\\ContainersIdArchiveHeadResponse400Normalizer',
            'Docker\\Api\\Model\\ContainersPrunePostResponse200' => 'Docker\\Api\\Normalizer\\ContainersPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\BuildPrunePostResponse200' => 'Docker\\Api\\Normalizer\\BuildPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => 'Docker\\Api\\Normalizer\\ImagesNameHistoryGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ImagesSearchGetResponse200Item' => 'Docker\\Api\\Normalizer\\ImagesSearchGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ImagesPrunePostResponse200' => 'Docker\\Api\\Normalizer\\ImagesPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\AuthPostResponse200' => 'Docker\\Api\\Normalizer\\AuthPostResponse200Normalizer',
            'Docker\\Api\\Model\\SystemDfGetResponse200' => 'Docker\\Api\\Normalizer\\SystemDfGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdExecPostBody' => 'Docker\\Api\\Normalizer\\ContainersIdExecPostBodyNormalizer',
            'Docker\\Api\\Model\\ExecIdStartPostBody' => 'Docker\\Api\\Normalizer\\ExecIdStartPostBodyNormalizer',
            'Docker\\Api\\Model\\ExecIdJsonGetResponse200' => 'Docker\\Api\\Normalizer\\ExecIdJsonGetResponse200Normalizer',
            'Docker\\Api\\Model\\VolumesGetResponse200' => 'Docker\\Api\\Normalizer\\VolumesGetResponse200Normalizer',
            'Docker\\Api\\Model\\VolumesCreatePostBody' => 'Docker\\Api\\Normalizer\\VolumesCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\VolumesPrunePostResponse200' => 'Docker\\Api\\Normalizer\\VolumesPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\NetworksCreatePostBody' => 'Docker\\Api\\Normalizer\\NetworksCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksCreatePostResponse201' => 'Docker\\Api\\Normalizer\\NetworksCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\NetworksIdConnectPostBody' => 'Docker\\Api\\Normalizer\\NetworksIdConnectPostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksIdDisconnectPostBody' => 'Docker\\Api\\Normalizer\\NetworksIdDisconnectPostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksPrunePostResponse200' => 'Docker\\Api\\Normalizer\\NetworksPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\SwarmInitPostBody' => 'Docker\\Api\\Normalizer\\SwarmInitPostBodyNormalizer',
            'Docker\\Api\\Model\\SwarmJoinPostBody' => 'Docker\\Api\\Normalizer\\SwarmJoinPostBodyNormalizer',
            'Docker\\Api\\Model\\SwarmUnlockkeyGetResponse200' => 'Docker\\Api\\Normalizer\\SwarmUnlockkeyGetResponse200Normalizer',
            'Docker\\Api\\Model\\SwarmUnlockPostBody' => 'Docker\\Api\\Normalizer\\SwarmUnlockPostBodyNormalizer',
            'Docker\\Api\\Model\\ServicesCreatePostBody' => 'Docker\\Api\\Normalizer\\ServicesCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ServicesCreatePostResponse201' => 'Docker\\Api\\Normalizer\\ServicesCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\ServicesIdUpdatePostBody' => 'Docker\\Api\\Normalizer\\ServicesIdUpdatePostBodyNormalizer',
            'Docker\\Api\\Model\\SecretsCreatePostBody' => 'Docker\\Api\\Normalizer\\SecretsCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ConfigsCreatePostBody' => 'Docker\\Api\\Normalizer\\ConfigsCreatePostBodyNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Docker\\Api\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\Port' => false, 'Docker\\Api\\Model\\MountPoint' => false, 'Docker\\Api\\Model\\DeviceMapping' => false, 'Docker\\Api\\Model\\DeviceRequest' => false, 'Docker\\Api\\Model\\ThrottleDevice' => false, 'Docker\\Api\\Model\\Mount' => false, 'Docker\\Api\\Model\\MountBindOptions' => false, 'Docker\\Api\\Model\\MountVolumeOptions' => false, 'Docker\\Api\\Model\\MountVolumeOptionsDriverConfig' => false, 'Docker\\Api\\Model\\MountTmpfsOptions' => false, 'Docker\\Api\\Model\\RestartPolicy' => false, 'Docker\\Api\\Model\\Resources' => false, 'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem' => false, 'Docker\\Api\\Model\\ResourcesUlimitsItem' => false, 'Docker\\Api\\Model\\Limit' => false, 'Docker\\Api\\Model\\ResourceObject' => false, 'Docker\\Api\\Model\\GenericResourcesItem' => false, 'Docker\\Api\\Model\\GenericResourcesItemNamedResourceSpec' => false, 'Docker\\Api\\Model\\GenericResourcesItemDiscreteResourceSpec' => false, 'Docker\\Api\\Model\\HealthConfig' => false, 'Docker\\Api\\Model\\Health' => false, 'Docker\\Api\\Model\\HealthcheckResult' => false, 'Docker\\Api\\Model\\HostConfig' => false, 'Docker\\Api\\Model\\HostConfigLogConfig' => false, 'Docker\\Api\\Model\\ContainerConfig' => false, 'Docker\\Api\\Model\\NetworkingConfig' => false, 'Docker\\Api\\Model\\NetworkSettings' => false, 'Docker\\Api\\Model\\Address' => false, 'Docker\\Api\\Model\\PortBinding' => false, 'Docker\\Api\\Model\\GraphDriverData' => false, 'Docker\\Api\\Model\\Image' => false, 'Docker\\Api\\Model\\ImageRootFS' => false, 'Docker\\Api\\Model\\ImageMetadata' => false, 'Docker\\Api\\Model\\ImageSummary' => false, 'Docker\\Api\\Model\\AuthConfig' => false, 'Docker\\Api\\Model\\ProcessConfig' => false, 'Docker\\Api\\Model\\Volume' => false, 'Docker\\Api\\Model\\VolumeUsageData' => false, 'Docker\\Api\\Model\\Network' => false, 'Docker\\Api\\Model\\IPAM' => false, 'Docker\\Api\\Model\\NetworkContainer' => false, 'Docker\\Api\\Model\\BuildInfo' => false, 'Docker\\Api\\Model\\BuildCache' => false, 'Docker\\Api\\Model\\ImageID' => false, 'Docker\\Api\\Model\\CreateImageInfo' => false, 'Docker\\Api\\Model\\PushImageInfo' => false, 'Docker\\Api\\Model\\ErrorDetail' => false, 'Docker\\Api\\Model\\ProgressDetail' => false, 'Docker\\Api\\Model\\ErrorResponse' => false, 'Docker\\Api\\Model\\IdResponse' => false, 'Docker\\Api\\Model\\EndpointSettings' => false, 'Docker\\Api\\Model\\EndpointIPAMConfig' => false, 'Docker\\Api\\Model\\PluginMount' => false, 'Docker\\Api\\Model\\PluginDevice' => false, 'Docker\\Api\\Model\\PluginEnv' => false, 'Docker\\Api\\Model\\PluginInterfaceType' => false, 'Docker\\Api\\Model\\PluginPrivilege' => false, 'Docker\\Api\\Model\\Plugin' => false, 'Docker\\Api\\Model\\PluginSettings' => false, 'Docker\\Api\\Model\\PluginConfig' => false, 'Docker\\Api\\Model\\PluginConfigInterface' => false, 'Docker\\Api\\Model\\PluginConfigUser' => false, 'Docker\\Api\\Model\\PluginConfigNetwork' => false, 'Docker\\Api\\Model\\PluginConfigLinux' => false, 'Docker\\Api\\Model\\PluginConfigArgs' => false, 'Docker\\Api\\Model\\PluginConfigRootfs' => false, 'Docker\\Api\\Model\\ObjectVersion' => false, 'Docker\\Api\\Model\\NodeSpec' => false, 'Docker\\Api\\Model\\Node' => false, 'Docker\\Api\\Model\\NodeDescription' => false, 'Docker\\Api\\Model\\Platform' => false, 'Docker\\Api\\Model\\EngineDescription' => false, 'Docker\\Api\\Model\\EngineDescriptionPluginsItem' => false, 'Docker\\Api\\Model\\TLSInfo' => false, 'Docker\\Api\\Model\\NodeStatus' => false, 'Docker\\Api\\Model\\ManagerStatus' => false, 'Docker\\Api\\Model\\SwarmSpec' => false, 'Docker\\Api\\Model\\SwarmSpecOrchestration' => false, 'Docker\\Api\\Model\\SwarmSpecRaft' => false, 'Docker\\Api\\Model\\SwarmSpecDispatcher' => false, 'Docker\\Api\\Model\\SwarmSpecCAConfig' => false, 'Docker\\Api\\Model\\SwarmSpecCAConfigExternalCAsItem' => false, 'Docker\\Api\\Model\\SwarmSpecEncryptionConfig' => false, 'Docker\\Api\\Model\\SwarmSpecTaskDefaults' => false, 'Docker\\Api\\Model\\SwarmSpecTaskDefaultsLogDriver' => false, 'Docker\\Api\\Model\\ClusterInfo' => false, 'Docker\\Api\\Model\\JoinTokens' => false, 'Docker\\Api\\Model\\Swarm' => false, 'Docker\\Api\\Model\\TaskSpec' => false, 'Docker\\Api\\Model\\TaskSpecPluginSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivileges' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItem' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItemFile' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItem' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItemFile' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecUlimitsItem' => false, 'Docker\\Api\\Model\\TaskSpecNetworkAttachmentSpec' => false, 'Docker\\Api\\Model\\TaskSpecResources' => false, 'Docker\\Api\\Model\\TaskSpecRestartPolicy' => false, 'Docker\\Api\\Model\\TaskSpecPlacement' => false, 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem' => false, 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItemSpread' => false, 'Docker\\Api\\Model\\TaskSpecLogDriver' => false, 'Docker\\Api\\Model\\Task' => false, 'Docker\\Api\\Model\\TaskStatus' => false, 'Docker\\Api\\Model\\TaskStatusContainerStatus' => false, 'Docker\\Api\\Model\\ServiceSpec' => false, 'Docker\\Api\\Model\\ServiceSpecMode' => false, 'Docker\\Api\\Model\\ServiceSpecModeReplicated' => false, 'Docker\\Api\\Model\\ServiceSpecModeReplicatedJob' => false, 'Docker\\Api\\Model\\ServiceSpecUpdateConfig' => false, 'Docker\\Api\\Model\\ServiceSpecRollbackConfig' => false, 'Docker\\Api\\Model\\EndpointPortConfig' => false, 'Docker\\Api\\Model\\EndpointSpec' => false, 'Docker\\Api\\Model\\Service' => false, 'Docker\\Api\\Model\\ServiceEndpoint' => false, 'Docker\\Api\\Model\\ServiceEndpointVirtualIPsItem' => false, 'Docker\\Api\\Model\\ServiceUpdateStatus' => false, 'Docker\\Api\\Model\\ServiceServiceStatus' => false, 'Docker\\Api\\Model\\ServiceJobStatus' => false, 'Docker\\Api\\Model\\ImageDeleteResponseItem' => false, 'Docker\\Api\\Model\\ServiceUpdateResponse' => false, 'Docker\\Api\\Model\\ContainerSummary' => false, 'Docker\\Api\\Model\\ContainerSummaryHostConfig' => false, 'Docker\\Api\\Model\\ContainerSummaryNetworkSettings' => false, 'Docker\\Api\\Model\\Driver' => false, 'Docker\\Api\\Model\\SecretSpec' => false, 'Docker\\Api\\Model\\Secret' => false, 'Docker\\Api\\Model\\ConfigSpec' => false, 'Docker\\Api\\Model\\Config' => false, 'Docker\\Api\\Model\\ContainerState' => false, 'Docker\\Api\\Model\\SystemVersion' => false, 'Docker\\Api\\Model\\SystemVersionPlatform' => false, 'Docker\\Api\\Model\\SystemVersionComponentsItem' => false, 'Docker\\Api\\Model\\SystemInfo' => false, 'Docker\\Api\\Model\\SystemInfoDefaultAddressPoolsItem' => false, 'Docker\\Api\\Model\\PluginsInfo' => false, 'Docker\\Api\\Model\\RegistryServiceConfig' => false, 'Docker\\Api\\Model\\IndexInfo' => false, 'Docker\\Api\\Model\\Runtime' => false, 'Docker\\Api\\Model\\Commit' => false, 'Docker\\Api\\Model\\SwarmInfo' => false, 'Docker\\Api\\Model\\PeerNode' => false, 'Docker\\Api\\Model\\NetworkAttachmentConfig' => false, 'Docker\\Api\\Model\\EventActor' => false, 'Docker\\Api\\Model\\EventMessage' => false, 'Docker\\Api\\Model\\OCIDescriptor' => false, 'Docker\\Api\\Model\\OCIPlatform' => false, 'Docker\\Api\\Model\\DistributionInspect' => false, 'Docker\\Api\\Model\\ContainersCreatePostBody' => false, 'Docker\\Api\\Model\\ContainersCreatePostResponse201' => false, 'Docker\\Api\\Model\\ContainersIdJsonGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdTopGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdChangesGetResponse200Item' => false, 'Docker\\Api\\Model\\ContainersIdUpdatePostBody' => false, 'Docker\\Api\\Model\\ContainersIdUpdatePostResponse200' => false, 'Docker\\Api\\Model\\ContainersIdWaitPostResponse200' => false, 'Docker\\Api\\Model\\ContainersIdWaitPostResponse200Error' => false, 'Docker\\Api\\Model\\ContainersIdArchiveGetResponse400' => false, 'Docker\\Api\\Model\\ContainersIdArchiveHeadResponse400' => false, 'Docker\\Api\\Model\\ContainersPrunePostResponse200' => false, 'Docker\\Api\\Model\\BuildPrunePostResponse200' => false, 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => false, 'Docker\\Api\\Model\\ImagesSearchGetResponse200Item' => false, 'Docker\\Api\\Model\\ImagesPrunePostResponse200' => false, 'Docker\\Api\\Model\\AuthPostResponse200' => false, 'Docker\\Api\\Model\\SystemDfGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdExecPostBody' => false, 'Docker\\Api\\Model\\ExecIdStartPostBody' => false, 'Docker\\Api\\Model\\ExecIdJsonGetResponse200' => false, 'Docker\\Api\\Model\\VolumesGetResponse200' => false, 'Docker\\Api\\Model\\VolumesCreatePostBody' => false, 'Docker\\Api\\Model\\VolumesPrunePostResponse200' => false, 'Docker\\Api\\Model\\NetworksCreatePostBody' => false, 'Docker\\Api\\Model\\NetworksCreatePostResponse201' => false, 'Docker\\Api\\Model\\NetworksIdConnectPostBody' => false, 'Docker\\Api\\Model\\NetworksIdDisconnectPostBody' => false, 'Docker\\Api\\Model\\NetworksPrunePostResponse200' => false, 'Docker\\Api\\Model\\SwarmInitPostBody' => false, 'Docker\\Api\\Model\\SwarmJoinPostBody' => false, 'Docker\\Api\\Model\\SwarmUnlockkeyGetResponse200' => false, 'Docker\\Api\\Model\\SwarmUnlockPostBody' => false, 'Docker\\Api\\Model\\ServicesCreatePostBody' => false, 'Docker\\Api\\Model\\ServicesCreatePostResponse201' => false, 'Docker\\Api\\Model\\ServicesIdUpdatePostBody' => false, 'Docker\\Api\\Model\\SecretsCreatePostBody' => false, 'Docker\\Api\\Model\\ConfigsCreatePostBody' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'Docker\\Api\\Model\\Port' => 'Docker\\Api\\Normalizer\\PortNormalizer',
            'Docker\\Api\\Model\\MountPoint' => 'Docker\\Api\\Normalizer\\MountPointNormalizer',
            'Docker\\Api\\Model\\DeviceMapping' => 'Docker\\Api\\Normalizer\\DeviceMappingNormalizer',
            'Docker\\Api\\Model\\DeviceRequest' => 'Docker\\Api\\Normalizer\\DeviceRequestNormalizer',
            'Docker\\Api\\Model\\ThrottleDevice' => 'Docker\\Api\\Normalizer\\ThrottleDeviceNormalizer',
            'Docker\\Api\\Model\\Mount' => 'Docker\\Api\\Normalizer\\MountNormalizer',
            'Docker\\Api\\Model\\MountBindOptions' => 'Docker\\Api\\Normalizer\\MountBindOptionsNormalizer',
            'Docker\\Api\\Model\\MountVolumeOptions' => 'Docker\\Api\\Normalizer\\MountVolumeOptionsNormalizer',
            'Docker\\Api\\Model\\MountVolumeOptionsDriverConfig' => 'Docker\\Api\\Normalizer\\MountVolumeOptionsDriverConfigNormalizer',
            'Docker\\Api\\Model\\MountTmpfsOptions' => 'Docker\\Api\\Normalizer\\MountTmpfsOptionsNormalizer',
            'Docker\\Api\\Model\\RestartPolicy' => 'Docker\\Api\\Normalizer\\RestartPolicyNormalizer',
            'Docker\\Api\\Model\\Resources' => 'Docker\\Api\\Normalizer\\ResourcesNormalizer',
            'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem' => 'Docker\\Api\\Normalizer\\ResourcesBlkioWeightDeviceItemNormalizer',
            'Docker\\Api\\Model\\ResourcesUlimitsItem' => 'Docker\\Api\\Normalizer\\ResourcesUlimitsItemNormalizer',
            'Docker\\Api\\Model\\Limit' => 'Docker\\Api\\Normalizer\\LimitNormalizer',
            'Docker\\Api\\Model\\ResourceObject' => 'Docker\\Api\\Normalizer\\ResourceObjectNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItem' => 'Docker\\Api\\Normalizer\\GenericResourcesItemNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItemNamedResourceSpec' => 'Docker\\Api\\Normalizer\\GenericResourcesItemNamedResourceSpecNormalizer',
            'Docker\\Api\\Model\\GenericResourcesItemDiscreteResourceSpec' => 'Docker\\Api\\Normalizer\\GenericResourcesItemDiscreteResourceSpecNormalizer',
            'Docker\\Api\\Model\\HealthConfig' => 'Docker\\Api\\Normalizer\\HealthConfigNormalizer',
            'Docker\\Api\\Model\\Health' => 'Docker\\Api\\Normalizer\\HealthNormalizer',
            'Docker\\Api\\Model\\HealthcheckResult' => 'Docker\\Api\\Normalizer\\HealthcheckResultNormalizer',
            'Docker\\Api\\Model\\HostConfig' => 'Docker\\Api\\Normalizer\\HostConfigNormalizer',
            'Docker\\Api\\Model\\HostConfigLogConfig' => 'Docker\\Api\\Normalizer\\HostConfigLogConfigNormalizer',
            'Docker\\Api\\Model\\ContainerConfig' => 'Docker\\Api\\Normalizer\\ContainerConfigNormalizer',
            'Docker\\Api\\Model\\NetworkingConfig' => 'Docker\\Api\\Normalizer\\NetworkingConfigNormalizer',
            'Docker\\Api\\Model\\NetworkSettings' => 'Docker\\Api\\Normalizer\\NetworkSettingsNormalizer',
            'Docker\\Api\\Model\\Address' => 'Docker\\Api\\Normalizer\\AddressNormalizer',
            'Docker\\Api\\Model\\PortBinding' => 'Docker\\Api\\Normalizer\\PortBindingNormalizer',
            'Docker\\Api\\Model\\GraphDriverData' => 'Docker\\Api\\Normalizer\\GraphDriverDataNormalizer',
            'Docker\\Api\\Model\\Image' => 'Docker\\Api\\Normalizer\\ImageNormalizer',
            'Docker\\Api\\Model\\ImageRootFS' => 'Docker\\Api\\Normalizer\\ImageRootFSNormalizer',
            'Docker\\Api\\Model\\ImageMetadata' => 'Docker\\Api\\Normalizer\\ImageMetadataNormalizer',
            'Docker\\Api\\Model\\ImageSummary' => 'Docker\\Api\\Normalizer\\ImageSummaryNormalizer',
            'Docker\\Api\\Model\\AuthConfig' => 'Docker\\Api\\Normalizer\\AuthConfigNormalizer',
            'Docker\\Api\\Model\\ProcessConfig' => 'Docker\\Api\\Normalizer\\ProcessConfigNormalizer',
            'Docker\\Api\\Model\\Volume' => 'Docker\\Api\\Normalizer\\VolumeNormalizer',
            'Docker\\Api\\Model\\VolumeUsageData' => 'Docker\\Api\\Normalizer\\VolumeUsageDataNormalizer',
            'Docker\\Api\\Model\\Network' => 'Docker\\Api\\Normalizer\\NetworkNormalizer',
            'Docker\\Api\\Model\\IPAM' => 'Docker\\Api\\Normalizer\\IPAMNormalizer',
            'Docker\\Api\\Model\\NetworkContainer' => 'Docker\\Api\\Normalizer\\NetworkContainerNormalizer',
            'Docker\\Api\\Model\\BuildInfo' => 'Docker\\Api\\Normalizer\\BuildInfoNormalizer',
            'Docker\\Api\\Model\\BuildCache' => 'Docker\\Api\\Normalizer\\BuildCacheNormalizer',
            'Docker\\Api\\Model\\ImageID' => 'Docker\\Api\\Normalizer\\ImageIDNormalizer',
            'Docker\\Api\\Model\\CreateImageInfo' => 'Docker\\Api\\Normalizer\\CreateImageInfoNormalizer',
            'Docker\\Api\\Model\\PushImageInfo' => 'Docker\\Api\\Normalizer\\PushImageInfoNormalizer',
            'Docker\\Api\\Model\\ErrorDetail' => 'Docker\\Api\\Normalizer\\ErrorDetailNormalizer',
            'Docker\\Api\\Model\\ProgressDetail' => 'Docker\\Api\\Normalizer\\ProgressDetailNormalizer',
            'Docker\\Api\\Model\\ErrorResponse' => 'Docker\\Api\\Normalizer\\ErrorResponseNormalizer',
            'Docker\\Api\\Model\\IdResponse' => 'Docker\\Api\\Normalizer\\IdResponseNormalizer',
            'Docker\\Api\\Model\\EndpointSettings' => 'Docker\\Api\\Normalizer\\EndpointSettingsNormalizer',
            'Docker\\Api\\Model\\EndpointIPAMConfig' => 'Docker\\Api\\Normalizer\\EndpointIPAMConfigNormalizer',
            'Docker\\Api\\Model\\PluginMount' => 'Docker\\Api\\Normalizer\\PluginMountNormalizer',
            'Docker\\Api\\Model\\PluginDevice' => 'Docker\\Api\\Normalizer\\PluginDeviceNormalizer',
            'Docker\\Api\\Model\\PluginEnv' => 'Docker\\Api\\Normalizer\\PluginEnvNormalizer',
            'Docker\\Api\\Model\\PluginInterfaceType' => 'Docker\\Api\\Normalizer\\PluginInterfaceTypeNormalizer',
            'Docker\\Api\\Model\\PluginPrivilege' => 'Docker\\Api\\Normalizer\\PluginPrivilegeNormalizer',
            'Docker\\Api\\Model\\Plugin' => 'Docker\\Api\\Normalizer\\PluginNormalizer',
            'Docker\\Api\\Model\\PluginSettings' => 'Docker\\Api\\Normalizer\\PluginSettingsNormalizer',
            'Docker\\Api\\Model\\PluginConfig' => 'Docker\\Api\\Normalizer\\PluginConfigNormalizer',
            'Docker\\Api\\Model\\PluginConfigInterface' => 'Docker\\Api\\Normalizer\\PluginConfigInterfaceNormalizer',
            'Docker\\Api\\Model\\PluginConfigUser' => 'Docker\\Api\\Normalizer\\PluginConfigUserNormalizer',
            'Docker\\Api\\Model\\PluginConfigNetwork' => 'Docker\\Api\\Normalizer\\PluginConfigNetworkNormalizer',
            'Docker\\Api\\Model\\PluginConfigLinux' => 'Docker\\Api\\Normalizer\\PluginConfigLinuxNormalizer',
            'Docker\\Api\\Model\\PluginConfigArgs' => 'Docker\\Api\\Normalizer\\PluginConfigArgsNormalizer',
            'Docker\\Api\\Model\\PluginConfigRootfs' => 'Docker\\Api\\Normalizer\\PluginConfigRootfsNormalizer',
            'Docker\\Api\\Model\\ObjectVersion' => 'Docker\\Api\\Normalizer\\ObjectVersionNormalizer',
            'Docker\\Api\\Model\\NodeSpec' => 'Docker\\Api\\Normalizer\\NodeSpecNormalizer',
            'Docker\\Api\\Model\\Node' => 'Docker\\Api\\Normalizer\\NodeNormalizer',
            'Docker\\Api\\Model\\NodeDescription' => 'Docker\\Api\\Normalizer\\NodeDescriptionNormalizer',
            'Docker\\Api\\Model\\Platform' => 'Docker\\Api\\Normalizer\\PlatformNormalizer',
            'Docker\\Api\\Model\\EngineDescription' => 'Docker\\Api\\Normalizer\\EngineDescriptionNormalizer',
            'Docker\\Api\\Model\\EngineDescriptionPluginsItem' => 'Docker\\Api\\Normalizer\\EngineDescriptionPluginsItemNormalizer',
            'Docker\\Api\\Model\\TLSInfo' => 'Docker\\Api\\Normalizer\\TLSInfoNormalizer',
            'Docker\\Api\\Model\\NodeStatus' => 'Docker\\Api\\Normalizer\\NodeStatusNormalizer',
            'Docker\\Api\\Model\\ManagerStatus' => 'Docker\\Api\\Normalizer\\ManagerStatusNormalizer',
            'Docker\\Api\\Model\\SwarmSpec' => 'Docker\\Api\\Normalizer\\SwarmSpecNormalizer',
            'Docker\\Api\\Model\\SwarmSpecOrchestration' => 'Docker\\Api\\Normalizer\\SwarmSpecOrchestrationNormalizer',
            'Docker\\Api\\Model\\SwarmSpecRaft' => 'Docker\\Api\\Normalizer\\SwarmSpecRaftNormalizer',
            'Docker\\Api\\Model\\SwarmSpecDispatcher' => 'Docker\\Api\\Normalizer\\SwarmSpecDispatcherNormalizer',
            'Docker\\Api\\Model\\SwarmSpecCAConfig' => 'Docker\\Api\\Normalizer\\SwarmSpecCAConfigNormalizer',
            'Docker\\Api\\Model\\SwarmSpecCAConfigExternalCAsItem' => 'Docker\\Api\\Normalizer\\SwarmSpecCAConfigExternalCAsItemNormalizer',
            'Docker\\Api\\Model\\SwarmSpecEncryptionConfig' => 'Docker\\Api\\Normalizer\\SwarmSpecEncryptionConfigNormalizer',
            'Docker\\Api\\Model\\SwarmSpecTaskDefaults' => 'Docker\\Api\\Normalizer\\SwarmSpecTaskDefaultsNormalizer',
            'Docker\\Api\\Model\\SwarmSpecTaskDefaultsLogDriver' => 'Docker\\Api\\Normalizer\\SwarmSpecTaskDefaultsLogDriverNormalizer',
            'Docker\\Api\\Model\\ClusterInfo' => 'Docker\\Api\\Normalizer\\ClusterInfoNormalizer',
            'Docker\\Api\\Model\\JoinTokens' => 'Docker\\Api\\Normalizer\\JoinTokensNormalizer',
            'Docker\\Api\\Model\\Swarm' => 'Docker\\Api\\Normalizer\\SwarmNormalizer',
            'Docker\\Api\\Model\\TaskSpec' => 'Docker\\Api\\Normalizer\\TaskSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecPluginSpec' => 'Docker\\Api\\Normalizer\\TaskSpecPluginSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpec' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivileges' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecDNSConfigNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecSecretsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItemFile' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecSecretsItemFileNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecConfigsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItemFile' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecConfigsItemFileNormalizer',
            'Docker\\Api\\Model\\TaskSpecContainerSpecUlimitsItem' => 'Docker\\Api\\Normalizer\\TaskSpecContainerSpecUlimitsItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecNetworkAttachmentSpec' => 'Docker\\Api\\Normalizer\\TaskSpecNetworkAttachmentSpecNormalizer',
            'Docker\\Api\\Model\\TaskSpecResources' => 'Docker\\Api\\Normalizer\\TaskSpecResourcesNormalizer',
            'Docker\\Api\\Model\\TaskSpecRestartPolicy' => 'Docker\\Api\\Normalizer\\TaskSpecRestartPolicyNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacement' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementPreferencesItemNormalizer',
            'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItemSpread' => 'Docker\\Api\\Normalizer\\TaskSpecPlacementPreferencesItemSpreadNormalizer',
            'Docker\\Api\\Model\\TaskSpecLogDriver' => 'Docker\\Api\\Normalizer\\TaskSpecLogDriverNormalizer',
            'Docker\\Api\\Model\\Task' => 'Docker\\Api\\Normalizer\\TaskNormalizer',
            'Docker\\Api\\Model\\TaskStatus' => 'Docker\\Api\\Normalizer\\TaskStatusNormalizer',
            'Docker\\Api\\Model\\TaskStatusContainerStatus' => 'Docker\\Api\\Normalizer\\TaskStatusContainerStatusNormalizer',
            'Docker\\Api\\Model\\ServiceSpec' => 'Docker\\Api\\Normalizer\\ServiceSpecNormalizer',
            'Docker\\Api\\Model\\ServiceSpecMode' => 'Docker\\Api\\Normalizer\\ServiceSpecModeNormalizer',
            'Docker\\Api\\Model\\ServiceSpecModeReplicated' => 'Docker\\Api\\Normalizer\\ServiceSpecModeReplicatedNormalizer',
            'Docker\\Api\\Model\\ServiceSpecModeReplicatedJob' => 'Docker\\Api\\Normalizer\\ServiceSpecModeReplicatedJobNormalizer',
            'Docker\\Api\\Model\\ServiceSpecUpdateConfig' => 'Docker\\Api\\Normalizer\\ServiceSpecUpdateConfigNormalizer',
            'Docker\\Api\\Model\\ServiceSpecRollbackConfig' => 'Docker\\Api\\Normalizer\\ServiceSpecRollbackConfigNormalizer',
            'Docker\\Api\\Model\\EndpointPortConfig' => 'Docker\\Api\\Normalizer\\EndpointPortConfigNormalizer',
            'Docker\\Api\\Model\\EndpointSpec' => 'Docker\\Api\\Normalizer\\EndpointSpecNormalizer',
            'Docker\\Api\\Model\\Service' => 'Docker\\Api\\Normalizer\\ServiceNormalizer',
            'Docker\\Api\\Model\\ServiceEndpoint' => 'Docker\\Api\\Normalizer\\ServiceEndpointNormalizer',
            'Docker\\Api\\Model\\ServiceEndpointVirtualIPsItem' => 'Docker\\Api\\Normalizer\\ServiceEndpointVirtualIPsItemNormalizer',
            'Docker\\Api\\Model\\ServiceUpdateStatus' => 'Docker\\Api\\Normalizer\\ServiceUpdateStatusNormalizer',
            'Docker\\Api\\Model\\ServiceServiceStatus' => 'Docker\\Api\\Normalizer\\ServiceServiceStatusNormalizer',
            'Docker\\Api\\Model\\ServiceJobStatus' => 'Docker\\Api\\Normalizer\\ServiceJobStatusNormalizer',
            'Docker\\Api\\Model\\ImageDeleteResponseItem' => 'Docker\\Api\\Normalizer\\ImageDeleteResponseItemNormalizer',
            'Docker\\Api\\Model\\ServiceUpdateResponse' => 'Docker\\Api\\Normalizer\\ServiceUpdateResponseNormalizer',
            'Docker\\Api\\Model\\ContainerSummary' => 'Docker\\Api\\Normalizer\\ContainerSummaryNormalizer',
            'Docker\\Api\\Model\\ContainerSummaryHostConfig' => 'Docker\\Api\\Normalizer\\ContainerSummaryHostConfigNormalizer',
            'Docker\\Api\\Model\\ContainerSummaryNetworkSettings' => 'Docker\\Api\\Normalizer\\ContainerSummaryNetworkSettingsNormalizer',
            'Docker\\Api\\Model\\Driver' => 'Docker\\Api\\Normalizer\\DriverNormalizer',
            'Docker\\Api\\Model\\SecretSpec' => 'Docker\\Api\\Normalizer\\SecretSpecNormalizer',
            'Docker\\Api\\Model\\Secret' => 'Docker\\Api\\Normalizer\\SecretNormalizer',
            'Docker\\Api\\Model\\ConfigSpec' => 'Docker\\Api\\Normalizer\\ConfigSpecNormalizer',
            'Docker\\Api\\Model\\Config' => 'Docker\\Api\\Normalizer\\ConfigNormalizer',
            'Docker\\Api\\Model\\ContainerState' => 'Docker\\Api\\Normalizer\\ContainerStateNormalizer',
            'Docker\\Api\\Model\\SystemVersion' => 'Docker\\Api\\Normalizer\\SystemVersionNormalizer',
            'Docker\\Api\\Model\\SystemVersionPlatform' => 'Docker\\Api\\Normalizer\\SystemVersionPlatformNormalizer',
            'Docker\\Api\\Model\\SystemVersionComponentsItem' => 'Docker\\Api\\Normalizer\\SystemVersionComponentsItemNormalizer',
            'Docker\\Api\\Model\\SystemInfo' => 'Docker\\Api\\Normalizer\\SystemInfoNormalizer',
            'Docker\\Api\\Model\\SystemInfoDefaultAddressPoolsItem' => 'Docker\\Api\\Normalizer\\SystemInfoDefaultAddressPoolsItemNormalizer',
            'Docker\\Api\\Model\\PluginsInfo' => 'Docker\\Api\\Normalizer\\PluginsInfoNormalizer',
            'Docker\\Api\\Model\\RegistryServiceConfig' => 'Docker\\Api\\Normalizer\\RegistryServiceConfigNormalizer',
            'Docker\\Api\\Model\\IndexInfo' => 'Docker\\Api\\Normalizer\\IndexInfoNormalizer',
            'Docker\\Api\\Model\\Runtime' => 'Docker\\Api\\Normalizer\\RuntimeNormalizer',
            'Docker\\Api\\Model\\Commit' => 'Docker\\Api\\Normalizer\\CommitNormalizer',
            'Docker\\Api\\Model\\SwarmInfo' => 'Docker\\Api\\Normalizer\\SwarmInfoNormalizer',
            'Docker\\Api\\Model\\PeerNode' => 'Docker\\Api\\Normalizer\\PeerNodeNormalizer',
            'Docker\\Api\\Model\\NetworkAttachmentConfig' => 'Docker\\Api\\Normalizer\\NetworkAttachmentConfigNormalizer',
            'Docker\\Api\\Model\\EventActor' => 'Docker\\Api\\Normalizer\\EventActorNormalizer',
            'Docker\\Api\\Model\\EventMessage' => 'Docker\\Api\\Normalizer\\EventMessageNormalizer',
            'Docker\\Api\\Model\\OCIDescriptor' => 'Docker\\Api\\Normalizer\\OCIDescriptorNormalizer',
            'Docker\\Api\\Model\\OCIPlatform' => 'Docker\\Api\\Normalizer\\OCIPlatformNormalizer',
            'Docker\\Api\\Model\\DistributionInspect' => 'Docker\\Api\\Normalizer\\DistributionInspectNormalizer',
            'Docker\\Api\\Model\\ContainersCreatePostBody' => 'Docker\\Api\\Normalizer\\ContainersCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ContainersCreatePostResponse201' => 'Docker\\Api\\Normalizer\\ContainersCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\ContainersIdJsonGetResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdJsonGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdTopGetResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdTopGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdChangesGetResponse200Item' => 'Docker\\Api\\Normalizer\\ContainersIdChangesGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ContainersIdUpdatePostBody' => 'Docker\\Api\\Normalizer\\ContainersIdUpdatePostBodyNormalizer',
            'Docker\\Api\\Model\\ContainersIdUpdatePostResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdUpdatePostResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdWaitPostResponse200' => 'Docker\\Api\\Normalizer\\ContainersIdWaitPostResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdWaitPostResponse200Error' => 'Docker\\Api\\Normalizer\\ContainersIdWaitPostResponse200ErrorNormalizer',
            'Docker\\Api\\Model\\ContainersIdArchiveGetResponse400' => 'Docker\\Api\\Normalizer\\ContainersIdArchiveGetResponse400Normalizer',
            'Docker\\Api\\Model\\ContainersIdArchiveHeadResponse400' => 'Docker\\Api\\Normalizer\\ContainersIdArchiveHeadResponse400Normalizer',
            'Docker\\Api\\Model\\ContainersPrunePostResponse200' => 'Docker\\Api\\Normalizer\\ContainersPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\BuildPrunePostResponse200' => 'Docker\\Api\\Normalizer\\BuildPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => 'Docker\\Api\\Normalizer\\ImagesNameHistoryGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ImagesSearchGetResponse200Item' => 'Docker\\Api\\Normalizer\\ImagesSearchGetResponse200ItemNormalizer',
            'Docker\\Api\\Model\\ImagesPrunePostResponse200' => 'Docker\\Api\\Normalizer\\ImagesPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\AuthPostResponse200' => 'Docker\\Api\\Normalizer\\AuthPostResponse200Normalizer',
            'Docker\\Api\\Model\\SystemDfGetResponse200' => 'Docker\\Api\\Normalizer\\SystemDfGetResponse200Normalizer',
            'Docker\\Api\\Model\\ContainersIdExecPostBody' => 'Docker\\Api\\Normalizer\\ContainersIdExecPostBodyNormalizer',
            'Docker\\Api\\Model\\ExecIdStartPostBody' => 'Docker\\Api\\Normalizer\\ExecIdStartPostBodyNormalizer',
            'Docker\\Api\\Model\\ExecIdJsonGetResponse200' => 'Docker\\Api\\Normalizer\\ExecIdJsonGetResponse200Normalizer',
            'Docker\\Api\\Model\\VolumesGetResponse200' => 'Docker\\Api\\Normalizer\\VolumesGetResponse200Normalizer',
            'Docker\\Api\\Model\\VolumesCreatePostBody' => 'Docker\\Api\\Normalizer\\VolumesCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\VolumesPrunePostResponse200' => 'Docker\\Api\\Normalizer\\VolumesPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\NetworksCreatePostBody' => 'Docker\\Api\\Normalizer\\NetworksCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksCreatePostResponse201' => 'Docker\\Api\\Normalizer\\NetworksCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\NetworksIdConnectPostBody' => 'Docker\\Api\\Normalizer\\NetworksIdConnectPostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksIdDisconnectPostBody' => 'Docker\\Api\\Normalizer\\NetworksIdDisconnectPostBodyNormalizer',
            'Docker\\Api\\Model\\NetworksPrunePostResponse200' => 'Docker\\Api\\Normalizer\\NetworksPrunePostResponse200Normalizer',
            'Docker\\Api\\Model\\SwarmInitPostBody' => 'Docker\\Api\\Normalizer\\SwarmInitPostBodyNormalizer',
            'Docker\\Api\\Model\\SwarmJoinPostBody' => 'Docker\\Api\\Normalizer\\SwarmJoinPostBodyNormalizer',
            'Docker\\Api\\Model\\SwarmUnlockkeyGetResponse200' => 'Docker\\Api\\Normalizer\\SwarmUnlockkeyGetResponse200Normalizer',
            'Docker\\Api\\Model\\SwarmUnlockPostBody' => 'Docker\\Api\\Normalizer\\SwarmUnlockPostBodyNormalizer',
            'Docker\\Api\\Model\\ServicesCreatePostBody' => 'Docker\\Api\\Normalizer\\ServicesCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ServicesCreatePostResponse201' => 'Docker\\Api\\Normalizer\\ServicesCreatePostResponse201Normalizer',
            'Docker\\Api\\Model\\ServicesIdUpdatePostBody' => 'Docker\\Api\\Normalizer\\ServicesIdUpdatePostBodyNormalizer',
            'Docker\\Api\\Model\\SecretsCreatePostBody' => 'Docker\\Api\\Normalizer\\SecretsCreatePostBodyNormalizer',
            'Docker\\Api\\Model\\ConfigsCreatePostBody' => 'Docker\\Api\\Normalizer\\ConfigsCreatePostBodyNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Docker\\Api\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\Port' => false, 'Docker\\Api\\Model\\MountPoint' => false, 'Docker\\Api\\Model\\DeviceMapping' => false, 'Docker\\Api\\Model\\DeviceRequest' => false, 'Docker\\Api\\Model\\ThrottleDevice' => false, 'Docker\\Api\\Model\\Mount' => false, 'Docker\\Api\\Model\\MountBindOptions' => false, 'Docker\\Api\\Model\\MountVolumeOptions' => false, 'Docker\\Api\\Model\\MountVolumeOptionsDriverConfig' => false, 'Docker\\Api\\Model\\MountTmpfsOptions' => false, 'Docker\\Api\\Model\\RestartPolicy' => false, 'Docker\\Api\\Model\\Resources' => false, 'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem' => false, 'Docker\\Api\\Model\\ResourcesUlimitsItem' => false, 'Docker\\Api\\Model\\Limit' => false, 'Docker\\Api\\Model\\ResourceObject' => false, 'Docker\\Api\\Model\\GenericResourcesItem' => false, 'Docker\\Api\\Model\\GenericResourcesItemNamedResourceSpec' => false, 'Docker\\Api\\Model\\GenericResourcesItemDiscreteResourceSpec' => false, 'Docker\\Api\\Model\\HealthConfig' => false, 'Docker\\Api\\Model\\Health' => false, 'Docker\\Api\\Model\\HealthcheckResult' => false, 'Docker\\Api\\Model\\HostConfig' => false, 'Docker\\Api\\Model\\HostConfigLogConfig' => false, 'Docker\\Api\\Model\\ContainerConfig' => false, 'Docker\\Api\\Model\\NetworkingConfig' => false, 'Docker\\Api\\Model\\NetworkSettings' => false, 'Docker\\Api\\Model\\Address' => false, 'Docker\\Api\\Model\\PortBinding' => false, 'Docker\\Api\\Model\\GraphDriverData' => false, 'Docker\\Api\\Model\\Image' => false, 'Docker\\Api\\Model\\ImageRootFS' => false, 'Docker\\Api\\Model\\ImageMetadata' => false, 'Docker\\Api\\Model\\ImageSummary' => false, 'Docker\\Api\\Model\\AuthConfig' => false, 'Docker\\Api\\Model\\ProcessConfig' => false, 'Docker\\Api\\Model\\Volume' => false, 'Docker\\Api\\Model\\VolumeUsageData' => false, 'Docker\\Api\\Model\\Network' => false, 'Docker\\Api\\Model\\IPAM' => false, 'Docker\\Api\\Model\\NetworkContainer' => false, 'Docker\\Api\\Model\\BuildInfo' => false, 'Docker\\Api\\Model\\BuildCache' => false, 'Docker\\Api\\Model\\ImageID' => false, 'Docker\\Api\\Model\\CreateImageInfo' => false, 'Docker\\Api\\Model\\PushImageInfo' => false, 'Docker\\Api\\Model\\ErrorDetail' => false, 'Docker\\Api\\Model\\ProgressDetail' => false, 'Docker\\Api\\Model\\ErrorResponse' => false, 'Docker\\Api\\Model\\IdResponse' => false, 'Docker\\Api\\Model\\EndpointSettings' => false, 'Docker\\Api\\Model\\EndpointIPAMConfig' => false, 'Docker\\Api\\Model\\PluginMount' => false, 'Docker\\Api\\Model\\PluginDevice' => false, 'Docker\\Api\\Model\\PluginEnv' => false, 'Docker\\Api\\Model\\PluginInterfaceType' => false, 'Docker\\Api\\Model\\PluginPrivilege' => false, 'Docker\\Api\\Model\\Plugin' => false, 'Docker\\Api\\Model\\PluginSettings' => false, 'Docker\\Api\\Model\\PluginConfig' => false, 'Docker\\Api\\Model\\PluginConfigInterface' => false, 'Docker\\Api\\Model\\PluginConfigUser' => false, 'Docker\\Api\\Model\\PluginConfigNetwork' => false, 'Docker\\Api\\Model\\PluginConfigLinux' => false, 'Docker\\Api\\Model\\PluginConfigArgs' => false, 'Docker\\Api\\Model\\PluginConfigRootfs' => false, 'Docker\\Api\\Model\\ObjectVersion' => false, 'Docker\\Api\\Model\\NodeSpec' => false, 'Docker\\Api\\Model\\Node' => false, 'Docker\\Api\\Model\\NodeDescription' => false, 'Docker\\Api\\Model\\Platform' => false, 'Docker\\Api\\Model\\EngineDescription' => false, 'Docker\\Api\\Model\\EngineDescriptionPluginsItem' => false, 'Docker\\Api\\Model\\TLSInfo' => false, 'Docker\\Api\\Model\\NodeStatus' => false, 'Docker\\Api\\Model\\ManagerStatus' => false, 'Docker\\Api\\Model\\SwarmSpec' => false, 'Docker\\Api\\Model\\SwarmSpecOrchestration' => false, 'Docker\\Api\\Model\\SwarmSpecRaft' => false, 'Docker\\Api\\Model\\SwarmSpecDispatcher' => false, 'Docker\\Api\\Model\\SwarmSpecCAConfig' => false, 'Docker\\Api\\Model\\SwarmSpecCAConfigExternalCAsItem' => false, 'Docker\\Api\\Model\\SwarmSpecEncryptionConfig' => false, 'Docker\\Api\\Model\\SwarmSpecTaskDefaults' => false, 'Docker\\Api\\Model\\SwarmSpecTaskDefaultsLogDriver' => false, 'Docker\\Api\\Model\\ClusterInfo' => false, 'Docker\\Api\\Model\\JoinTokens' => false, 'Docker\\Api\\Model\\Swarm' => false, 'Docker\\Api\\Model\\TaskSpec' => false, 'Docker\\Api\\Model\\TaskSpecPluginSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivileges' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItem' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecSecretsItemFile' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItem' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecConfigsItemFile' => false, 'Docker\\Api\\Model\\TaskSpecContainerSpecUlimitsItem' => false, 'Docker\\Api\\Model\\TaskSpecNetworkAttachmentSpec' => false, 'Docker\\Api\\Model\\TaskSpecResources' => false, 'Docker\\Api\\Model\\TaskSpecRestartPolicy' => false, 'Docker\\Api\\Model\\TaskSpecPlacement' => false, 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem' => false, 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItemSpread' => false, 'Docker\\Api\\Model\\TaskSpecLogDriver' => false, 'Docker\\Api\\Model\\Task' => false, 'Docker\\Api\\Model\\TaskStatus' => false, 'Docker\\Api\\Model\\TaskStatusContainerStatus' => false, 'Docker\\Api\\Model\\ServiceSpec' => false, 'Docker\\Api\\Model\\ServiceSpecMode' => false, 'Docker\\Api\\Model\\ServiceSpecModeReplicated' => false, 'Docker\\Api\\Model\\ServiceSpecModeReplicatedJob' => false, 'Docker\\Api\\Model\\ServiceSpecUpdateConfig' => false, 'Docker\\Api\\Model\\ServiceSpecRollbackConfig' => false, 'Docker\\Api\\Model\\EndpointPortConfig' => false, 'Docker\\Api\\Model\\EndpointSpec' => false, 'Docker\\Api\\Model\\Service' => false, 'Docker\\Api\\Model\\ServiceEndpoint' => false, 'Docker\\Api\\Model\\ServiceEndpointVirtualIPsItem' => false, 'Docker\\Api\\Model\\ServiceUpdateStatus' => false, 'Docker\\Api\\Model\\ServiceServiceStatus' => false, 'Docker\\Api\\Model\\ServiceJobStatus' => false, 'Docker\\Api\\Model\\ImageDeleteResponseItem' => false, 'Docker\\Api\\Model\\ServiceUpdateResponse' => false, 'Docker\\Api\\Model\\ContainerSummary' => false, 'Docker\\Api\\Model\\ContainerSummaryHostConfig' => false, 'Docker\\Api\\Model\\ContainerSummaryNetworkSettings' => false, 'Docker\\Api\\Model\\Driver' => false, 'Docker\\Api\\Model\\SecretSpec' => false, 'Docker\\Api\\Model\\Secret' => false, 'Docker\\Api\\Model\\ConfigSpec' => false, 'Docker\\Api\\Model\\Config' => false, 'Docker\\Api\\Model\\ContainerState' => false, 'Docker\\Api\\Model\\SystemVersion' => false, 'Docker\\Api\\Model\\SystemVersionPlatform' => false, 'Docker\\Api\\Model\\SystemVersionComponentsItem' => false, 'Docker\\Api\\Model\\SystemInfo' => false, 'Docker\\Api\\Model\\SystemInfoDefaultAddressPoolsItem' => false, 'Docker\\Api\\Model\\PluginsInfo' => false, 'Docker\\Api\\Model\\RegistryServiceConfig' => false, 'Docker\\Api\\Model\\IndexInfo' => false, 'Docker\\Api\\Model\\Runtime' => false, 'Docker\\Api\\Model\\Commit' => false, 'Docker\\Api\\Model\\SwarmInfo' => false, 'Docker\\Api\\Model\\PeerNode' => false, 'Docker\\Api\\Model\\NetworkAttachmentConfig' => false, 'Docker\\Api\\Model\\EventActor' => false, 'Docker\\Api\\Model\\EventMessage' => false, 'Docker\\Api\\Model\\OCIDescriptor' => false, 'Docker\\Api\\Model\\OCIPlatform' => false, 'Docker\\Api\\Model\\DistributionInspect' => false, 'Docker\\Api\\Model\\ContainersCreatePostBody' => false, 'Docker\\Api\\Model\\ContainersCreatePostResponse201' => false, 'Docker\\Api\\Model\\ContainersIdJsonGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdTopGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdChangesGetResponse200Item' => false, 'Docker\\Api\\Model\\ContainersIdUpdatePostBody' => false, 'Docker\\Api\\Model\\ContainersIdUpdatePostResponse200' => false, 'Docker\\Api\\Model\\ContainersIdWaitPostResponse200' => false, 'Docker\\Api\\Model\\ContainersIdWaitPostResponse200Error' => false, 'Docker\\Api\\Model\\ContainersIdArchiveGetResponse400' => false, 'Docker\\Api\\Model\\ContainersIdArchiveHeadResponse400' => false, 'Docker\\Api\\Model\\ContainersPrunePostResponse200' => false, 'Docker\\Api\\Model\\BuildPrunePostResponse200' => false, 'Docker\\Api\\Model\\ImagesNameHistoryGetResponse200Item' => false, 'Docker\\Api\\Model\\ImagesSearchGetResponse200Item' => false, 'Docker\\Api\\Model\\ImagesPrunePostResponse200' => false, 'Docker\\Api\\Model\\AuthPostResponse200' => false, 'Docker\\Api\\Model\\SystemDfGetResponse200' => false, 'Docker\\Api\\Model\\ContainersIdExecPostBody' => false, 'Docker\\Api\\Model\\ExecIdStartPostBody' => false, 'Docker\\Api\\Model\\ExecIdJsonGetResponse200' => false, 'Docker\\Api\\Model\\VolumesGetResponse200' => false, 'Docker\\Api\\Model\\VolumesCreatePostBody' => false, 'Docker\\Api\\Model\\VolumesPrunePostResponse200' => false, 'Docker\\Api\\Model\\NetworksCreatePostBody' => false, 'Docker\\Api\\Model\\NetworksCreatePostResponse201' => false, 'Docker\\Api\\Model\\NetworksIdConnectPostBody' => false, 'Docker\\Api\\Model\\NetworksIdDisconnectPostBody' => false, 'Docker\\Api\\Model\\NetworksPrunePostResponse200' => false, 'Docker\\Api\\Model\\SwarmInitPostBody' => false, 'Docker\\Api\\Model\\SwarmJoinPostBody' => false, 'Docker\\Api\\Model\\SwarmUnlockkeyGetResponse200' => false, 'Docker\\Api\\Model\\SwarmUnlockPostBody' => false, 'Docker\\Api\\Model\\ServicesCreatePostBody' => false, 'Docker\\Api\\Model\\ServicesCreatePostResponse201' => false, 'Docker\\Api\\Model\\ServicesIdUpdatePostBody' => false, 'Docker\\Api\\Model\\SecretsCreatePostBody' => false, 'Docker\\Api\\Model\\ConfigsCreatePostBody' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
}