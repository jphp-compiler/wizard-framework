# UISelectControl

- **класс** `UISelectControl` (`framework\web\ui\UISelectControl`) **унаследован от** [`UINode`](https://github.com/jphp-group/wizard-framework/blob/master/wizard-web-ui/api-docs/classes/framework/web/ui/UINode.ru.md)
- **исходники** `framework/web/ui/UISelectControl.php`

**Классы наследники**

> [UIComboBox](https://github.com/jphp-group/wizard-framework/blob/master/wizard-web-ui/api-docs/classes/framework/web/ui/UIComboBox.ru.md), [UIListBox](https://github.com/jphp-group/wizard-framework/blob/master/wizard-web-ui/api-docs/classes/framework/web/ui/UIListBox.ru.md)

**Описание**

Class UISelectControl

---

#### Свойства

- `->`[`selected`](#prop-selected) : `string`
- `->`[`selectedText`](#prop-selectedtext) : `string`
- `->`[`items`](#prop-items) : `array`
- `->`[`onChange`](#prop-onchange) : `EventSignal`
- `->`[`onAction`](#prop-onaction) : `EventSignal`
- *См. также в родительском классе* [UINode](https://github.com/jphp-group/wizard-framework/blob/master/wizard-web-ui/api-docs/classes/framework/web/ui/UINode.ru.md).

---

#### Методы

- `->`[`__construct()`](#method-__construct) - _UISelectControl constructor._
- `->`[`getSelected()`](#method-getselected)
- `->`[`setSelected()`](#method-setselected)
- `->`[`getSelectedText()`](#method-getselectedtext)
- `->`[`setSelectedText()`](#method-setselectedtext)
- `->`[`getItems()`](#method-getitems)
- `->`[`setItems()`](#method-setitems)
- `->`[`provideUserInput()`](#method-provideuserinput)
- `->`[`synchronizeUserInput()`](#method-synchronizeuserinput)
- См. также в родительском классе [UINode](https://github.com/jphp-group/wizard-framework/blob/master/wizard-web-ui/api-docs/classes/framework/web/ui/UINode.ru.md)

---
# Методы

<a name="method-__construct"></a>

### __construct()
```php
__construct(array $items): void
```
UISelectControl constructor.

---

<a name="method-getselected"></a>

### getSelected()
```php
getSelected(): string
```

---

<a name="method-setselected"></a>

### setSelected()
```php
setSelected(string $selected): void
```

---

<a name="method-getselectedtext"></a>

### getSelectedText()
```php
getSelectedText(): string
```

---

<a name="method-setselectedtext"></a>

### setSelectedText()
```php
setSelectedText(string $selectedText): void
```

---

<a name="method-getitems"></a>

### getItems()
```php
getItems(): array
```

---

<a name="method-setitems"></a>

### setItems()
```php
setItems(array $items): void
```

---

<a name="method-provideuserinput"></a>

### provideUserInput()
```php
provideUserInput(array $data): void
```

---

<a name="method-synchronizeuserinput"></a>

### synchronizeUserInput()
```php
synchronizeUserInput(array $data): void
```