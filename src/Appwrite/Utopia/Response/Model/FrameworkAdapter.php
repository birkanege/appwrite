<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class FrameworkAdapter extends Model
{
    public function __construct()
    {
        $this
            ->addRule('key', [
                'type' => self::TYPE_STRING,
                'description' => 'Adapter key.',
                'default' => '',
                'example' => 'static',
            ])
            ->addRule('buildRuntime', [
                'type' => self::TYPE_STRING,
                'description' => 'Default runtime version.',
                'default' => '',
                'example' => 'node-22',
            ])
            ->addRule('installCommand', [
                'type' => self::TYPE_STRING,
                'description' => 'Default command to download dependencies.',
                'default' => '',
                'example' => 'npm install',
            ])
            ->addRule('buildCommand', [
                'type' => self::TYPE_STRING,
                'description' => 'Default command to build site into output directory.',
                'default' => '',
                'example' => 'npm run build',
            ])
            ->addRule('outputDirectory', [
                'type' => self::TYPE_STRING,
                'description' => 'Default output directory of build.',
                'default' => '',
                'example' => './dist',
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Framework Adapter';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_FRAMEWORK_ADAPTER;
    }
}
