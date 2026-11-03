<?php

declare(strict_types=1);

namespace Tavaan\Engine\Filesystem\Contracts;

/**
 * قرارداد FilesystemManager.
 *
 * @see \Tavaan\Engine\Filesystem\FilesystemManager
 * @api 1.0
 */
interface FilesystemManagerInterface
{
    /**
     * متد disk.
     *
     * @return mixed
     */
    public function disk(/* ... */): mixed;

    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد put.
     *
     * @return mixed
     */
    public function put(/* ... */): mixed;

    /**
     * متد exists.
     *
     * @return mixed
     */
    public function exists(/* ... */): mixed;

    /**
     * متد delete.
     *
     * @return mixed
     */
    public function delete(/* ... */): mixed;

    /**
     * متد copy.
     *
     * @return mixed
     */
    public function copy(/* ... */): mixed;

    /**
     * متد move.
     *
     * @return mixed
     */
    public function move(/* ... */): mixed;

    /**
     * متد size.
     *
     * @return mixed
     */
    public function size(/* ... */): mixed;

    /**
     * متد url.
     *
     * @return mixed
     */
    public function url(/* ... */): mixed;

    /**
     * متد temporaryUrl.
     *
     * @return mixed
     */
    public function temporaryUrl(/* ... */): mixed;

    /**
     * متد files.
     *
     * @return mixed
     */
    public function files(/* ... */): mixed;

    /**
     * متد allFiles.
     *
     * @return mixed
     */
    public function allFiles(/* ... */): mixed;

    /**
     * متد directories.
     *
     * @return mixed
     */
    public function directories(/* ... */): mixed;

    /**
     * متد makeDirectory.
     *
     * @return mixed
     */
    public function makeDirectory(/* ... */): mixed;

    /**
     * متد deleteDirectory.
     *
     * @return mixed
     */
    public function deleteDirectory(/* ... */): mixed;

    /**
     * متد readStream.
     *
     * @return mixed
     */
    public function readStream(/* ... */): mixed;

    /**
     * متد writeStream.
     *
     * @return mixed
     */
    public function writeStream(/* ... */): mixed;
}