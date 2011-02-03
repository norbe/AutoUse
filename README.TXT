AutoUSE is tool for analyse source code and automatic insertion of USE statements. 

Why use AutoUse?
 - switch to namespace version of library
 - verification, that you don't forgotten any use statement for used class (for example in catch block)

Features:
 - insert USE statements
 - detect undefined classes
 - detect unused USE statement

Known bugs / bad features:
 - consume lot of time (700+ seconds for project written in Nette Framework)
 - it supposed, that every USE statements in source files is on one line, in other cases, it can produce code like this:
/---
 use ClassA, 
 use Namespace\IntertedClassName;
   ClassB;
\---


Configuration of tool (input source and libs directories) can be done in app/config.ini

