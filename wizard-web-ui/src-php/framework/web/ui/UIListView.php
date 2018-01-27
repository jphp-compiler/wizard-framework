<?php
namespace framework\web\ui;

/**
 * Class UIListView
 * @package framework\web\ui
 *
 * @property UINode|null $selected
 * @property int $selectedIndex
 */
class UIListView extends UIContainer
{
    /**
     * @var UINode
     */
    private $selected = null;

    /**
     * @var int
     */
    private $selectedIndex = -1;

    /**
     * UIListView constructor.
     * @param array $children
     */
    public function __construct(array $children = [])
    {
        parent::__construct($children);
    }

    public function uiSchemaClassName(): string
    {
        return 'ListView';
    }

    public function uiSchema(): array
    {
        $schema = parent::uiSchema();

        unset($schema['selected']);

        return $schema;
    }


    /**
     * @return UINode
     */
    public function getSelected(): ?UINode
    {
        return $this->selected;
    }

    /**
     * @param UINode $selected
     */
    public function setSelected(?UINode $selected)
    {
        $this->selected = $selected;
    }

    /**
     * @return int
     */
    public function getSelectedIndex(): int
    {
        return $this->selectedIndex;
    }

    /**
     * @param int $selectedIndex
     */
    public function setSelectedIndex(int $selectedIndex)
    {
        $this->selectedIndex = $selectedIndex;
    }

    public function provideUserInput(array $data)
    {
        parent::provideUserInput($data);

        if (isset($data['selected'])) {
            $this->setSelected($data['selected']);
        }

        if (isset($data['selectedIndex'])) {
            $this->selectedIndex = (int) $data['selectedIndex'];
        }
    }

    public function synchronizeUserInput(array $data)
    {
        parent::synchronizeUserInput($data);

        if (isset($data['selectedIndex'])) {
            $this->changeRemoteProperty('selectedIndex', $data['selectedIndex']);
        }
    }
}