Yii 1.1 changelog - Silecs PHP8 fork
+===================================

The upstream changelog is [CHANGELOG](CHANGELOG).

ActiveRecord
------------

- Overloading `model()` is no longer necessary.

Miscellanous
------------

- CTreeView used an undocumented jQuery parameter which was removed in modern versions.
- With MariaDB 10.3+, Yii misunderstood `TEXT DEFAULT ''` with a default value of "''".
- Removed CFlexWidget (flash is an obsolete web technology)
- Removed CJuiSliderInput (HTML5 has native alternatives)
- Removed SOAP (CWebService, CSoapController, etc.)
- New interface for log routes. Classes that inherit from CLogRouter already implement it.
