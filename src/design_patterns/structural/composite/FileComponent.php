<?php

abstract class ComponentInterface
{
	public $id;
	public $name;
 
	abstract public function getFile($offset = 0);
	abstract public function addFile(HardDriveContent $file);
	abstract public function removeFile(HardDriveContent $file);
 
	public function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
}
 
class DirectoryComponent extends ComponentInterface
{
	private $files = [];
 
	public function getFile($offset = 0)
	{
		$content = str_repeat("-", $offset) . ' ' . $this->name . "/\n";
 
		foreach ($this->files as $file) {
			$content .= $file->getFile(++$offset);
		}
 
		return $content;
	}
 
	public function addFile(ComponentInterface $file)
	{
		$this->files[$file->id] = $file;
 
		return $this;
	}
 
	public function removeFile(ComponentInterface $file)
	{
		unset($this->files[$file->id]);
	}
}
 
class FileComponent extends ComponentInterface
{
	public function getFile($offset = 0)
	{
		return str_repeat("-", $offset-1) . '> ' . $this->name . "\n";
	}
 
	public function addFile(ComponentInterface $file)
	{
		return false;
	}
 
	public function removeFile(ComponentInterface $file)
	{
		return false;
	}
}
 
$root = new DirectoryComponent(1, "/");
 
$etc = new DirectoryComponent(2, "etc");
$var = new DirectoryComponent(3, "var");
 
$root->addFile($etc)->addFile($var);
 
$etc->addFile(
	new FileComponent(2, "php.ini", "simon")
);
$var->addFile(
	new FileComponent(3, "nginx.log", "simon")
);
$var->addFile(
	new FileComponent(3, "hadoop.log", "simon")
);
 
echo $root->getFile();