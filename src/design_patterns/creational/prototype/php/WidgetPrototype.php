<?php

/**
 * SECTION 1: a Widget interface and two different implementations.
 * Unlike in previous examples, where the Product was an Helper which generated
 * widgets, the actual instance created here is the Widget itself.
 * The problem solved, though, is the same: managing creation of widgets in the
 * middle of business logic.
 *
 * This class purpose is to generate blinking text in spite of all
 * usability recommendations. This is the Prototype.
 * As always, interfaces in php may be omitted. This is primary here for type
 * hinting.
 */
interface BlinkingWidget
{
}

/**
 * Implementation that generates html tied to a javascript library.
 * This is one ConcretePrototype.
 */
class JavascriptWidget implements BlinkingWidget
{
    public function initialize($text)
    {
        $this->_text = $text;
    }

    public function __toString()
    {
        return '<div dojoType="...">' . $this->_text . '</div>';
    }
}

/**
 * A collaborator for the next ConcretePrototype.
 */
class ObjectTag
{
    private $_html;

    public function setContent($html)
    {
        $this->_html = $html;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<object>{$this->_html}</object>\n";
    }
}

/**
 * Implementation that generates html that loads a flash object.
 * This is one ConcretePrototype.
 */
class FlashWidget implements BlinkingWidget
{
    private $_objectTag;

    /**
     * @param ObjectTag $objectTag
     */
    public function __construct(ObjectTag $objectTag)
    {
        $this->_objectTag = $objectTag;
    }

    /**
     * @param $text
     */
    public function initialize($text)
    {
        $this->_objectTag->setContent("<param name=\"text\">$text</param>");
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->_objectTag;
    }

    /**
     * When using the clone operator, php will perform a shallow copy of the
     * original object, duplicating references to the same collaborators.
     * Then this method will be called on the newly created object; it's time
     * to perform a cloning of the collaborators which cannot be shared with
     * the original instance.
     * This is NOT an override: it's a post-cloning hook which completes the
     * new instance substituting some shallow copies with deep ones.
     */
    public function __clone()
    {
        $this->_objectTag = clone $this->_objectTag;
    }
}

/**
 * SECTION 2: a Client class which clones instances of BlinkingWidget.
 *
 * We cannot instantiate all the BlinkingWidgets in advance, so we need a base
 * one which will be cloned every time a new one is needed.
 */
class LoginPage
{
    private $_widget;

    public function __construct(BlinkingWidget $toClone)
    {
        $this->_widget = $toClone;
    }

    public function render()
    {
        $userId = uniqid('User ');
        // insert all the logic needed here...
        /*
        if (true or $complexBusinessLogicRules) {
            $widget = clone $this->_widget;
            $widget->initialize("Welcome, $userId");
            return (string) $widget;
        }
        */
    }
}

$prototypeWidget = new FlashWidget(new ObjectTag);

$pageLogin = new LoginPage($prototypeWidget);
echo $pageLogin->render(), "\n";

$page = new LoginPage(new JavascriptWidget);
echo $page->render(), "\n";
