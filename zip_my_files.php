<?php
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
	
	$zipFile = "images/img_crop/fullsize/Full_Size_Images.zip";
	if(file_exists($zipFile)){
		unlink($zipFile);
	}	
	function zipFullsizedImages(){
		// Get real path for our folder
		$rootPath = realpath('images/img_crop/fullsize');

		// Initialize archive object
		$zip = new ZipArchive();
		$zip->open('images/img_crop/fullsize/Full_Size_Images.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

		// Initialize empty "delete list"
		$filesToDelete = array();

		// Create recursive directory iterator
		/** @var SplFileInfo[] $files */
		$files = new RecursiveIteratorIterator(
		    new RecursiveDirectoryIterator($rootPath),
		    RecursiveIteratorIterator::LEAVES_ONLY
		);

		foreach ($files as $name => $file)
		{
		    // Skip directories (they would be added automatically)
		    if (!$file->isDir())
		    {
		        // Get real and relative path for current file
		        $filePath = $file->getRealPath();
		        $relativePath = substr($filePath, strlen($rootPath) + 1);

		        // Add current file to archive
		        $zip->addFile($filePath, $relativePath);

		        // Add current file to "delete list"
		        // delete it later cause ZipArchive create archive only after calling close function and ZipArchive lock files until archive created)
		        if ($file->getFilename() != 'Full_Size_Images.zip')
		        {
		            $filesToDelete[] = $filePath;
		        }
		    }
		}

		// Zip archive will be created only after closing object
		$zip->close();

		// Delete all files from "delete list"
		foreach ($filesToDelete as $file)
		{
		    unlink($file);
		}
	}

	zipFullsizedImages();
	header('Location: images/img_crop/fullsize/Full_Size_Images.zip');
?>