<?php

/**
 * The smallest cohesive interface we can think of for this type of Decorator. This is the Component interface.
 */
interface HtmlElement
{
    /**
     * @return string html code
     */
    public function __toString();

    /**
     * @return string The name of the POST request key for this element, aka the "name" attribute.
     */
    public function getName();
}

/**
 * Represents a <input type="text" /> html element.
 * It can be created programmatically and then printed.
 * This is the only ConcreteComponent.
 */
class InputText implements HtmlElement
{
    protected $_name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<input type=\"text\" id=\"{$this->_name}\" name=\"{$this->_name}\" />\n";
    }
}

/**
 * Very simple base class to share the wrapping code between Decorators.
 * This is the Decorator participant.
 */
abstract class HtmlDecorator implements HtmlElement
{
    protected $_element;

    /**
     * @param HtmlElement $input
     */
    public function __construct(HtmlElement $input)
    {
        $this->_element = $input;
    }

    /**
     * All operations are delegated by default, not changing anything
     * of the original behavior.
     * ConcreteDecorators will override the methods they are interested in.
     */
    public function getName()
    {
        return $this->_element->getName();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->_element->__toString();
    }
}

/**
 * Adds a custom <label> element alongside the <input> one.
 * Example of ConcreteDecorator.
 */
class LabelDecorator extends HtmlDecorator
{
    protected $_label;

    /**
     * @param $label
     */
    public function setLabel($label)
    {
        $this->_label = $label;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $name = $this->getName();
        return "<label for=\"{$name}\">{$this->_label}</label>\n"
             . $this->_element->__toString();
    }
}

/**
 * Adds a <span> containing an error message after the <input> element.
 * Example of ConcreteDecorator.
 */
class ErrorDecorator extends HtmlDecorator
{
    protected $_error;

    /**
     * @param string $message
     */
    public function setError($message)
    {
        $this->_error = $message;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->_element->__toString() . "<span>{$this->_error}</span>\n";
    }
}

$input = new InputText('nickname');
$labelled = new LabelDecorator($input);
$labelled->setLabel('Nick:');
echo $labelled, "\n";

$input = new InputText('nickname');
$error = new ErrorDecorator($input);
$error->setError('You must enter a unique nickname');
echo $error, "\n";

// How can we obtain a LabelledErrorInputText, which has both the <label> and <span> elements?
$input = new InputText('nickname');
$labelled = new LabelDecorator($input);
$labelled->setLabel('Nick:');
$error = new ErrorDecorator($labelled); // a Decorator wrapping another one
$error->setError('You must enter a unique nickname');
echo $error;
