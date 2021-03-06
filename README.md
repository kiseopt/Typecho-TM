# Typecho-TM
一套非常不Material Design 的 Material Design 主题

[示例地址](http://tm.theme.acg.vc)

[使用说明](https://blog.acg.vc/nichijou/Theme-TM.html)

[更新日志](https://blog.acg.vc/nichijou/TM-UP.html)

# 目录
[版本兼容](#版本兼容)

[代码高亮](#代码高亮)

[已知问题](#已知问题)

[浏览器兼容性](#浏览器兼容性)

## 版本兼容

PHP > 5.4  Typecho >= 1.0

## 代码高亮

在所需要高亮的代码块前后添加 `<pre><code class="language-语言">` 和 `</code></pre>`
如下所示例

`<pre><code class="language-php">`

`<?php echo '<p>Hello World</p>'; ?>`

`</code></pre>`

如下图所示

![代码示例](https://blog.acg.vc/usr/uploads/2019/07/3351239450.png)

目前支持
>markup css clike javascript abap abnf actionscript ada apacheconf apl applescript c arff asciidoc asm6502 csharp autohotkey autoit bash basic batch bison bnf brainfuck bro cpp aspnet arduino cil coffeescript cmake clojure ruby csp css-extras d dart diff markup-templating docker ebnf eiffel ejs elixir elm erb erlang fsharp flow fortran gcode gedcom gherkin git glsl gml go graphql groovy less handlebars haskell haxe hcl http hpkp hsts ichigojam icon inform7 ini io j java scala php javastacktrace jolie jq javadoclike n4js json jsonp json5 julia keyman kotlin latex markdown liquid lisp livescript lolcode lua makefile crystal django matlab mel mizar monkey n1ql typescript nand2tetris-hdl nasm nginx nim nix nsis objectivec ocaml opencl oz parigp parser pascal pascaligo pcaxis perl jsdoc phpdoc php-extras sql powershell processing prolog properties protobuf scss puppet pure python q qore r js-extras jsx renpy reason vala rest rip roboconf textile rust sas sass stylus javadoc scheme shell-session smalltalk smarty plsql soy twig swift yaml tcl haml toml tt2 pug tsx t4-templating visual-basic t4-cs regex vbnet velocity verilog vhdl vim t4-vb wasm wiki xeora xojo xquery tap

# 已知问题

暂未添加 html 标签自动闭合 , 因此不建议开放大多数标签给评论使用

由于换行为了保证排版 , 英文单词部分是按空格分隔单词来判断是否换行,因此极长连续字母串会错位

# 浏览器兼容性

Chrome : 兼容

Firefox : 兼容

Edge(Chromium) : 兼容

Edge(EDGE) : 不兼容(底栏错误，由于 Edge 即将更新基于 Chromium 的版本因此旧版不做兼容性修补)

Safar:兼容

Nintendo 3DS/XL/2DS(2012) : 部分兼容(翻页按钮无CSS)

Kindle (第八代):部分兼容(翻页按钮无CSS)
