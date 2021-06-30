<?php

namespace Weirdan\PropertyDocblock;

use Weirdan\PropertyDocblock\ZZZ\UploadedFile;

class FileController {
    public function store(StoreFileRequest $request): void {
        // MixedAssignment
        $file = $request->file;
        /** @psalm-trace $file */;

        // MixedMethodCall
        $file->foo();

        // MixedArgument
        $this->handleFile($file);
    }

    private function handleFile(UploadedFile $_file): void {  }
}
