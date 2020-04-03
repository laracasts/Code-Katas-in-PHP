<?php

// FROM: http://www.giorgiosironi.com/2010/01/practical-php-patterns-composite.html

/**
 * Component interface.
 * The Client depends only on this abstraction, whatever graph is built using
 * the specializations.
 */
interface HtmlElement
{
    /**
     * @return string representation
     */
    public function __toString();
}

/**
 * Leaf sample implementation.
 * Represents an <h1> element.
 */
class H1 implements HtmlElement
{
    private $_text;

    public function __construct($text)
    {
        $this->_text = $text;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<h1>{$this->_text}</h1>";
    }
}

/**
 * Leaf sample implementation.
 * Represents a <p> element.
 */
class P implements HtmlElement
{
    private $_text;

    /**
     * @param $text
     */
    public function __construct($text)
    {
        $this->_text = $text;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<p>{$this->_text}</p>";
    }

    /**
     * @return string    the name of the POST request key for this element,
     *                   aka the "name" attribute.
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}

/**
 * A Composite implementation, which accepts as children generic Components.
 * These children may be H1, P or even other Divs.
 */
class Div implements HtmlElement
{
    private $_children = array();

    /**
     * @param HtmlElement $element
     */
    public function addChild(HtmlElement $element)
    {
        $this->_children[] = $element;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $html = "<div>\n";
        foreach ($this->_children as $child)
        {
            $childRepresentation = str_replace("\n", "\n    ", (string) $child);
            $html .= '    ' . $childRepresentation . "\n";
        }
        $html .= "</div>";
        return $html;
    }
	
}

$div = new Div();
$div->addChild(new H1('Title'));
$div->addChild(new P('Lorem ipsum...'));

$sub = new Div();
$sub->addChild(new P('Dolor sit amet...'));
$div->addChild($sub);

echo $div, "\n";