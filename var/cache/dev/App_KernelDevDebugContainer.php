<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNyVsO9V\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNyVsO9V/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNyVsO9V.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNyVsO9V\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNyVsO9V\App_KernelDevDebugContainer([
    'container.build_hash' => 'NyVsO9V',
    'container.build_id' => 'eb23ceb1',
    'container.build_time' => 1678488613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNyVsO9V');
