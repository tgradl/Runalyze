<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'runalyze/runalyze';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/assert' => 'v2.9.9@124317de301b7c91d5fce34c98bba2c6925bec95',
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'bernard/bernard' => '1.0.0-alpha9@1144b4dd9b87f22091dfceabb91d74f295ade034',
  'bernard/bernard-bundle' => 'v2.0.2@cd5c4420b1fdf477ffff952fec46af37734c209d',
  'bernard/normalt' => 'v1.2.0@9ed9b6bbc657bb1e5a52ff4da6607e32152b390e',
  'cache/adapter-common' => '1.2.0@6b87c5cbdf03be42437b595dbe5de8e97cd1d497',
  'cache/array-adapter' => '1.1.0@71e72a51b76ed2668642a35690a7df7178f00670',
  'cache/hierarchical-cache' => '1.1.0@ba3746c65461b17154fb855068403670fd7fa2d3',
  'cache/tag-interop' => '1.0.1@909a5df87e698f1665724a9e84851c11c45fbfb9',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.4@2411a55a2a628e6d8dd598388ab13474802c7b6e',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '2.2.3@0a081b55a88259a887af7be654743a8c5f703e99',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.3.1@af915024d41669600354efe78664ee86dfca62e1',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'guzzlehttp/guzzle' => '7.4.0@868b3571a039f0ebc11ac8f344f4080babe2cb94',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/translation-bundle' => '1.6.0@399e19ac00f55bf2592600961a8aa9dd8fa8f396',
  'laminas/laminas-xml' => '1.3.1@2eada592359aec9d9e55339270b621295cff3a4f',
  'laminas/laminas-zendframework-bridge' => '1.4.0@bf180a382393e7db5c1e8d0f2ec0c4af9c724baf',
  'league/geotools' => '0.8.0@ed02a15c76bbf793a87932d8c55b83a3783429ea',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'nikic/php-parser' => 'v4.13.1@63a79e8daa781cac14e5195e63ed8ae231dd10fd',
  'nojacko/email-data-disposable' => '1.0.4@f78f2d81902e4043b96f2bdcceeac7eb2a004165',
  'nojacko/email-validator' => '1.1.2@fbd98fdcf373ddbe09843c3ad5a7db9bc3651c3b',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'p3k/picofeed' => 'v0.1.40@356fd66d48779193b10ac28532cb4a4e11bb801c',
  'php-http/discovery' => '1.14.1@de90ab2b41d7d61609f504e031339776bc8c7223',
  'phpfastcache/phpfastcache' => '3.1.1@53241bf437488c4bcfceccb054595d344cf343a3',
  'predis/predis' => 'v1.1.9@c50c3393bb9f47fa012d0cdfb727a266b0818259',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/event-loop' => 'v0.4.3@8bde03488ee897dc6bb3d91e4e17c353f9c5252f',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'runalyze/GpxTrackPoster' => '1.0.2@8b337ca89e1cf9552dc0bbb08d8b81bc55335c45',
  'runalyze/age-grade' => '1.2.0@945b3d2a40ec398342137aa57dec97271af475c8',
  'runalyze/dem-reader' => 'v1.1.0@acc7a48e3b90cd8ea8c07cf620c69b46d1095a1f',
  'runalyze/glossary' => 'v4.3.0@v4.3.0',
  'runalyze/translations' => 'dev-master@6068b54251c4b10da17380b937f56b521fd6656c',
  'sensio/framework-extra-bundle' => 'v5.4.1@585f4b3a1c54f24d1a8431c729fc8f5acca20c8a',
  'snc/redis-bundle' => '3.5.2@2ab0f17a10a3fb1bb9a5446e36267d10f468f100',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/polyfill-apcu' => 'v1.23.0@80f7fb64c5b64ebcba76f40215e63808a2062a18',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/swiftmailer-bundle' => 'v3.2.6@7a83160b50a2479d37eb74ba71577380b9afe4f5',
  'symfony/symfony' => 'v3.4.49@ba0e346e3ad11de4a307fe4fa2452a3656dcc17b',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v1.44.5@dd4353357c5a116322e92a00d16043a31881a81e',
  'willdurand/geocoder' => '4.4.0@3e86f5b10ab0cef1cf03f979fe8e34b6476daff0',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'liip/functional-test-bundle' => '1.11.0@45cac28b3fafeb75aebc58c4a2cf74dd1e093569',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '4.0.8@ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
  'phpunit/php-file-iterator' => '1.4.5@730b01bc3e867237eaac355e06a36b85dd93a8b4',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '1.0.9@3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
  'phpunit/php-token-stream' => '2.0.2@791198a2c6254db10131eecfe8c06670700904db',
  'phpunit/phpunit' => '5.7.27@b7803aeca3ccb99ad0a506fa80b64cd6a56bbc0c',
  'phpunit/phpunit-mock-objects' => '3.4.4@a23b761686d50a560cc56233b9ecf49597cc9118',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '1.2.4@2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
  'sebastian/diff' => '1.4.3@7f066a26a962dbe58ddea9f72a4e82874a3975a4',
  'sebastian/environment' => '2.0.0@5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
  'sebastian/exporter' => '2.0.0@ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
  'sebastian/global-state' => '1.1.1@bc37d50fea7d017d3d340f230811c9f1d7280af4',
  'sebastian/object-enumerator' => '2.0.1@1311872ac850040a79c3c058bea3e22d0f09cbb7',
  'sebastian/recursion-context' => '2.0.0@2c3ba150cbec723aa057506e73a8d33bdb286c9a',
  'sebastian/resource-operations' => '1.0.0@ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'runalyze/runalyze' => '4.3.0@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
