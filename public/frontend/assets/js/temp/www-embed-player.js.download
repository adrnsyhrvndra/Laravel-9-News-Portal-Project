(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var l;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function da(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var fa=da(this);function n(a,b){if(b)a:{var c=fa;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
n("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.i=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.i};
var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
n("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=fa[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ha(aa(this))}})}return a});
function ha(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function p(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
function ia(a){if(!(a instanceof Array)){a=p(a);for(var b,c=[];!(b=a.next()).done;)c.push(b.value);a=c}return a}
function ja(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var ma="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)ja(d,e)&&(a[e]=d[e])}return a};
n("Object.assign",function(a){return a||ma});
var oa="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},pa=function(){function a(){function c(){}
new c;Reflect.construct(c,[],function(){});
return new c instanceof c}
if("undefined"!=typeof Reflect&&Reflect.construct){if(a())return Reflect.construct;var b=Reflect.construct;return function(c,d,e){c=b(c,d);e&&Reflect.setPrototypeOf(c,e.prototype);return c}}return function(c,d,e){void 0===e&&(e=c);
e=oa(e.prototype||Object.prototype);return Function.prototype.apply.call(c,e,d)||e}}(),qa;
if("function"==typeof Object.setPrototypeOf)qa=Object.setPrototypeOf;else{var ra;a:{var sa={a:!0},ta={};try{ta.__proto__=sa;ra=ta.a;break a}catch(a){}ra=!1}qa=ra?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var ua=qa;
function r(a,b){a.prototype=oa(b.prototype);a.prototype.constructor=a;if(ua)ua(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.X=b.prototype}
function va(){this.C=!1;this.m=null;this.j=void 0;this.i=1;this.o=this.s=0;this.A=this.l=null}
function wa(a){if(a.C)throw new TypeError("Generator is already running");a.C=!0}
va.prototype.I=function(a){this.j=a};
function xa(a,b){a.l={Rb:b,Xb:!0};a.i=a.s||a.o}
va.prototype.return=function(a){this.l={return:a};this.i=this.o};
function v(a,b,c){a.i=c;return{value:b}}
va.prototype.u=function(a){this.i=a};
function ya(a,b,c){a.s=b;void 0!=c&&(a.o=c)}
function za(a,b){a.i=b;a.s=0}
function Aa(a){a.s=0;var b=a.l.Rb;a.l=null;return b}
function Ba(a){a.A=[a.l];a.s=0;a.o=0}
function Ca(a){var b=a.A.splice(0)[0];(b=a.l=a.l||b)?b.Xb?a.i=a.s||a.o:void 0!=b.u&&a.o<b.u?(a.i=b.u,a.l=null):a.i=a.o:a.i=0}
function Da(a){this.i=new va;this.j=a}
function Ea(a,b){wa(a.i);var c=a.i.m;if(c)return Fa(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.i.return);
a.i.return(b);return Ga(a)}
function Fa(a,b,c,d){try{var e=b.call(a.i.m,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.i.C=!1,e;var f=e.value}catch(g){return a.i.m=null,xa(a.i,g),Ga(a)}a.i.m=null;d.call(a.i,f);return Ga(a)}
function Ga(a){for(;a.i.i;)try{var b=a.j(a.i);if(b)return a.i.C=!1,{value:b.value,done:!1}}catch(c){a.i.j=void 0,xa(a.i,c)}a.i.C=!1;if(a.i.l){b=a.i.l;a.i.l=null;if(b.Xb)throw b.Rb;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function Ha(a){this.next=function(b){wa(a.i);a.i.m?b=Fa(a,a.i.m.next,b,a.i.I):(a.i.I(b),b=Ga(a));return b};
this.throw=function(b){wa(a.i);a.i.m?b=Fa(a,a.i.m["throw"],b,a.i.I):(xa(a.i,b),b=Ga(a));return b};
this.return=function(b){return Ea(a,b)};
this[Symbol.iterator]=function(){return this}}
function Ia(a){function b(d){return a.next(d)}
function c(d){return a.throw(d)}
return new Promise(function(d,e){function f(g){g.done?d(g.value):Promise.resolve(g.value).then(b,c).then(f,e)}
f(a.next())})}
function w(a){return Ia(new Ha(new Da(a)))}
function Ja(){for(var a=Number(this),b=[],c=a;c<arguments.length;c++)b[c-a]=arguments[c];return b}
n("Reflect",function(a){return a?a:{}});
n("Reflect.construct",function(){return pa});
n("Reflect.setPrototypeOf",function(a){return a?a:ua?function(b,c){try{return ua(b,c),!0}catch(d){return!1}}:null});
n("Promise",function(a){function b(g){this.i=0;this.l=void 0;this.j=[];this.C=!1;var h=this.m();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.i=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.j=function(g){if(null==this.i){this.i=[];var h=this;this.l(function(){h.o()})}this.i.push(g)};
var e=fa.setTimeout;c.prototype.l=function(g){e(g,0)};
c.prototype.o=function(){for(;this.i&&this.i.length;){var g=this.i;this.i=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(m){this.m(m)}}}this.i=null};
c.prototype.m=function(g){this.l(function(){throw g;})};
b.prototype.m=function(){function g(m){return function(q){k||(k=!0,m.call(h,q))}}
var h=this,k=!1;return{resolve:g(this.L),reject:g(this.o)}};
b.prototype.L=function(g){if(g===this)this.o(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.R(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.K(g):this.s(g)}};
b.prototype.K=function(g){var h=void 0;try{h=g.then}catch(k){this.o(k);return}"function"==typeof h?this.T(h,g):this.s(g)};
b.prototype.o=function(g){this.I(2,g)};
b.prototype.s=function(g){this.I(1,g)};
b.prototype.I=function(g,h){if(0!=this.i)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.i);this.i=g;this.l=h;2===this.i&&this.P();this.A()};
b.prototype.P=function(){var g=this;e(function(){if(g.G()){var h=fa.console;"undefined"!==typeof h&&h.error(g.l)}},1)};
b.prototype.G=function(){if(this.C)return!1;var g=fa.CustomEvent,h=fa.Event,k=fa.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=fa.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.l;return k(g)};
b.prototype.A=function(){if(null!=this.j){for(var g=0;g<this.j.length;++g)f.j(this.j[g]);this.j=null}};
var f=new c;b.prototype.R=function(g){var h=this.m();g.Sa(h.resolve,h.reject)};
b.prototype.T=function(g,h){var k=this.m();try{g.call(h,k.resolve,k.reject)}catch(m){k.reject(m)}};
b.prototype.then=function(g,h){function k(x,u){return"function"==typeof x?function(A){try{m(x(A))}catch(E){q(E)}}:u}
var m,q,t=new b(function(x,u){m=x;q=u});
this.Sa(k(g,m),k(h,q));return t};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.Sa=function(g,h){function k(){switch(m.i){case 1:g(m.l);break;case 2:h(m.l);break;default:throw Error("Unexpected state: "+m.i);}}
var m=this;null==this.j?f.j(k):this.j.push(k);this.C=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var m=p(g),q=m.next();!q.done;q=m.next())d(q.value).Sa(h,k)})};
b.all=function(g){var h=p(g),k=h.next();return k.done?d([]):new b(function(m,q){function t(A){return function(E){x[A]=E;u--;0==u&&m(x)}}
var x=[],u=0;do x.push(void 0),u++,d(k.value).Sa(t(x.length-1),q),k=h.next();while(!k.done)})};
return b});
n("WeakMap",function(a){function b(k){this.i=(h+=Math.random()+1).toString();if(k){k=p(k);for(var m;!(m=k.next()).done;)m=m.value,this.set(m[0],m[1])}}
function c(){}
function d(k){var m=typeof k;return"object"===m&&null!==k||"function"===m}
function e(k){if(!ja(k,g)){var m=new c;ba(k,g,{value:m})}}
function f(k){var m=Object[k];m&&(Object[k]=function(q){if(q instanceof c)return q;Object.isExtensible(q)&&e(q);return m(q)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),m=Object.seal({}),q=new a([[k,2],[m,3]]);if(2!=q.get(k)||3!=q.get(m))return!1;q.delete(k);q.set(m,4);return!q.has(k)&&4==q.get(m)}catch(t){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,m){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!ja(k,g))throw Error("WeakMap key fail: "+k);k[g][this.i]=m;return this};
b.prototype.get=function(k){return d(k)&&ja(k,g)?k[g][this.i]:void 0};
b.prototype.has=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)};
b.prototype.delete=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)?delete k[g][this.i]:!1};
return b});
n("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var m=h.i;return ha(function(){if(m){for(;m.head!=h.i;)m=m.previous;for(;m.next!=m.head;)return m=m.next,{done:!1,value:k(m)};m=null}return{done:!0,value:void 0}})}
function d(h,k){var m=k&&typeof k;"object"==m||"function"==m?f.has(k)?m=f.get(k):(m=""+ ++g,f.set(k,m)):m="p_"+k;var q=h.data_[m];if(q&&ja(h.data_,m))for(h=0;h<q.length;h++){var t=q[h];if(k!==k&&t.key!==t.key||k===t.key)return{id:m,list:q,index:h,entry:t}}return{id:m,list:q,index:-1,entry:void 0}}
function e(h){this.data_={};this.i=b();this.size=0;if(h){h=p(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(p([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var m=k.entries(),q=m.next();if(q.done||q.value[0]!=h||"s"!=q.value[1])return!1;q=m.next();return q.done||4!=q.value[0].x||"t"!=q.value[1]||!m.next().done?!1:!0}catch(t){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var m=d(this,h);m.list||(m.list=this.data_[m.id]=[]);m.entry?m.entry.value=k:(m.entry={next:this.i,previous:this.i.previous,head:this.i,key:h,value:k},m.list.push(m.entry),this.i.previous.next=m.entry,this.i.previous=m.entry,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.entry&&h.list?(h.list.splice(h.index,1),h.list.length||delete this.data_[h.id],h.entry.previous.next=h.entry.next,h.entry.next.previous=h.entry.previous,h.entry.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this.data_={};this.i=this.i.previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).entry};
e.prototype.get=function(h){return(h=d(this,h).entry)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var m=this.entries(),q;!(q=m.next()).done;)q=q.value,h.call(k,q[1],q[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
function Ka(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
n("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=Ka(this,b,"endsWith");b+="";void 0===c&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;0<e&&0<c;)if(d[--c]!=b[--e])return!1;return 0>=e}});
n("Array.prototype.find",function(a){return a?a:function(b,c){a:{var d=this;d instanceof String&&(d=String(d));for(var e=d.length,f=0;f<e;f++){var g=d[f];if(b.call(c,g,f,d)){b=g;break a}}b=void 0}return b}});
n("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=Ka(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
n("Number.isFinite",function(a){return a?a:function(b){return"number"!==typeof b?!1:!isNaN(b)&&Infinity!==b&&-Infinity!==b}});
n("Number.isInteger",function(a){return a?a:function(b){return Number.isFinite(b)?b===Math.floor(b):!1}});
n("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
function La(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
n("Array.prototype.entries",function(a){return a?a:function(){return La(this,function(b,c){return[b,c]})}});
n("Array.prototype.keys",function(a){return a?a:function(){return La(this,function(b){return b})}});
n("Number.isNaN",function(a){return a?a:function(b){return"number"===typeof b&&isNaN(b)}});
n("Object.setPrototypeOf",function(a){return a||ua});
n("Set",function(a){function b(c){this.i=new Map;if(c){c=p(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.i.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(p([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.i.set(c,c);this.size=this.i.size;return this};
b.prototype.delete=function(c){c=this.i.delete(c);this.size=this.i.size;return c};
b.prototype.clear=function(){this.i.clear();this.size=0};
b.prototype.has=function(c){return this.i.has(c)};
b.prototype.entries=function(){return this.i.entries()};
b.prototype.values=function(){return this.i.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.i.forEach(function(f){return c.call(d,f,f,e)})};
return b});
n("Array.from",function(a){return a?a:function(b,c,d){c=null!=c?c:function(h){return h};
var e=[],f="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];if("function"==typeof f){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
n("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)ja(b,d)&&c.push([d,b[d]]);return c}});
n("Array.prototype.values",function(a){return a?a:function(){return La(this,function(b,c){return c})}});
n("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
n("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(0>c&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
n("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==Ka(this,b,"includes").indexOf(b,c||0)}});
n("globalThis",function(a){return a||fa});
n("Object.values",function(a){return a?a:function(b){var c=[],d;for(d in b)ja(b,d)&&c.push(b[d]);return c}});
var Ma=Ma||{},y=this||self;function z(a,b,c){a=a.split(".");c=c||y;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function B(a,b){a=a.split(".");b=b||y;for(var c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function Na(a){a.rb=void 0;a.getInstance=function(){return a.rb?a.rb:a.rb=new a}}
function Oa(a){var b=typeof a;return"object"!=b?b:a?Array.isArray(a)?"array":b:"null"}
function Pa(a){var b=Oa(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function Qa(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Ra(a){return Object.prototype.hasOwnProperty.call(a,Sa)&&a[Sa]||(a[Sa]=++Ta)}
var Sa="closure_uid_"+(1E9*Math.random()>>>0),Ta=0;function Ua(a,b,c){return a.call.apply(a.bind,arguments)}
function Wa(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Xa(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Xa=Ua:Xa=Wa;return Xa.apply(null,arguments)}
function Ya(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var d=c.slice();d.push.apply(d,arguments);return a.apply(this,d)}}
function Za(a,b){function c(){}
c.prototype=b.prototype;a.X=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Gq=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function $a(a){return a}
;function ab(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,ab);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));void 0!==b&&(this.cause=b)}
Za(ab,Error);ab.prototype.name="CustomError";function bb(a){a=a.url;var b=/[?&]dsh=1(&|$)/.test(a);this.l=!b&&/[?&]ae=1(&|$)/.test(a);this.m=!b&&/[?&]ae=2(&|$)/.test(a);if((this.i=/[?&]adurl=([^&]*)/.exec(a))&&this.i[1]){try{var c=decodeURIComponent(this.i[1])}catch(d){c=null}this.j=c}}
;function cb(){}
function db(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;var eb=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},fb=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},gb=Array.prototype.filter?function(a,b){return Array.prototype.filter.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=[],e=0,f="string"===typeof a?a.split(""):a,g=0;g<c;g++)if(g in f){var h=f[g];
b.call(void 0,h,g,a)&&(d[e++]=h)}return d},hb=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=Array(c),e="string"===typeof a?a.split(""):a,f=0;f<c;f++)f in e&&(d[f]=b.call(void 0,e[f],f,a));
return d},ib=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
fb(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d},jb=Array.prototype.every?function(a,b){return Array.prototype.every.call(a,b,void 0)}:function(a,b){for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&!b.call(void 0,d[e],e,a))return!1;
return!0};
function kb(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}
function lb(a,b){b=eb(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}
function mb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Pa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function ob(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function pb(a){var b=qb,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function rb(a){for(var b in a)return!1;return!0}
function sb(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function tb(a){return null!==a&&"privembed"in a?a.privembed:!1}
function ub(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function vb(a){var b={},c;for(c in a)b[c]=a[c];return b}
function wb(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();if("undefined"!==typeof Map&&a instanceof Map)return new Map(a);if("undefined"!==typeof Set&&a instanceof Set)return new Set(a);var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=wb(a[c]);return b}
var xb="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function yb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<xb.length;f++)c=xb[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var zb;function Ab(){if(void 0===zb){var a=null,b=y.trustedTypes;if(b&&b.createPolicy){try{a=b.createPolicy("goog#html",{createHTML:$a,createScript:$a,createScriptURL:$a})}catch(c){y.console&&y.console.error(c.message)}zb=a}else zb=a}return zb}
;function Bb(a,b){this.l=a===Cb&&b||""}
Bb.prototype.j=!0;Bb.prototype.i=function(){return this.l};
function Db(a){return new Bb(Cb,a)}
var Cb={};Db("");var Eb={};function Fb(a){this.l=Eb===Eb?a:"";this.j=!0}
Fb.prototype.toString=function(){return this.l.toString()};
Fb.prototype.i=function(){return this.l.toString()};function Gb(a,b){this.l=b===Hb?a:""}
Gb.prototype.toString=function(){return this.l+""};
Gb.prototype.j=!0;Gb.prototype.i=function(){return this.l.toString()};
function Ib(a){if(a instanceof Gb&&a.constructor===Gb)return a.l;Oa(a);return"type_error:TrustedResourceUrl"}
var Hb={};function Jb(a){var b=Ab();a=b?b.createScriptURL(a):a;return new Gb(a,Hb)}
;var Mb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};
function Nb(a,b){return a<b?-1:a>b?1:0}
;function Ob(a,b){this.l=b===Pb?a:""}
Ob.prototype.toString=function(){return this.l.toString()};
Ob.prototype.j=!0;Ob.prototype.i=function(){return this.l.toString()};
function Qb(a){if(a instanceof Ob&&a.constructor===Ob)return a.l;Oa(a);return"type_error:SafeUrl"}
var Rb=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i,Pb={},Sb=new Ob("about:invalid#zClosurez",Pb);function Tb(){var a=y.navigator;return a&&(a=a.userAgent)?a:""}
function C(a){return-1!=Tb().indexOf(a)}
;function Ub(){return C("Trident")||C("MSIE")}
function Vb(){return C("Firefox")||C("FxiOS")}
function Wb(){return C("Safari")&&!(Xb()||C("Coast")||C("Opera")||C("Edge")||C("Edg/")||C("OPR")||Vb()||C("Silk")||C("Android"))}
function Xb(){return(C("Chrome")||C("CriOS"))&&!C("Edge")||C("Silk")}
function Yb(){return C("Android")&&!(Xb()||Vb()||C("Opera")||C("Silk"))}
function Zb(a){var b={};a.forEach(function(c){b[c[0]]=c[1]});
return function(c){return b[c.find(function(d){return d in b})]||""}}
function $b(a){var b=Tb();if("Internet Explorer"===a){if(Ub())if((a=/rv: *([\d\.]*)/.exec(b))&&a[1])b=a[1];else{a="";var c=/MSIE +([\d\.]+)/.exec(b);if(c&&c[1])if(b=/Trident\/(\d.\d)/.exec(b),"7.0"==c[1])if(b&&b[1])switch(b[1]){case "4.0":a="8.0";break;case "5.0":a="9.0";break;case "6.0":a="10.0";break;case "7.0":a="11.0"}else a="7.0";else a=c[1];b=a}else b="";return b}var d=RegExp("([A-Z][\\w ]+)/([^\\s]+)\\s*(?:\\((.*?)\\))?","g");c=[];for(var e;e=d.exec(b);)c.push([e[1],e[2],e[3]||void 0]);b=Zb(c);
switch(a){case "Opera":if(C("Opera"))return b(["Version","Opera"]);if(C("OPR"))return b(["OPR"]);break;case "Microsoft Edge":if(C("Edge"))return b(["Edge"]);if(C("Edg/"))return b(["Edg"]);break;case "Chromium":if(Xb())return b(["Chrome","CriOS","HeadlessChrome"])}return"Firefox"===a&&Vb()||"Safari"===a&&Wb()||"Android Browser"===a&&Yb()||"Silk"===a&&C("Silk")?(b=c[2])&&b[1]||"":""}
function ac(a){a=$b(a);if(""===a)return NaN;a=a.split(".");return 0===a.length?NaN:Number(a[0])}
;var bc={};function ec(a){this.l=bc===bc?a:"";this.j=!0}
ec.prototype.i=function(){return this.l.toString()};
ec.prototype.toString=function(){return this.l.toString()};function fc(a,b){b instanceof Ob||b instanceof Ob||(b="object"==typeof b&&b.j?b.i():String(b),Rb.test(b)||(b="about:invalid#zClosurez"),b=new Ob(b,Pb));a.href=Qb(b)}
function gc(a,b){a.rel="stylesheet";a.href=Ib(b).toString();(b=hc('style[nonce],link[rel="stylesheet"][nonce]',a.ownerDocument&&a.ownerDocument.defaultView))&&a.setAttribute("nonce",b)}
function ic(){return hc("script[nonce]")}
var jc=/^[\w+/_-]+[=]{0,2}$/;function hc(a,b){b=(b||y).document;return b.querySelector?(a=b.querySelector(a))&&(a=a.nonce||a.getAttribute("nonce"))&&jc.test(a)?a:"":""}
;function kc(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var lc=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");function mc(a){return a?decodeURI(a):a}
function nc(a,b){return b.match(lc)[a]||null}
function oc(a){return mc(nc(3,a))}
function pc(a){var b=a.match(lc);a=b[5];var c=b[6];b=b[7];var d="";a&&(d+=a);c&&(d+="?"+c);b&&(d+="#"+b);return d}
function qc(a,b){if(!b)return a;var c=a.indexOf("#");0>c&&(c=a.length);var d=a.indexOf("?");if(0>d||d>c){d=c;var e=""}else e=a.substring(d+1,c);a=[a.slice(0,d),e,a.slice(c)];c=a[1];a[1]=b?c?c+"&"+b:b:c;return a[0]+(a[1]?"?"+a[1]:"")+a[2]}
function rc(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)rc(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function sc(a,b){var c=[];for(b=b||0;b<a.length;b+=2)rc(a[b],a[b+1],c);return c.join("&")}
function tc(a){var b=[],c;for(c in a)rc(c,a[c],b);return b.join("&")}
function uc(a,b){var c=2==arguments.length?sc(arguments[1],0):sc(arguments,1);return qc(a,c)}
function vc(a,b){b=tc(b);return qc(a,b)}
function wc(a,b,c){c=null!=c?"="+encodeURIComponent(String(c)):"";return qc(a,b+c)}
function xc(a,b,c,d){for(var e=c.length;0<=(b=a.indexOf(c,b))&&b<d;){var f=a.charCodeAt(b-1);if(38==f||63==f)if(f=a.charCodeAt(b+e),!f||61==f||38==f||35==f)return b;b+=e+1}return-1}
var yc=/#|$/,Cc=/[?&]($|#)/;function Dc(a,b){for(var c=a.search(yc),d=0,e,f=[];0<=(e=xc(a,d,b,c));)f.push(a.substring(d,e)),d=Math.min(a.indexOf("&",e)+1||c,c);f.push(a.slice(d));return f.join("").replace(Cc,"$1")}
;function Ec(){return C("iPhone")&&!C("iPod")&&!C("iPad")}
function Fc(){var a=Tb();if(C("Windows")){var b=/Windows (?:NT|Phone) ([0-9.]+)/;b.exec(a)}else Ec()||C("iPad")||C("iPod")?(b=/(?:iPhone|iPod|iPad|CPU)\s+OS\s+(\S+)/,(a=b.exec(a))&&a[1].replace(/_/g,".")):C("Macintosh")?(b=/Mac OS X ([0-9_.]+)/,(a=b.exec(a))&&a[1].replace(/_/g,".")):-1!=Tb().toLowerCase().indexOf("kaios")?(b=/(?:KaiOS)\/(\S+)/i,b.exec(a)):C("Android")?(b=/Android\s+([^\);]+)(\)|;)/,b.exec(a)):C("CrOS")&&(b=/(?:CrOS\s+(?:i686|x86_64)\s+([0-9.]+))/,b.exec(a))}
;function Gc(a){Gc[" "](a);return a}
Gc[" "]=function(){};
function Hc(a){var b=Ic;return Object.prototype.hasOwnProperty.call(b,9)?b[9]:b[9]=a(9)}
;var Jc=C("Opera"),Kc=Ub(),Lc=C("Edge"),Mc=C("Gecko")&&!(-1!=Tb().toLowerCase().indexOf("webkit")&&!C("Edge"))&&!(C("Trident")||C("MSIE"))&&!C("Edge"),Nc=-1!=Tb().toLowerCase().indexOf("webkit")&&!C("Edge"),Oc=C("Android");function Pc(){var a=y.document;return a?a.documentMode:void 0}
var Qc;a:{var Rc="",Sc=function(){var a=Tb();if(Mc)return/rv:([^\);]+)(\)|;)/.exec(a);if(Lc)return/Edge\/([\d\.]+)/.exec(a);if(Kc)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(Nc)return/WebKit\/(\S+)/.exec(a);if(Jc)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
Sc&&(Rc=Sc?Sc[1]:"");if(Kc){var Tc=Pc();if(null!=Tc&&Tc>parseFloat(Rc)){Qc=String(Tc);break a}}Qc=Rc}var Uc=Qc,Ic={};
function Vc(){return Hc(function(){for(var a=0,b=Mb(String(Uc)).split("."),c=Mb("9").split("."),d=Math.max(b.length,c.length),e=0;0==a&&e<d;e++){var f=b[e]||"",g=c[e]||"";do{f=/(\d*)(\D*)(.*)/.exec(f)||["","","",""];g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];if(0==f[0].length&&0==g[0].length)break;a=Nb(0==f[1].length?0:parseInt(f[1],10),0==g[1].length?0:parseInt(g[1],10))||Nb(0==f[2].length,0==g[2].length)||Nb(f[2],g[2]);f=f[3];g=g[3]}while(0==a)}return 0<=a})}
var Wc;if(y.document&&Kc){var Xc=Pc();Wc=Xc?Xc:parseInt(Uc,10)||void 0}else Wc=void 0;var Yc=Wc;var Zc=Ec()||C("iPod"),$c=C("iPad");Yb();Xb();var ad=Wb()&&!(Ec()||C("iPad")||C("iPod"));var bd={},cd=null;
function dd(a,b){Pa(a);void 0===b&&(b=0);if(!cd){cd={};for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),d=["+/=","+/","-_=","-_.","-_"],e=0;5>e;e++){var f=c.concat(d[e].split(""));bd[e]=f;for(var g=0;g<f.length;g++){var h=f[g];void 0===cd[h]&&(cd[h]=g)}}}b=bd[b];c=Array(Math.floor(a.length/3));d=b[64]||"";for(e=f=0;f<a.length-2;f+=3){var k=a[f],m=a[f+1];h=a[f+2];g=b[k>>2];k=b[(k&3)<<4|m>>4];m=b[(m&15)<<2|h>>6];h=b[h&63];c[e++]=""+g+k+m+h}g=0;h=d;switch(a.length-
f){case 2:g=a[f+1],h=b[(g&15)<<2]||d;case 1:a=a[f],c[e]=""+b[a>>2]+b[(a&3)<<4|g>>4]+h+d}return c.join("")}
;var ed="undefined"!==typeof Uint8Array,fd={};var gd;function hd(){if(fd!==fd)throw Error("illegal external caller");}
function id(a){hd();this.ja=a;if(null!=a&&0===a.length)throw Error("ByteString should be constructed with non-empty values");}
id.prototype.isEmpty=function(){return null==this.ja};var jd="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol(void 0):void 0;function kd(a,b){Object.isFrozen(a)||(jd?a[jd]|=b:void 0!==a.fa?a.fa|=b:Object.defineProperties(a,{fa:{value:b,configurable:!0,writable:!0,enumerable:!1}}))}
function ld(a,b){Object.isExtensible(a)&&(jd?a[jd]&&(a[jd]&=~b):void 0!==a.fa&&(a.fa&=~b))}
function md(a){var b;jd?b=a[jd]:b=a.fa;return null==b?0:b}
function nd(a,b){jd?a[jd]=b:void 0!==a.fa?a.fa=b:Object.defineProperties(a,{fa:{value:b,configurable:!0,writable:!0,enumerable:!1}})}
function od(a){kd(a,1);return a}
function pd(a){return a?!!(md(a)&2):!1}
function qd(a){kd(a,16);return a}
function rd(a){if(!Array.isArray(a))throw Error("cannot mark non-array as shared mutably");ld(a,16)}
function sd(a,b){b?kd(a,8):ld(a,8)}
function td(a,b){nd(b,(md(a)|0)&-51)}
;function ud(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}
var zd,Ad=Object.freeze(od([]));function Bd(a){if(pd(a.v))throw Error("Cannot mutate an immutable Message");}
var Cd="undefined"!=typeof Symbol&&"undefined"!=typeof Symbol.hasInstance;function Dd(a){return{value:a,configurable:!1,writable:!1,enumerable:!1}}
;function Ed(a){return a.displayName||a.name||"unknown type name"}
function Fd(a,b){if(!(a instanceof b))throw Error("Expected instanceof "+Ed(b)+" but got "+(a&&Ed(a.constructor)));return a}
function Gd(a,b,c,d){c=void 0===c?!1:c;d=void 0===d?!1:d;if(Array.isArray(a))return new b(d?qd(a):a);if(c)return new b}
;function Hd(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "object":if(a&&!Array.isArray(a)){if(ed&&null!=a&&a instanceof Uint8Array)return dd(a);if(a instanceof id){var b=a.ja;null!=b&&"string"!==typeof b&&(ed&&b instanceof Uint8Array?b=dd(b):(Oa(b),b=null));return null==b?"":a.ja=b}}}return a}
;function Id(a,b,c){if(null!=a){if(Array.isArray(a))a=Jd(a,b,c);else if(ud(a)){var d={},e;for(e in a)d[e]=Id(a[e],b,c);a=d}else a=b(a);return a}}
function Jd(a,b,c){var d=Array.prototype.slice.call(a);c(a,d);for(a=0;a<d.length;a++)d[a]=Id(d[a],b,c);return d}
function Kd(a){if(a&&"object"==typeof a&&a.toJSON)return a.toJSON();a=Hd(a);return Array.isArray(a)?Jd(a,Kd,Ld):a}
function Md(a){if("object"===typeof a){if(ed&&null!=a&&a instanceof Uint8Array)return new Uint8Array(a);if(Array.isArray(a.v)&&a.constructor!==Object)return a.clone()}return a}
function Ld(){}
;function Nd(a){return a.j||(a.j=a.v[a.o+a.m]={})}
function Od(a,b,c){return-1===b?null:b>=a.o?a.j?a.j[b]:void 0:(void 0===c?0:c)&&a.j&&(c=a.j[b],null!=c)?c:a.v[b+a.m]}
function D(a,b,c,d,e){d=void 0===d?!1:d;(void 0===e?0:e)||Bd(a);a.I&&(a.I=void 0);if(b>=a.o||d)return Nd(a)[b]=c,a;void 0!==a.j&&a.o>=a.v.length?(d=a.v.length-1,e=b+a.m,e>=d?(a.v[d]=void 0,a.v[e]=c,a.v.push(a.j)):a.v[e]=c):a.v[b+a.m]=c;void 0!==a.j&&b in a.j&&delete a.j[b];return a}
function Pd(a,b,c,d){var e=Od(a,b,d);Array.isArray(e)?e&&md(e)&1||od(e):e=Ad;if(pd(a.v))c&1||(kd(e,2),Object.freeze(e));else if(e===Ad||pd(e))e=od(Array.prototype.slice.call(e)),D(a,b,e,d);return e}
function Qd(a,b,c){a=Od(a,b);return null==a?c:a}
function Rd(a,b,c){null==c?c=Ad:od(c);return D(a,b,c)}
function Sd(a,b,c,d){Bd(a);(c=Td(a,c))&&c!==b&&null!=d&&(a.i&&c in a.i&&(a.i[c]=void 0),D(a,c));return D(a,b,d)}
function Td(a,b){for(var c=0,d=0;d<b.length;d++){var e=b[d];null!=Od(a,e)&&(0!==c&&D(a,c,void 0,!1,!0),c=e)}return c}
function Ud(a,b,c,d){d=void 0===d?!1:d;var e=d;a.i||(a.i={});var f=a.i[c];if(f)b=f;else if(b=Gd(Od(a,c,e),b))a.i[c]=b,kd(b.v,md(a.v)&-33);if(null==b)return b;pd(b.v)&&!pd(a.v)&&(b=b.Bb(),D(a,c,b.v,d),a.i[c]=b);return b}
function Vd(a,b,c,d,e){e=void 0===e?!0:e;a.i||(a.i={});var f=a.i[c];d=Pd(a,c,2,d);var g=!!(md(a.v)&16),h=pd(d);h=pd(a.v)||h;if(!f){f=[];for(var k=h,m=0;m<d.length;m++){var q=d[m];k=k||pd(q);q=Gd(q,b,!1,g);void 0!==q&&(f.push(q),h&&kd(q.v,2))}a.i[c]=f;sd(d,!k)}b=h||e;e=pd(f);b&&!e&&(Object.isFrozen(f)&&(a.i[c]=f=f.slice()),kd(f,2),Object.freeze(f));!b&&e&&(a.i[c]=f=f.slice());return f}
function Wd(a,b,c,d){d=void 0===d?!1:d;var e=pd(a.v);b=Vd(a,b,c,d,e);a=Pd(a,c,0,void 0===d?!1:d);if(!(c=e)&&(c=a)){if(!a)throw Error("cannot check mutability state of non-array");c=!(md(a)&8)}if(c){for(c=0;c<b.length;c++)(d=b[c])&&pd(d.v)&&!e&&(b[c]=b[c].Bb(),a[c]=b[c].v);sd(a,!0)}return b}
function G(a,b,c,d){Bd(a);a.i||(a.i={});null==d?b=d=void 0:b=Fd(d,b).v;a.i[c]=d;return D(a,c,b)}
function Xd(a,b,c,d,e){Bd(a);a.i||(a.i={});null!=e?b=Fd(e,b).v:b=e=void 0;a.i[c]=e;Sd(a,c,d,b)}
function Yd(a,b,c,d){Bd(a);if(null!=d){var e=od([]);for(var f=!1,g=0;g<d.length;g++)e[g]=Fd(d[g],b).v,f=f||pd(e[g]);a.i||(a.i={});a.i[c]=d;sd(e,!f)}else a.i&&(a.i[c]=void 0),e=Ad;return D(a,c,e)}
function Zd(a,b,c,d){Bd(a);var e=Vd(a,c,b,void 0,!1);c=null!=d?Fd(d,c):new c;a=Pd(a,b,2);e.push(c);a.push(c.v);pd(c.v)&&sd(a,!1)}
function $d(a,b){return Od(a,b)}
;function ae(a,b,c){a||(a=be);be=null;var d=this.constructor.i||0,e=0<d,f=this.constructor.j;a?md(a)&16&&kd(a,32):(a=f?[f]:[],kd(a,48));e&&0<a.length&&ud(a[a.length-1])&&"g"in a[a.length-1]&&(d=0);this.m=(f?0:-1)-d;this.i=void 0;this.v=a;a:{f=this.v.length;d=f-1;if(f&&(f=this.v[d],ud(f))){this.j=f;b=Object.keys(f);0<b.length&&jb(b,isNaN)?this.o=Number.MAX_VALUE:this.o=d-this.m;break a}void 0!==b&&-1<b?(this.o=Math.max(b,d+1-this.m),this.j=void 0):this.o=Number.MAX_VALUE}if(!e&&this.j&&"g"in this.j)throw Error('Unexpected "g" flag in sparse object of message that is not a group type.');
if(c)for(e=0;e<c.length;e++)b=c[e],b<this.o?(b+=this.m,(d=this.v[b])?Array.isArray(d)&&od(d):this.v[b]=Ad):(d=Nd(this),(f=d[b])?Array.isArray(f)&&od(f):d[b]=Ad)}
ae.prototype.toJSON=function(){var a=this.v;return zd?a:Jd(a,Kd,Ld)};
function ce(a){zd=!0;try{return JSON.stringify(a.toJSON(),de)}finally{zd=!1}}
ae.prototype.clone=function(){var a=Jd(this.v,Md,td);qd(a);be=a;a=new this.constructor(a);be=null;ee(a,this);return a};
ae.prototype.isMutable=function(){return!pd(this.v)};
ae.prototype.toString=function(){return this.v.toString()};
function de(a,b){return Hd(b)}
function ee(a,b){b.s&&(a.s=b.s.slice());var c=b.i;if(c){b=b.j;for(var d in c){var e=c[d];if(e){var f=!(!b||!b[d]),g=+d;if(Array.isArray(e)){if(e.length)for(f=Wd(a,e[0].constructor,g,f),g=0;g<Math.min(f.length,e.length);g++)ee(f[g],e[g])}else(f=Ud(a,e.constructor,g,f))&&ee(f,e)}}}}
var be;function fe(a,b,c,d,e,f){(a=a.i&&a.i[c])?Array.isArray(a)?(e=f.ib?od(a.slice()):a,Yd(b,0<e.length?e[0].constructor:void 0,c,e)):G(b,a.constructor,c,a):(ed&&d instanceof Uint8Array?e=d.length?new id(new Uint8Array(d)):gd||(gd=new id(null)):(Array.isArray(d)&&(e?kd(d,2):d&&md(d)&1&&f.ib?(e=Array.prototype.slice.call(d),nd(e,(md(d)|0)&-51),d=e):rd(d)),e=d),D(b,c,e))}
;function ge(){ae.apply(this,arguments)}
r(ge,ae);ge.prototype.Bb=function(){return this};
if(Cd){var he={};Object.defineProperties(ge,(he[Symbol.hasInstance]=Dd(function(){throw Error(void 0);}),he))};function ie(a){var b=this.i,c=this.j;return this.isRepeated?Wd(a,b,c,!0):Ud(a,b,c,!0)}
;function I(){ge.apply(this,arguments)}
r(I,ge);I.prototype.Bb=function(){if(pd(this.v)){var a={ib:!0};var b=pd(this.v);if(b&&!a.ib)throw Error("copyRepeatedFields must be true for frozen messages");b||rd(this.v);var c=new this.constructor;this.s&&(c.s=this.s.slice());for(var d=this.v,e=0;e<d.length;e++){var f=d[e];if(e===d.length-1&&ud(f))for(var g in f){var h=+g;Number.isNaN(h)?Nd(c)[g]=f[g]:fe(this,c,h,f[g],b,a)}else fe(this,c,e-this.m,f,b,a)}c.I=this;a=c}else a=this;return a};
if(Cd){var je={};Object.defineProperties(I,(je[Symbol.hasInstance]=Dd(Object[Symbol.hasInstance]),je))};function ke(a){this.Lb=a}
;function le(a,b,c){this.j=a;this.m=b;this.i=c||[];this.xa=new Map}
l=le.prototype;l.wc=function(a){var b=Ja.apply(1,arguments),c=this.lb(b);c?c.push(new ke(a)):this.kc(a,b)};
l.kc=function(a){this.xa.set(this.Sb(Ja.apply(1,arguments)),[new ke(a)])};
l.lb=function(){var a=this.Sb(Ja.apply(0,arguments));return this.xa.has(a)?this.xa.get(a):void 0};
l.Jc=function(){var a=this.lb(Ja.apply(0,arguments));return a&&a.length?a[0]:void 0};
l.clear=function(){this.xa.clear()};
l.Sb=function(){var a=Ja.apply(0,arguments);return a?a.join(","):"key"};function me(a,b){le.call(this,a,3,b)}
r(me,le);me.prototype.l=function(a){var b=Ja.apply(1,arguments),c=0,d=this.Jc(b);d&&(c=d.Lb);this.kc(c+a,b)};function ne(a,b){le.call(this,a,2,b)}
r(ne,le);ne.prototype.l=function(a){this.wc(a,Ja.apply(1,arguments))};function oe(a){a&&"function"==typeof a.dispose&&a.dispose()}
;function pe(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];Pa(d)?pe.apply(null,d):oe(d)}}
;function J(){this.I=this.I;this.C=this.C}
J.prototype.I=!1;J.prototype.i=function(){return this.I};
J.prototype.dispose=function(){this.I||(this.I=!0,this.D())};
function qe(a,b){re(a,Ya(oe,b))}
function re(a,b){a.I?b():(a.C||(a.C=[]),a.C.push(b))}
J.prototype.D=function(){if(this.C)for(;this.C.length;)this.C.shift()()};function se(a,b){this.type=a;this.i=this.target=b;this.defaultPrevented=this.l=!1}
se.prototype.stopPropagation=function(){this.l=!0};
se.prototype.preventDefault=function(){this.defaultPrevented=!0};function te(a){var b=B("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||y.$googDebugFname||b}catch(g){e="Not available",c=!0}b=ue(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,ve[c])c=ve[c];else{c=String(c);if(!ve[c]){var f=/function\s+([^\(]+)/m.exec(c);ve[c]=f?f[1]:"[Anonymous]"}c=ve[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}a.stack=
b;return{message:a.message,name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:a.stack}}
function ue(a,b){b||(b={});b[we(a)]=!0;var c=a.stack||"";(a=a.cause)&&!b[we(a)]&&(c+="\nCaused by: ",a.stack&&0==a.stack.indexOf(a.toString())||(c+="string"===typeof a?a:a.message+"\n"),c+=ue(a,b));return c}
function we(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var ve={};var xe=function(){if(!y.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{y.addEventListener("test",function(){},b),y.removeEventListener("test",function(){},b)}catch(c){}return a}();function ye(a,b){se.call(this,a?a.type:"");this.relatedTarget=this.i=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.j=null;a&&this.init(a,b)}
Za(ye,se);var ze={2:"touch",3:"pen",4:"mouse"};
ye.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.i=b;if(b=a.relatedTarget){if(Mc){a:{try{Gc(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||
0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:ze[a.pointerType]||"";this.state=a.state;
this.j=a;a.defaultPrevented&&ye.X.preventDefault.call(this)};
ye.prototype.stopPropagation=function(){ye.X.stopPropagation.call(this);this.j.stopPropagation?this.j.stopPropagation():this.j.cancelBubble=!0};
ye.prototype.preventDefault=function(){ye.X.preventDefault.call(this);var a=this.j;a.preventDefault?a.preventDefault():a.returnValue=!1};var Fe="closure_listenable_"+(1E6*Math.random()|0);var Ge=0;function He(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.Wa=e;this.key=++Ge;this.Ha=this.Ra=!1}
function Ie(a){a.Ha=!0;a.listener=null;a.proxy=null;a.src=null;a.Wa=null}
;function Je(a){this.src=a;this.listeners={};this.i=0}
Je.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.i++);var g=Ke(a,b,d,e);-1<g?(b=a[g],c||(b.Ra=!1)):(b=new He(b,this.src,f,!!d,e),b.Ra=c,a.push(b));return b};
Je.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=Ke(e,b,c,d);return-1<b?(Ie(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.i--),!0):!1};
function Le(a,b){var c=b.type;c in a.listeners&&lb(a.listeners[c],b)&&(Ie(b),0==a.listeners[c].length&&(delete a.listeners[c],a.i--))}
function Ke(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.Ha&&f.listener==b&&f.capture==!!c&&f.Wa==d)return e}return-1}
;var Me="closure_lm_"+(1E6*Math.random()|0),Ne={},Oe=0;function Pe(a,b,c,d,e){if(d&&d.once)Qe(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)Pe(a,b[f],c,d,e);else c=Re(c),a&&a[Fe]?a.Z(b,c,Qa(d)?!!d.capture:!!d,e):Se(a,b,c,!1,d,e)}
function Se(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=Qa(e)?!!e.capture:!!e,h=Te(a);h||(a[Me]=h=new Je(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Ue();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)xe||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(Ve(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");Oe++}}
function Ue(){function a(c){return b.call(a.src,a.listener,c)}
var b=We;return a}
function Qe(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Qe(a,b[f],c,d,e);else c=Re(c),a&&a[Fe]?a.m.add(String(b),c,!0,Qa(d)?!!d.capture:!!d,e):Se(a,b,c,!0,d,e)}
function Xe(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Xe(a,b[f],c,d,e);else(d=Qa(d)?!!d.capture:!!d,c=Re(c),a&&a[Fe])?a.m.remove(String(b),c,d,e):a&&(a=Te(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=Ke(b,c,d,e)),(c=-1<a?b[a]:null)&&Ye(c))}
function Ye(a){if("number"!==typeof a&&a&&!a.Ha){var b=a.src;if(b&&b[Fe])Le(b.m,a);else{var c=a.type,d=a.proxy;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(Ve(c),d):b.addListener&&b.removeListener&&b.removeListener(d);Oe--;(c=Te(b))?(Le(c,a),0==c.i&&(c.src=null,b[Me]=null)):Ie(a)}}}
function Ve(a){return a in Ne?Ne[a]:Ne[a]="on"+a}
function We(a,b){if(a.Ha)a=!0;else{b=new ye(b,this);var c=a.listener,d=a.Wa||a.src;a.Ra&&Ye(a);a=c.call(d,b)}return a}
function Te(a){a=a[Me];return a instanceof Je?a:null}
var Ze="__closure_events_fn_"+(1E9*Math.random()>>>0);function Re(a){if("function"===typeof a)return a;a[Ze]||(a[Ze]=function(b){return a.handleEvent(b)});
return a[Ze]}
;function $e(){J.call(this);this.m=new Je(this);this.tc=this;this.ka=null}
Za($e,J);$e.prototype[Fe]=!0;$e.prototype.addEventListener=function(a,b,c,d){Pe(this,a,b,c,d)};
$e.prototype.removeEventListener=function(a,b,c,d){Xe(this,a,b,c,d)};
function af(a,b){var c=a.ka;if(c){var d=[];for(var e=1;c;c=c.ka)d.push(c),++e}a=a.tc;c=b.type||b;"string"===typeof b?b=new se(b,a):b instanceof se?b.target=b.target||a:(e=b,b=new se(c,a),yb(b,e));e=!0;if(d)for(var f=d.length-1;!b.l&&0<=f;f--){var g=b.i=d[f];e=bf(g,c,!0,b)&&e}b.l||(g=b.i=a,e=bf(g,c,!0,b)&&e,b.l||(e=bf(g,c,!1,b)&&e));if(d)for(f=0;!b.l&&f<d.length;f++)g=b.i=d[f],e=bf(g,c,!1,b)&&e}
$e.prototype.D=function(){$e.X.D.call(this);if(this.m){var a=this.m,b=0,c;for(c in a.listeners){for(var d=a.listeners[c],e=0;e<d.length;e++)++b,Ie(d[e]);delete a.listeners[c];a.i--}}this.ka=null};
$e.prototype.Z=function(a,b,c,d){return this.m.add(String(a),b,!1,c,d)};
function bf(a,b,c,d){b=a.m.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.Ha&&g.capture==c){var h=g.listener,k=g.Wa||g.src;g.Ra&&Le(a.m,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;function cf(a,b){this.l=a;this.m=b;this.j=0;this.i=null}
cf.prototype.get=function(){if(0<this.j){this.j--;var a=this.i;this.i=a.next;a.next=null}else a=this.l();return a};
function df(a,b){a.m(b);100>a.j&&(a.j++,b.next=a.i,a.i=b)}
;function ef(a,b){return a+Math.random()*(b-a)}
;function ff(a,b){this.x=void 0!==a?a:0;this.y=void 0!==b?b:0}
l=ff.prototype;l.clone=function(){return new ff(this.x,this.y)};
l.equals=function(a){return a instanceof ff&&(this==a?!0:this&&a?this.x==a.x&&this.y==a.y:!1)};
l.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};
l.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};
l.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};
l.scale=function(a,b){this.x*=a;this.y*="number"===typeof b?b:a;return this};function gf(a,b){this.width=a;this.height=b}
l=gf.prototype;l.clone=function(){return new gf(this.width,this.height)};
l.aspectRatio=function(){return this.width/this.height};
l.isEmpty=function(){return!(this.width*this.height)};
l.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
l.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
l.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
l.scale=function(a,b){this.width*=a;this.height*="number"===typeof b?b:a;return this};function hf(a){var b=document;return"string"===typeof a?b.getElementById(a):a}
function jf(a){var b=document;a=String(a);"application/xhtml+xml"===b.contentType&&(a=a.toLowerCase());return b.createElement(a)}
function kf(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;var lf;function mf(){var a=y.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!C("Presto")&&(a=function(){var e=jf("IFRAME");e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Xa(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!Ub()){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.Kb;c.Kb=null;e()}};
return function(e){d.next={Kb:e};d=d.next;b.port2.postMessage(0)}}return function(e){y.setTimeout(e,0)}}
;function nf(a){y.setTimeout(function(){throw a;},0)}
;function of(){this.j=this.i=null}
of.prototype.add=function(a,b){var c=pf.get();c.set(a,b);this.j?this.j.next=c:this.i=c;this.j=c};
of.prototype.remove=function(){var a=null;this.i&&(a=this.i,this.i=this.i.next,this.i||(this.j=null),a.next=null);return a};
var pf=new cf(function(){return new qf},function(a){return a.reset()});
function qf(){this.next=this.scope=this.i=null}
qf.prototype.set=function(a,b){this.i=a;this.scope=b;this.next=null};
qf.prototype.reset=function(){this.next=this.scope=this.i=null};var rf,sf=!1,tf=new of;function uf(a,b){rf||vf();sf||(rf(),sf=!0);tf.add(a,b)}
function vf(){if(y.Promise&&y.Promise.resolve){var a=y.Promise.resolve(void 0);rf=function(){a.then(wf)}}else rf=function(){var b=wf;
"function"!==typeof y.setImmediate||y.Window&&y.Window.prototype&&!C("Edge")&&y.Window.prototype.setImmediate==y.setImmediate?(lf||(lf=mf()),lf(b)):y.setImmediate(b)}}
function wf(){for(var a;a=tf.remove();){try{a.i.call(a.scope)}catch(b){nf(b)}df(pf,a)}sf=!1}
;function xf(a){this.i=0;this.C=void 0;this.m=this.j=this.l=null;this.o=this.s=!1;if(a!=cb)try{var b=this;a.call(void 0,function(c){yf(b,2,c)},function(c){yf(b,3,c)})}catch(c){yf(this,3,c)}}
function zf(){this.next=this.context=this.onRejected=this.j=this.i=null;this.l=!1}
zf.prototype.reset=function(){this.context=this.onRejected=this.j=this.i=null;this.l=!1};
var Af=new cf(function(){return new zf},function(a){a.reset()});
function Bf(a,b,c){var d=Af.get();d.j=a;d.onRejected=b;d.context=c;return d}
function Cf(a){return new xf(function(b,c){c(a)})}
xf.prototype.then=function(a,b,c){return Df(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
xf.prototype.$goog_Thenable=!0;l=xf.prototype;l.eb=function(a,b){return Df(this,null,a,b)};
l.catch=xf.prototype.eb;l.cancel=function(a){if(0==this.i){var b=new Ef(a);uf(function(){Ff(this,b)},this)}};
function Ff(a,b){if(0==a.i)if(a.l){var c=a.l;if(c.j){for(var d=0,e=null,f=null,g=c.j;g&&(g.l||(d++,g.i==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.i&&1==d?Ff(c,b):(f?(d=f,d.next==c.m&&(c.m=d),d.next=d.next.next):Gf(c),Hf(c,e,3,b)))}a.l=null}else yf(a,3,b)}
function If(a,b){a.j||2!=a.i&&3!=a.i||Jf(a);a.m?a.m.next=b:a.j=b;a.m=b}
function Df(a,b,c,d){var e=Bf(null,null,null);e.i=new xf(function(f,g){e.j=b?function(h){try{var k=b.call(d,h);f(k)}catch(m){g(m)}}:f;
e.onRejected=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof Ef?g(h):f(k)}catch(m){g(m)}}:g});
e.i.l=a;If(a,e);return e.i}
l.rd=function(a){this.i=0;yf(this,2,a)};
l.sd=function(a){this.i=0;yf(this,3,a)};
function yf(a,b,c){if(0==a.i){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.i=1;a:{var d=c,e=a.rd,f=a.sd;if(d instanceof xf){If(d,Bf(e||cb,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(m){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(Qa(d))try{var k=d.then;if("function"===typeof k){Kf(d,k,e,f,a);g=!0;break a}}catch(m){f.call(a,m);g=!0;break a}g=!1}}}g||(a.C=c,a.i=b,a.l=null,Jf(a),3!=b||c instanceof Ef||Lf(a,c))}}
function Kf(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Jf(a){a.s||(a.s=!0,uf(a.Hc,a))}
function Gf(a){var b=null;a.j&&(b=a.j,a.j=b.next,b.next=null);a.j||(a.m=null);return b}
l.Hc=function(){for(var a;a=Gf(this);)Hf(this,a,this.i,this.C);this.s=!1};
function Hf(a,b,c,d){if(3==c&&b.onRejected&&!b.l)for(;a&&a.o;a=a.l)a.o=!1;if(b.i)b.i.l=null,Mf(b,c,d);else try{b.l?b.j.call(b.context):Mf(b,c,d)}catch(e){Nf.call(null,e)}df(Af,b)}
function Mf(a,b,c){2==b?a.j.call(a.context,c):a.onRejected&&a.onRejected.call(a.context,c)}
function Lf(a,b){a.o=!0;uf(function(){a.o&&Nf.call(null,b)})}
var Nf=nf;function Ef(a){ab.call(this,a)}
Za(Ef,ab);Ef.prototype.name="cancel";function Of(a,b){$e.call(this);this.l=a||1;this.j=b||y;this.o=Xa(this.pd,this);this.s=Date.now()}
Za(Of,$e);l=Of.prototype;l.enabled=!1;l.ba=null;function Pf(a,b){a.l=b;a.ba&&a.enabled?(a.stop(),a.start()):a.ba&&a.stop()}
l.pd=function(){if(this.enabled){var a=Date.now()-this.s;0<a&&a<.8*this.l?this.ba=this.j.setTimeout(this.o,this.l-a):(this.ba&&(this.j.clearTimeout(this.ba),this.ba=null),af(this,"tick"),this.enabled&&(this.stop(),this.start()))}};
l.start=function(){this.enabled=!0;this.ba||(this.ba=this.j.setTimeout(this.o,this.l),this.s=Date.now())};
l.stop=function(){this.enabled=!1;this.ba&&(this.j.clearTimeout(this.ba),this.ba=null)};
l.D=function(){Of.X.D.call(this);this.stop();delete this.j};
function Qf(a,b,c){if("function"===typeof a)c&&(a=Xa(a,c));else if(a&&"function"==typeof a.handleEvent)a=Xa(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(b)?-1:y.setTimeout(a,b||0)}
;function Rf(a){this.C=a;this.i=new Map;this.s=new Set;this.l=0;this.m=100;this.flushInterval=3E4;this.j=new Of(this.flushInterval);this.j.Z("tick",this.gb,!1,this);this.o=!1}
l=Rf.prototype;l.ic=function(a){this.o=a;this.m=1};
function Sf(a){a.j.enabled||a.j.start();a.l++;a.l>=a.m&&a.gb()}
l.gb=function(){var a=this.i.values();a=[].concat(ia(a)).filter(function(b){return b.xa.size});
a.length&&this.C.flush(a,this.o);Tf(a);this.l=0;this.j.enabled&&this.j.stop()};
l.xc=function(a){var b=Ja.apply(1,arguments);this.i.has(a)||this.i.set(a,new me(a,b))};
l.Ib=function(a){var b=Ja.apply(1,arguments);this.i.has(a)||this.i.set(a,new ne(a,b))};
function Uf(a,b){return a.s.has(b)?void 0:a.i.get(b)}
l.Cb=function(a){this.qc.apply(this,[a,1].concat(ia(Ja.apply(1,arguments))))};
l.qc=function(a,b){var c=Ja.apply(2,arguments),d=Uf(this,a);d&&d instanceof me&&(d.l(b,c),Sf(this))};
l.fb=function(a,b){var c=Ja.apply(2,arguments),d=Uf(this,a);d&&d instanceof ne&&(d.l(b,c),Sf(this))};
function Tf(a){for(var b=0;b<a.length;b++)a[b].clear()}
;function Vf(a){this.i=a;this.i.Ib("/client_streamz/bg/fil",{kb:3,jb:"rk"})}
function Wf(a){this.i=a;this.i.xc("/client_streamz/bg/fsc",{kb:3,jb:"rk"})}
function Xf(a){this.i=a;this.i.Ib("/client_streamz/bg/fsl",{kb:3,jb:"rk"})}
;function Yf(a){I.call(this,a,-1,Zf)}
r(Yf,I);function $f(a){I.call(this,a,-1,ag)}
r($f,I);function bg(a){I.call(this,a)}
r(bg,I);function cg(a){I.call(this,a)}
r(cg,I);var Zf=[3,6,4],ag=[1],dg=[1,2,3],eg=[1,2,3];function fg(a){I.call(this,a,-1,gg)}
r(fg,I);var gg=[1];function hg(a){if(!a)return"";if(/^about:(?:blank|srcdoc)$/.test(a))return window.origin||"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if("http"!==c&&"https"!==c&&"chrome-extension"!==c&&"moz-extension"!==c&&"file"!==c&&"android-app"!==
c&&"chrome-search"!==c&&"chrome-untrusted"!==c&&"chrome"!==c&&"app"!==c&&"devtools"!==c)throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===c&&"80"!==e||"https"===c&&"443"!==e)a=":"+e}return c+"://"+b+a}
;function ig(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;q=m=0}
function b(t){for(var x=g,u=0;64>u;u+=4)x[u/4]=t[u]<<24|t[u+1]<<16|t[u+2]<<8|t[u+3];for(u=16;80>u;u++)t=x[u-3]^x[u-8]^x[u-14]^x[u-16],x[u]=(t<<1|t>>>31)&4294967295;t=e[0];var A=e[1],E=e[2],F=e[3],O=e[4];for(u=0;80>u;u++){if(40>u)if(20>u){var N=F^A&(E^F);var R=1518500249}else N=A^E^F,R=1859775393;else 60>u?(N=A&E|F&(A|E),R=2400959708):(N=A^E^F,R=3395469782);N=((t<<5|t>>>27)&4294967295)+N+O+R+x[u]&4294967295;O=F;F=E;E=(A<<30|A>>>2)&4294967295;A=t;t=N}e[0]=e[0]+t&4294967295;e[1]=e[1]+A&4294967295;e[2]=
e[2]+E&4294967295;e[3]=e[3]+F&4294967295;e[4]=e[4]+O&4294967295}
function c(t,x){if("string"===typeof t){t=unescape(encodeURIComponent(t));for(var u=[],A=0,E=t.length;A<E;++A)u.push(t.charCodeAt(A));t=u}x||(x=t.length);u=0;if(0==m)for(;u+64<x;)b(t.slice(u,u+64)),u+=64,q+=64;for(;u<x;)if(f[m++]=t[u++],q++,64==m)for(m=0,b(f);u+64<x;)b(t.slice(u,u+64)),u+=64,q+=64}
function d(){var t=[],x=8*q;56>m?c(h,56-m):c(h,64-(m-56));for(var u=63;56<=u;u--)f[u]=x&255,x>>>=8;b(f);for(u=x=0;5>u;u++)for(var A=24;0<=A;A-=8)t[x++]=e[u]>>A&255;return t}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var m,q;a();return{reset:a,update:c,digest:d,Dc:function(){for(var t=d(),x="",u=0;u<t.length;u++)x+="0123456789ABCDEF".charAt(Math.floor(t[u]/16))+"0123456789ABCDEF".charAt(t[u]%16);return x}}}
;function jg(a,b,c){var d=String(y.location.href);return d&&a&&b?[b,kg(hg(d),a,c||null)].join(" "):null}
function kg(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],fb(d,function(h){e.push(h)}),lg(e.join(" "));
var f=[],g=[];fb(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];fb(d,function(h){e.push(h)});
a=lg(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function lg(a){var b=ig();b.update(a);return b.Dc().toLowerCase()}
;var mg={};function ng(a){this.i=a||{cookie:""}}
l=ng.prototype;l.isEnabled=function(){if(!y.navigator.cookieEnabled)return!1;if(!this.isEmpty())return!0;this.set("TESTCOOKIESENABLED","1",{Ya:60});if("1"!==this.get("TESTCOOKIESENABLED"))return!1;this.remove("TESTCOOKIESENABLED");return!0};
l.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.Xq;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.Ya}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);c=f?";domain="+f:"";g=g?";path="+g:"";d=d?";secure":"";h=0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString();this.i.cookie=a+"="+b+c+g+h+d+(null!=e?";samesite="+
e:"")};
l.get=function(a,b){for(var c=a+"=",d=(this.i.cookie||"").split(";"),e=0,f;e<d.length;e++){f=Mb(d[e]);if(0==f.lastIndexOf(c,0))return f.slice(c.length);if(f==a)return""}return b};
l.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{Ya:0,path:b,domain:c});return d};
l.ob=function(){return og(this).keys};
l.isEmpty=function(){return!this.i.cookie};
l.clear=function(){for(var a=og(this).keys,b=a.length-1;0<=b;b--)this.remove(a[b])};
function og(a){a=(a.i.cookie||"").split(";");for(var b=[],c=[],d,e,f=0;f<a.length;f++)e=Mb(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));return{keys:b,values:c}}
var pg=new ng("undefined"==typeof document?null:document);function qg(a){return!!mg.FPA_SAMESITE_PHASE2_MOD||!(void 0===a||!a)}
function rg(a){a=void 0===a?!1:a;var b=y.__SAPISID||y.__APISID||y.__3PSAPISID||y.__OVERRIDE_SID;qg(a)&&(b=b||y.__1PSAPISID);if(b)return!0;var c=new ng(document);b=c.get("SAPISID")||c.get("APISID")||c.get("__Secure-3PAPISID")||c.get("SID");qg(a)&&(b=b||c.get("__Secure-1PAPISID"));return!!b}
function sg(a,b,c,d){(a=y[a])||(a=(new ng(document)).get(b));return a?jg(a,c,d):null}
function tg(a,b){b=void 0===b?!1:b;var c=hg(String(y.location.href)),d=[];if(rg(b)){c=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:")||0==c.indexOf("moz-extension:");var e=c?y.__SAPISID:y.__APISID;e||(e=new ng(document),e=e.get(c?"SAPISID":"APISID")||e.get("__Secure-3PAPISID"));(e=e?jg(e,c?"SAPISIDHASH":"APISIDHASH",a):null)&&d.push(e);c&&qg(b)&&((b=sg("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&d.push(b),(a=sg("__3PSAPISID","__Secure-3PAPISID","SAPISID3PHASH",a))&&d.push(a))}return 0==
d.length?null:d.join(" ")}
;function ug(a){I.call(this,a,-1,vg)}
r(ug,I);var vg=[2];function wg(a){this.i=this.j=this.l=a}
wg.prototype.reset=function(){this.i=this.j=this.l};
wg.prototype.getValue=function(){return this.j};function xg(a){var b=[];yg(new zg,a,b);return b.join("")}
function zg(){}
function yg(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(Array.isArray(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),yg(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],"function"!=typeof f&&(c.push(e),Ag(d,c),c.push(":"),yg(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":Ag(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var Bg={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\v":"\\u000b"},Cg=/\uffff/.test("\uffff")?/[\\"\x00-\x1f\x7f-\uffff]/g:/[\\"\x00-\x1f\x7f-\xff]/g;function Ag(a,b){b.push('"',a.replace(Cg,function(c){var d=Bg[c];d||(d="\\u"+(c.charCodeAt(0)|65536).toString(16).slice(1),Bg[c]=d);return d}),'"')}
;function Dg(){}
Dg.prototype.i=null;Dg.prototype.getOptions=function(){var a;(a=this.i)||(a={},Eg(this)&&(a[0]=!0,a[1]=!0),a=this.i=a);return a};var Fg;function Gg(){}
Za(Gg,Dg);function Hg(a){return(a=Eg(a))?new ActiveXObject(a):new XMLHttpRequest}
function Eg(a){if(!a.j&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++){var d=b[c];try{return new ActiveXObject(d),a.j=d}catch(e){}}throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");}return a.j}
Fg=new Gg;function Ig(a){$e.call(this);this.headers=new Map;this.L=a||null;this.j=!1;this.K=this.B=null;this.o=this.T="";this.l=this.R=this.A=this.P=!1;this.s=0;this.G=null;this.ca="";this.V=this.W=!1}
Za(Ig,$e);var Jg=/^https?$/i,Kg=["POST","PUT"],Lg=[];function Mg(a,b,c,d,e,f,g){var h=new Ig;Lg.push(h);b&&h.Z("complete",b);h.m.add("ready",h.Bc,!0,void 0,void 0);f&&(h.s=Math.max(0,f));g&&(h.W=g);h.send(a,c,d,e)}
l=Ig.prototype;l.Bc=function(){this.dispose();lb(Lg,this)};
l.send=function(a,b,c,d){if(this.B)throw Error("[goog.net.XhrIo] Object is active with another request="+this.T+"; newUri="+a);b=b?b.toUpperCase():"GET";this.T=a;this.o="";this.P=!1;this.j=!0;this.B=this.L?Hg(this.L):Hg(Fg);this.K=this.L?this.L.getOptions():Fg.getOptions();this.B.onreadystatechange=Xa(this.Zb,this);try{this.getStatus(),this.R=!0,this.B.open(b,String(a),!0),this.R=!1}catch(g){this.getStatus();Ng(this,g);return}a=c||"";c=new Map(this.headers);if(d)if(Object.getPrototypeOf(d)===Object.prototype)for(var e in d)c.set(e,
d[e]);else if("function"===typeof d.keys&&"function"===typeof d.get){e=p(d.keys());for(var f=e.next();!f.done;f=e.next())f=f.value,c.set(f,d.get(f))}else throw Error("Unknown input type for opt_headers: "+String(d));d=Array.from(c.keys()).find(function(g){return"content-type"==g.toLowerCase()});
e=y.FormData&&a instanceof y.FormData;!(0<=eb(Kg,b))||d||e||c.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");b=p(c);for(d=b.next();!d.done;d=b.next())c=p(d.value),d=c.next().value,c=c.next().value,this.B.setRequestHeader(d,c);this.ca&&(this.B.responseType=this.ca);"withCredentials"in this.B&&this.B.withCredentials!==this.W&&(this.B.withCredentials=this.W);try{Og(this),0<this.s&&(this.V=Pg(this.B),this.getStatus(),this.V?(this.B.timeout=this.s,this.B.ontimeout=Xa(this.mc,this)):
this.G=Qf(this.mc,this.s,this)),this.getStatus(),this.A=!0,this.B.send(a),this.A=!1}catch(g){this.getStatus(),Ng(this,g)}};
function Pg(a){return Kc&&Vc()&&"number"===typeof a.timeout&&void 0!==a.ontimeout}
l.mc=function(){"undefined"!=typeof Ma&&this.B&&(this.o="Timed out after "+this.s+"ms, aborting",this.getStatus(),af(this,"timeout"),this.abort(8))};
function Ng(a,b){a.j=!1;a.B&&(a.l=!0,a.B.abort(),a.l=!1);a.o=b;Qg(a);Tg(a)}
function Qg(a){a.P||(a.P=!0,af(a,"complete"),af(a,"error"))}
l.abort=function(){this.B&&this.j&&(this.getStatus(),this.j=!1,this.l=!0,this.B.abort(),this.l=!1,af(this,"complete"),af(this,"abort"),Tg(this))};
l.D=function(){this.B&&(this.j&&(this.j=!1,this.l=!0,this.B.abort(),this.l=!1),Tg(this,!0));Ig.X.D.call(this)};
l.Zb=function(){this.i()||(this.R||this.A||this.l?Ug(this):this.Sc())};
l.Sc=function(){Ug(this)};
function Ug(a){if(a.j&&"undefined"!=typeof Ma)if(a.K[1]&&4==Vg(a)&&2==a.getStatus())a.getStatus();else if(a.A&&4==Vg(a))Qf(a.Zb,0,a);else if(af(a,"readystatechange"),a.isComplete()){a.getStatus();a.j=!1;try{if(Wg(a))af(a,"complete"),af(a,"success");else{try{var b=2<Vg(a)?a.B.statusText:""}catch(c){b=""}a.o=b+" ["+a.getStatus()+"]";Qg(a)}}finally{Tg(a)}}}
function Tg(a,b){if(a.B){Og(a);var c=a.B,d=a.K[0]?function(){}:null;
a.B=null;a.K=null;b||af(a,"ready");try{c.onreadystatechange=d}catch(e){}}}
function Og(a){a.B&&a.V&&(a.B.ontimeout=null);a.G&&(y.clearTimeout(a.G),a.G=null)}
l.isActive=function(){return!!this.B};
l.isComplete=function(){return 4==Vg(this)};
function Wg(a){var b=a.getStatus();a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:var c=!0;break a;default:c=!1}if(!c){if(b=0===b)a=nc(1,String(a.T)),!a&&y.self&&y.self.location&&(a=y.self.location.protocol.slice(0,-1)),b=!Jg.test(a?a.toLowerCase():"");c=b}return c}
function Vg(a){return a.B?a.B.readyState:0}
l.getStatus=function(){try{return 2<Vg(this)?this.B.status:-1}catch(a){return-1}};
l.getLastError=function(){return"string"===typeof this.o?this.o:String(this.o)};function Xg(a){I.call(this,a)}
r(Xg,I);function Yg(a){I.call(this,a,-1,Zg)}
r(Yg,I);var Zg=[1];var $g=["platform","platformVersion","architecture","model","uaFullVersion"];new Yg;function ah(a){I.call(this,a)}
r(ah,I);function bh(a){I.call(this,a,31,ch)}
r(bh,I);var ch=[3,20,27];function dh(a){I.call(this,a,17,eh)}
r(dh,I);var eh=[3,5];function fh(a){I.call(this,a,6,gh)}
r(fh,I);var gh=[5];function hh(a){I.call(this,a)}
r(hh,I);var ih;ih=new function(a,b,c){this.j=a;this.fieldName=b;this.i=c;this.isRepeated=0;this.l=ie}(175237375,{Mq:0},hh);function jh(a,b,c,d,e,f,g,h,k,m,q){$e.call(this);var t=this;this.P="";this.l=[];this.Gb="";this.Hb=this.qa=-1;this.Oa=!1;this.K=this.o=null;this.G=0;this.uc=1;this.timeoutMillis=0;this.ca=!1;$e.call(this);this.Fb=b||function(){};
this.A=new kh(a,f);this.sc=d;this.Na=q;this.vc=Ya(ef,0,1);this.T=e||null;this.L=c||null;this.V=g||!1;this.pageId=k||null;this.logger=null;this.withCredentials=!h;this.Da=f||!1;!this.Da&&(65<=ac("Chromium")||45<=ac("Firefox")||12<=ac("Safari")||(Ec()||C("iPad")||C("iPod"))&&Fc());a=D(new ah,1,1);lh(this.A,a);this.s=new wg(1E4);this.j=new Of(this.s.getValue());qe(this,this.j);m=mh(this,m);Pe(this.j,"tick",m,!1,this);this.R=new Of(6E5);qe(this,this.R);Pe(this.R,"tick",m,!1,this);this.V||this.R.start();
this.Da||(Pe(document,"visibilitychange",function(){"hidden"===document.visibilityState&&t.W()}),Pe(document,"pagehide",this.W,!1,this))}
r(jh,$e);function mh(a,b){return b?function(){b().then(function(){a.flush()})}:function(){a.flush()}}
jh.prototype.D=function(){this.W();$e.prototype.D.call(this)};
function nh(a){a.T||(a.T=.01>a.vc()?"https://www.google.com/log?format=json&hasfast=true":"https://play.google.com/log?format=json&hasfast=true");return a.T}
function oh(a,b){a.s=new wg(1>b?1:b);Pf(a.j,a.s.getValue())}
jh.prototype.log=function(a){a=a.clone();var b=this.uc++;D(a,21,b);this.P&&D(a,26,this.P);if(!Od(a,1)){b=a;var c=Date.now().toString();D(b,1,c)}null!=Od(a,15)||D(a,15,60*(new Date).getTimezoneOffset());this.o&&(b=this.o.clone(),G(a,ug,16,b));for(;1E3<=this.l.length;)this.l.shift(),++this.G;this.l.push(a);af(this,new ph(a));this.V||this.j.enabled||this.j.start()};
jh.prototype.flush=function(a,b){var c=this;if(0===this.l.length)a&&a();else if(this.ca)qh(this);else{var d=Date.now();if(this.Hb>d&&this.qa<d)b&&b("throttled");else{var e=rh(this.A,this.l,this.G);d={};var f=this.Fb();f&&(d.Authorization=f);var g=nh(this);this.L&&(d["X-Goog-AuthUser"]=this.L,g=wc(g,"authuser",this.L));this.pageId&&(d["X-Goog-PageId"]=this.pageId,g=wc(g,"pageId",this.pageId));if(f&&this.Gb===f)b&&b("stale-auth-token");else{this.l=[];this.j.enabled&&this.j.stop();this.G=0;var h=ce(e),
k;this.K&&this.K.isSupported(h.length)&&(k=this.K.compress(h));var m={url:g,body:h,zc:1,xb:d,requestType:"POST",withCredentials:this.withCredentials,timeoutMillis:this.timeoutMillis},q=function(u){c.s.reset();Pf(c.j,c.s.getValue());if(u){var A=null;try{var E=JSON.parse(u.replace(")]}'\n",""));A=new fh(E)}catch(F){}A&&(u=Number(Qd(A,1,"-1")),0<u&&(c.qa=Date.now(),c.Hb=c.qa+u),A=ih.l(A))&&(A=Qd(A,1,-1),-1!=A&&(c.Oa||oh(c,A)))}a&&a()},t=function(u,A){var E=Wd(e,bh,3),F=c.s;
F.i=Math.min(3E5,2*F.i);F.j=Math.min(3E5,F.i+Math.round(.2*(Math.random()-.5)*F.i));Pf(c.j,c.s.getValue());401===u&&f&&(c.Gb=f);void 0===A&&(A=500<=u&&600>u||401===u||0===u);A&&(c.l=E.concat(c.l),c.V||c.j.enabled||c.j.start());b&&b("net-send-failed",u)},x=function(){c.Na?c.Na.send(m,q,t):c.sc(m,q,t)};
k?k.then(function(u){m.xb["Content-Encoding"]="gzip";m.xb["Content-Type"]="application/binary";m.body=u;m.zc=2;x()},function(){x()}):x()}}}};
jh.prototype.W=function(){this.flush()};
function qh(a){sh(a,function(b,c){b=wc(b,"format","json");b=window.navigator.sendBeacon(b,ce(c));a.ca&&!b&&(a.ca=!1);return b})}
function sh(a,b){if(0!==a.l.length){var c=Dc(nh(a),"format");c=uc(c,"auth",a.Fb(),"authuser",a.L||"0");for(var d=0;10>d&&a.l.length;++d){var e=a.l.slice(0,32),f=rh(a.A,e,a.G);if(!b(c,f))break;a.G=0;a.l=a.l.slice(e.length)}a.j.enabled&&a.j.stop()}}
function ph(){se.call(this,"event-logged",void 0)}
r(ph,se);function kh(a,b){this.j=b=void 0===b?!1:b;this.uach=this.locale=null;this.i=new dh;D(this.i,2,a);b||(this.locale=document.documentElement.getAttribute("lang"));lh(this,new ah)}
function lh(a,b){G(a.i,ah,1,b);Od(b,1)||D(b,1,1);a.j||(b=th(a),Od(b,5)||D(b,5,a.locale));a.uach&&(b=th(a),Ud(b,Yg,9)||G(b,Yg,9,a.uach))}
function uh(a,b){var c=void 0===c?$g:c;b(window,c).then(function(d){a.uach=d;d=th(a);G(d,Yg,9,a.uach);return!0}).catch(function(){return!1})}
function th(a){a=Ud(a.i,ah,1);var b=Ud(a,Xg,11);b||(b=new Xg,G(a,Xg,11,b));return b}
function rh(a,b,c){c=void 0===c?0:c;a=a.i.clone();var d=Date.now().toString();a=D(a,4,d);b=Yd(a,bh,3,b);c&&D(b,14,c);return b}
;function vh(a,b,c){Mg(a.url,function(d){d=d.target;if(Wg(d)){try{var e=d.B?d.B.responseText:""}catch(f){e=""}b(e)}else c(d.getStatus())},a.requestType,a.body,a.xb,a.timeoutMillis,a.withCredentials)}
;function wh(){this.l="https://play.google.com/log?format=json&hasfast=true";this.m=!1;this.s=vh;this.i=""}
;function xh(){var a=void 0===a?"":a;var b=void 0===b?!1:b;var c=void 0===c?"":c;var d=new wh;d.i="";""!=a&&(d.l=a);b&&(d.m=!0);c&&(d.j=c);a=new jh(1828,d.K?d.K:tg,"0",d.s,d.l,d.m,!1,d.R,void 0,void 0,d.C?d.C:void 0);d.A&&lh(a.A,d.A);d.j&&(b=d.j,c=th(a.A),D(c,7,b));d.o&&(a.K=d.o);d.i&&(a.P=d.i);d.I&&((b=d.I)?(a.o||(a.o=new ug),b=ce(b),D(a.o,4,b)):a.o&&D(a.o,4,void 0,!1));d.L&&(b=d.L,a.o||(a.o=new ug),Rd(a.o,2,b));d.G&&(b=d.G,a.Oa=!0,oh(a,b));d.P&&uh(a.A,d.P);this.i=a}
xh.prototype.flush=function(a){var b=a||[];if(b.length){a=new fg;for(var c=[],d=0;d<b.length;d++){var e=b[d],f=e;var g=new Yf;g=D(g,1,f.j);for(var h=f,k=[],m=0;m<h.i.length;m++)k.push(h.i[m].jb);g=Rd(g,3,k);h=[];k=[];m=p(f.xa.keys());for(var q=m.next();!q.done;q=m.next())k.push(q.value.split(","));for(m=0;m<k.length;m++){q=k[m];var t=f.m;for(var x=f.lb(q)||[],u=[],A=0;A<x.length;A++){var E=x[A];E=E&&E.Lb;var F=new cg;switch(t){case 3:Sd(F,1,eg,Number(E));break;case 2:Sd(F,2,eg,Number(E))}u.push(F)}t=
u;for(x=0;x<t.length;x++){u=t[x];A=new $f;u=G(A,cg,2,u);A=q;E=[];F=f;for(var O=[],N=0;N<F.i.length;N++)O.push(F.i[N].kb);F=O;for(O=0;O<F.length;O++){N=F[O];var R=A[O],ca=new bg;switch(N){case 3:Sd(ca,1,dg,String(R));break;case 2:Sd(ca,2,dg,Number(R));break;case 1:Sd(ca,3,dg,"true"==R)}E.push(ca)}Yd(u,bg,1,E);h.push(u)}}Yd(g,$f,4,h);c.push(g);e.clear()}Yd(a,Yf,1,c);b=this.i;a instanceof bh?b.log(a):(c=new bh,a=ce(a),a=D(c,8,a),b.log(a));this.i.flush()}};function yh(){this.o=zh();this.s=new xh;this.i=new Rf(this.s);this.m=new Vf(this.i);this.j=new Wf(this.i);this.l=new Xf(this.i);this.Aa=window.document.location.hostname}
function zh(){var a,b,c;return null!=(c=null==(a=globalThis.performance)?void 0:null==(b=a.now)?void 0:b.call(a))?c:Date.now()}
;function Ah(){var a=this;this.promise=new Promise(function(b,c){a.resolve=b;a.reject=c})}
;function Bh(a){var b=this;this.Ua=!1;if(a.Vq){var c;this.ra=null!=(c=a.ra)?c:new yh}c=a.program;a=a.globalName;var d=new Ah;this.j=d.promise;this.nd=p((0,y[a].a)(c,function(e,f){Promise.resolve().then(function(){var g;if(null!=(g=b.ra)){var h=zh()-g.o;g.m.i.fb("/client_streamz/bg/fil",h,g.Aa)}d.resolve({yc:e,kd:f})})},!0)).next().value;
this.jd=d.promise.then(function(){})}
Bh.prototype.snapshot=function(a){var b=this;if(this.Ua)throw Error("Already disposed");var c=zh(),d;null!=(d=this.ra)&&d.j.i.Cb("/client_streamz/bg/fsc",d.Aa);return this.j.then(function(e){var f=e.yc;return new Promise(function(g){f(function(h){var k;if(null!=(k=b.ra)){var m=zh()-c;k.l.i.fb("/client_streamz/bg/fsl",m,k.Aa)}g(h)},[a.Nb,
a.ld])})})};
Bh.prototype.dispose=function(){var a;null!=(a=this.ra)&&a.i.gb();this.Ua=!0;this.j.then(function(b){(b=b.kd)&&b()})};
Bh.prototype.i=function(){return this.Ua};var Ch=window;Db("csi.gstatic.com");Db("googleads.g.doubleclick.net");Db("partner.googleadservices.com");Db("pubads.g.doubleclick.net");Db("securepubads.g.doubleclick.net");Db("tpc.googlesyndication.com");/*

 SPDX-License-Identifier: Apache-2.0
*/
var Dh;try{new URL("s://g"),Dh=!0}catch(a){Dh=!1}var Eh=Dh;function Fh(a,b){a.src=Ib(b);var c,d;(c=(b=null==(d=(c=(a.ownerDocument&&a.ownerDocument.defaultView||window).document).querySelector)?void 0:d.call(c,"script[nonce]"))?b.nonce||b.getAttribute("nonce")||"":"")&&a.setAttribute("nonce",c)}
;function Gh(a){var b=Hh;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a(b[c],c,b)}
function Ih(){var a=[];Gh(function(b){a.push(b)});
return a}
var Hh={Gd:"allow-forms",Hd:"allow-modals",Id:"allow-orientation-lock",Jd:"allow-pointer-lock",Kd:"allow-popups",Ld:"allow-popups-to-escape-sandbox",Md:"allow-presentation",Nd:"allow-same-origin",Od:"allow-scripts",Pd:"allow-top-navigation",Qd:"allow-top-navigation-by-user-activation"},Jh=db(function(){return Ih()});
function Kh(){var a=Lh(),b={};fb(Jh(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
function Lh(){var a=void 0===a?document:a;return a.createElement("iframe")}
;function Mh(a){this.isValid=a}
function Nh(a){return new Mh(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}
var Oh=[Nh("data"),Nh("http"),Nh("https"),Nh("mailto"),Nh("ftp"),new Mh(function(a){return/^[^:]*([/?#]|$)/.test(a)})];function Ph(a){"number"==typeof a&&(a=Math.round(a)+"px");return a}
;var Qh=(new Date).getTime();var Rh="client_dev_domain client_dev_regex_map client_dev_root_url client_rollout_override expflag forcedCapability jsfeat jsmode mods".split(" ");ia(Rh);function Sh(a){$e.call(this);var b=this;this.A=this.l=0;this.Y=null!=a?a:{S:function(e,f){return setTimeout(e,f)},
ea:function(e){clearTimeout(e)}};
var c,d;this.j=null!=(d=null==(c=window.navigator)?void 0:c.onLine)?d:!0;this.o=function(){return w(function(e){return v(e,Th(b),0)})};
window.addEventListener("offline",this.o);window.addEventListener("online",this.o);this.A||Uh(this)}
r(Sh,$e);function Vh(){var a=Wh;Sh.i||(Sh.i=new Sh(a));return Sh.i}
Sh.prototype.dispose=function(){window.removeEventListener("offline",this.o);window.removeEventListener("online",this.o);this.Y.ea(this.A);delete Sh.i};
Sh.prototype.M=function(){return this.j};
function Uh(a){a.A=a.Y.S(function(){var b;return w(function(c){if(1==c.i)return a.j?(null==(b=window.navigator)?0:b.onLine)?c.u(3):v(c,Th(a),3):v(c,Th(a),3);Uh(a);c.i=0})},3E4)}
function Th(a,b){return a.s?a.s:a.s=new Promise(function(c){var d,e,f,g;return w(function(h){switch(h.i){case 1:return d=window.AbortController?new window.AbortController:void 0,f=null==(e=d)?void 0:e.signal,g=!1,ya(h,2,3),d&&(a.l=a.Y.S(function(){d.abort()},b||2E4)),v(h,fetch("/generate_204",{method:"HEAD",
signal:f}),5);case 5:g=!0;case 3:Ba(h);a.s=void 0;a.l&&(a.Y.ea(a.l),a.l=0);g!==a.j&&(a.j=g,a.j?af(a,"networkstatus-online"):af(a,"networkstatus-offline"));c(g);Ca(h);break;case 2:Aa(h),g=!1,h.u(3)}})})}
;var Xh={Zh:"EMBEDDED_PLAYER_MODE_UNKNOWN",Wh:"EMBEDDED_PLAYER_MODE_DEFAULT",Yh:"EMBEDDED_PLAYER_MODE_PFP",Xh:"EMBEDDED_PLAYER_MODE_PFL"},Yh={nq:"WEB_DISPLAY_MODE_UNKNOWN",jq:"WEB_DISPLAY_MODE_BROWSER",lq:"WEB_DISPLAY_MODE_MINIMAL_UI",mq:"WEB_DISPLAY_MODE_STANDALONE",kq:"WEB_DISPLAY_MODE_FULLSCREEN"};function Zh(){this.data_=[];this.i=-1}
Zh.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&Number.isInteger(a)&&this.data_[a]!==b&&(this.data_[a]=b,this.i=-1)};
Zh.prototype.get=function(a){return!!this.data_[a]};
function $h(a){-1===a.i&&(a.i=ib(a.data_,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.i}
;function ai(a,b){this.i=a[y.Symbol.iterator]();this.j=b}
ai.prototype[Symbol.iterator]=function(){return this};
ai.prototype.next=function(){var a=this.i.next();return{value:a.done?void 0:this.j.call(void 0,a.value),done:a.done}};
function bi(a,b){return new ai(a,b)}
;function ci(){this.blockSize=-1}
;function di(){this.blockSize=-1;this.blockSize=64;this.i=[];this.o=[];this.s=[];this.l=[];this.l[0]=128;for(var a=1;a<this.blockSize;++a)this.l[a]=0;this.m=this.j=0;this.reset()}
Za(di,ci);di.prototype.reset=function(){this.i[0]=1732584193;this.i[1]=4023233417;this.i[2]=2562383102;this.i[3]=271733878;this.i[4]=3285377520;this.m=this.j=0};
function ei(a,b,c){c||(c=0);var d=a.s;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.i[0];c=a.i[1];var g=a.i[2],h=a.i[3],k=a.i[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var m=1518500249}else f=c^g^h,m=1859775393;else 60>e?(f=c&g|h&(c|g),m=2400959708):
(f=c^g^h,m=3395469782);f=(b<<5|b>>>27)+f+k+m+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.i[0]=a.i[0]+b&4294967295;a.i[1]=a.i[1]+c&4294967295;a.i[2]=a.i[2]+g&4294967295;a.i[3]=a.i[3]+h&4294967295;a.i[4]=a.i[4]+k&4294967295}
di.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.o,f=this.j;d<b;){if(0==f)for(;d<=c;)ei(this,a,d),d+=this.blockSize;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){ei(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){ei(this,e);f=0;break}}this.j=f;this.m+=b}};
di.prototype.digest=function(){var a=[],b=8*this.m;56>this.j?this.update(this.l,56-this.j):this.update(this.l,this.blockSize-(this.j-56));for(var c=this.blockSize-1;56<=c;c--)this.o[c]=b&255,b/=256;ei(this,this.o);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.i[c]>>d&255,++b;return a};function fi(a){return"string"==typeof a.className?a.className:a.getAttribute&&a.getAttribute("class")||""}
function gi(a,b){"string"==typeof a.className?a.className=b:a.setAttribute&&a.setAttribute("class",b)}
function hi(a,b){a.classList?b=a.classList.contains(b):(a=a.classList?a.classList:fi(a).match(/\S+/g)||[],b=0<=eb(a,b));return b}
function ii(){var a=document.body;a.classList?a.classList.remove("inverted-hdpi"):hi(a,"inverted-hdpi")&&gi(a,Array.prototype.filter.call(a.classList?a.classList:fi(a).match(/\S+/g)||[],function(b){return"inverted-hdpi"!=b}).join(" "))}
;function ji(){}
ji.prototype.next=function(){return ki};
var ki={done:!0,value:void 0};function li(a){return{value:a,done:!1}}
ji.prototype.da=function(){return this};function mi(a){if(a instanceof ni||a instanceof oi||a instanceof pi)return a;if("function"==typeof a.next)return new ni(function(){return a});
if("function"==typeof a[Symbol.iterator])return new ni(function(){return a[Symbol.iterator]()});
if("function"==typeof a.da)return new ni(function(){return a.da()});
throw Error("Not an iterator or iterable.");}
function ni(a){this.j=a}
ni.prototype.da=function(){return new oi(this.j())};
ni.prototype[Symbol.iterator]=function(){return new pi(this.j())};
ni.prototype.i=function(){return new pi(this.j())};
function oi(a){this.j=a}
r(oi,ji);oi.prototype.next=function(){return this.j.next()};
oi.prototype[Symbol.iterator]=function(){return new pi(this.j)};
oi.prototype.i=function(){return new pi(this.j)};
function pi(a){ni.call(this,function(){return a});
this.l=a}
r(pi,ni);pi.prototype.next=function(){return this.l.next()};function qi(a,b){this.j={};this.i=[];this.na=this.size=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof qi)for(c=a.ob(),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
l=qi.prototype;l.ob=function(){ri(this);return this.i.concat()};
l.has=function(a){return si(this.j,a)};
l.equals=function(a,b){if(this===a)return!0;if(this.size!=a.size)return!1;b=b||ti;ri(this);for(var c,d=0;c=this.i[d];d++)if(!b(this.get(c),a.get(c)))return!1;return!0};
function ti(a,b){return a===b}
l.isEmpty=function(){return 0==this.size};
l.clear=function(){this.j={};this.na=this.size=this.i.length=0};
l.remove=function(a){return this.delete(a)};
l.delete=function(a){return si(this.j,a)?(delete this.j[a],--this.size,this.na++,this.i.length>2*this.size&&ri(this),!0):!1};
function ri(a){if(a.size!=a.i.length){for(var b=0,c=0;b<a.i.length;){var d=a.i[b];si(a.j,d)&&(a.i[c++]=d);b++}a.i.length=c}if(a.size!=a.i.length){var e={};for(c=b=0;b<a.i.length;)d=a.i[b],si(e,d)||(a.i[c++]=d,e[d]=1),b++;a.i.length=c}}
l.get=function(a,b){return si(this.j,a)?this.j[a]:b};
l.set=function(a,b){si(this.j,a)||(this.size+=1,this.i.push(a),this.na++);this.j[a]=b};
l.forEach=function(a,b){for(var c=this.ob(),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
l.clone=function(){return new qi(this)};
l.keys=function(){return mi(this.da(!0)).i()};
l.values=function(){return mi(this.da(!1)).i()};
l.entries=function(){var a=this;return bi(this.keys(),function(b){return[b,a.get(b)]})};
l.da=function(a){ri(this);var b=0,c=this.na,d=this,e=new ji;e.next=function(){if(c!=d.na)throw Error("The map has changed since the iterator was created");if(b>=d.i.length)return ki;var f=d.i[b++];return li(a?f:d.j[f])};
return e};
function si(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
;function K(a){J.call(this);this.s=1;this.m=[];this.o=0;this.j=[];this.l={};this.A=!!a}
Za(K,J);l=K.prototype;l.subscribe=function(a,b,c){var d=this.l[a];d||(d=this.l[a]=[]);var e=this.s;this.j[e]=a;this.j[e+1]=b;this.j[e+2]=c;this.s=e+3;d.push(e);return e};
function ui(a,b,c,d){if(b=a.l[b]){var e=a.j;(b=b.find(function(f){return e[f+1]==c&&e[f+2]==d}))&&a.Ca(b)}}
l.Ca=function(a){var b=this.j[a];if(b){var c=this.l[b];0!=this.o?(this.m.push(a),this.j[a+1]=function(){}):(c&&lb(c,a),delete this.j[a],delete this.j[a+1],delete this.j[a+2])}return!!b};
l.oa=function(a,b){var c=this.l[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.A)for(e=0;e<c.length;e++){var g=c[e];vi(this.j[g+1],this.j[g+2],d)}else{this.o++;try{for(e=0,f=c.length;e<f&&!this.i();e++)g=c[e],this.j[g+1].apply(this.j[g+2],d)}finally{if(this.o--,0<this.m.length&&0==this.o)for(;c=this.m.pop();)this.Ca(c)}}return 0!=e}return!1};
function vi(a,b,c){uf(function(){a.apply(b,c)})}
l.clear=function(a){if(a){var b=this.l[a];b&&(b.forEach(this.Ca,this),delete this.l[a])}else this.j.length=0,this.l={}};
l.D=function(){K.X.D.call(this);this.clear();this.m.length=0};function wi(a){this.i=a}
wi.prototype.set=function(a,b){void 0===b?this.i.remove(a):this.i.set(a,xg(b))};
wi.prototype.get=function(a){try{var b=this.i.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
wi.prototype.remove=function(a){this.i.remove(a)};function xi(a){this.i=a}
Za(xi,wi);function yi(a){this.data=a}
function zi(a){return void 0===a||a instanceof yi?a:new yi(a)}
xi.prototype.set=function(a,b){xi.X.set.call(this,a,zi(b))};
xi.prototype.j=function(a){a=xi.X.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
xi.prototype.get=function(a){if(a=this.j(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function Ai(a){this.i=a}
Za(Ai,xi);Ai.prototype.set=function(a,b,c){if(b=zi(b)){if(c){if(c<Date.now()){Ai.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Date.now()}Ai.X.set.call(this,a,b)};
Ai.prototype.j=function(a){var b=Ai.X.j.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Date.now()||c&&c>Date.now())Ai.prototype.remove.call(this,a);else return b}};function Bi(){}
;function Ci(){}
Za(Ci,Bi);Ci.prototype[Symbol.iterator]=function(){return mi(this.da(!0)).i()};
Ci.prototype.clear=function(){var a=Array.from(this);a=p(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function Di(a){this.i=a}
Za(Di,Ci);l=Di.prototype;l.isAvailable=function(){if(!this.i)return!1;try{return this.i.setItem("__sak","1"),this.i.removeItem("__sak"),!0}catch(a){return!1}};
l.set=function(a,b){try{this.i.setItem(a,b)}catch(c){if(0==this.i.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
l.get=function(a){a=this.i.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.i.removeItem(a)};
l.da=function(a){var b=0,c=this.i,d=new ji;d.next=function(){if(b>=c.length)return ki;var e=c.key(b++);if(a)return li(e);e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return li(e)};
return d};
l.clear=function(){this.i.clear()};
l.key=function(a){return this.i.key(a)};function Ei(){var a=null;try{a=window.localStorage||null}catch(b){}this.i=a}
Za(Ei,Di);function Fi(a,b){this.j=a;this.i=null;var c;if(c=Kc)c=!(9<=Number(Yc));if(c){Gi||(Gi=new qi);this.i=Gi.get(a);this.i||(b?this.i=document.getElementById(b):(this.i=document.createElement("userdata"),this.i.addBehavior("#default#userData"),document.body.appendChild(this.i)),Gi.set(a,this.i));try{this.i.load(this.j)}catch(d){this.i=null}}}
Za(Fi,Ci);var Hi={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},Gi=null;function Ii(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return Hi[b]})}
l=Fi.prototype;l.isAvailable=function(){return!!this.i};
l.set=function(a,b){this.i.setAttribute(Ii(a),b);Ji(this)};
l.get=function(a){a=this.i.getAttribute(Ii(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.i.removeAttribute(Ii(a));Ji(this)};
l.da=function(a){var b=0,c=this.i.XMLDocument.documentElement.attributes,d=new ji;d.next=function(){if(b>=c.length)return ki;var e=c[b++];if(a)return li(decodeURIComponent(e.nodeName.replace(/\./g,"%")).slice(1));e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return li(e)};
return d};
l.clear=function(){for(var a=this.i.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);Ji(this)};
function Ji(a){try{a.i.save(a.j)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function Ki(a,b){this.j=a;this.i=b+"::"}
Za(Ki,Ci);Ki.prototype.set=function(a,b){this.j.set(this.i+a,b)};
Ki.prototype.get=function(a){return this.j.get(this.i+a)};
Ki.prototype.remove=function(a){this.j.remove(this.i+a)};
Ki.prototype.da=function(a){var b=this.j[Symbol.iterator](),c=this,d=new ji;d.next=function(){var e=b.next();if(e.done)return e;for(e=e.value;e.slice(0,c.i.length)!=c.i;){e=b.next();if(e.done)return e;e=e.value}return li(a?e.slice(c.i.length):c.j.get(e))};
return d};function Li(a){I.call(this,a)}
r(Li,I);function Mi(a){I.call(this,a)}
r(Mi,I);Mi.prototype.getKey=function(){return Od(this,1)};
Mi.prototype.getValue=function(){return $d(this,2===Td(this,Ni)?2:-1)};
Mi.prototype.setValue=function(a){return Sd(this,2,Ni,a)};
var Ni=[2,3,4,5,6];function Oi(a){I.call(this,a)}
r(Oi,I);function Pi(a){I.call(this,a)}
r(Pi,I);function Qi(a){I.call(this,a,-1,Ri)}
r(Qi,I);var Ri=[2];function Si(a){I.call(this,a,-1,Ti)}
r(Si,I);Si.prototype.getPlayerType=function(){return Od(this,36)};
Si.prototype.setHomeGroupInfo=function(a){return G(this,Qi,81,a)};
Si.prototype.clearLocationPlayabilityToken=function(){return D(this,89,void 0,!1)};
var Ti=[9,66,24,32,86,100,101];function Ui(a){I.call(this,a,-1,Vi)}
r(Ui,I);var Vi=[15,26,28];function Wi(a){I.call(this,a)}
r(Wi,I);Wi.prototype.setToken=function(a){return D(this,2,a)};function Xi(a){I.call(this,a,-1,Yi)}
r(Xi,I);Xi.prototype.setSafetyMode=function(a){return D(this,5,a)};
var Yi=[12];function Zi(a){I.call(this,a,-1,$i)}
r(Zi,I);Zi.prototype.C=function(a){G(this,Si,1,a)};
var $i=[12];function aj(a){this.name=a}
;var bj=new aj("continuationCommand");var cj=new aj("webCommandMetadata");var dj=new aj("signalServiceEndpoint");var ej=new aj("feedbackEndpoint");function fj(a){I.call(this,a,-1,gj)}
r(fj,I);function hj(a){I.call(this,a)}
r(hj,I);hj.prototype.getKey=function(){return Qd(this,1,"")};
hj.prototype.getValue=function(){return Qd(this,2,"")};
hj.prototype.setValue=function(a){return D(this,2,a)};
var gj=[4,5];function ij(a){I.call(this,a)}
r(ij,I);function jj(a){I.call(this,a)}
r(jj,I);var kj=[2,3,4];function lj(a){I.call(this,a)}
r(lj,I);lj.prototype.getMessage=function(){return Qd(this,1,"")};function mj(a){I.call(this,a)}
r(mj,I);function nj(a){I.call(this,a)}
r(nj,I);function oj(a){I.call(this,a,-1,pj)}
r(oj,I);var pj=[10,17];function qj(a){I.call(this,a)}
r(qj,I);function rj(a){I.call(this,a)}
r(rj,I);function sj(a){I.call(this,a)}
r(sj,I);function tj(a){I.call(this,a)}
r(tj,I);function uj(a){I.call(this,a)}
r(uj,I);function vj(a,b){G(a,sj,1,b)}
uj.prototype.l=function(a){D(this,2,a)};
function wj(a){I.call(this,a)}
r(wj,I);function xj(a,b){G(a,sj,1,b)}
;function yj(a){I.call(this,a,-1,zj)}
r(yj,I);yj.prototype.l=function(a){D(this,1,a)};
function Aj(a,b){G(a,sj,2,b)}
var zj=[3];function Bj(a){I.call(this,a)}
r(Bj,I);Bj.prototype.l=function(a){D(this,1,a)};function Cj(a){I.call(this,a)}
r(Cj,I);Cj.prototype.l=function(a){D(this,1,a)};function Dj(a){I.call(this,a)}
r(Dj,I);Dj.prototype.l=function(a){D(this,1,a)};function Ej(a){I.call(this,a)}
r(Ej,I);Ej.prototype.l=function(a){D(this,1,a)};function Fj(a){I.call(this,a)}
r(Fj,I);function Gj(a){I.call(this,a)}
r(Gj,I);function Hj(a){I.call(this,a,-1,Ij)}
r(Hj,I);Hj.prototype.getPlayerType=function(){return Qd(this,7,0)};
Hj.prototype.setVideoId=function(a){return D(this,19,a)};
function Jj(a,b){Zd(a,68,Kj,b)}
function Kj(a){I.call(this,a)}
r(Kj,I);Kj.prototype.getId=function(){return Qd(this,2,"")};
var Ij=[83,68];function Lj(a){I.call(this,a)}
r(Lj,I);function Mj(a){I.call(this,a)}
r(Mj,I);function Nj(a){I.call(this,a)}
r(Nj,I);function Oj(a){I.call(this,a,442)}
r(Oj,I);
var Pj=[23,24,11,6,7,5,2,3,13,20,21,22,28,32,37,229,241,45,59,225,288,72,73,78,208,156,202,215,74,76,79,80,111,85,91,97,100,102,105,119,126,127,136,146,148,151,157,158,159,163,164,168,176,222,383,177,178,179,411,184,188,189,190,191,193,194,195,196,197,198,199,200,201,402,320,203,204,205,206,258,259,260,261,327,209,219,226,227,232,233,234,240,244,247,248,249,251,256,257,266,254,255,270,272,278,291,293,300,304,308,309,310,311,313,314,319,321,323,324,328,330,331,332,334,337,338,340,344,348,350,351,352,
353,354,355,356,357,358,361,363,364,368,369,370,373,374,375,378,380,381,388,389,403,410,412,429,413,414,415,416,417,418,430,423,424,425,426,427,431,117,439,441];var Qj={bj:0,Mi:1,Si:2,Ti:4,Yi:8,Ui:16,Vi:32,aj:64,Zi:128,Oi:256,Qi:512,Xi:1024,Pi:2048,Ri:4096,Ni:8192,Wi:16384};function Rj(a){I.call(this,a)}
r(Rj,I);function Sj(a){I.call(this,a)}
r(Sj,I);Sj.prototype.setVideoId=function(a){return Sd(this,1,nk,a)};
Sj.prototype.getPlaylistId=function(){return $d(this,2===Td(this,nk)?2:-1)};
var nk=[1,2];function ok(a){I.call(this,a,-1,pk)}
r(ok,I);var pk=[3];var qk=new aj("webPlayerShareEntityServiceEndpoint");var rk=new aj("playlistEditEndpoint");var sk=new aj("modifyChannelNotificationPreferenceEndpoint");var tk=new aj("unsubscribeEndpoint");var uk=new aj("subscribeEndpoint");function vk(a,b){1<b.length?a[b[0]]=b[1]:1===b.length&&Object.assign(a,b[0])}
;var wk=y.window,xk,yk,zk=(null==wk?void 0:null==(xk=wk.yt)?void 0:xk.config_)||(null==wk?void 0:null==(yk=wk.ytcfg)?void 0:yk.data_)||{};z("yt.config_",zk);function Ak(){vk(zk,arguments)}
function L(a,b){return a in zk?zk[a]:b}
function Bk(){var a=zk.EXPERIMENT_FLAGS;return a?a.web_disable_gel_stp_ecatcher_killswitch:void 0}
;function M(a){a=Ck(a);return"string"===typeof a&&"false"===a?!1:!!a}
function Dk(a,b){a=Ck(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function Ek(){return L("EXPERIMENTS_TOKEN","")}
function Ck(a){var b=L("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:L("EXPERIMENT_FLAGS",{})[a]}
function Fk(){var a=[],b=L("EXPERIMENTS_FORCED_FLAGS",{});for(c in b)a.push({key:c,value:String(b[c])});var c=L("EXPERIMENT_FLAGS",{});for(var d in c)d.startsWith("force_")&&void 0===b[d]&&a.push({key:d,value:String(c[d])});return a}
;var Gk=[];function Hk(a){Gk.forEach(function(b){return b(a)})}
function Ik(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Jk(b)}}:a}
function Jk(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"ERROR",b,c,d):(e=L("ERRORS",[]),e.push([a,"ERROR",b,c,d]),Ak("ERRORS",e));Hk(a)}
function Kk(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"WARNING",b,c,d):(e=L("ERRORS",[]),e.push([a,"WARNING",b,c,d]),Ak("ERRORS",e))}
;function Lk(){var a=Mk;B("yt.ads.biscotti.getId_")||z("yt.ads.biscotti.getId_",a)}
function Nk(a){z("yt.ads.biscotti.lastId_",a)}
;var Ok=/^[\w.]*$/,Pk={q:!0,search_query:!0};function Qk(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1==f.length&&f[0]||2==f.length)try{var g=Rk(f[0]||""),h=Rk(f[1]||"");g in c?Array.isArray(c[g])?mb(c[g],h):c[g]=[c[g],h]:c[g]=h}catch(t){var k=t,m=f[0],q=String(Qk);k.args=[{key:m,value:f[1],query:a,method:Sk==q?"unchanged":q}];Pk.hasOwnProperty(m)||Kk(k)}}return c}
var Sk=String(Qk);function Tk(a){var b=[];ob(a,function(c,d){var e=encodeURIComponent(String(d)),f;Array.isArray(c)?f=c:f=[c];fb(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function Uk(a){"?"==a.charAt(0)&&(a=a.substr(1));return Qk(a,"&")}
function Vk(a){return-1!=a.indexOf("?")?(a=(a||"").split("#")[0],a=a.split("?",2),Uk(1<a.length?a[1]:a[0])):{}}
function Wk(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=Uk(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);return vc(a,e)+d}
function Xk(a){if(!b)var b=window.location.href;var c=nc(1,a),d=oc(a);c&&d?(a=a.match(lc),b=b.match(lc),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?oc(b)==d&&(Number(nc(4,b))||null)==(Number(nc(4,a))||null):!0;return a}
function Rk(a){return a&&a.match(Ok)?a:decodeURIComponent(a.replace(/\+/g," "))}
;function Yk(a){var b=Zk;a=void 0===a?B("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=Qh;e.flash="0";a:{try{var f=b.i.top.location.href}catch(ea){f=2;break a}f=f?f===b.j.location.href?0:1:2}e=(e.frm=f,e);try{e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?Ch:g;try{var h=g.history.length}catch(ea){h=0}e.u_his=h;var k;e.u_h=null==(k=Ch.screen)?void 0:k.height;var m;e.u_w=null==(m=Ch.screen)?void 0:m.width;var q;e.u_ah=null==(q=Ch.screen)?void 0:q.availHeight;var t;e.u_aw=
null==(t=Ch.screen)?void 0:t.availWidth;var x;e.u_cd=null==(x=Ch.screen)?void 0:x.colorDepth}catch(ea){}h=b.i;try{var u=h.screenX;var A=h.screenY}catch(ea){}try{var E=h.outerWidth;var F=h.outerHeight}catch(ea){}try{var O=h.innerWidth;var N=h.innerHeight}catch(ea){}try{var R=h.screenLeft;var ca=h.screenTop}catch(ea){}try{O=h.innerWidth,N=h.innerHeight}catch(ea){}try{var W=h.screen.availWidth;var nb=h.screen.availTop}catch(ea){}u=[R,ca,u,A,W,nb,E,F,O,N];try{var Va=(b.i.top||window).document,la="CSS1Compat"==
Va.compatMode?Va.documentElement:Va.body;var H=(new gf(la.clientWidth,la.clientHeight)).round()}catch(ea){H=new gf(-12245933,-12245933)}Va=H;H={};var ka=void 0===ka?y:ka;la=new Zh;ka.SVGElement&&ka.document.createElementNS&&la.set(0);A=Kh();A["allow-top-navigation-by-user-activation"]&&la.set(1);A["allow-popups-to-escape-sandbox"]&&la.set(2);ka.crypto&&ka.crypto.subtle&&la.set(3);ka.TextDecoder&&ka.TextEncoder&&la.set(4);ka=$h(la);H.bc=ka;H.bih=Va.height;H.biw=Va.width;H.brdim=u.join();b=b.j;b=(H.vis=
b.prerendering?3:{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,H.wgl=!!Ch.WebGLRenderingContext,H);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var Zk=new function(){var a=window.document;this.i=window;this.j=a};
z("yt.ads_.signals_.getAdSignalsString",function(a){return Tk(Yk(a))});Date.now();var $k="XMLHttpRequest"in y?function(){return new XMLHttpRequest}:null;
function al(){if(!$k)return null;var a=$k();return"open"in a?a:null}
function bl(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function cl(a,b){"function"===typeof a&&(a=Ik(a));return window.setTimeout(a,b)}
function dl(a){window.clearTimeout(a)}
;var el={Authorization:"AUTHORIZATION","X-Goog-EOM-Visitor-Id":"EOM_VISITOR_DATA","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Domain-Admin-State":"DOMAIN_ADMIN_STATE","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL",
"X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},fl="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" ").concat(ia(Rh)),gl=!1;
function hl(a,b){b=void 0===b?{}:b;var c=Xk(a),d=M("web_ajax_ignore_global_headers_if_set"),e;for(e in el){var f=L(el[e]);"X-Goog-Visitor-Id"!==e||f||(f=L("VISITOR_DATA"));!f||!c&&oc(a)||d&&void 0!==b[e]||(b[e]=f)}"X-Goog-EOM-Visitor-Id"in b&&"X-Goog-Visitor-Id"in b&&delete b["X-Goog-Visitor-Id"];if(c||!oc(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!oc(a)){try{var g=(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(h){}g&&(b["X-YouTube-Time-Zone"]=g)}if(c||
!oc(a))b["X-YouTube-Ad-Signals"]=Tk(Yk());return b}
function il(a){var b=window.location.search,c=oc(a);M("debug_handle_relative_url_for_query_forward_killswitch")||c||!Xk(a)||(c=document.location.hostname);var d=mc(nc(5,a));d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=Uk(b),f={};fb(fl,function(g){e[g]&&(f[g]=e[g])});
return Wk(a,f||{},!1)}
function jl(a,b){var c=b.format||"JSON";a=kl(a,b);var d=ll(a,b),e=!1,f=ml(a,function(k){if(!e){e=!0;h&&dl(h);var m=bl(k),q=null,t=400<=k.status&&500>k.status,x=500<=k.status&&600>k.status;if(m||t||x)q=nl(a,c,k,b.convertToSafeHtml);if(m)a:if(k&&204==k.status)m=!0;else{switch(c){case "XML":m=0==parseInt(q&&q.return_code,10);break a;case "RAW":m=!0;break a}m=!!q}q=q||{};t=b.context||y;m?b.onSuccess&&b.onSuccess.call(t,k,q):b.onError&&b.onError.call(t,k,q);b.onFinish&&b.onFinish.call(t,k,q)}},b.method,
d,b.headers,b.responseType,b.withCredentials);
d=b.timeout||0;if(b.onTimeout&&0<d){var g=b.onTimeout;var h=cl(function(){e||(e=!0,f.abort(),dl(h),g.call(b.context||y,f))},d)}return f}
function kl(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=L("XSRF_FIELD_NAME");if(b=b.urlParams)b[c]&&delete b[c],a=Wk(a,b||{},!0);return a}
function ll(a,b){var c=L("XSRF_FIELD_NAME"),d=L("XSRF_TOKEN"),e=b.postBody||"",f=b.postParams,g=L("XSRF_FIELD_NAME"),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||oc(a)&&!b.withCredentials&&oc(a)!=document.location.hostname||"POST"!=b.method||h&&"application/x-www-form-urlencoded"!=h||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);(M("ajax_parse_query_data_only_when_filled")&&f&&0<Object.keys(f).length||f)&&"string"===typeof e&&(e=Uk(e),yb(e,f),e=b.postBodyFormat&&"JSON"==b.postBodyFormat?
JSON.stringify(e):tc(e));f=e||f&&!rb(f);!gl&&f&&"POST"!=b.method&&(gl=!0,Jk(Error("AJAX request with postData should use POST")));return e}
function nl(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,Kk(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?ol(a):null)e={},fb(a.getElementsByTagName("*"),function(g){e[g.tagName]=pl(g)})}d&&ql(e);
return e}
function ql(a){if(Qa(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;Db("HTML that is escaped and sanitized server-side and passed through yt.net.ajax");var d=a[b],e=Ab();d=e?e.createHTML(d):d;a[c]=new ec(d)}else ql(a[b])}}
function ol(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function pl(a){var b="";fb(a.childNodes,function(c){b+=c.nodeValue});
return b}
function ml(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&Ik(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=al();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;M("debug_forward_web_query_parameters")&&(a=il(a));k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=hl(a,e))for(var m in e)k.setRequestHeader(m,e[m]),"content-type"==m.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);
return k}
;function rl(a){var b=this;this.j=void 0;this.i=!1;a.addEventListener("beforeinstallprompt",function(c){c.preventDefault();b.j=c});
a.addEventListener("appinstalled",function(){b.i=!0},{once:!0})}
function sl(){if(!y.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return y.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":y.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":y.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":y.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;function tl(a,b,c,d,e){pg.set(""+a,b,{Ya:c,path:"/",domain:void 0===d?"youtube.com":d,secure:void 0===e?!1:e})}
function ul(a,b,c){pg.remove(""+a,void 0===b?"/":b,void 0===c?"youtube.com":c)}
function vl(){if(!pg.isEnabled())return!1;if(!pg.isEmpty())return!0;pg.set("TESTCOOKIESENABLED","1",{Ya:60});if("1"!==pg.get("TESTCOOKIESENABLED"))return!1;pg.remove("TESTCOOKIESENABLED");return!0}
;var wl=B("ytglobal.prefsUserPrefsPrefs_")||{};z("ytglobal.prefsUserPrefsPrefs_",wl);function xl(){this.i=L("ALT_PREF_COOKIE_NAME","PREF");this.j=L("ALT_PREF_COOKIE_DOMAIN","youtube.com");var a=pg.get(""+this.i,void 0);if(a){a=decodeURIComponent(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(wl[d]=c.toString())}}}
xl.prototype.get=function(a,b){yl(a);zl(a);a=void 0!==wl[a]?wl[a].toString():null;return null!=a?a:b?b:""};
xl.prototype.set=function(a,b){yl(a);zl(a);if(null==b)throw Error("ExpectedNotNull");wl[a]=b.toString()};
function Al(a){return!!((Bl("f"+(Math.floor(a/31)+1))||0)&1<<a%31)}
xl.prototype.remove=function(a){yl(a);zl(a);delete wl[a]};
xl.prototype.clear=function(){for(var a in wl)delete wl[a]};
function zl(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function yl(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function Bl(a){a=void 0!==wl[a]?wl[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
Na(xl);var Cl={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},Dl={CONN_DEFAULT:0,CONN_UNKNOWN:1,CONN_NONE:2,CONN_WIFI:3,CONN_CELLULAR_2G:4,CONN_CELLULAR_3G:5,CONN_CELLULAR_4G:6,CONN_CELLULAR_UNKNOWN:7,CONN_DISCO:8,CONN_CELLULAR_5G:9,CONN_WIFI_METERED:10,CONN_CELLULAR_5G_SA:11,
CONN_CELLULAR_5G_NSA:12,CONN_INVALID:31},El={EFFECTIVE_CONNECTION_TYPE_UNKNOWN:0,EFFECTIVE_CONNECTION_TYPE_OFFLINE:1,EFFECTIVE_CONNECTION_TYPE_SLOW_2G:2,EFFECTIVE_CONNECTION_TYPE_2G:3,EFFECTIVE_CONNECTION_TYPE_3G:4,EFFECTIVE_CONNECTION_TYPE_4G:5},Fl={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};function Gl(){var a=y.navigator;return a?a.connection:void 0}
function Hl(){var a=Gl();if(a){var b=Cl[a.type||"unknown"]||"CONN_UNKNOWN";a=Cl[a.effectiveType||"unknown"]||"CONN_UNKNOWN";"CONN_CELLULAR_UNKNOWN"===b&&"CONN_UNKNOWN"!==a&&(b=a);if("CONN_UNKNOWN"!==b)return b;if("CONN_UNKNOWN"!==a)return a}}
function Il(){var a=Gl();if(null!=a&&a.effectiveType)return Fl.hasOwnProperty(a.effectiveType)?Fl[a.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN"}
;function Jl(){return"INNERTUBE_API_KEY"in zk&&"INNERTUBE_API_VERSION"in zk}
function Kl(){return{innertubeApiKey:L("INNERTUBE_API_KEY"),innertubeApiVersion:L("INNERTUBE_API_VERSION"),qb:L("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),Ub:L("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),Lc:L("INNERTUBE_CONTEXT_CLIENT_NAME",1),innertubeContextClientVersion:L("INNERTUBE_CONTEXT_CLIENT_VERSION"),Wb:L("INNERTUBE_CONTEXT_HL"),Vb:L("INNERTUBE_CONTEXT_GL"),Mc:L("INNERTUBE_HOST_OVERRIDE")||"",Oc:!!L("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),Nc:!!L("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:L("SERIALIZED_CLIENT_CONFIG_DATA")}}
function Ll(a){var b={client:{hl:a.Wb,gl:a.Vb,clientName:a.Ub,clientVersion:a.innertubeContextClientVersion,configInfo:a.qb}};navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=y.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=Ek();""!==c&&(b.client.experimentsToken=c);c=Fk();0<c.length&&(b.request={internalExperimentFlags:c});Ml(a,void 0,b);Nl(void 0,b);Ol(a,void 0,b);Pl(void 0,b);L("DELEGATED_SESSION_ID")&&!M("pageid_as_header_web")&&(b.user={onBehalfOfUser:L("DELEGATED_SESSION_ID")});
a=Object;c=a.assign;for(var d=b.client,e={},f=p(Object.entries(Uk(L("DEVICE","")))),g=f.next();!g.done;g=f.next()){var h=p(g.value);g=h.next().value;h=h.next().value;"cbrand"===g?e.deviceMake=h:"cmodel"===g?e.deviceModel=h:"cbr"===g?e.browserName=h:"cbrver"===g?e.browserVersion=h:"cos"===g?e.osName=h:"cosver"===g?e.osVersion=h:"cplatform"===g&&(e.platform=h)}b.client=c.call(a,d,e);return b}
function Ql(a){var b=new Zi,c=new Si;D(c,1,a.Wb);D(c,2,a.Vb);D(c,16,a.Lc);D(c,17,a.innertubeContextClientVersion);if(a.qb){var d=a.qb,e=new Oi;d.coldConfigData&&D(e,1,d.coldConfigData);d.appInstallData&&D(e,6,d.appInstallData);d.coldHashData&&D(e,3,d.coldHashData);d.hotHashData&&D(e,5,d.hotHashData);G(c,Oi,62,e)}(d=y.devicePixelRatio)&&1!=d&&D(c,65,d);d=Ek();""!==d&&D(c,54,d);d=Fk();if(0<d.length){e=new Ui;for(var f=0;f<d.length;f++){var g=new Mi;D(g,1,d[f].key);g.setValue(d[f].value);Zd(e,15,Mi,
g)}G(b,Ui,5,e)}Ml(a,c);Nl(c);Ol(a,c);Pl(c);L("DELEGATED_SESSION_ID")&&!M("pageid_as_header_web")&&(a=new Xi,D(a,3,L("DELEGATED_SESSION_ID")));a=p(Object.entries(Uk(L("DEVICE",""))));for(d=a.next();!d.done;d=a.next())e=p(d.value),d=e.next().value,e=e.next().value,"cbrand"===d?D(c,12,e):"cmodel"===d?D(c,13,e):"cbr"===d?D(c,87,e):"cbrver"===d?D(c,88,e):"cos"===d?D(c,18,e):"cosver"===d?D(c,19,e):"cplatform"===d&&D(c,42,e);b.C(c);return b}
function Ml(a,b,c){a=a.Ub;if("WEB"===a||"MWEB"===a||1===a||2===a)if(b){c=Ud(b,Pi,96)||new Pi;var d=sl();d=Object.keys(Yh).indexOf(d);d=-1===d?null:d;null!==d&&D(c,3,d);G(b,Pi,96,c)}else c&&(c.client.mainAppWebInfo=null!=(d=c.client.mainAppWebInfo)?d:{},c.client.mainAppWebInfo.webDisplayMode=sl())}
function Nl(a,b){var c;if(M("web_log_memory_total_kbytes")&&(null==(c=y.navigator)?0:c.deviceMemory)){var d;c=null==(d=y.navigator)?void 0:d.deviceMemory;a?D(a,95,1E6*c):b&&(b.client.memoryTotalKbytes=""+1E6*c)}}
function Ol(a,b,c){if(a.appInstallData)if(b){var d;c=null!=(d=Ud(b,Oi,62))?d:new Oi;D(c,6,a.appInstallData);G(b,Oi,62,c)}else c&&(c.client.configInfo=c.client.configInfo||{},c.client.configInfo.appInstallData=a.appInstallData)}
function Pl(a,b){var c=Hl();c&&(a?D(a,61,Dl[c]):b&&(b.client.connectionType=c));M("web_log_effective_connection_type")&&(c=Il())&&(a?D(a,94,El[c]):b&&(b.client.effectiveConnectionType=c))}
function Rl(a,b,c){c=void 0===c?{}:c;var d={};L("EOM_VISITOR_DATA")?d={"X-Goog-EOM-Visitor-Id":L("EOM_VISITOR_DATA")}:d={"X-Goog-Visitor-Id":c.visitorData||L("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;(b=c.Fq||L("AUTHORIZATION"))||(a?b="Bearer "+B("gapi.auth.getToken")().Eq:b=tg([]));b&&(d.Authorization=b,d["X-Goog-AuthUser"]=L("SESSION_INDEX",0),M("pageid_as_header_web")&&(d["X-Goog-PageId"]=L("DELEGATED_SESSION_ID")));return d}
;function Sl(a){a=Object.assign({},a);delete a.Authorization;var b=tg();if(b){var c=new di;c.update(L("INNERTUBE_API_KEY"));c.update(b);a.hash=dd(c.digest(),3)}return a}
;function Tl(a){var b=new Ei;(b=b.isAvailable()?a?new Ki(b,a):b:null)||(a=new Fi(a||"UserDataSharedStore"),b=a.isAvailable()?a:null);this.i=(a=b)?new Ai(a):null;this.j=document.domain||window.location.hostname}
Tl.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.i)try{this.i.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape(xg(b))}catch(f){return}else e=escape(b);tl(a,e,c,this.j)};
Tl.prototype.get=function(a,b){var c=void 0,d=!this.i;if(!d)try{c=this.i.get(a)}catch(e){d=!0}if(d&&(c=pg.get(""+a,void 0))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
Tl.prototype.remove=function(a){this.i&&this.i.remove(a);ul(a,"/",this.j)};var Ul=window,P=Ul.ytcsi&&Ul.ytcsi.now?Ul.ytcsi.now:Ul.performance&&Ul.performance.timing&&Ul.performance.now&&Ul.performance.timing.navigationStart?function(){return Ul.performance.timing.navigationStart+Ul.performance.now()}:function(){return(new Date).getTime()};var Vl;function Wl(){Vl||(Vl=new Tl("yt.innertube"));return Vl}
function Xl(a,b,c,d){if(d)return null;d=Wl().get("nextId",!0)||1;var e=Wl().get("requests",!0)||{};e[d]={method:a,request:b,authState:Sl(c),requestTime:Math.round(P())};Wl().set("nextId",d+1,86400,!0);Wl().set("requests",e,86400,!0);return d}
function Yl(a){var b=Wl().get("requests",!0)||{};delete b[a];Wl().set("requests",b,86400,!0)}
function Zl(a){var b=Wl().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(P())-d.requestTime)){var e=d.authState,f=Sl(Rl(!1));ub(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(P())),$l(a,d.method,e,{}));delete b[c]}}Wl().set("requests",b,86400,!0)}}
;function am(){}
am.prototype.S=function(a,b){return bm(a,1,b)};
function cm(a,b){bm(a,2,b)}
function dm(a){var b=B("yt.scheduler.instance.addImmediateJob");b?b(a):a()}
;function em(){am.apply(this,arguments)}
r(em,am);function fm(){em.i||(em.i=new em);return em.i}
function bm(a,b,c){void 0!==c&&Number.isNaN(Number(c))&&(c=void 0);var d=B("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):cl(a,c||0)}
em.prototype.ea=function(a){if(void 0===a||!Number.isNaN(Number(a))){var b=B("yt.scheduler.instance.cancelJob");b?b(a):dl(a)}};
em.prototype.start=function(){var a=B("yt.scheduler.instance.start");a&&a()};
em.prototype.pause=function(){var a=B("yt.scheduler.instance.pause");a&&a()};var Wh=fm();var gm=Zc||$c;function hm(a){var b=Tb();return b?0<=b.toLowerCase().indexOf(a):!1}
;var im=function(){var a;return function(){a||(a=new Tl("ytidb"));return a}}();
function jm(){var a;return null==(a=im())?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
;var km=[],lm,mm=!1;function nm(){var a={};for(lm=new om(void 0===a.handleError?pm:a.handleError,void 0===a.logEvent?qm:a.logEvent);0<km.length;)switch(a=km.shift(),a.type){case "ERROR":lm.handleError(a.payload);break;case "EVENT":lm.logEvent(a.eventType,a.payload)}}
function rm(a){mm||(lm?lm.handleError(a):(km.push({type:"ERROR",payload:a}),10<km.length&&km.shift()))}
function sm(a,b){mm||(lm?lm.logEvent(a,b):(km.push({type:"EVENT",eventType:a,payload:b}),10<km.length&&km.shift()))}
;function Q(a){var b=Ja.apply(1,arguments);var c=Error.call(this,a);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.args=[].concat(ia(b))}
r(Q,Error);function tm(){try{return um(),!0}catch(a){return!1}}
function um(a){if(void 0!==L("DATASYNC_ID"))return L("DATASYNC_ID");throw new Q("Datasync ID not set",void 0===a?"unknown":a);}
;function vm(a){if(0<=a.indexOf(":"))throw Error("Database name cannot contain ':'");}
function wm(a){return a.substr(0,a.indexOf(":"))||a}
;var xm={},ym=(xm.AUTH_INVALID="No user identifier specified.",xm.EXPLICIT_ABORT="Transaction was explicitly aborted.",xm.IDB_NOT_SUPPORTED="IndexedDB is not supported.",xm.MISSING_INDEX="Index not created.",xm.MISSING_OBJECT_STORES="Object stores not created.",xm.DB_DELETED_BY_MISSING_OBJECT_STORES="Database is deleted because expected object stores were not created.",xm.DB_REOPENED_BY_MISSING_OBJECT_STORES="Database is reopened because expected object stores were not created.",xm.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",
xm.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",xm.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",xm.EXECUTE_TRANSACTION_ON_CLOSED_DB="Can't start a transaction on a closed database",xm.INCOMPATIBLE_DB_VERSION="The binary is incompatible with the database version",xm),zm={},Am=(zm.AUTH_INVALID="ERROR",zm.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",zm.EXPLICIT_ABORT="IGNORED",zm.IDB_NOT_SUPPORTED="ERROR",zm.MISSING_INDEX=
"WARNING",zm.MISSING_OBJECT_STORES="ERROR",zm.DB_DELETED_BY_MISSING_OBJECT_STORES="WARNING",zm.DB_REOPENED_BY_MISSING_OBJECT_STORES="WARNING",zm.QUOTA_EXCEEDED="WARNING",zm.QUOTA_MAYBE_EXCEEDED="WARNING",zm.UNKNOWN_ABORT="WARNING",zm.INCOMPATIBLE_DB_VERSION="WARNING",zm),Bm={},Cm=(Bm.AUTH_INVALID=!1,Bm.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,Bm.EXPLICIT_ABORT=!1,Bm.IDB_NOT_SUPPORTED=!1,Bm.MISSING_INDEX=!1,Bm.MISSING_OBJECT_STORES=!1,Bm.DB_DELETED_BY_MISSING_OBJECT_STORES=!1,Bm.DB_REOPENED_BY_MISSING_OBJECT_STORES=
!1,Bm.QUOTA_EXCEEDED=!1,Bm.QUOTA_MAYBE_EXCEEDED=!0,Bm.UNKNOWN_ABORT=!0,Bm.INCOMPATIBLE_DB_VERSION=!1,Bm);function Dm(a,b,c,d,e){b=void 0===b?{}:b;c=void 0===c?ym[a]:c;d=void 0===d?Am[a]:d;e=void 0===e?Cm[a]:e;Q.call(this,c,Object.assign({},{name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.i=e;Object.setPrototypeOf(this,Dm.prototype)}
r(Dm,Q);function Em(a,b){Dm.call(this,"MISSING_OBJECT_STORES",{expectedObjectStores:b,foundObjectStores:a},ym.MISSING_OBJECT_STORES);Object.setPrototypeOf(this,Em.prototype)}
r(Em,Dm);function Fm(a,b){var c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.index=a;this.objectStore=b;Object.setPrototypeOf(this,Fm.prototype)}
r(Fm,Error);var Gm=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function Hm(a,b,c,d){b=wm(b);var e=a instanceof Error?a:Error("Unexpected error: "+a);if(e instanceof Dm)return e;a={objectStoreNames:c,dbName:b,dbVersion:d};if("QuotaExceededError"===e.name)return new Dm("QUOTA_EXCEEDED",a);if(ad&&"UnknownError"===e.name)return new Dm("QUOTA_MAYBE_EXCEEDED",a);if(e instanceof Fm)return new Dm("MISSING_INDEX",Object.assign({},a,{objectStore:e.objectStore,index:e.index}));if("InvalidStateError"===e.name&&Gm.some(function(f){return e.message.includes(f)}))return new Dm("EXECUTE_TRANSACTION_ON_CLOSED_DB",
a);
if("AbortError"===e.name)return new Dm("UNKNOWN_ABORT",a,e.message);e.args=[Object.assign({},a,{name:"IdbError",ac:e.name})];e.level="WARNING";return e}
function Im(a,b,c){var d=jm();return new Dm("IDB_NOT_SUPPORTED",{context:{caller:a,publicName:b,version:c,hasSucceededOnce:null==d?void 0:d.hasSucceededOnce}})}
;function Jm(a){if(!a)throw Error();throw a;}
function Km(a){return a}
function Lm(a){this.i=a}
function Mm(a){function b(e){if("PENDING"===d.state.status){d.state={status:"REJECTED",reason:e};e=p(d.onRejected);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if("PENDING"===d.state.status){d.state={status:"FULFILLED",value:e};e=p(d.i);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.state={status:"PENDING"};this.i=[];this.onRejected=[];a=a.i;try{a(c,b)}catch(e){b(e)}}
Mm.all=function(a){return new Mm(new Lm(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={wa:0};f.wa<a.length;f={wa:f.wa},++f.wa)Mm.resolve(a[f.wa]).then(function(g){return function(h){d[g.wa]=h;e--;0===e&&b(d)}}(f)).catch(function(g){c(g)})}))};
Mm.resolve=function(a){return new Mm(new Lm(function(b,c){a instanceof Mm?a.then(b,c):b(a)}))};
Mm.reject=function(a){return new Mm(new Lm(function(b,c){c(a)}))};
Mm.prototype.then=function(a,b){var c=this,d=null!=a?a:Km,e=null!=b?b:Jm;return new Mm(new Lm(function(f,g){"PENDING"===c.state.status?(c.i.push(function(){Nm(c,c,d,f,g)}),c.onRejected.push(function(){Om(c,c,e,f,g)})):"FULFILLED"===c.state.status?Nm(c,c,d,f,g):"REJECTED"===c.state.status&&Om(c,c,e,f,g)}))};
Mm.prototype.catch=function(a){return this.then(void 0,a)};
function Nm(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof Mm?Pm(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Om(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof Mm?Pm(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Pm(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof Mm?Pm(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Qm(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Rm(a){return new Promise(function(b,c){Qm(a,b,c)})}
function Sm(a){return new Mm(new Lm(function(b,c){Qm(a,b,c)}))}
;function Tm(a,b){return new Mm(new Lm(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()}))}
;function Um(a,b){this.i=a;this.options=b;this.transactionCount=0;this.l=Math.round(P());this.j=!1}
l=Um.prototype;l.add=function(a,b,c){return Vm(this,[a],{mode:"readwrite",U:!0},function(d){return d.objectStore(a).add(b,c)})};
l.clear=function(a){return Vm(this,[a],{mode:"readwrite",U:!0},function(b){return b.objectStore(a).clear()})};
l.close=function(){this.i.close();var a;(null==(a=this.options)?0:a.closed)&&this.options.closed()};
l.count=function(a,b){return Vm(this,[a],{mode:"readonly",U:!0},function(c){return c.objectStore(a).count(b)})};
function Wm(a,b,c){a=a.i.createObjectStore(b,c);return new Xm(a)}
l.delete=function(a,b){return Vm(this,[a],{mode:"readwrite",U:!0},function(c){return c.objectStore(a).delete(b)})};
l.get=function(a,b){return Vm(this,[a],{mode:"readonly",U:!0},function(c){return c.objectStore(a).get(b)})};
function Ym(a,b){return Vm(a,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(c){c=c.objectStore("LogsRequestsStore");return Sm(c.i.put(b,void 0))})}
l.objectStoreNames=function(){return Array.from(this.i.objectStoreNames)};
function Vm(a,b,c,d){var e,f,g,h,k,m,q,t,x,u,A,E;return w(function(F){switch(F.i){case 1:var O={mode:"readonly",U:!1,tag:"IDB_TRANSACTION_TAG_UNKNOWN"};"string"===typeof c?O.mode=c:Object.assign(O,c);e=O;a.transactionCount++;f=e.U?3:1;g=0;case 2:if(h){F.u(3);break}g++;k=Math.round(P());ya(F,4);m=a.i.transaction(b,e.mode);O=new Zm(m);O=$m(O,d);return v(F,O,6);case 6:return q=F.j,t=Math.round(P()),an(a,k,t,g,void 0,b.join(),e),F.return(q);case 4:x=Aa(F);u=Math.round(P());A=Hm(x,a.i.name,b.join(),a.i.version);
if((E=A instanceof Dm&&!A.i)||g>=f)an(a,k,u,g,A,b.join(),e),h=A;F.u(2);break;case 3:return F.return(Promise.reject(h))}})}
function an(a,b,c,d,e,f,g){b=c-b;e?(e instanceof Dm&&("QUOTA_EXCEEDED"===e.type||"QUOTA_MAYBE_EXCEEDED"===e.type)&&sm("QUOTA_EXCEEDED",{dbName:wm(a.i.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof Dm&&"UNKNOWN_ABORT"===e.type&&(c-=a.l,0>c&&c>=Math.pow(2,31)&&(c=0),sm("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c}),a.j=!0),bn(a,!1,d,f,b,g.tag),rm(e)):bn(a,!0,d,f,b,g.tag)}
function bn(a,b,c,d,e,f){sm("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.j,duration:e,isSuccessful:b,tryCount:c,tag:void 0===f?"IDB_TRANSACTION_TAG_UNKNOWN":f})}
l.getName=function(){return this.i.name};
function Xm(a){this.i=a}
l=Xm.prototype;l.add=function(a,b){return Sm(this.i.add(a,b))};
l.autoIncrement=function(){return this.i.autoIncrement};
l.clear=function(){return Sm(this.i.clear()).then(function(){})};
l.count=function(a){return Sm(this.i.count(a))};
function cn(a,b){return dn(a,{query:b},function(c){return c.delete().then(function(){return c.continue()})}).then(function(){})}
l.delete=function(a){return a instanceof IDBKeyRange?cn(this,a):Sm(this.i.delete(a))};
l.get=function(a){return Sm(this.i.get(a))};
l.index=function(a){try{return new en(this.i.index(a))}catch(b){if(b instanceof Error&&"NotFoundError"===b.name)throw new Fm(a,this.i.name);throw b;}};
l.getName=function(){return this.i.name};
l.keyPath=function(){return this.i.keyPath};
function dn(a,b,c){a=a.i.openCursor(b.query,b.direction);return fn(a).then(function(d){return Tm(d,c)})}
function Zm(a){var b=this;this.i=a;this.l=new Map;this.j=!1;this.done=new Promise(function(c,d){b.i.addEventListener("complete",function(){c()});
b.i.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.i.error)});
b.i.addEventListener("abort",function(){var e=b.i.error;if(e)d(e);else if(!b.j){e=Dm;for(var f=b.i.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.i.db.name,mode:b.i.mode});d(e)}})})}
function $m(a,b){var c=new Promise(function(d,e){try{b(a).then(function(f){d(f)}).catch(e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return p(d).next().value})}
Zm.prototype.abort=function(){this.i.abort();this.j=!0;throw new Dm("EXPLICIT_ABORT");};
Zm.prototype.objectStore=function(a){a=this.i.objectStore(a);var b=this.l.get(a);b||(b=new Xm(a),this.l.set(a,b));return b};
function en(a){this.i=a}
l=en.prototype;l.count=function(a){return Sm(this.i.count(a))};
l.delete=function(a){return gn(this,{query:a},function(b){return b.delete().then(function(){return b.continue()})})};
l.get=function(a){return Sm(this.i.get(a))};
l.getKey=function(a){return Sm(this.i.getKey(a))};
l.keyPath=function(){return this.i.keyPath};
l.unique=function(){return this.i.unique};
function gn(a,b,c){a=a.i.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return fn(a).then(function(d){return Tm(d,c)})}
function hn(a,b){this.request=a;this.cursor=b}
function fn(a){return Sm(a).then(function(b){return b?new hn(a,b):null})}
l=hn.prototype;l.advance=function(a){this.cursor.advance(a);return fn(this.request)};
l.continue=function(a){this.cursor.continue(a);return fn(this.request)};
l.delete=function(){return Sm(this.cursor.delete()).then(function(){})};
l.getKey=function(){return this.cursor.key};
l.getValue=function(){return this.cursor.value};
l.update=function(a){return Sm(this.cursor.update(a))};function jn(a,b,c){return new Promise(function(d,e){function f(){x||(x=new Um(g.result,{closed:t}));return x}
var g=void 0!==b?self.indexedDB.open(a,b):self.indexedDB.open(a);var h=c.blocked,k=c.blocking,m=c.od,q=c.upgrade,t=c.closed,x;g.addEventListener("upgradeneeded",function(u){try{if(null===u.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(null===g.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");u.dataLoss&&"none"!==u.dataLoss&&sm("IDB_DATA_CORRUPTED",{reason:u.dataLossMessage||"unknown reason",dbName:wm(a)});var A=f(),E=new Zm(g.transaction);
q&&q(A,function(F){return u.oldVersion<F&&u.newVersion>=F},E);
E.done.catch(function(F){e(F)})}catch(F){e(F)}});
g.addEventListener("success",function(){var u=g.result;k&&u.addEventListener("versionchange",function(){k(f())});
u.addEventListener("close",function(){sm("IDB_UNEXPECTEDLY_CLOSED",{dbName:wm(a),dbVersion:u.version});m&&m()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function kn(a,b,c){c=void 0===c?{}:c;return jn(a,b,c)}
function ln(a,b){b=void 0===b?{}:b;var c,d,e,f;return w(function(g){if(1==g.i)return ya(g,2),c=self.indexedDB.deleteDatabase(a),d=b,(e=d.blocked)&&c.addEventListener("blocked",function(){e()}),v(g,Rm(c),4);
if(2!=g.i)return za(g,0);f=Aa(g);throw Hm(f,a,"",-1);})}
;function mn(a){return new Promise(function(b){cm(function(){b()},a)})}
function nn(a,b){this.name=a;this.options=b;this.m=!0;this.s=this.o=0;this.j=500}
nn.prototype.l=function(a,b,c){c=void 0===c?{}:c;return kn(a,b,c)};
nn.prototype.delete=function(a){a=void 0===a?{}:a;return ln(this.name,a)};
function on(a,b){return new Dm("INCOMPATIBLE_DB_VERSION",{dbName:a.name,oldVersion:a.options.version,newVersion:b})}
function pn(a,b){if(!b)throw Im("openWithToken",wm(a.name));return qn(a)}
function qn(a){function b(){var f,g,h,k,m,q,t,x,u,A;return w(function(E){switch(E.i){case 1:return g=null!=(f=Error().stack)?f:"",ya(E,2),v(E,a.l(a.name,a.options.version,d),4);case 4:h=E.j;for(var F=a.options,O=[],N=p(Object.keys(F.Ga)),R=N.next();!R.done;R=N.next()){R=R.value;var ca=F.Ga[R],W=void 0===ca.Wc?Number.MAX_VALUE:ca.Wc;!(h.i.version>=ca.hb)||h.i.version>=W||h.i.objectStoreNames.contains(R)||O.push(R)}k=O;if(0===k.length){E.u(5);break}m=Object.keys(a.options.Ga);q=h.objectStoreNames();
if(a.s<Dk("ytidb_reopen_db_retries",0))return a.s++,h.close(),rm(new Dm("DB_REOPENED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:m,foundObjectStores:q})),E.return(b());if(!(a.o<Dk("ytidb_remake_db_retries",1))){E.u(6);break}a.o++;if(!M("ytidb_remake_db_enable_backoff_delay")){E.u(7);break}return v(E,mn(a.j),8);case 8:a.j*=2;case 7:return v(E,a.delete(),9);case 9:return rm(new Dm("DB_DELETED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:m,foundObjectStores:q})),E.return(b());
case 6:throw new Em(q,m);case 5:return E.return(h);case 2:t=Aa(E);if(t instanceof DOMException?"VersionError"!==t.name:"DOMError"in self&&t instanceof DOMError?"VersionError"!==t.name:!(t instanceof Object&&"message"in t)||"An attempt was made to open a database using a lower version than the existing version."!==t.message){E.u(10);break}return v(E,a.l(a.name,void 0,Object.assign({},d,{upgrade:void 0})),11);case 11:x=E.j;u=x.i.version;if(void 0!==a.options.version&&u>a.options.version+1)throw x.close(),
a.m=!1,on(a,u);return E.return(x);case 10:throw c(),t instanceof Error&&!M("ytidb_async_stack_killswitch")&&(t.stack=t.stack+"\n"+g.substring(g.indexOf("\n")+1)),Hm(t,a.name,"",null!=(A=a.options.version)?A:-1);}})}
function c(){a.i===e&&(a.i=void 0)}
if(!a.m)throw on(a);if(a.i)return a.i;var d={blocking:function(f){f.close()},
closed:c,od:c,upgrade:a.options.upgrade};var e=b();a.i=e;return a.i}
;var rn=new nn("YtIdbMeta",{Ga:{databases:{hb:1}},upgrade:function(a,b){b(1)&&Wm(a,"databases",{keyPath:"actualName"})}});
function sn(a,b){var c;return w(function(d){if(1==d.i)return v(d,pn(rn,b),2);c=d.j;return d.return(Vm(c,["databases"],{U:!0,mode:"readwrite"},function(e){var f=e.objectStore("databases");return f.get(a.actualName).then(function(g){if(g?a.actualName!==g.actualName||a.publicName!==g.publicName||a.userIdentifier!==g.userIdentifier:1)return Sm(f.i.put(a,void 0)).then(function(){})})}))})}
function tn(a,b){var c;return w(function(d){if(1==d.i)return a?v(d,pn(rn,b),2):d.return();c=d.j;return d.return(c.delete("databases",a))})}
function un(a,b){var c,d;return w(function(e){return 1==e.i?(c=[],v(e,pn(rn,b),2)):3!=e.i?(d=e.j,v(e,Vm(d,["databases"],{U:!0,mode:"readonly"},function(f){c.length=0;return dn(f.objectStore("databases"),{},function(g){a(g.getValue())&&c.push(g.getValue());return g.continue()})}),3)):e.return(c)})}
function vn(a){return un(function(b){return"LogsDatabaseV2"===b.publicName&&void 0!==b.userIdentifier},a)}
function wn(a,b,c){return un(function(d){return c?void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)&&c.includes(d.publicName):void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)},b)}
function xn(a){var b,c;return w(function(d){if(1==d.i)return b=um("YtIdbMeta hasAnyMeta other"),v(d,un(function(e){return void 0!==e.userIdentifier&&e.userIdentifier!==b},a),2);
c=d.j;return d.return(0<c.length)})}
;var yn,zn=new function(){}(new function(){});
function An(){var a,b,c,d;return w(function(e){switch(e.i){case 1:a=jm();if(null==(b=a)?0:b.hasSucceededOnce)return e.return(!0);var f;if(f=gm)f=/WebKit\/([0-9]+)/.exec(Tb()),f=!!(f&&600<=parseInt(f[1],10));f&&(f=/WebKit\/([0-9]+)/.exec(Tb()),f=!(f&&602<=parseInt(f[1],10)));if(f||Lc)return e.return(!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return e.return(!1)}catch(g){return e.return(!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return e.return(!1);
ya(e,2);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return v(e,sn(d,zn),4);case 4:return v(e,tn("yt-idb-test-do-not-use",zn),5);case 5:return e.return(!0);case 2:return Aa(e),e.return(!1)}})}
function Bn(){if(void 0!==yn)return yn;mm=!0;return yn=An().then(function(a){mm=!1;var b;if(null!=(b=im())&&b.i){var c;b={hasSucceededOnce:(null==(c=jm())?void 0:c.hasSucceededOnce)||a};var d;null==(d=im())||d.set("LAST_RESULT_ENTRY_KEY",b,2592E3,!0)}return a})}
function Cn(){return B("ytglobal.idbToken_")||void 0}
function Dn(){var a=Cn();return a?Promise.resolve(a):Bn().then(function(b){(b=b?zn:void 0)&&z("ytglobal.idbToken_",b);return b})}
;var En=0;function Fn(a,b){En||(En=Wh.S(function(){var c,d,e,f,g;return w(function(h){switch(h.i){case 1:return v(h,Dn(),2);case 2:c=h.j;if(!c)return h.return();d=!0;ya(h,3);return v(h,wn(a,c,b),5);case 5:e=h.j;if(!e.length){d=!1;h.u(6);break}f=e[0];return v(h,ln(f.actualName),7);case 7:return v(h,tn(f.actualName,c),6);case 6:za(h,4);break;case 3:g=Aa(h),rm(g),d=!1;case 4:Wh.ea(En),En=0,d&&Fn(a,b),h.i=0}})}))}
function Gn(){var a;return w(function(b){return 1==b.i?v(b,Dn(),2):(a=b.j)?b.return(xn(a)):b.return(!1)})}
new Ah;function Hn(a){if(!tm())throw a=new Dm("AUTH_INVALID",{dbName:a}),rm(a),a;var b=um();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function In(a,b,c,d){var e,f,g,h,k,m;return w(function(q){switch(q.i){case 1:return f=null!=(e=Error().stack)?e:"",v(q,Dn(),2);case 2:g=q.j;if(!g)throw h=Im("openDbImpl",a,b),M("ytidb_async_stack_killswitch")||(h.stack=h.stack+"\n"+f.substring(f.indexOf("\n")+1)),rm(h),h;vm(a);k=c?{actualName:a,publicName:a,userIdentifier:void 0}:Hn(a);ya(q,3);return v(q,sn(k,g),5);case 5:return v(q,kn(k.actualName,b,d),6);case 6:return q.return(q.j);case 3:return m=Aa(q),ya(q,7),v(q,tn(k.actualName,g),9);case 9:za(q,
8);break;case 7:Aa(q);case 8:throw m;}})}
function Jn(a,b,c){c=void 0===c?{}:c;return In(a,b,!1,c)}
function Kn(a,b,c){c=void 0===c?{}:c;return In(a,b,!0,c)}
function Ln(a,b){b=void 0===b?{}:b;var c,d;return w(function(e){if(1==e.i)return v(e,Dn(),2);if(3!=e.i){c=e.j;if(!c)return e.return();vm(a);d=Hn(a);return v(e,ln(d.actualName,b),3)}return v(e,tn(d.actualName,c),0)})}
function Mn(a,b,c){a=a.map(function(d){return w(function(e){return 1==e.i?v(e,ln(d.actualName,b),2):v(e,tn(d.actualName,c),0)})});
return Promise.all(a).then(function(){})}
function Nn(){var a=void 0===a?{}:a;var b,c;return w(function(d){if(1==d.i)return v(d,Dn(),2);if(3!=d.i){b=d.j;if(!b)return d.return();vm("LogsDatabaseV2");return v(d,vn(b),3)}c=d.j;return v(d,Mn(c,a,b),0)})}
function On(a,b){b=void 0===b?{}:b;var c;return w(function(d){if(1==d.i)return v(d,Dn(),2);if(3!=d.i){c=d.j;if(!c)return d.return();vm(a);return v(d,ln(a,b),3)}return v(d,tn(a,c),0)})}
;function Pn(a){this.Qa=this.i=!1;this.potentialEsfErrorCounter=this.j=0;this.handleError=function(){};
this.za=function(){};
this.now=Date.now;this.Fa=!1;var b;this.lc=null!=(b=a.lc)?b:100;var c;this.hc=null!=(c=a.hc)?c:1;var d;this.ec=null!=(d=a.ec)?d:2592E6;var e;this.cc=null!=(e=a.cc)?e:12E4;var f;this.fc=null!=(f=a.fc)?f:5E3;var g;this.H=null!=(g=a.H)?g:void 0;this.Va=!!a.Va;var h;this.Ta=null!=(h=a.Ta)?h:.1;var k;this.ab=null!=(k=a.ab)?k:10;a.handleError&&(this.handleError=a.handleError);a.za&&(this.za=a.za);a.Fa&&(this.Fa=a.Fa);a.Qa&&(this.Qa=a.Qa);this.J=a.J;this.Y=a.Y;this.O=a.O;this.N=a.N;this.ia=a.ia;this.vb=
a.vb;this.ub=a.ub;Qn(this)&&(!this.J||this.J("networkless_logging"))&&Rn(this)}
function Rn(a){Qn(a)&&!a.Fa&&(a.i=!0,a.Va&&Math.random()<=a.Ta&&a.O.Ac(a.H),Sn(a),a.N.M()&&a.Ka(),a.N.Z(a.vb,a.Ka.bind(a)),a.N.Z(a.ub,a.Jb.bind(a)))}
l=Pn.prototype;l.writeThenSend=function(a,b){var c=this;b=void 0===b?{}:b;if(Qn(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.O.set(d,this.H).then(function(e){d.id=e;c.N.M()&&Tn(c,d)}).catch(function(e){Tn(c,d);
Un(c,e)})}else this.ia(a,b)};
l.sendThenWrite=function(a,b,c){var d=this;b=void 0===b?{}:b;if(Qn(this)&&this.i){var e={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.J&&this.J("nwl_skip_retry")&&(e.skipRetry=c);if(this.N.M()||this.J&&this.J("nwl_aggressive_send_then_write")&&!e.skipRetry){if(!e.skipRetry){var f=b.onError?b.onError:function(){};
b.onError=function(g,h){return w(function(k){if(1==k.i)return v(k,d.O.set(e,d.H).catch(function(m){Un(d,m)}),2);
f(g,h);k.i=0})}}this.ia(a,b,e.skipRetry)}else this.O.set(e,this.H).catch(function(g){d.ia(a,b,e.skipRetry);
Un(d,g)})}else this.ia(a,b,this.J&&this.J("nwl_skip_retry")&&c)};
l.sendAndWrite=function(a,b){var c=this;b=void 0===b?{}:b;if(Qn(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0},e=!1,f=b.onSuccess?b.onSuccess:function(){};
d.options.onSuccess=function(g,h){void 0!==d.id?c.O.ya(d.id,c.H):e=!0;c.N.ha&&c.J&&c.J("vss_network_hint")&&c.N.ha(!0);f(g,h)};
this.ia(d.url,d.options);this.O.set(d,this.H).then(function(g){d.id=g;e&&c.O.ya(d.id,c.H)}).catch(function(g){Un(c,g)})}else this.ia(a,b)};
l.Ka=function(){var a=this;if(!Qn(this))throw Im("throttleSend");this.j||(this.j=this.Y.S(function(){var b;return w(function(c){if(1==c.i)return v(c,a.O.Tb("NEW",a.H),2);if(3!=c.i)return b=c.j,b?v(c,Tn(a,b),3):(a.Jb(),c.return());a.j&&(a.j=0,a.Ka());c.i=0})},this.lc))};
l.Jb=function(){this.Y.ea(this.j);this.j=0};
function Tn(a,b){var c,d;return w(function(e){switch(e.i){case 1:if(!Qn(a))throw c=Im("immediateSend"),c;if(void 0===b.id){e.u(2);break}return v(e,a.O.Qc(b.id,a.H),3);case 3:(d=e.j)?b=d:a.za(Error("The request cannot be found in the database."));case 2:if(Vn(a,b,a.ec)){e.u(4);break}a.za(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===b.id){e.u(5);break}return v(e,a.O.ya(b.id,a.H),5);case 5:return e.return();case 4:b.skipRetry||(b=Wn(a,b));if(!b){e.u(0);break}if(!b.skipRetry||
void 0===b.id){e.u(8);break}return v(e,a.O.ya(b.id,a.H),8);case 8:a.ia(b.url,b.options,!!b.skipRetry),e.i=0}})}
function Wn(a,b){if(!Qn(a))throw Im("updateRequestHandlers");var c=b.options.onError?b.options.onError:function(){};
b.options.onError=function(e,f){var g,h,k;return w(function(m){switch(m.i){case 1:g=Xn(f);if(!(a.J&&a.J("nwl_consider_error_code")&&g||a.J&&!a.J("nwl_consider_error_code")&&a.potentialEsfErrorCounter<=a.ab)){m.u(2);break}if(!a.N.Ia){m.u(3);break}return v(m,a.N.Ia(),3);case 3:if(a.N.M()){m.u(2);break}c(e,f);if(!a.J||!a.J("nwl_consider_error_code")||void 0===(null==(h=b)?void 0:h.id)){m.u(6);break}return v(m,a.O.yb(b.id,a.H,!1),6);case 6:return m.return();case 2:if(a.J&&a.J("nwl_consider_error_code")&&
!g&&a.potentialEsfErrorCounter>a.ab)return m.return();a.potentialEsfErrorCounter++;if(void 0===(null==(k=b)?void 0:k.id)){m.u(8);break}return b.sendCount<a.hc?v(m,a.O.yb(b.id,a.H),12):v(m,a.O.ya(b.id,a.H),8);case 12:a.Y.S(function(){a.N.M()&&a.Ka()},a.fc);
case 8:c(e,f),m.i=0}})};
var d=b.options.onSuccess?b.options.onSuccess:function(){};
b.options.onSuccess=function(e,f){var g;return w(function(h){if(1==h.i)return void 0===(null==(g=b)?void 0:g.id)?h.u(2):v(h,a.O.ya(b.id,a.H),2);a.N.ha&&a.J&&a.J("vss_network_hint")&&a.N.ha(!0);d(e,f);h.i=0})};
return b}
function Vn(a,b,c){b=b.timestamp;return a.now()-b>=c?!1:!0}
function Sn(a){if(!Qn(a))throw Im("retryQueuedRequests");a.O.Tb("QUEUED",a.H).then(function(b){b&&!Vn(a,b,a.cc)?a.Y.S(function(){return w(function(c){if(1==c.i)return void 0===b.id?c.u(2):v(c,a.O.yb(b.id,a.H),2);Sn(a);c.i=0})}):a.N.M()&&a.Ka()})}
function Un(a,b){a.pc&&!a.N.M()?a.pc(b):a.handleError(b)}
function Qn(a){return!!a.H||a.Qa}
function Xn(a){var b;return(a=null==a?void 0:null==(b=a.error)?void 0:b.code)&&400<=a&&599>=a?!1:!0}
;function Yn(a,b){this.version=a;this.args=b}
;function Zn(a,b){this.topic=a;this.i=b}
Zn.prototype.toString=function(){return this.topic};var $n=B("ytPubsub2Pubsub2Instance")||new K;K.prototype.subscribe=K.prototype.subscribe;K.prototype.unsubscribeByKey=K.prototype.Ca;K.prototype.publish=K.prototype.oa;K.prototype.clear=K.prototype.clear;z("ytPubsub2Pubsub2Instance",$n);var ao=B("ytPubsub2Pubsub2SubscribedKeys")||{};z("ytPubsub2Pubsub2SubscribedKeys",ao);var bo=B("ytPubsub2Pubsub2TopicToKeys")||{};z("ytPubsub2Pubsub2TopicToKeys",bo);var co=B("ytPubsub2Pubsub2IsAsync")||{};z("ytPubsub2Pubsub2IsAsync",co);
z("ytPubsub2Pubsub2SkipSubKey",null);function eo(a,b){var c=fo();c&&c.publish.call(c,a.toString(),a,b)}
function go(a){var b=ho,c=fo();if(!c)return 0;var d=c.subscribe(b.toString(),function(e,f){var g=B("ytPubsub2Pubsub2SkipSubKey");g&&g==d||(g=function(){if(ao[d])try{if(f&&b instanceof Zn&&b!=e)try{var h=b.i,k=f;if(!k.args||!k.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");try{if(!h.na){var m=new h;h.na=m.version}var q=h.na}catch(F){}if(!q||k.version!=q)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");try{q=Reflect;var t=q.construct;
var x=k.args,u=x.length;if(0<u){var A=Array(u);for(k=0;k<u;k++)A[k]=x[k];var E=A}else E=[];f=t.call(q,h,E)}catch(F){throw F.message="yt.pubsub2.Data.deserialize(): "+F.message,F;}}catch(F){throw F.message="yt.pubsub2.pubsub2 cross-binary conversion error for "+b.toString()+": "+F.message,F;}a.call(window,f)}catch(F){Jk(F)}},co[b.toString()]?B("yt.scheduler.instance")?Wh.S(g):cl(g,0):g())});
ao[d]=!0;bo[b.toString()]||(bo[b.toString()]=[]);bo[b.toString()].push(d);return d}
function io(){var a=jo,b=go(function(c){a.apply(void 0,arguments);ko(b)});
return b}
function ko(a){var b=fo();b&&("number"===typeof a&&(a=[a]),fb(a,function(c){b.unsubscribeByKey(c);delete ao[c]}))}
function fo(){return B("ytPubsub2Pubsub2Instance")}
;function lo(a,b){nn.call(this,a,b);this.options=b;vm(a)}
r(lo,nn);function mo(a,b){var c;return function(){c||(c=new lo(a,b));return c}}
lo.prototype.l=function(a,b,c){c=void 0===c?{}:c;return(this.options.Ab?Kn:Jn)(a,b,Object.assign({},c))};
lo.prototype.delete=function(a){a=void 0===a?{}:a;return(this.options.Ab?On:Ln)(this.name,a)};
function no(a,b){return mo(a,b)}
;var oo;
function po(){if(oo)return oo();var a={};oo=no("LogsDatabaseV2",{Ga:(a.LogsRequestsStore={hb:2},a),Ab:!1,upgrade:function(b,c,d){c(2)&&Wm(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0});c(3);c(5)&&(d=d.objectStore("LogsRequestsStore"),d.i.indexNames.contains("newRequest")&&d.i.deleteIndex("newRequest"),d.i.createIndex("newRequestV2",["status","interface","timestamp"],{unique:!1}));c(7)&&b.i.objectStoreNames.contains("sapisid")&&b.i.deleteObjectStore("sapisid");c(9)&&b.i.objectStoreNames.contains("SWHealthLog")&&b.i.deleteObjectStore("SWHealthLog")},
version:9});return oo()}
;function qo(a){return pn(po(),a)}
function ro(a,b){var c,d,e,f;return w(function(g){if(1==g.i)return c={startTime:P(),transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},v(g,qo(b),2);if(3!=g.i)return d=g.j,e=Object.assign({},a,{options:JSON.parse(JSON.stringify(a.options)),interface:L("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),v(g,Ym(d,e),3);f=g.j;c.qd=P();so(c);return g.return(f)})}
function to(a,b){var c,d,e,f,g,h,k;return w(function(m){if(1==m.i)return c={startTime:P(),transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},v(m,qo(b),2);if(3!=m.i)return d=m.j,e=L("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=[a,e,0],g=[a,e,P()],h=IDBKeyRange.bound(f,g),k=void 0,v(m,Vm(d,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(q){return gn(q.objectStore("LogsRequestsStore").index("newRequestV2"),{query:h,direction:"prev"},function(t){t.getValue()&&(k=t.getValue(),"NEW"===a&&(k.status="QUEUED",
t.update(k)))})}),3);
c.qd=P();so(c);return m.return(k)})}
function uo(a,b){var c;return w(function(d){if(1==d.i)return v(d,qo(b),2);c=d.j;return d.return(Vm(c,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(e){var f=e.objectStore("LogsRequestsStore");return f.get(a).then(function(g){if(g)return g.status="QUEUED",Sm(f.i.put(g,void 0)).then(function(){return g})})}))})}
function vo(a,b,c){c=void 0===c?!0:c;var d;return w(function(e){if(1==e.i)return v(e,qo(b),2);d=e.j;return e.return(Vm(d,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(f){var g=f.objectStore("LogsRequestsStore");return g.get(a).then(function(h){return h?(h.status="NEW",c&&(h.sendCount+=1),Sm(g.i.put(h,void 0)).then(function(){return h})):Mm.resolve(void 0)})}))})}
function wo(a,b){var c;return w(function(d){if(1==d.i)return v(d,qo(b),2);c=d.j;return d.return(c.delete("LogsRequestsStore",a))})}
function xo(a){var b,c;return w(function(d){if(1==d.i)return v(d,qo(a),2);b=d.j;c=P()-2592E6;return v(d,Vm(b,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(e){return dn(e.objectStore("LogsRequestsStore"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function yo(){return w(function(a){return v(a,Nn(),0)})}
function so(a){M("nwl_csi_killswitch")||.01>=Math.random()&&eo("nwl_transaction_latency_payload",a)}
;var zo={},Ao=no("ServiceWorkerLogsDatabase",{Ga:(zo.SWHealthLog={hb:1},zo),Ab:!0,upgrade:function(a,b){b(1)&&Wm(a,"SWHealthLog",{keyPath:"id",autoIncrement:!0}).i.createIndex("swHealthNewRequest",["interface","timestamp"],{unique:!1})},
version:1});function Bo(a){return pn(Ao(),a)}
function Co(a){var b,c;return w(function(d){if(1==d.i)return v(d,Bo(a),2);b=d.j;c=P()-2592E6;return v(d,Vm(b,["SWHealthLog"],{mode:"readwrite",U:!0},function(e){return dn(e.objectStore("SWHealthLog"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function Do(a){var b;return w(function(c){if(1==c.i)return v(c,Bo(a),2);b=c.j;return v(c,b.clear("SWHealthLog"),0)})}
;var Eo={},Fo=0;
function Go(a){var b=void 0===b?"":b;var c=void 0===c?!1:c;if(a)if(b)ml(a,void 0,"POST",b);else if(L("USE_NET_AJAX_FOR_PING_TRANSPORT",!1))ml(a,void 0,"GET","",void 0,void 0,c);else{b:{try{var d=new bb({url:a});if(d.l&&d.j||d.m){var e=mc(nc(5,a)),f;if(!(f=!e||!e.endsWith("/aclk"))){var g=a.search(yc),h=xc(a,0,"ri",g);if(0>h)var k=null;else{var m=a.indexOf("&",h);if(0>m||m>g)m=g;k=decodeURIComponent(a.slice(h+3,-1!==m?m:0).replace(/\+/g," "))}f="1"!==k}var q=!f;break b}}catch(x){}q=!1}if(q){b:{try{if(window.navigator&&
window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")){var t=!0;break b}}catch(x){}t=!1}b=t?!0:!1}else b=!1;b||Ho(a)}}
function Ho(a){var b=new Image,c=""+Fo++;Eo[c]=b;b.onload=b.onerror=function(){delete Eo[c]};
b.src=a}
;function Io(){this.i=new Map;this.j=!1}
function Jo(){if(!Io.i){var a=B("yt.networkRequestMonitor.instance")||new Io;z("yt.networkRequestMonitor.instance",a);Io.i=a}return Io.i}
Io.prototype.requestComplete=function(a,b){b&&(this.j=!0);a=this.removeParams(a);this.i.get(a)||this.i.set(a,b)};
Io.prototype.isEndpointCFR=function(a){a=this.removeParams(a);return(a=this.i.get(a))?!1:!1===a&&this.j?!0:null};
Io.prototype.removeParams=function(a){return a.split("?")[0]};
Io.prototype.removeParams=Io.prototype.removeParams;Io.prototype.isEndpointCFR=Io.prototype.isEndpointCFR;Io.prototype.requestComplete=Io.prototype.requestComplete;Io.getInstance=Jo;var Ko;function Lo(){Ko||(Ko=new Tl("yt.offline"));return Ko}
function Mo(a){if(M("offline_error_handling")){var b=Lo().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);Lo().set("errors",b,2592E3,!0)}}
;function No(){$e.call(this);var a=this;this.l=!1;this.j=Vh();this.j.Z("networkstatus-online",function(){if(a.l&&M("offline_error_handling")){var b=Lo().get("errors",!0);if(b){for(var c in b)if(b[c]){var d=new Q(c,"sent via offline_errors");d.name=b[c].name;d.stack=b[c].stack;d.level=b[c].level;Jk(d)}Lo().set("errors",{},2592E3,!0)}}})}
r(No,$e);function Oo(){if(!No.i){var a=B("yt.networkStatusManager.instance")||new No;z("yt.networkStatusManager.instance",a);No.i=a}return No.i}
l=No.prototype;l.M=function(){return this.j.M()};
l.ha=function(a){this.j.j=a};
l.Kc=function(){var a=window.navigator.onLine;return void 0===a?!0:a};
l.Ec=function(){this.l=!0};
l.Z=function(a,b){return this.j.Z(a,b)};
l.Ia=function(a){a=Th(this.j,a);a.then(function(b){M("use_cfr_monitor")&&Jo().requestComplete("generate_204",b)});
return a};
No.prototype.sendNetworkCheckRequest=No.prototype.Ia;No.prototype.listen=No.prototype.Z;No.prototype.enableErrorFlushing=No.prototype.Ec;No.prototype.getWindowStatus=No.prototype.Kc;No.prototype.networkStatusHint=No.prototype.ha;No.prototype.isNetworkAvailable=No.prototype.M;No.getInstance=Oo;function Po(a){a=void 0===a?{}:a;$e.call(this);var b=this;this.j=this.s=0;this.l=Oo();var c=B("yt.networkStatusManager.instance.listen").bind(this.l);c&&(a.cb?(this.cb=a.cb,c("networkstatus-online",function(){Qo(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Qo(b,"publicytnetworkstatus-offline")})):(c("networkstatus-online",function(){af(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){af(b,"publicytnetworkstatus-offline")})))}
r(Po,$e);Po.prototype.M=function(){var a=B("yt.networkStatusManager.instance.isNetworkAvailable");return a?a.bind(this.l)():!0};
Po.prototype.ha=function(a){var b=B("yt.networkStatusManager.instance.networkStatusHint").bind(this.l);b&&b(a)};
Po.prototype.Ia=function(a){var b=this,c;return w(function(d){c=B("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(b.l);return M("skip_network_check_if_cfr")&&Jo().isEndpointCFR("generate_204")?d.return(new Promise(function(e){var f;b.ha((null==(f=window.navigator)?void 0:f.onLine)||!0);e(b.M())})):c?d.return(c(a)):d.return(!0)})};
function Qo(a,b){a.cb?a.j?(Wh.ea(a.s),a.s=Wh.S(function(){a.o!==b&&(af(a,b),a.o=b,a.j=P())},a.cb-(P()-a.j))):(af(a,b),a.o=b,a.j=P()):af(a,b)}
;var Ro;function So(){Pn.call(this,{O:{Ac:xo,ya:wo,Tb:to,Qc:uo,yb:vo,set:ro},N:To(),handleError:Jk,za:Kk,ia:Uo,now:P,pc:Mo,Y:fm(),vb:"publicytnetworkstatus-online",ub:"publicytnetworkstatus-offline",Va:!0,Ta:.1,ab:Dk("potential_esf_error_limit",10),J:M,Fa:!(tm()&&Vo())});this.l=new Ah;M("networkless_immediately_drop_all_requests")&&yo();On("LogsDatabaseV2")}
r(So,Pn);function Wo(){var a=B("yt.networklessRequestController.instance");a||(a=new So,z("yt.networklessRequestController.instance",a),M("networkless_logging")&&Dn().then(function(b){a.H=b;Rn(a);a.l.resolve();a.Va&&Math.random()<=a.Ta&&a.H&&Co(a.H);M("networkless_immediately_drop_sw_health_store")&&Xo(a)}));
return a}
So.prototype.writeThenSend=function(a,b){b||(b={});tm()||(this.i=!1);Pn.prototype.writeThenSend.call(this,a,b)};
So.prototype.sendThenWrite=function(a,b,c){b||(b={});tm()||(this.i=!1);Pn.prototype.sendThenWrite.call(this,a,b,c)};
So.prototype.sendAndWrite=function(a,b){b||(b={});tm()||(this.i=!1);Pn.prototype.sendAndWrite.call(this,a,b)};
So.prototype.awaitInitialization=function(){return this.l.promise};
function Xo(a){var b;w(function(c){if(!a.H)throw b=Im("clearSWHealthLogsDb"),b;return c.return(Do(a.H).catch(function(d){a.handleError(d)}))})}
function Uo(a,b,c){M("use_cfr_monitor")&&Yo(a,b);if(M("use_request_time_ms_header"))b.headers&&(b.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P())));else{var d;if(null==(d=b.postParams)?0:d.requestTimeMs)b.postParams.requestTimeMs=Math.round(P())}c&&0===Object.keys(b).length?Go(a):jl(a,b)}
function To(){Ro||(Ro=new Po({Pc:!0,Fc:!0}));return Ro}
function Yo(a,b){var c=b.onError?b.onError:function(){};
b.onError=function(e,f){Jo().requestComplete(a,!1);c(e,f)};
var d=b.onSuccess?b.onSuccess:function(){};
b.onSuccess=function(e,f){Jo().requestComplete(a,!0);d(e,f)}}
function Vo(){return"www.youtube-nocookie.com"!==oc(document.location.toString())}
;var Zo=!1,$o=0,ap=0,bp,cp=y.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:Zo,potentialEsfErrorCounter:ap};z("ytNetworklessLoggingInitializationOptions",cp);
function dp(){var a;w(function(b){switch(b.i){case 1:return v(b,Dn(),2);case 2:a=b.j;if(!a||!tm()&&!M("nwl_init_require_datasync_id_killswitch")||!Vo()){b.u(0);break}Zo=!0;cp.isNwlInitialized=Zo;if(!M("use_new_nwl_initialization")){b.u(4);break}return v(b,Wo().awaitInitialization(),5);case 5:return b.return();case 4:return v(b,On("LogsDatabaseV2"),6);case 6:if(!(.1>=Math.random())){b.u(7);break}return v(b,xo(a),8);case 8:return v(b,Co(a),7);case 7:ep();fp().M()&&gp();fp().Z("publicytnetworkstatus-online",
gp);fp().Z("publicytnetworkstatus-offline",hp);if(!M("networkless_immediately_drop_sw_health_store")){b.u(10);break}return v(b,ip(),10);case 10:if(M("networkless_immediately_drop_all_requests"))return v(b,yo(),0);b.u(0)}})}
function jp(a,b){function c(d){var e=fp().M();if(!kp()||!d||e&&M("vss_networkless_bypass_write"))lp(a,b);else{var f={url:a,options:b,timestamp:P(),status:"NEW",sendCount:0};ro(f,d).then(function(g){f.id=g;fp().M()&&mp(f)}).catch(function(g){mp(f);
fp().M()?Jk(g):Mo(g)})}}
b=void 0===b?{}:b;M("skip_is_supported_killswitch")?Dn().then(function(d){c(d)}):c(Cn())}
function np(a,b){function c(d){if(kp()&&d){var e={url:a,options:b,timestamp:P(),status:"NEW",sendCount:0},f=!1,g=b.onSuccess?b.onSuccess:function(){};
e.options.onSuccess=function(k,m){M("use_cfr_monitor")&&Jo().requestComplete(e.url,!0);void 0!==e.id?wo(e.id,d):f=!0;M("vss_network_hint")&&fp().ha(!0);g(k,m)};
if(M("use_cfr_monitor")){var h=b.onError?b.onError:function(){};
e.options.onError=function(k,m){Jo().requestComplete(e.url,!1);h(k,m)}}lp(e.url,e.options);
ro(e,d).then(function(k){e.id=k;f&&wo(e.id,d)}).catch(function(k){fp().M()?Jk(k):Mo(k)})}else lp(a,b)}
b=void 0===b?{}:b;M("skip_is_supported_killswitch")?Dn().then(function(d){c(d)}):c(Cn())}
function gp(){var a=Cn();if(!a)throw Im("throttleSend");$o||($o=Wh.S(function(){var b;return w(function(c){if(1==c.i)return v(c,to("NEW",a),2);if(3!=c.i)return b=c.j,b?v(c,mp(b),3):(hp(),c.return());$o&&($o=0,gp());c.i=0})},100))}
function hp(){Wh.ea($o);$o=0}
function mp(a){var b,c,d;return w(function(e){switch(e.i){case 1:b=Cn();if(!b)throw c=Im("immediateSend"),c;if(void 0===a.id){e.u(2);break}return v(e,uo(a.id,b),3);case 3:(d=e.j)?a=d:Kk(Error("The request cannot be found in the database."));case 2:if(op(a,2592E6)){e.u(4);break}Kk(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===a.id){e.u(5);break}return v(e,wo(a.id,b),5);case 5:return e.return();case 4:a.skipRetry||(a=pp(a));var f=a;if(M("use_request_time_ms_header")){var g;
if(null==f?0:null==(g=f.options)?0:g.headers)f.options.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P()))}else{var h,k;if(null==f?0:null==(h=f.options)?0:null==(k=h.postParams)?0:k.requestTimeMs)f.options.postParams.requestTimeMs=Math.round(P())}a=f;if(!a){e.u(0);break}if(!a.skipRetry||void 0===a.id){e.u(8);break}return v(e,wo(a.id,b),8);case 8:lp(a.url,a.options,!!a.skipRetry),e.i=0}})}
function pp(a){var b=Cn();if(!b)throw Im("updateRequestHandlers");var c=a.options.onError?a.options.onError:function(){};
a.options.onError=function(e,f){var g,h,k;return w(function(m){switch(m.i){case 1:M("use_cfr_monitor")&&Jo().requestComplete(a.url,!1);g=Xn(f);if(!(M("nwl_consider_error_code")&&g||!M("nwl_consider_error_code")&&qp()<=Dk("potential_esf_error_limit",10))){m.u(2);break}if(M("skip_checking_network_on_cfr_failure")&&(!M("skip_checking_network_on_cfr_failure")||Jo().isEndpointCFR(a.url))){m.u(3);break}return v(m,fp().Ia(),3);case 3:if(fp().M()){m.u(2);break}c(e,f);if(!M("nwl_consider_error_code")||void 0===
(null==(h=a)?void 0:h.id)){m.u(6);break}return v(m,vo(a.id,b,!1),6);case 6:return m.return();case 2:if(M("nwl_consider_error_code")&&!g&&qp()>Dk("potential_esf_error_limit",10))return m.return();B("ytNetworklessLoggingInitializationOptions")&&cp.potentialEsfErrorCounter++;ap++;if(void 0===(null==(k=a)?void 0:k.id)){m.u(8);break}return 1>a.sendCount?v(m,vo(a.id,b),12):v(m,wo(a.id,b),8);case 12:Wh.S(function(){fp().M()&&gp()},5E3);
case 8:c(e,f),m.i=0}})};
var d=a.options.onSuccess?a.options.onSuccess:function(){};
a.options.onSuccess=function(e,f){var g;return w(function(h){if(1==h.i)return M("use_cfr_monitor")&&Jo().requestComplete(a.url,!0),void 0===(null==(g=a)?void 0:g.id)?h.u(2):v(h,wo(a.id,b),2);M("vss_network_hint")&&fp().ha(!0);d(e,f);h.i=0})};
return a}
function op(a,b){a=a.timestamp;return P()-a>=b?!1:!0}
function ep(){var a=Cn();if(!a)throw Im("retryQueuedRequests");to("QUEUED",a).then(function(b){b&&!op(b,12E4)?Wh.S(function(){return w(function(c){if(1==c.i)return void 0===b.id?c.u(2):v(c,vo(b.id,a),2);ep();c.i=0})}):fp().M()&&gp()})}
function ip(){var a,b;return w(function(c){a=Cn();if(!a)throw b=Im("clearSWHealthLogsDb"),b;return c.return(Do(a).catch(function(d){Jk(d)}))})}
function fp(){if(M("use_new_nwl"))return To();bp||(bp=new Po({Pc:!0,Fc:!0}));return bp}
function lp(a,b,c){c&&0===Object.keys(b).length?Go(a):jl(a,b)}
function kp(){return B("ytNetworklessLoggingInitializationOptions")?cp.isNwlInitialized:Zo}
function qp(){return B("ytNetworklessLoggingInitializationOptions")?cp.potentialEsfErrorCounter:ap}
;function rp(a){var b=this;this.config_=null;a?this.config_=a:Jl()&&(this.config_=Kl());bm(function(){Zl(b)},0,5E3)}
rp.prototype.isReady=function(){!this.config_&&Jl()&&(this.config_=Kl());return!!this.config_};
function $l(a,b,c,d){function e(A){A=void 0===A?!1:A;var E;if(d.retry&&"www.youtube-nocookie.com"!=h&&(A||M("skip_ls_gel_retry")||"application/json"!==g.headers["Content-Type"]||(E=Xl(b,c,m,k)),E)){var F=g.onSuccess,O=g.onFetchSuccess;g.onSuccess=function(N,R){Yl(E);F(N,R)};
c.onFetchSuccess=function(N,R){Yl(E);O(N,R)}}try{A&&d.retry&&!d.Yb.bypassNetworkless?(g.method="POST",d.Yb.writeThenSend?M("use_new_nwl_wts")?Wo().writeThenSend(u,g):jp(u,g):M("use_new_nwl_saw")?Wo().sendAndWrite(u,g):np(u,g)):M("web_all_payloads_via_jspb")?jl(u,g):(g.method="POST",g.postParams||(g.postParams={}),jl(u,g))}catch(N){if("InvalidAccessError"==N.name)E&&(Yl(E),E=0),Kk(Error("An extension is blocking network request."));
else throw N;}E&&bm(function(){Zl(a)},0,5E3)}
!L("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&Kk(new Q("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new Q("innertube xhrclient not ready",b,c,d);Jk(f);throw f;}var g={headers:d.headers||{},method:"POST",postParams:c,postBody:d.postBody,postBodyFormat:d.postBodyFormat||"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(A,E){if(d.onSuccess)d.onSuccess(E)},
onFetchSuccess:function(A){if(d.onSuccess)d.onSuccess(A)},
onError:function(A,E){if(d.onError)d.onError(E)},
onFetchError:function(A){if(d.onError)d.onError(A)},
timeout:d.timeout,withCredentials:!0};g.headers["Content-Type"]||(g.headers["Content-Type"]="application/json");var h="";(f=a.config_.Mc)&&(h=f);var k=a.config_.Oc||!1,m=Rl(k,h,d);Object.assign(g.headers,m);(f=g.headers.Authorization)&&!h&&(g.headers["x-origin"]=window.location.origin);var q="/youtubei/"+a.config_.innertubeApiVersion+"/"+b,t={alt:"json"},x=a.config_.Nc&&f;x=x&&f.startsWith("Bearer");x||(t.key=a.config_.innertubeApiKey);var u=Wk(""+h+q,t||{},!0);M("use_new_nwl")&&Wo().i||!M("use_new_nwl")&&
kp()?Bn().then(function(A){e(A)}):e(!1)}
;var sp=0,Gp=Nc?"webkit":Mc?"moz":Kc?"ms":Jc?"o":"";z("ytDomDomGetNextId",B("ytDomDomGetNextId")||function(){return++sp});var eq={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function fq(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.scale=1;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in eq||(this[b]=a[b]);this.scale=a.scale;this.rotation=a.rotation;var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;
if(d)try{d=d.nodeName?d:null}catch(e){d=null}else"mouseover"==this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.i=a.pageX;this.j=a.pageY}}catch(e){}}
function gq(a){if(document.body&&document.documentElement){var b=document.body.scrollTop+document.documentElement.scrollTop;a.i=a.clientX+(document.body.scrollLeft+document.documentElement.scrollLeft);a.j=a.clientY+b}}
fq.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
fq.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
fq.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var qb=y.ytEventsEventsListeners||{};z("ytEventsEventsListeners",qb);var hq=y.ytEventsEventsCounter||{count:0};z("ytEventsEventsCounter",hq);
function iq(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return pb(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=Qa(e[4])&&Qa(d)&&ub(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
var jq=db(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});
function kq(a,b,c,d){d=void 0===d?{}:d;if(!a||!a.addEventListener&&!a.attachEvent)return"";var e=iq(a,b,c,d);if(e)return e;e=++hq.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new fq(h);if(!kf(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new fq(h);
h.currentTarget=a;return c.call(a,h)};
g=Ik(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),jq()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);qb[e]=[a,b,c,g,d];return e}
function lq(a){a&&("string"==typeof a&&(a=[a]),fb(a,function(b){if(b in qb){var c=qb[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?jq()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete qb[b]}}))}
;var mq=window.ytcsi&&window.ytcsi.now?window.ytcsi.now:window.performance&&window.performance.timing&&window.performance.now&&window.performance.timing.navigationStart?function(){return window.performance.timing.navigationStart+window.performance.now()}:function(){return(new Date).getTime()};function nq(a){this.G=a;this.j=null;this.o=0;this.A=null;this.s=0;this.l=[];for(a=0;4>a;a++)this.l.push(0);this.m=0;this.L=kq(window,"mousemove",Xa(this.P,this));a=Xa(this.K,this);"function"===typeof a&&(a=Ik(a));this.R=window.setInterval(a,25)}
Za(nq,J);nq.prototype.P=function(a){void 0===a.i&&gq(a);var b=a.i;void 0===a.j&&gq(a);this.j=new ff(b,a.j)};
nq.prototype.K=function(){if(this.j){var a=mq();if(0!=this.o){var b=this.A,c=this.j,d=b.x-c.x;b=b.y-c.y;d=Math.sqrt(d*d+b*b)/(a-this.o);this.l[this.m]=.5<Math.abs((d-this.s)/this.s)?1:0;for(c=b=0;4>c;c++)b+=this.l[c]||0;3<=b&&this.G();this.s=d}this.o=a;this.A=this.j;this.m=(this.m+1)%4}};
nq.prototype.D=function(){window.clearInterval(this.R);lq(this.L)};var oq={};
function pq(a){var b=void 0===a?{}:a;a=void 0===b.Uc?!1:b.Uc;b=void 0===b.Gc?!0:b.Gc;if(null==B("_lact",window)){var c=parseInt(L("LACT"),10);c=isFinite(c)?Date.now()-Math.max(c,0):-1;z("_lact",c,window);z("_fact",c,window);-1==c&&qq();kq(document,"keydown",qq);kq(document,"keyup",qq);kq(document,"mousedown",qq);kq(document,"mouseup",qq);a?kq(window,"touchmove",function(){rq("touchmove",200)},{passive:!0}):(kq(window,"resize",function(){rq("resize",200)}),b&&kq(window,"scroll",function(){rq("scroll",200)}));
new nq(function(){rq("mouse",100)});
kq(document,"touchstart",qq,{passive:!0});kq(document,"touchend",qq,{passive:!0})}}
function rq(a,b){oq[a]||(oq[a]=!0,Wh.S(function(){qq();oq[a]=!1},b))}
function qq(){null==B("_lact",window)&&pq();var a=Date.now();z("_lact",a,window);-1==B("_fact",window)&&z("_fact",a,window);(a=B("ytglobal.ytUtilActivityCallback_"))&&a()}
function sq(){var a=B("_lact",window);return null==a?-1:Math.max(Date.now()-a,0)}
;var tq=y.ytPubsubPubsubInstance||new K,uq=y.ytPubsubPubsubSubscribedKeys||{},vq=y.ytPubsubPubsubTopicToKeys||{},wq=y.ytPubsubPubsubIsSynchronous||{};function xq(a,b){var c=yq();if(c&&b){var d=c.subscribe(a,function(){var e=arguments;var f=function(){uq[d]&&b.apply&&"function"==typeof b.apply&&b.apply(window,e)};
try{wq[a]?f():cl(f,0)}catch(g){Jk(g)}},void 0);
uq[d]=!0;vq[a]||(vq[a]=[]);vq[a].push(d);return d}return 0}
function zq(a){var b=yq();b&&("number"===typeof a?a=[a]:"string"===typeof a&&(a=[parseInt(a,10)]),fb(a,function(c){b.unsubscribeByKey(c);delete uq[c]}))}
function Aq(a,b){var c=yq();c&&c.publish.apply(c,arguments)}
function Bq(a){var b=yq();if(b)if(b.clear(a),a)Cq(a);else for(var c in vq)Cq(c)}
function yq(){return y.ytPubsubPubsubInstance}
function Cq(a){vq[a]&&(a=vq[a],fb(a,function(b){uq[b]&&delete uq[b]}),a.length=0)}
K.prototype.subscribe=K.prototype.subscribe;K.prototype.unsubscribeByKey=K.prototype.Ca;K.prototype.publish=K.prototype.oa;K.prototype.clear=K.prototype.clear;z("ytPubsubPubsubInstance",tq);z("ytPubsubPubsubTopicToKeys",vq);z("ytPubsubPubsubIsSynchronous",wq);z("ytPubsubPubsubSubscribedKeys",uq);function Dq(){this.store=[];this.i={}}
Dq.prototype.storePayload=function(a,b){this.store.push({payload:b,keys:a});a=Eq(a);this.i[a]?this.i[a]++:this.i[a]=1;return a};
Dq.prototype.extractMatchingEntries=function(a){for(var b=[],c=[],d=p(this.store),e=d.next();!e.done;e=d.next()){e=e.value;a:{var f=a;var g=Object.keys(f);g=p(g);for(var h=g.next();!h.done;h=g.next())if(h=h.value,e.keys[h]!==f[h]){f=!1;break a}f=!0}f?(b.push(e.payload),this.i[Eq(e.keys)]--):c.push(e)}this.store=c;a=Fq(this,a);a=p(a);for(c=a.next();!c.done;c=a.next())c=c.value,0<this.i[c]&&Kk(new Q("Transport IMS did not fully extract entries for key:",{sequence:c,Rq:b.length,Qq:this.i[c]}));return b};
Dq.prototype.getSequenceCount=function(a){var b=Fq(this,a);a=0;b=p(b);for(var c=b.next();!c.done;c=b.next())a+=this.i[c.value];return a};
function Fq(a,b){var c=Object.keys(b),d="THIS_KEY_FIELD_NOT_FILLED",e="THIS_KEY_FIELD_NOT_FILLED",f="THIS_KEY_FIELD_NOT_FILLED";c=p(c);for(var g=c.next();!g.done;g=c.next())g=g.value,"auth"===g?d=Gq(b.auth):"isJspb"===g?e=JSON.stringify(b.isJspb):"cttAuthInfo"===g&&(f=Gq(b.cttAuthInfo));b=[];d=[d,e,f];a=p(Object.keys(a.i));for(e=a.next();!e.done;e=a.next()){e=e.value;f=e.split("/");c=!0;for(g=0;g<d.length;g++)if("THIS_KEY_FIELD_NOT_FILLED"!==d[g]&&d[g]!==f[g]){c=!1;break}c&&b.push(e)}return b}
Dq.prototype.getSequenceCount=Dq.prototype.getSequenceCount;Dq.prototype.extractMatchingEntries=Dq.prototype.extractMatchingEntries;Dq.prototype.storePayload=Dq.prototype.storePayload;function Eq(a){return[void 0===a.auth?"undefined":a.auth,void 0===a.isJspb?"undefined":a.isJspb,void 0===a.cttAuthInfo?"undefined":a.cttAuthInfo].join("/")}
function Gq(a){return void 0===a?"undefined":a}
;var Hq=Dk("initial_gel_batch_timeout",2E3),Iq=Math.pow(2,16)-1,Jq=void 0;function Kq(){this.l=this.i=this.j=0}
var Lq=new Kq,Mq=new Kq,Nq=!0,Oq=y.ytLoggingTransportGELQueue_||new Map;z("ytLoggingTransportGELQueue_",Oq);var Pq=y.ytLoggingTransportGELProtoQueue_||new Map;z("ytLoggingTransportGELProtoQueue_",Pq);var Qq=y.ytLoggingTransportTokensToCttTargetIds_||{};z("ytLoggingTransportTokensToCttTargetIds_",Qq);var Rq=y.ytLoggingTransportTokensToJspbCttTargetIds_||{};z("ytLoggingTransportTokensToJspbCttTargetIds_",Rq);var Sq={};function Tq(){var a=B("yt.logging.ims");a||(a=new Dq,z("yt.logging.ims",a));return a}
function Uq(a,b){M("web_all_payloads_via_jspb")&&Kk(new Q("transport.log called for JSON in JSPB only experiment"));if("log_event"===a.endpoint){Vq(a);var c=Wq(a);if(M("use_new_in_memory_storage")){Sq[c]=!0;var d={cttAuthInfo:c,isJspb:!1};Tq().storePayload(d,a.payload);Xq(b,[],c,!1,d)}else d=Oq.get(c)||[],Oq.set(c,d),d.push(a.payload),Xq(b,d,c)}}
function Yq(a,b){if("log_event"===a.endpoint){Vq(void 0,a);var c=Wq(a,!0);if(M("use_new_in_memory_storage")){Sq[c]=!0;var d={cttAuthInfo:c,isJspb:!0};Tq().storePayload(d,a.payload.toJSON());Xq(b,[],c,!0,d)}else d=Pq.get(c)||[],Pq.set(c,d),a=a.payload.toJSON(),d.push(a),Xq(b,d,c,!0)}}
function Xq(a,b,c,d,e){d=void 0===d?!1:d;a&&(Jq=new a);a=Dk("tvhtml5_logging_max_batch")||Dk("web_logging_max_batch")||100;var f=P(),g=d?Mq.l:Lq.l;b=b.length;e&&(b=Tq().getSequenceCount(e));b>=a?M("background_thread_flush_logs_due_to_batch_limit")?cl(function(){Zq({writeThenSend:!0},M("flush_only_full_queue")?c:void 0,d)},0):Zq({writeThenSend:!0},M("flush_only_full_queue")?c:void 0,d):10<=f-g&&($q(d),d?Mq.l=f:Lq.l=f)}
function ar(a,b){M("web_all_payloads_via_jspb")&&Kk(new Q("transport.logIsolatedGelPayload called in JSPB only experiment"));if("log_event"===a.endpoint){Vq(a);var c=Wq(a),d=new Map;d.set(c,[a.payload]);b&&(Jq=new b);return new xf(function(e,f){Jq&&Jq.isReady()?br(d,Jq,e,f,{bypassNetworkless:!0},!0):e()})}}
function cr(a,b){if("log_event"===a.endpoint){Vq(void 0,a);var c=Wq(a,!0),d=new Map;d.set(c,[a.payload.toJSON()]);b&&(Jq=new b);return new xf(function(e){Jq&&Jq.isReady()?dr(d,Jq,e,{bypassNetworkless:!0},!0):e()})}}
function Wq(a,b){var c="";if(a.Ea)c="visitorOnlyApprovedKey";else if(a.cttAuthInfo){if(void 0===b?0:b){b=a.cttAuthInfo.token;c=a.cttAuthInfo;var d=new Sj;c.videoId?d.setVideoId(c.videoId):c.playlistId&&Sd(d,2,nk,c.playlistId);Rq[b]=d}else b=a.cttAuthInfo,c={},b.videoId?c.videoId=b.videoId:b.playlistId&&(c.playlistId=b.playlistId),Qq[a.cttAuthInfo.token]=c;c=a.cttAuthInfo.token}return c}
function Zq(a,b,c){a=void 0===a?{}:a;c=void 0===c?!1:c;!c&&M("web_all_payloads_via_jspb")&&Kk(new Q("transport.flushLogs called for JSON in JSPB only experiment"));new xf(function(d,e){c?(dl(Mq.j),dl(Mq.i),Mq.i=0):(dl(Lq.j),dl(Lq.i),Lq.i=0);if(Jq&&Jq.isReady())if(M("use_new_in_memory_storage")){var f=a,g=c,h=Jq;f=void 0===f?{}:f;g=void 0===g?!1:g;var k=new Map,m=new Map;if(void 0!==b)g?(e=Tq().extractMatchingEntries({isJspb:g,cttAuthInfo:b}),k.set(b,e),dr(k,h,d,f)):(k=Tq().extractMatchingEntries({isJspb:g,
cttAuthInfo:b}),m.set(b,k),br(m,h,d,e,f));else if(g){e=p(Object.keys(Sq));for(g=e.next();!g.done;g=e.next())m=g.value,g=Tq().extractMatchingEntries({isJspb:!0,cttAuthInfo:m}),0<g.length&&k.set(m,g),delete Sq[m];dr(k,h,d,f)}else{k=p(Object.keys(Sq));for(g=k.next();!g.done;g=k.next()){g=g.value;var q=Tq().extractMatchingEntries({isJspb:!1,cttAuthInfo:g});0<q.length&&m.set(g,q);delete Sq[g]}br(m,h,d,e,f)}}else f=a,k=c,h=Jq,f=void 0===f?{}:f,k=void 0===k?!1:k,void 0!==b?k?(e=new Map,k=Pq.get(b)||[],e.set(b,
k),dr(e,h,d,f),Pq.delete(b)):(k=new Map,m=Oq.get(b)||[],k.set(b,m),br(k,h,d,e,f),Oq.delete(b)):k?(dr(Pq,h,d,f),Pq.clear()):(br(Oq,h,d,e,f),Oq.clear());else $q(c),d()})}
function $q(a){a=void 0===a?!1:a;if(M("web_gel_timeout_cap")&&(!a&&!Lq.i||a&&!Mq.i)){var b=cl(function(){Zq({writeThenSend:!0},void 0,a)},6E4);
a?Mq.i=b:Lq.i=b}dl(a?Mq.j:Lq.j);b=L("LOGGING_BATCH_TIMEOUT",Dk("web_gel_debounce_ms",1E4));M("shorten_initial_gel_batch_timeout")&&Nq&&(b=Hq);b=cl(function(){Zq({writeThenSend:!0},void 0,a)},b);
a?Mq.j=b:Lq.j=b}
function br(a,b,c,d,e,f){e=void 0===e?{}:e;var g=Math.round(P()),h=a.size;a=p(a);for(var k=a.next();!k.done;k=a.next()){var m=p(k.value);k=m.next().value;var q=m.next().value;m=k;k=wb({context:Ll(b.config_||Kl())});if(!Pa(q)&&!M("throw_err_when_logevent_malformed_killswitch")){d();break}k.events=q;(q=Qq[m])&&er(k,m,q);delete Qq[m];m="visitorOnlyApprovedKey"===m;fr(k,g,m);gr(e);q=function(){h--;h||c()};
var t=function(){h--;h||c()};
try{$l(b,"log_event",k,hr(e,m,q,t,f)),Nq=!1}catch(x){Jk(x),d()}}}
function dr(a,b,c,d,e){d=void 0===d?{}:d;var f=Math.round(P()),g=a.size,h=new Map([].concat(ia(a)));h=p(h);for(var k=h.next();!k.done;k=h.next()){var m=p(k.value).next().value,q=a.get(m);k=new ok;var t=Ql(b.config_||Kl());G(k,Zi,1,t);q=q?ir(q):[];q=p(q);for(t=q.next();!t.done;t=q.next())Zd(k,3,Oj,t.value);(q=Rq[m])&&jr(k,m,q);delete Rq[m];m="visitorOnlyApprovedKey"===m;kr(k,f,m);gr(d);k=ce(k);m=hr(d,m,function(){g--;g||c()},function(){g--;
g||c()},e);
m.headers["Content-Type"]="application/json+protobuf";m.postBodyFormat="JSPB";m.postBody=k;$l(b,"log_event","",m);Nq=!1}}
function gr(a){M("always_send_and_write")&&(a.writeThenSend=!1)}
function hr(a,b,c,d,e){a={retry:!0,onSuccess:c,onError:d,Yb:a,Ea:b,Hq:!!e,headers:{},postBodyFormat:"",postBody:""};M("use_request_time_ms_header")&&(a.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P())));return a}
function fr(a,b,c){M("use_request_time_ms_header")||(a.requestTimeMs=String(b));M("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=L("EVENT_ID"))&&(c=lr(),a.serializedClientEventId={serializedEventId:b,clientCounter:String(c)})}
function kr(a,b,c){M("use_request_time_ms_header")||D(a,2,b);if(!c&&(b=L("EVENT_ID"))){c=lr();var d=new Rj;D(d,1,b);D(d,2,c);G(a,Rj,5,d)}}
function lr(){var a=L("BATCH_CLIENT_COUNTER")||0;a||(a=Math.floor(Math.random()*Iq/2));a++;a>Iq&&(a=1);Ak("BATCH_CLIENT_COUNTER",a);return a}
function er(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function jr(a,b,c){if($d(c,1===Td(c,nk)?1:-1))var d=1;else if(c.getPlaylistId())d=2;else return;G(a,Sj,4,c);a=Ud(a,Zi,1)||new Zi;c=Ud(a,Xi,3)||new Xi;var e=new Wi;e.setToken(b);D(e,1,d);Zd(c,12,Wi,e);G(a,Xi,3,c)}
function ir(a){for(var b=[],c=0;c<a.length;c++)try{b.push(new Oj(a[c]))}catch(d){Jk(new Q("Transport failed to deserialize "+String(a[c])))}return b}
function Vq(a,b){if(B("yt.logging.transport.enableScrapingForTest")){var c=B("yt.logging.transport.scrapedPayloadsForTesting"),d=B("yt.logging.transport.payloadToScrape","");b&&(b=B("yt.logging.transport.getScrapedPayloadFromClientEventsFunction").bind(b.payload)())&&c.push(b);a&&a.payload[d]&&c.push((null==a?void 0:a.payload)[d]);z("yt.logging.transport.scrapedPayloadsForTesting",c)}}
;var mr=y.ytLoggingGelSequenceIdObj_||{};z("ytLoggingGelSequenceIdObj_",mr);
function nr(a,b,c,d){d=void 0===d?{}:d;var e={},f=Math.round(d.timestamp||P());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;M("enable_unknown_lact_fix_on_html5")&&pq();a=sq();e.context={lastActivityMs:String(d.timestamp||!isFinite(a)?-1:a)};M("log_sequence_info_on_gel_web")&&d.aa&&(a=e.context,b=d.aa,b={index:or(b),groupKey:b},a.sequence=b,d.Qb&&delete mr[d.aa]);(d.ic?ar:Uq)({endpoint:"log_event",payload:e,cttAuthInfo:d.cttAuthInfo,Ea:d.Ea},c)}
function pr(a){Zq(void 0,void 0,void 0===a?!1:a)}
function or(a){mr[a]=a in mr?mr[a]+1:0;return mr[a]}
;var qr=y.ytLoggingGelSequenceIdObj_||{};z("ytLoggingGelSequenceIdObj_",qr);function rr(a,b,c){c=void 0===c?{}:c;var d=Math.round(c.timestamp||P());D(a,1,d<Number.MAX_SAFE_INTEGER?d:0);var e=sq();d=new Nj;D(d,1,c.timestamp||!isFinite(e)?-1:e);if(M("log_sequence_info_on_gel_web")&&c.aa){e=c.aa;var f=or(e),g=new Mj;D(g,2,f);D(g,1,e);G(d,Mj,3,g);c.Qb&&delete qr[c.aa]}G(a,Nj,33,d);(c.ic?cr:Yq)({endpoint:"log_event",payload:a,cttAuthInfo:c.cttAuthInfo,Ea:c.Ea},b)}
;function sr(a,b){b=void 0===b?{}:b;var c=!1;L("ytLoggingEventsDefaultDisabled",!1)&&(c=!0);rr(a,c?null:rp,b)}
;function tr(a,b){var c=new Oj;Xd(c,Dj,72,Pj,a);sr(c,b)}
function ur(a,b,c){var d=new Oj;Xd(d,Cj,73,Pj,a);c?rr(d,c,b):sr(d,b)}
function vr(a,b,c){var d=new Oj;Xd(d,Bj,78,Pj,a);c?rr(d,c,b):sr(d,b)}
function wr(a,b,c){var d=new Oj;Xd(d,Ej,208,Pj,a);c?rr(d,c,b):sr(d,b)}
function xr(a,b,c){var d=new Oj;Xd(d,uj,156,Pj,a);c?rr(d,c,b):sr(d,b)}
function yr(a,b,c){var d=new Oj;Xd(d,yj,215,Pj,a);c?rr(d,c,b):sr(d,b)}
function zr(a,b,c){var d=new Oj;Xd(d,tj,111,Pj,a);c?rr(d,c,b):sr(d,b)}
;function qm(a,b,c){c=void 0===c?{}:c;if(M("migrate_events_to_ts")){c=void 0===c?{}:c;var d=rp;L("ytLoggingEventsDefaultDisabled",!1)&&rp===rp&&(d=null);M("web_all_payloads_via_jspb")&&Kk(new Q("Logs should be translated to JSPB but are sent as JSON instead",a));nr(a,b,d,c)}else d=rp,L("ytLoggingEventsDefaultDisabled",!1)&&rp==rp&&(d=null),nr(a,b,d,c)}
;var Ar=[{tb:function(a){return"Cannot read property '"+a.key+"'"},
Za:{Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}],TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,
groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]},{regexp:/(null) is not an object \(evaluating '(?:([^.]+)\.)?([^']+)'\)/,groups:["value","base","key"]}]}},{tb:function(a){return"Cannot call '"+a.key+"'"},
Za:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}},{tb:function(a){return a.key+" is not defined"},
Za:{ReferenceError:[{regexp:/(.*) is not defined/,groups:["key"]},{regexp:/Can't find variable: (.*)/,groups:["key"]}]}}];var Cr={ma:[],la:[{callback:Br,weight:500}]};function Br(a){if("JavaException"===a.name)return!0;a=a.stack;return a.includes("chrome://")||a.includes("chrome-extension://")||a.includes("moz-extension://")}
;function Dr(){this.la=[];this.ma=[]}
var Er;function Fr(){if(!Er){var a=Er=new Dr;a.ma.length=0;a.la.length=0;Cr.ma&&a.ma.push.apply(a.ma,Cr.ma);Cr.la&&a.la.push.apply(a.la,Cr.la)}return Er}
;var Gr=new K;function Hr(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=Ir(b);if(Infinity===e)break;var f=e>>3;switch(e&7){case 0:e=Ir(b);if(2===f)return e;break;case 1:if(2===f)return;d+=8;break;case 2:e=Ir(b);if(2===f)return a.substr(d,e);d+=e;break;case 5:if(2===f)return;d+=4;break;default:return}}while(d<c)}
function Ir(a){var b=a(),c=b&127;if(128>b)return c;b=a();c|=(b&127)<<7;if(128>b)return c;b=a();c|=(b&127)<<14;if(128>b)return c;b=a();return 128>b?c|(b&127)<<21:Infinity}
;function Jr(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=Kr(d,a[d],b,c),500<e));d++);d=e}else if("object"===typeof a)for(e in a){if(a[e]){var f=a[e];var g=b;var h=c;g="string"!==typeof f||"clickTrackingParams"!==e&&"trackingParams"!==e?0:(f=Hr(atob(f.replace(/-/g,"+").replace(/_/g,"/"))))?Kr(e+".ve",f,g,h):0;d+=g;d+=Kr(e,a[e],b,c);if(500<d)break}}else c[b]=Lr(a),d+=c[b].length;else c[b]=Lr(a),d+=c[b].length;return d}
function Kr(a,b,c,d){c+="."+a;a=Lr(b);d[c]=a;return c.length+a.length}
function Lr(a){try{return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}catch(b){return"unable to serialize "+typeof a+" ("+b.message+")"}}
;var Mr=new Set,Nr=0,Or=0,Pr=0,Qr=[],Rr=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function pm(a){Sr(a)}
function Tr(a){Sr(a,"WARNING")}
function Sr(a,b,c,d,e,f){f=void 0===f?{}:f;f.name=c||L("INNERTUBE_CONTEXT_CLIENT_NAME",1);f.version=d||L("INNERTUBE_CONTEXT_CLIENT_VERSION");var g=f||{},h=void 0===b?"ERROR":b;h=void 0===h?"ERROR":h;if(a){a.hasOwnProperty("level")&&a.level&&(h=a.level);if(M("console_log_js_exceptions")){var k=[];k.push("Name: "+a.name);k.push("Message: "+a.message);a.hasOwnProperty("params")&&k.push("Error Params: "+JSON.stringify(a.params));a.hasOwnProperty("args")&&k.push("Error args: "+JSON.stringify(a.args));
k.push("File name: "+a.fileName);k.push("Stacktrace: "+a.stack);window.console.log(k.join("\n"),a)}if(!(5<=Nr)){var m=Qr,q=te(a),t=q.message||"Unknown Error",x=q.name||"UnknownError",u=q.stack||a.j||"Not available";if(u.startsWith(x+": "+t)){var A=u.split("\n");A.shift();u=A.join("\n")}var E=q.lineNumber||"Not available",F=q.fileName||"Not available",O=u,N=0;if(a.hasOwnProperty("args")&&a.args&&a.args.length)for(var R=0;R<a.args.length&&!(N=Jr(a.args[R],"params."+R,g,N),500<=N);R++);else if(a.hasOwnProperty("params")&&
a.params){var ca=a.params;if("object"===typeof a.params)for(var W in ca){if(ca[W]){var nb="params."+W,Va=Lr(ca[W]);g[nb]=Va;N+=nb.length+Va.length;if(500<N)break}}else g.params=Lr(ca)}if(m.length)for(var la=0;la<m.length&&!(N=Jr(m[la],"params.context."+la,g,N),500<=N);la++);navigator.vendor&&!g.hasOwnProperty("vendor")&&(g["device.vendor"]=navigator.vendor);var H={message:t,name:x,lineNumber:E,fileName:F,stack:O,params:g,sampleWeight:1},ka=Number(a.columnNumber);isNaN(ka)||(H.lineNumber=H.lineNumber+
":"+ka);if("IGNORED"===a.level)var ea=0;else a:{for(var Ae=Fr(),Be=p(Ae.ma),vd=Be.next();!vd.done;vd=Be.next()){var na=vd.value;if(H.message&&H.message.match(na.Pq)){ea=na.weight;break a}}for(var tp=p(Ae.la),Tj=tp.next();!Tj.done;Tj=tp.next()){var up=Tj.value;if(up.callback(H)){ea=up.weight;break a}}ea=1}H.sampleWeight=ea;for(var vp=p(Ar),Uj=vp.next();!Uj.done;Uj=vp.next()){var Vj=Uj.value;if(Vj.Za[H.name])for(var wp=p(Vj.Za[H.name]),Wj=wp.next();!Wj.done;Wj=wp.next()){var xp=Wj.value,Rg=H.message.match(xp.regexp);
if(Rg){H.params["params.error.original"]=Rg[0];for(var Xj=xp.groups,yp={},wd=0;wd<Xj.length;wd++)yp[Xj[wd]]=Rg[wd+1],H.params["params.error."+Xj[wd]]=Rg[wd+1];H.message=Vj.tb(yp);break}}}H.params||(H.params={});var zp=Fr();H.params["params.errorServiceSignature"]="msg="+zp.ma.length+"&cb="+zp.la.length;H.params["params.serviceWorker"]="false";y.document&&y.document.querySelectorAll&&(H.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));Db("sample").constructor!==
Bb&&(H.params["params.fconst"]="true");window.yterr&&"function"===typeof window.yterr&&window.yterr(H);if(0!==H.sampleWeight&&!Mr.has(H.message)){if("ERROR"===h){Gr.oa("handleError",H);if(M("record_app_crashed_web")&&0===Pr&&1===H.sampleWeight)if(Pr++,M("errors_via_jspb")){var Yj=new qj;D(Yj,1,1);if(!M("report_client_error_with_app_crash_ks")){var Ap=new lj;D(Ap,1,H.message);var Bp=new mj;G(Bp,lj,3,Ap);var Cp=new nj;G(Cp,mj,5,Bp);var Dp=new oj;G(Dp,nj,9,Cp);G(Yj,oj,4,Dp)}var Ep=new Oj;Xd(Ep,qj,20,
Pj,Yj);sr(Ep)}else{var Fp={appCrashType:"APP_CRASH_TYPE_BREAKPAD"};M("report_client_error_with_app_crash_ks")||(Fp.systemHealth={crashData:{clientError:{logMessage:{message:H.message}}}});qm("appCrashed",Fp)}Or++}else"WARNING"===h&&Gr.oa("handleWarning",H);if(M("kevlar_gel_error_routing"))a:{var Ce=h;if(M("errors_via_jspb")){if(Ur())var Hp=void 0;else{var xd=new ij;D(xd,1,H.stack);H.fileName&&D(xd,4,H.fileName);var Kb=H.lineNumber&&H.lineNumber.split?H.lineNumber.split(":"):[];0!==Kb.length&&(1!==
Kb.length||isNaN(Number(Kb[0]))?2!==Kb.length||isNaN(Number(Kb[0]))||isNaN(Number(Kb[1]))||(D(xd,2,Number(Kb[0])),D(xd,3,Number(Kb[1]))):D(xd,2,Number(Kb[0])));var zc=new lj;D(zc,1,H.message);D(zc,3,H.name);D(zc,6,H.sampleWeight);"ERROR"===Ce?D(zc,2,2):"WARNING"===Ce?D(zc,2,1):D(zc,2,0);var Zj=new jj;D(Zj,1,!0);Xd(Zj,ij,3,kj,xd);var cc=new fj;D(cc,3,window.location.href);for(var Ip=L("FEXP_EXPERIMENTS",[]),ak=0;ak<Ip.length;ak++){var Mv=Ip[ak];Bd(cc);Pd(cc,5,2,!1).push(Mv)}var bk=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");
if(!Bk()&&bk)for(var Jp=p(Object.keys(bk)),Ac=Jp.next();!Ac.done;Ac=Jp.next()){var Kp=Ac.value,ck=new hj;D(ck,1,Kp);ck.setValue(String(bk[Kp]));Zd(cc,4,hj,ck)}var dk=H.params;if(dk){var Lp=p(Object.keys(dk));for(Ac=Lp.next();!Ac.done;Ac=Lp.next()){var Mp=Ac.value,ek=new hj;D(ek,1,"client."+Mp);ek.setValue(String(dk[Mp]));Zd(cc,4,hj,ek)}}var Np=L("SERVER_NAME"),Op=L("SERVER_VERSION");if(Np&&Op){var fk=new hj;D(fk,1,"server.name");fk.setValue(Np);Zd(cc,4,hj,fk);var gk=new hj;D(gk,1,"server.version");
gk.setValue(Op);Zd(cc,4,hj,gk)}var Sg=new mj;G(Sg,fj,1,cc);G(Sg,jj,2,Zj);G(Sg,lj,3,zc);Hp=Sg}var Pp=Hp;if(!Pp)break a;var Qp=new Oj;Xd(Qp,mj,163,Pj,Pp);sr(Qp)}else{if(Ur())var Rp=void 0;else{var De={stackTrace:H.stack};H.fileName&&(De.filename=H.fileName);var Lb=H.lineNumber&&H.lineNumber.split?H.lineNumber.split(":"):[];0!==Lb.length&&(1!==Lb.length||isNaN(Number(Lb[0]))?2!==Lb.length||isNaN(Number(Lb[0]))||isNaN(Number(Lb[1]))||(De.lineNumber=Number(Lb[0]),De.columnNumber=Number(Lb[1])):De.lineNumber=
Number(Lb[0]));var hk={level:"ERROR_LEVEL_UNKNOWN",message:H.message,errorClassName:H.name,sampleWeight:H.sampleWeight};"ERROR"===Ce?hk.level="ERROR_LEVEL_ERROR":"WARNING"===Ce&&(hk.level="ERROR_LEVEL_WARNNING");var Nv={isObfuscated:!0,browserStackInfo:De},yd={pageUrl:window.location.href,kvPairs:[]};L("FEXP_EXPERIMENTS")&&(yd.experimentIds=L("FEXP_EXPERIMENTS"));var ik=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(!Bk()&&ik)for(var Sp=p(Object.keys(ik)),Bc=Sp.next();!Bc.done;Bc=Sp.next()){var Tp=
Bc.value;yd.kvPairs.push({key:Tp,value:String(ik[Tp])})}var jk=H.params;if(jk){var Up=p(Object.keys(jk));for(Bc=Up.next();!Bc.done;Bc=Up.next()){var Vp=Bc.value;yd.kvPairs.push({key:"client."+Vp,value:String(jk[Vp])})}}var Wp=L("SERVER_NAME"),Xp=L("SERVER_VERSION");Wp&&Xp&&(yd.kvPairs.push({key:"server.name",value:Wp}),yd.kvPairs.push({key:"server.version",value:Xp}));Rp={errorMetadata:yd,stackTrace:Nv,logMessage:hk}}var Yp=Rp;if(!Yp)break a;qm("clientError",Yp)}if("ERROR"===Ce||M("errors_flush_gel_always_killswitch"))b:if(M("migrate_events_to_ts"))c:{if(M("web_fp_via_jspb")&&
(pr(!0),!M("web_fp_via_jspb_and_json")))break c;pr()}else{if(M("web_fp_via_jspb")&&(pr(!0),!M("web_fp_via_jspb_and_json")))break b;pr()}}if(!M("suppress_error_204_logging")){var Ee=H.params||{},dc={urlParams:{a:"logerror",t:"jserror",type:H.name,msg:H.message.substr(0,250),line:H.lineNumber,level:h,"client.name":Ee.name},postParams:{url:L("PAGE_NAME",window.location.href),file:H.fileName},method:"POST"};Ee.version&&(dc["client.version"]=Ee.version);if(dc.postParams){H.stack&&(dc.postParams.stack=
H.stack);for(var Zp=p(Object.keys(Ee)),kk=Zp.next();!kk.done;kk=Zp.next()){var $p=kk.value;dc.postParams["client."+$p]=Ee[$p]}var lk=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(lk)for(var aq=p(Object.keys(lk)),mk=aq.next();!mk.done;mk=aq.next()){var bq=mk.value;dc.postParams[bq]=lk[bq]}var cq=L("SERVER_NAME"),dq=L("SERVER_VERSION");cq&&dq&&(dc.postParams["server.name"]=cq,dc.postParams["server.version"]=dq)}jl(L("ECATCHER_REPORT_HOST","")+"/error_204",dc)}try{Mr.add(H.message)}catch(px){}Nr++}}}}
function Ur(){for(var a=p(Rr),b=a.next();!b.done;b=a.next())if(hm(b.value.toLowerCase()))return!0;return!1}
function Vr(a){var b=Ja.apply(1,arguments);a.args||(a.args=[]);a.args.push.apply(a.args,ia(b))}
;function Wr(){this.register=new Map}
function Xr(a){a=p(a.register.values());for(var b=a.next();!b.done;b=a.next())b.value.Uq("ABORTED")}
Wr.prototype.clear=function(){Xr(this);this.register.clear()};
var Yr=new Wr;var Zr=Date.now().toString();
function $r(){a:{if(window.crypto&&window.crypto.getRandomValues)try{var a=Array(16),b=new Uint8Array(16);window.crypto.getRandomValues(b);for(var c=0;c<a.length;c++)a[c]=b[c];var d=a;break a}catch(e){}d=Array(16);for(a=0;16>a;a++){b=Date.now();for(c=0;c<b%23;c++)d[a]=Math.random();d[a]=Math.floor(256*Math.random())}if(Zr)for(a=1,b=0;b<Zr.length;b++)d[a%16]=d[a%16]^d[(a-1)%16]/4^Zr.charCodeAt(b),a++}a=[];for(b=0;b<d.length;b++)a.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(d[b]&63));
return a.join("")}
;var as=y.ytLoggingDocDocumentNonce_;as||(as=$r(),z("ytLoggingDocDocumentNonce_",as));var bs=as;var cs={Lh:0,ke:1,ue:2,Gl:3,Nh:4,Yp:5,vm:6,ho:7,Bn:8,Tn:9,0:"DEFAULT",1:"CHAT",2:"CONVERSATIONS",3:"MINIPLAYER",4:"DIALOG",5:"VOZ",6:"MUSIC_WATCH_TABS",7:"SHARE",8:"PUSH_NOTIFICATIONS",9:"RICH_GRID_WATCH"};function ds(a){this.i=a}
function es(a){return new ds({trackingParams:a})}
ds.prototype.getAsJson=function(){var a={};void 0!==this.i.trackingParams?a.trackingParams=this.i.trackingParams:(a.veType=this.i.veType,void 0!==this.i.veCounter&&(a.veCounter=this.i.veCounter),void 0!==this.i.elementIndex&&(a.elementIndex=this.i.elementIndex));void 0!==this.i.dataElement&&(a.dataElement=this.i.dataElement.getAsJson());void 0!==this.i.youtubeData&&(a.youtubeData=this.i.youtubeData);return a};
ds.prototype.getAsJspb=function(){var a=new sj;if(void 0!==this.i.trackingParams){var b=this.i.trackingParams;null!=b&&b instanceof id&&hd();D(a,1,b)}else void 0!==this.i.veType&&D(a,2,this.i.veType),void 0!==this.i.veCounter&&D(a,6,this.i.veCounter),void 0!==this.i.elementIndex&&D(a,3,this.i.elementIndex);void 0!==this.i.dataElement&&(b=this.i.dataElement.getAsJspb(),G(a,sj,7,b));void 0!==this.i.youtubeData&&G(a,Li,8,this.i.jspbYoutubeData);return a};
ds.prototype.toString=function(){return JSON.stringify(this.getAsJson())};
ds.prototype.isClientVe=function(){return!this.i.trackingParams&&!!this.i.veType};function fs(a){a=void 0===a?0:a;return 0===a?"client-screen-nonce":"client-screen-nonce."+a}
function gs(a){a=void 0===a?0:a;return 0===a?"ROOT_VE_TYPE":"ROOT_VE_TYPE."+a}
function hs(a){return L(gs(void 0===a?0:a))}
z("yt_logging_screen.getRootVeType",hs);function is(a){return(a=hs(void 0===a?0:a))?new ds({veType:a,youtubeData:void 0,jspbYoutubeData:void 0}):null}
function js(){var a=L("csn-to-ctt-auth-info");a||(a={},Ak("csn-to-ctt-auth-info",a));return a}
function ks(a){a=L(fs(void 0===a?0:a));if(!a&&!L("USE_CSN_FALLBACK",!0))return null;a||(a="UNDEFINED_CSN");return a?a:null}
z("yt_logging_screen.getCurrentCsn",ks);function ls(a,b,c){var d=js();(c=ks(c))&&delete d[c];b&&(d[a]=b)}
function ms(a){return js()[a]}
z("yt_logging_screen.getCttAuthInfo",ms);
function ns(a,b,c,d){c=void 0===c?0:c;if(a!==L(fs(c))||b!==L(gs(c)))if(ls(a,d,c),Ak(fs(c),a),Ak(gs(c),b),b=function(){setTimeout(function(){if(a)if(M("web_time_via_jspb")){var e=new tj;D(e,1,bs);D(e,2,a);M("use_default_heartbeat_client")?zr(e):zr(e,void 0,rp)}else e={clientDocumentNonce:bs,clientScreenNonce:a},M("use_default_heartbeat_client")?qm("foregroundHeartbeatScreenAssociated",e):nr("foregroundHeartbeatScreenAssociated",e,rp)},0)},"requestAnimationFrame"in window)try{window.requestAnimationFrame(b)}catch(e){b()}else b()}
z("yt_logging_screen.setCurrentScreen",ns);var os=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};z("yt.msgs_",os);function ps(a){vk(os,arguments)}
;var qs={je:3611,ud:27686,vd:85013,wd:23462,yd:157557,zd:42016,Ad:62407,Bd:26926,xd:43781,Cd:51236,Dd:79148,Ed:50160,Fd:77504,Rd:153587,Sd:87907,Td:18630,Ud:54445,Vd:80935,Wd:152172,Xd:105675,Yd:150723,Zd:37521,ae:147285,be:47786,ce:98349,de:123695,ee:6827,ge:29434,he:7282,ie:124448,me:32276,le:76278,ne:147868,oe:147869,pe:93911,qe:106531,re:27259,se:27262,te:27263,we:21759,xe:27107,ye:62936,ze:49568,Ae:38408,Be:80637,Ce:68727,De:68728,Ee:80353,Fe:80356,Ge:74610,He:45707,Ie:83962,Je:83970,Ke:46713,
Le:89711,Me:74612,Ne:155792,Oe:93265,Pe:74611,Qe:131380,Se:128979,Te:139311,Ue:128978,Re:131391,Ve:105350,Xe:139312,Ye:134800,We:131392,af:113533,bf:93252,cf:99357,ef:94521,ff:114252,gf:113532,hf:94522,df:94583,jf:88E3,kf:139580,lf:93253,mf:93254,nf:94387,pf:94388,qf:93255,rf:97424,Ze:72502,sf:110111,tf:76019,vf:117092,wf:117093,uf:89431,xf:110466,yf:77240,zf:60508,Af:148123,Bf:148124,Cf:137401,Df:137402,Ef:137046,Ff:73393,Gf:113534,Hf:92098,If:131381,Jf:84517,Kf:83759,Lf:80357,Mf:86113,Nf:72598,
Of:72733,Pf:107349,Qf:124275,Rf:118203,Sf:133275,Tf:160157,Uf:152569,Vf:156651,Wf:133274,Xf:160159,Yf:160158,Zf:133272,ag:133273,cg:133276,dg:144507,eg:143247,fg:156652,gg:143248,hg:143249,ig:143250,jg:143251,kg:156653,lg:144401,ng:117431,mg:133797,og:153964,pg:128572,qg:133405,rg:117429,sg:117430,tg:117432,ug:120080,vg:117259,wg:156655,xg:156654,yg:121692,zg:145656,Ag:156656,Bg:145655,Cg:145653,Dg:145654,Eg:145657,Fg:132972,Gg:133051,Hg:133658,Ig:132971,Jg:97615,Lg:143359,Kg:143356,Ng:143361,Mg:143358,
Pg:143360,Og:143357,Qg:142303,Rg:143353,Sg:143354,Tg:144479,Ug:143355,Vg:31402,Xg:133624,Yg:146477,Zg:133623,ah:133622,Wg:133621,bh:84774,dh:95117,eh:150497,fh:98930,gh:98931,hh:98932,ih:153320,jh:153321,kh:43347,lh:129889,mh:149123,nh:45474,oh:100352,ph:84758,qh:98443,rh:117985,sh:74613,th:155911,uh:74614,vh:64502,wh:136032,xh:74615,yh:74616,zh:122224,Ah:74617,Bh:77820,Ch:74618,Dh:93278,Eh:93274,Fh:93275,Gh:93276,Hh:22110,Ih:29433,Jh:133798,Kh:132295,Mh:120541,Oh:82047,Ph:113550,Qh:75836,Rh:75837,
Sh:42352,Th:84512,Uh:76065,Vh:75989,ai:16623,bi:32594,ci:27240,di:32633,fi:74858,gi:156999,ii:3945,hi:16989,ji:45520,ki:25488,li:25492,mi:25494,ni:55760,oi:14057,ri:18451,si:57204,ti:57203,vi:17897,wi:57205,xi:18198,yi:17898,zi:17909,Ai:43980,Bi:46220,Ci:11721,Di:147994,Ei:49954,Fi:96369,Gi:3854,Hi:151633,Ii:56251,Ji:159108,Ki:25624,Li:152036,cj:16906,dj:99999,ej:68172,fj:27068,gj:47973,hj:72773,ij:26970,jj:26971,kj:96805,lj:17752,mj:73233,nj:109512,oj:22256,pj:14115,qj:22696,rj:89278,sj:89277,tj:109513,
uj:43278,vj:43459,wj:43464,xj:89279,yj:43717,zj:55764,Aj:22255,Bj:147912,Cj:89281,Dj:40963,Ej:43277,Fj:43442,Gj:91824,Hj:120137,Ij:96367,Jj:36850,Kj:72694,Lj:37414,Mj:36851,Oj:124863,Nj:121343,Pj:73491,Qj:54473,Rj:43375,Sj:46674,Tj:143815,Uj:139095,Vj:144402,Wj:149968,Xj:149969,Yj:32473,Zj:72901,ak:72906,bk:50947,ck:50612,dk:50613,ek:50942,fk:84938,gk:84943,hk:84939,ik:84941,jk:84944,kk:84940,lk:84942,mk:35585,nk:51926,pk:79983,qk:63238,rk:18921,sk:63241,tk:57893,uk:41182,vk:135732,wk:33424,xk:22207,
yk:42993,zk:36229,Ak:22206,Bk:22205,Ck:18993,Dk:19001,Ek:18990,Fk:18991,Gk:18997,Hk:18725,Ik:19003,Jk:36874,Kk:44763,Lk:33427,Mk:67793,Nk:22182,Ok:37091,Pk:34650,Qk:50617,Rk:47261,Sk:22287,Tk:25144,Uk:97917,Vk:62397,Wk:150871,Xk:150874,Yk:125598,Zk:137935,al:36961,bl:108035,dl:27426,fl:27857,il:27846,jl:27854,kl:69692,ll:61411,ml:39299,nl:38696,ol:62520,pl:36382,ql:108701,rl:50663,sl:36387,ul:14908,vl:37533,wl:105443,xl:61635,yl:62274,zl:133818,Al:65702,Bl:65703,Cl:65701,Dl:76256,El:37671,Fl:49953,
Hl:36216,Il:28237,Jl:39553,Kl:29222,Ll:26107,Ml:38050,Nl:26108,Pl:120745,Ol:26109,Ql:26110,Rl:66881,Sl:28236,Tl:14586,Ul:57929,Vl:74723,Wl:44098,Xl:44099,am:23528,bm:61699,Yl:134104,Zl:134103,cm:59149,dm:101951,em:97346,fm:118051,gm:95102,hm:64882,im:119505,jm:63595,km:63349,lm:95101,mm:75240,nm:27039,om:68823,pm:21537,qm:83464,rm:75707,sm:83113,tm:101952,um:101953,wm:79610,xm:125755,ym:24402,zm:24400,Am:32925,Cm:57173,Bm:156421,Dm:122502,Em:145268,Fm:138480,Gm:64423,Hm:64424,Im:33986,Jm:100828,Km:129089,
Lm:21409,Pm:135155,Qm:135156,Rm:135157,Sm:135158,Tm:158225,Um:135159,Vm:135160,Wm:135161,Ym:135162,Zm:135163,Xm:158226,an:158227,bn:135164,cn:135165,dn:135166,Mm:11070,Nm:11074,Om:17880,en:14001,gn:30709,hn:30707,jn:30711,kn:30710,ln:30708,fn:26984,mn:146143,nn:63648,pn:63649,qn:51879,rn:111059,sn:5754,tn:20445,un:151308,vn:151152,xn:130975,wn:130976,yn:110386,zn:113746,An:66557,Cn:17310,Dn:28631,En:21589,Fn:154946,Gn:68012,Hn:60480,In:138664,Jn:141121,Kn:31571,Ln:141978,Mn:150105,Nn:150106,On:150107,
Pn:150108,Qn:76980,Rn:41577,Sn:45469,Un:38669,Vn:13768,Wn:13777,Xn:141842,Yn:62985,Zn:4724,ao:59369,bo:43927,co:43928,eo:12924,fo:100355,ko:56219,lo:27669,mo:10337,jo:47896,no:122629,po:139723,oo:139722,qo:121258,ro:107598,so:127991,to:96639,uo:107536,vo:130169,wo:96661,xo:145188,yo:96658,zo:116646,Ao:159428,Bo:121122,Co:96660,Do:127738,Eo:127083,Fo:155281,Go:147842,Ho:104443,Io:96659,Jo:147595,Ko:106442,Lo:134840,Mo:63667,No:63668,Oo:63669,Po:130686,Qo:147036,Ro:78314,So:147799,To:148649,Uo:55761,
Vo:127098,Wo:134841,Xo:96368,Yo:67374,Zo:48992,ap:146176,bp:49956,cp:31961,ep:26388,fp:23811,gp:5E4,hp:126250,ip:96370,jp:47355,kp:47356,lp:37935,mp:45521,np:21760,qp:83769,rp:49977,sp:49974,tp:93497,up:93498,vp:34325,wp:140759,xp:115803,yp:123707,zp:100081,Ap:35309,Bp:68314,Cp:25602,Dp:100339,Ep:143516,Fp:59018,Gp:18248,Hp:50625,Ip:9729,Jp:37168,Kp:37169,Lp:21667,Mp:16749,Np:18635,Op:39305,Pp:18046,Qp:53969,Rp:8213,Sp:93926,Tp:102852,Up:110099,Vp:22678,Wp:69076,Xp:137575,Zp:139224,aq:100856,bq:154430,
cq:17736,fq:3832,gq:147111,hq:55759,iq:64031,oq:93044,pq:93045,qq:34388,rq:17657,sq:17655,tq:39579,uq:39578,wq:77448,xq:8196,yq:11357,zq:69877,Aq:8197,Bq:156512,Cq:156509,Dq:82039};function rs(){var a=vb(ss),b;return(new xf(function(c,d){a.onSuccess=function(e){bl(e)?c(new ts(e)):d(new us("Request failed, status="+(e&&"status"in e?e.status:-1),"net.badstatus",e))};
a.onError=function(e){d(new us("Unknown request error","net.unknown",e))};
a.onTimeout=function(e){d(new us("Request timed out","net.timeout",e))};
b=jl("//googleads.g.doubleclick.net/pagead/id",a)})).eb(function(c){c instanceof Ef&&b.abort();
return Cf(c)})}
function us(a,b,c){ab.call(this,a+", errorCode="+b);this.errorCode=b;this.xhr=c;this.name="PromiseAjaxError"}
r(us,ab);function ts(a){this.xhr=a}
;function vs(){this.i=0;this.ja=null}
vs.prototype.then=function(a,b,c){return 1===this.i&&a?(a=a.call(c,this.ja))&&"function"===typeof a.then?a:ws(a):2===this.i&&b?(a=b.call(c,this.ja))&&"function"===typeof a.then?a:xs(a):this};
vs.prototype.getValue=function(){return this.ja};
vs.prototype.$goog_Thenable=!0;function xs(a){var b=new vs;a=void 0===a?null:a;b.i=2;b.ja=void 0===a?null:a;return b}
function ws(a){var b=new vs;a=void 0===a?null:a;b.i=1;b.ja=void 0===a?null:a;return b}
;function ys(a,b){if(a)return a[b.name]}
;function zs(a,b){var c=void 0===c?{}:c;a={method:void 0===b?"POST":b,mode:Xk(a)?"same-origin":"cors",credentials:Xk(a)?"same-origin":"include"};b={};for(var d=p(Object.keys(c)),e=d.next();!e.done;e=d.next())e=e.value,c[e]&&(b[e]=c[e]);0<Object.keys(b).length&&(a.headers=b);return a}
;function As(){return rg()||gm&&hm("applewebkit")&&!hm("version")&&(!hm("safari")||hm("gsa/"))||Oc&&hm("version/")?!0:L("EOM_VISITOR_DATA")?!1:!0}
;function Bs(a){a:{var b=a.raw_embedded_player_response;if(!b&&(a=a.embedded_player_response))try{b=JSON.parse(a)}catch(d){b="EMBEDDED_PLAYER_MODE_UNKNOWN";break a}if(b)b:{for(var c in Xh)if(Xh[c]==b.embeddedPlayerMode){b=Xh[c];break b}b="EMBEDDED_PLAYER_MODE_UNKNOWN"}else b="EMBEDDED_PLAYER_MODE_UNKNOWN"}return"EMBEDDED_PLAYER_MODE_PFL"===b}
;function Cs(a){ab.call(this,a.message||a.description||a.name);this.isMissing=a instanceof Ds;this.isTimeout=a instanceof us&&"net.timeout"==a.errorCode;this.isCanceled=a instanceof Ef}
r(Cs,ab);Cs.prototype.name="BiscottiError";function Ds(){ab.call(this,"Biscotti ID is missing from server")}
r(Ds,ab);Ds.prototype.name="BiscottiMissingError";var ss={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Es=null;function Fs(){if(M("disable_biscotti_fetch_entirely_for_all_web_clients"))return Error("Biscotti id fetching has been disabled entirely.");if(!As())return Error("User has not consented - not fetching biscotti id.");var a=L("PLAYER_VARS",{});if("1"==tb(a))return Error("Biscotti ID is not available in private embed mode");if(Bs(a))return Error("Biscotti id fetching has been disabled for pfl.")}
function Mk(){var a=Fs();if(void 0!==a)return Cf(a);Es||(Es=rs().then(Gs).eb(function(b){return Hs(2,b)}));
return Es}
function Gs(a){a=a.xhr.responseText;if(0!=a.lastIndexOf(")]}'",0))throw new Ds;a=JSON.parse(a.substr(4));if(1<(a.type||1))throw new Ds;a=a.id;Nk(a);Es=ws(a);Is(18E5,2);return a}
function Hs(a,b){b=new Cs(b);Nk("");Es=xs(b);0<a&&Is(12E4,a-1);throw b;}
function Is(a,b){cl(function(){rs().then(Gs,function(c){return Hs(b,c)}).eb(cb)},a)}
function Js(){try{var a=B("yt.ads.biscotti.getId_");return a?a():Mk()}catch(b){return Cf(b)}}
;function Ks(a){if("1"!=tb(L("PLAYER_VARS",{}))){a&&Lk();try{Js().then(function(){},function(){}),cl(Ks,18E5)}catch(b){Jk(b)}}}
;function Ls(){this.md=!0}
function Ms(a){var b={},c=tg([]);c&&(b.Authorization=c,c=a=null==a?void 0:a.sessionIndex,void 0===c&&(c=Number(L("SESSION_INDEX",0)),c=isNaN(c)?0:c),M("voice_search_auth_header_removal")||(b["X-Goog-AuthUser"]=c),"INNERTUBE_HOST_OVERRIDE"in zk||(b["X-Origin"]=window.location.origin),void 0===a&&"DELEGATED_SESSION_ID"in zk&&(b["X-Goog-PageId"]=L("DELEGATED_SESSION_ID")));return b}
;var Ns={identityType:"UNAUTHENTICATED_IDENTITY_TYPE_UNKNOWN"};var Os=new Map([["dark","USER_INTERFACE_THEME_DARK"],["light","USER_INTERFACE_THEME_LIGHT"]]);function Ps(){var a=void 0===a?window.location.href:a;if(M("kevlar_disable_theme_param"))return null;mc(nc(5,a));try{var b=Vk(a).theme;return Os.get(b)||null}catch(c){}return null}
;function Qs(){this.i={};if(this.j=vl()){var a=pg.get("CONSISTENCY",void 0);a&&Rs(this,{encryptedTokenJarContents:a})}}
Qs.prototype.handleResponse=function(a,b){if(!b)throw Error("request needs to be passed into ConsistencyService");var c,d;b=(null==(c=b.ga.context)?void 0:null==(d=c.request)?void 0:d.consistencyTokenJars)||[];var e;if(a=null==(e=a.responseContext)?void 0:e.consistencyTokenJar){e=p(b);for(c=e.next();!c.done;c=e.next())delete this.i[c.value.encryptedTokenJarContents];Rs(this,a)}};
function Rs(a,b){if(b.encryptedTokenJarContents&&(a.i[b.encryptedTokenJarContents]=b,"string"===typeof b.expirationSeconds)){var c=Number(b.expirationSeconds);setTimeout(function(){delete a.i[b.encryptedTokenJarContents]},1E3*c);
a.j&&tl("CONSISTENCY",b.encryptedTokenJarContents,c,void 0,!0)}}
;var Ss=window.location.hostname.split(".").slice(-2).join(".");function Ts(){var a=L("LOCATION_PLAYABILITY_TOKEN");"TVHTML5"===L("INNERTUBE_CLIENT_NAME")&&(this.i=Us(this))&&(a=this.i.get("yt-location-playability-token"));a&&(this.locationPlayabilityToken=a,this.j=void 0)}
var Vs;Ts.getInstance=function(){Vs=B("yt.clientLocationService.instance");Vs||(Vs=new Ts,z("yt.clientLocationService.instance",Vs));return Vs};
l=Ts.prototype;l.setLocationOnInnerTubeContext=function(a){a.client||(a.client={});this.j?(a.client.locationInfo||(a.client.locationInfo={}),a.client.locationInfo.latitudeE7=Math.floor(1E7*this.j.coords.latitude),a.client.locationInfo.longitudeE7=Math.floor(1E7*this.j.coords.longitude),a.client.locationInfo.horizontalAccuracyMeters=Math.round(this.j.coords.accuracy),a.client.locationInfo.forceLocationPlayabilityTokenRefresh=!0):this.locationPlayabilityToken&&(a.client.locationPlayabilityToken=this.locationPlayabilityToken)};
l.handleResponse=function(a){var b;a=null==(b=a.responseContext)?void 0:b.locationPlayabilityToken;void 0!==a&&(this.locationPlayabilityToken=a,this.j=void 0,"TVHTML5"===L("INNERTUBE_CLIENT_NAME")?(this.i=Us(this))&&this.i.set("yt-location-playability-token",a,15552E3):tl("YT_CL",JSON.stringify({loctok:a}),15552E3,Ss,!0))};
function Us(a){return void 0===a.i?new Tl("yt-client-location"):a.i}
l.clearLocationPlayabilityToken=function(a){"TVHTML5"===a?(this.i=Us(this))&&this.i.remove("yt-location-playability-token"):ul("YT_CL")};
l.getCurrentPositionFromGeolocation=function(){var a=this;if(!(navigator&&navigator.geolocation&&navigator.geolocation.getCurrentPosition))return Promise.reject(Error("Geolocation unsupported"));var b=!1,c=1E4;"MWEB"===L("INNERTUBE_CLIENT_NAME")&&(b=!0,c=15E3);return new Promise(function(d,e){navigator.geolocation.getCurrentPosition(function(f){a.j=f;d(f)},function(f){e(f)},{enableHighAccuracy:b,
maximumAge:0,timeout:c})})};
l.createUnpluggedLocationInfo=function(a){var b={};a=a.coords;if(null==a?0:a.latitude)b.latitudeE7=Math.floor(1E7*a.latitude);if(null==a?0:a.longitude)b.longitudeE7=Math.floor(1E7*a.longitude);if(null==a?0:a.accuracy)b.locationRadiusMeters=Math.round(a.accuracy);return b};function Ws(a,b){var c,d=null==(c=ys(a,dj))?void 0:c.signal;if(d&&b.Ja&&(c=b.Ja[d]))return c();var e;if((c=null==(e=ys(a,bj))?void 0:e.request)&&b.Cc&&(e=b.Cc[c]))return e();for(var f in a)if(b.Mb[f]&&(a=b.Mb[f]))return a()}
;var Xs=Symbol("injectionDeps");function Ys(a){this.name=a}
Ys.prototype.toString=function(){return"InjectionToken("+this.name+")"};
function Zs(){this.key=$s}
function at(){this.providers=new Map;this.i=new Map}
at.prototype.resolve=function(a){return a instanceof Zs?bt(this,a.key,[],!0):bt(this,a,[])};
function bt(a,b,c,d){d=void 0===d?!1:d;if(-1<c.indexOf(b))throw Error("Deps cycle for: "+b);if(a.i.has(b))return a.i.get(b);if(!a.providers.has(b)){if(d)return;throw Error("No provider for: "+b);}d=a.providers.get(b);c.push(b);if(d.oc)var e=d.oc;else if(d.td)e=d[Xs]?ct(a,d[Xs],c):[],e=d.td.apply(d,ia(e));else if(d.nc){e=d.nc;var f=e[Xs]?ct(a,e[Xs],c):[];e=new (Function.prototype.bind.apply(e,[null].concat(ia(f))))}else throw Error("Could not resolve providers for: "+b);c.pop();d.br||a.i.set(b,e);
return e}
function ct(a,b,c){return b?b.map(function(d){return d instanceof Zs?bt(a,d.key,c,!0):bt(a,d,c)}):[]}
;var dt;function et(){dt||(dt=new at);return dt}
;function ft(a){return function(){return new a}}
;var gt={},ht=(gt.WEB_UNPLUGGED="^unplugged/",gt.WEB_UNPLUGGED_ONBOARDING="^unplugged/",gt.WEB_UNPLUGGED_OPS="^unplugged/",gt.WEB_UNPLUGGED_PUBLIC="^unplugged/",gt.WEB_CREATOR="^creator/",gt.WEB_KIDS="^kids/",gt.WEB_EXPERIMENTS="^experiments/",gt.WEB_MUSIC="^music/",gt.WEB_REMIX="^music/",gt.WEB_MUSIC_EMBEDDED_PLAYER="^music/",gt.WEB_MUSIC_EMBEDDED_PLAYER="^main_app/|^sfv/",gt);
function jt(a){var b=void 0===b?"UNKNOWN_INTERFACE":b;if(1===a.length)return a[0];var c=ht[b];if(c){var d=new RegExp(c),e=p(a);for(c=e.next();!c.done;c=e.next())if(c=c.value,d.exec(c))return c}var f=[];Object.entries(ht).forEach(function(g){var h=p(g);g=h.next().value;h=h.next().value;b!==g&&f.push(h)});
d=new RegExp(f.join("|"));a.sort(function(g,h){return g.length-h.length});
e=p(a);for(c=e.next();!c.done;c=e.next())if(c=c.value,!d.exec(c))return c;return a[0]}
;function kt(){}
kt.prototype.o=function(a,b,c){b=void 0===b?{}:b;c=void 0===c?Ns:c;var d=a.clickTrackingParams,e=this.m,f=!1;f=void 0===f?!1:f;e=void 0===e?!1:e;var g=L("INNERTUBE_CONTEXT");if(g){g=wb(g);M("web_no_tracking_params_in_shell_killswitch")||delete g.clickTracking;g.client||(g.client={});var h=g.client;"MWEB"===h.clientName&&(h.clientFormFactor=L("IS_TABLET")?"LARGE_FORM_FACTOR":"SMALL_FORM_FACTOR");h.screenWidthPoints=window.innerWidth;h.screenHeightPoints=window.innerHeight;h.screenPixelDensity=Math.round(window.devicePixelRatio||
1);h.screenDensityFloat=window.devicePixelRatio||1;h.utcOffsetMinutes=-Math.floor((new Date).getTimezoneOffset());var k=void 0===k?!1:k;xl.getInstance();var m="USER_INTERFACE_THEME_LIGHT";Al(165)?m="USER_INTERFACE_THEME_DARK":Al(174)?m="USER_INTERFACE_THEME_LIGHT":!M("kevlar_legacy_browsers")&&window.matchMedia&&window.matchMedia("(prefers-color-scheme)").matches&&window.matchMedia("(prefers-color-scheme: dark)").matches&&(m="USER_INTERFACE_THEME_DARK");k=k?m:Ps()||m;h.userInterfaceTheme=k;if(!f){if(k=
Hl())h.connectionType=k;M("web_log_effective_connection_type")&&(k=Il())&&(g.client.effectiveConnectionType=k)}var q;if(M("web_log_memory_total_kbytes")&&(null==(q=y.navigator)?0:q.deviceMemory)){var t;q=null==(t=y.navigator)?void 0:t.deviceMemory;g.client.memoryTotalKbytes=""+1E6*q}t=Vk(y.location.href);!M("web_populate_internal_geo_killswitch")&&t.internalcountrycode&&(h.internalGeo=t.internalcountrycode);"MWEB"===h.clientName||"WEB"===h.clientName?(h.mainAppWebInfo={graftUrl:y.location.href},M("kevlar_woffle")&&
rl.i&&(t=rl.i,h.mainAppWebInfo.pwaInstallabilityStatus=!t.i&&t.j?"PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED":"PWA_INSTALLABILITY_STATUS_UNKNOWN"),h.mainAppWebInfo.webDisplayMode=sl(),h.mainAppWebInfo.isWebNativeShareAvailable=navigator&&void 0!==navigator.share):"TVHTML5"===h.clientName&&(!M("web_lr_app_quality_killswitch")&&(t=L("LIVING_ROOM_APP_QUALITY"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||{},{appQuality:t})),t=L("LIVING_ROOM_CERTIFICATION_SCOPE"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||
{},{certificationScope:t}));if(!M("web_populate_time_zone_itc_killswitch")){b:{if("undefined"!==typeof Intl)try{var x=(new Intl.DateTimeFormat).resolvedOptions().timeZone;break b}catch(nb){}x=void 0}x&&(h.timeZone=x)}(x=Ek())?h.experimentsToken=x:delete h.experimentsToken;x=Fk();Qs.i||(Qs.i=new Qs);h=Qs.i.i;t=[];q=0;for(var u in h)t[q++]=h[u];g.request=Object.assign({},g.request,{internalExperimentFlags:x,consistencyTokenJars:t});!M("web_prequest_context_killswitch")&&(u=L("INNERTUBE_CONTEXT_PREQUEST_CONTEXT"))&&
(g.request.externalPrequestContext=u);x=xl.getInstance();u=Al(58);x=x.get("gsml","");g.user=Object.assign({},g.user);u&&(g.user.enableSafetyMode=u);x&&(g.user.lockedSafetyMode=!0);M("warm_op_csn_cleanup")?e&&(f=ks())&&(g.clientScreenNonce=f):!f&&(f=ks())&&(g.clientScreenNonce=f);d&&(g.clickTracking={clickTrackingParams:d});if(d=B("yt.mdx.remote.remoteClient_"))g.remoteClient=d;Ts.getInstance().setLocationOnInnerTubeContext(g);try{var A=Yk(),E=A.bid;delete A.bid;g.adSignalsInfo={params:[],bid:E};var F=
p(Object.entries(A));for(var O=F.next();!O.done;O=F.next()){var N=p(O.value),R=N.next().value,ca=N.next().value;A=R;E=ca;d=void 0;null==(d=g.adSignalsInfo.params)||d.push({key:A,value:""+E})}}catch(nb){Sr(nb)}F=g}else Sr(Error("Error: No InnerTubeContext shell provided in ytconfig.")),F={};F={context:F};if(O=this.i(a)){this.j(F,O,b);var W;b="/youtubei/v1/"+jt(this.l());(O=null==(W=ys(a.commandMetadata,cj))?void 0:W.apiUrl)&&(b=O);W=b;(b=L("INNERTUBE_HOST_OVERRIDE"))&&(W=String(b)+String(pc(W)));b=
{};b.key=L("INNERTUBE_API_KEY");M("json_condensed_response")&&(b.prettyPrint="false");W=Wk(W,b||{},!1);a=M("kevlar_response_command_processor_page")?Object.assign({},{command:a},void 0):Object.assign({},void 0);a={input:W,ta:zs(W),ga:F,config:a};a.config.Pa?a.config.Pa.identity=c:a.config.Pa={identity:c};return a}Sr(new Q("Error: Failed to create Request from Command.",a))};
fa.Object.defineProperties(kt.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!1}}});function lt(){}
r(lt,kt);lt.prototype.o=function(){return{input:"/getDatasyncIdsEndpoint",ta:zs("/getDatasyncIdsEndpoint","GET"),ga:{}}};
lt.prototype.l=function(){return[]};
lt.prototype.i=function(){};
lt.prototype.j=function(){};var mt={},nt=(mt.GET_DATASYNC_IDS=ft(lt),mt);function ot(a){var b=Ja.apply(1,arguments);if(!pt(a)||b.some(function(d){return!pt(d)}))throw Error("Only objects may be merged.");
b=p(b);for(var c=b.next();!c.done;c=b.next())qt(a,c.value);return a}
function qt(a,b){for(var c in b)if(pt(b[c])){if(c in a&&!pt(a[c]))throw Error("Cannot merge an object into a non-object.");c in a||(a[c]={});qt(a[c],b[c])}else if(rt(b[c])){if(c in a&&!rt(a[c]))throw Error("Cannot merge an array into a non-array.");c in a||(a[c]=[]);st(a[c],b[c])}else a[c]=b[c];return a}
function st(a,b){b=p(b);for(var c=b.next();!c.done;c=b.next())c=c.value,pt(c)?a.push(qt({},c)):rt(c)?a.push(st([],c)):a.push(c);return a}
function pt(a){return"object"===typeof a&&!Array.isArray(a)}
function rt(a){return"object"===typeof a&&Array.isArray(a)}
;function tt(a,b){Yn.call(this,1,arguments);this.timer=b}
r(tt,Yn);var ut=new Zn("aft-recorded",tt);var vt=window;function wt(){this.timing={};this.clearResourceTimings=function(){};
this.webkitClearResourceTimings=function(){};
this.mozClearResourceTimings=function(){};
this.msClearResourceTimings=function(){};
this.oClearResourceTimings=function(){}}
var S=vt.performance||vt.mozPerformance||vt.msPerformance||vt.webkitPerformance||new wt;var xt=!1,zt={'script[name="scheduler/scheduler"]':"sj",'script[name="player/base"]':"pj",'link[rel="stylesheet"][name="www-player"]':"pc",'link[rel="stylesheet"][name="player/www-player"]':"pc",'script[name="desktop_polymer/desktop_polymer"]':"dpj",'link[rel="import"][name="desktop_polymer"]':"dph",'script[name="mobile-c3"]':"mcj",'link[rel="stylesheet"][name="mobile-c3"]':"mcc",'script[name="player-plasma-ias-phone/base"]':"mcppj",'script[name="player-plasma-ias-tablet/base"]':"mcptj",'link[rel="stylesheet"][name="mobile-polymer-player-ias"]':"mcpc",
'link[rel="stylesheet"][name="mobile-polymer-player-svg-ias"]':"mcpsc",'script[name="mobile_blazer_core_mod"]':"mbcj",'link[rel="stylesheet"][name="mobile_blazer_css"]':"mbc",'script[name="mobile_blazer_logged_in_users_mod"]':"mbliuj",'script[name="mobile_blazer_logged_out_users_mod"]':"mblouj",'script[name="mobile_blazer_noncore_mod"]':"mbnj","#player_css":"mbpc",'script[name="mobile_blazer_desktopplayer_mod"]':"mbpj",'link[rel="stylesheet"][name="mobile_blazer_tablet_css"]':"mbtc",'script[name="mobile_blazer_watch_mod"]':"mbwj"};
Xa(S.clearResourceTimings||S.webkitClearResourceTimings||S.mozClearResourceTimings||S.msClearResourceTimings||S.oClearResourceTimings||cb,S);function At(a){var b=Bt(a);if(b.aft)return b.aft;a=L((a||"")+"TIMING_AFT_KEYS",["ol"]);for(var c=a.length,d=0;d<c;d++){var e=b[a[d]];if(e)return e}return NaN}
function Ct(){var a;if(M("csi_use_performance_navigation_timing")||M("csi_use_performance_navigation_timing_tvhtml5")){var b,c,d,e=null==S?void 0:null==(a=S.getEntriesByType)?void 0:null==(b=a.call(S,"navigation"))?void 0:null==(c=b[0])?void 0:null==(d=c.toJSON)?void 0:d.call(c);e?(e.requestStart=Dt(e.requestStart),e.responseEnd=Dt(e.responseEnd),e.redirectStart=Dt(e.redirectStart),e.redirectEnd=Dt(e.redirectEnd),e.domainLookupEnd=Dt(e.domainLookupEnd),e.connectStart=Dt(e.connectStart),e.connectEnd=
Dt(e.connectEnd),e.responseStart=Dt(e.responseStart),e.secureConnectionStart=Dt(e.secureConnectionStart),e.domainLookupStart=Dt(e.domainLookupStart),e.isPerformanceNavigationTiming=!0,a=e):a=S.timing}else a=S.timing;return a}
function Et(){return(M("csi_use_time_origin")||M("csi_use_time_origin_tvhtml5"))&&S.timeOrigin?Math.floor(S.timeOrigin):S.timing.navigationStart}
function Dt(a){return Math.round(Et()+a)}
function Ft(a){var b;(b=B("ytcsi."+(a||"")+"data_"))||(b={tick:{},info:{}},z("ytcsi."+(a||"")+"data_",b));return b}
function Gt(a){a=Ft(a);a.info||(a.info={});return a.info}
function Ht(a){a=Ft(a);a.metadata||(a.metadata={});return a.metadata}
function Bt(a){a=Ft(a);a.tick||(a.tick={});return a.tick}
function It(a){a=Ft(a);if(a.gel){var b=a.gel;b.gelInfos||(b.gelInfos={});b.gelTicks||(b.gelTicks={})}else a.gel={gelTicks:{},gelInfos:{}};return a.gel}
function Jt(a){a=It(a);a.gelInfos||(a.gelInfos={});return a.gelInfos}
function Kt(a){a=It(a);a.jspbInfos||(a.jspbInfos=[]);return a.jspbInfos}
function Lt(a){var b=Ft(a).nonce;b||(b=$r(),Ft(a).nonce=b);return b}
function Mt(a){var b=Bt(a||""),c=At(a);c&&!xt&&(eo(ut,new tt(Math.round(c-b._start),a)),xt=!0)}
function Nt(a,b){for(var c=p(Object.keys(b)),d=c.next();!d.done;d=c.next())if(d=d.value,!Object.keys(a).includes(d)||"object"===typeof b[d]&&!Nt(a[d],b[d]))return!1;return!0}
;function Ot(){if(S.getEntriesByType){var a=S.getEntriesByType("paint");if(a=kb(a,function(b){return"first-paint"===b.name}))return Dt(a.startTime)}a=S.timing;
return a.Rc?Math.max(0,a.Rc):0}
;function Pt(){var a=B("ytcsi.debug");a||(a=[],z("ytcsi.debug",a),z("ytcsi.reference",{}));return a}
function Qt(a){a=a||"";var b=B("ytcsi.reference");b||(Pt(),b=B("ytcsi.reference"));if(b[a])return b[a];var c=Pt(),d={timerName:a,info:{},tick:{},span:{},jspbInfo:[]};c.push(d);return b[a]=d}
;var T={},Rt=(T.auto_search="LATENCY_ACTION_AUTO_SEARCH",T.ad_to_ad="LATENCY_ACTION_AD_TO_AD",T.ad_to_video="LATENCY_ACTION_AD_TO_VIDEO",T["analytics.explore"]="LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE",T.app_startup="LATENCY_ACTION_APP_STARTUP",T["artist.analytics"]="LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS",T["artist.events"]="LATENCY_ACTION_CREATOR_ARTIST_CONCERTS",T["artist.presskit"]="LATENCY_ACTION_CREATOR_ARTIST_PROFILE",T["song.analytics"]="LATENCY_ACTION_CREATOR_SONG_ANALYTICS",T.browse="LATENCY_ACTION_BROWSE",
T.cast_splash="LATENCY_ACTION_CAST_SPLASH",T.channels="LATENCY_ACTION_CHANNELS",T.creator_channel_dashboard="LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD",T["channel.analytics"]="LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS",T["channel.comments"]="LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS",T["channel.content"]="LATENCY_ACTION_CREATOR_POST_LIST",T["channel.content.promotions"]="LATENCY_ACTION_CREATOR_PROMOTION_LIST",T["channel.copyright"]="LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT",T["channel.editing"]="LATENCY_ACTION_CREATOR_CHANNEL_EDITING",
T["channel.monetization"]="LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION",T["channel.music"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC",T["channel.music_storefront"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT",T["channel.playlists"]="LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS",T["channel.translations"]="LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS",T["channel.videos"]="LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS",T["channel.live_streaming"]="LATENCY_ACTION_CREATOR_LIVE_STREAMING",T.chips="LATENCY_ACTION_CHIPS",
T["dialog.copyright_strikes"]="LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES",T["dialog.video_copyright"]="LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT",T["dialog.uploads"]="LATENCY_ACTION_CREATOR_DIALOG_UPLOADS",T.direct_playback="LATENCY_ACTION_DIRECT_PLAYBACK",T.embed="LATENCY_ACTION_EMBED",T.entity_key_serialization_perf="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF",T.entity_key_deserialization_perf="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF",T.explore="LATENCY_ACTION_EXPLORE",T.home=
"LATENCY_ACTION_HOME",T.library="LATENCY_ACTION_LIBRARY",T.live="LATENCY_ACTION_LIVE",T.live_pagination="LATENCY_ACTION_LIVE_PAGINATION",T.onboarding="LATENCY_ACTION_ONBOARDING",T.parent_profile_settings="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS",T.parent_tools_collection="LATENCY_ACTION_PARENT_TOOLS_COLLECTION",T.parent_tools_dashboard="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD",T.player_att="LATENCY_ACTION_PLAYER_ATTESTATION",T["post.comments"]="LATENCY_ACTION_CREATOR_POST_COMMENTS",T["post.edit"]=
"LATENCY_ACTION_CREATOR_POST_EDIT",T.prebuffer="LATENCY_ACTION_PREBUFFER",T.prefetch="LATENCY_ACTION_PREFETCH",T.profile_settings="LATENCY_ACTION_KIDS_PROFILE_SETTINGS",T.profile_switcher="LATENCY_ACTION_LOGIN",T.reel_watch="LATENCY_ACTION_REEL_WATCH",T.results="LATENCY_ACTION_RESULTS",T["promotion.edit"]="LATENCY_ACTION_CREATOR_PROMOTION_EDIT",T.search_ui="LATENCY_ACTION_SEARCH_UI",T.search_suggest="LATENCY_ACTION_SUGGEST",T.search_zero_state="LATENCY_ACTION_SEARCH_ZERO_STATE",T.secret_code="LATENCY_ACTION_KIDS_SECRET_CODE",
T.seek="LATENCY_ACTION_PLAYER_SEEK",T.settings="LATENCY_ACTION_SETTINGS",T.store="LATENCY_ACTION_STORE",T.tenx="LATENCY_ACTION_TENX",T.video_to_ad="LATENCY_ACTION_VIDEO_TO_AD",T.watch="LATENCY_ACTION_WATCH",T.watch_it_again="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN",T["watch,watch7"]="LATENCY_ACTION_WATCH",T["watch,watch7_html5"]="LATENCY_ACTION_WATCH",T["watch,watch7ad"]="LATENCY_ACTION_WATCH",T["watch,watch7ad_html5"]="LATENCY_ACTION_WATCH",T.wn_comments="LATENCY_ACTION_LOAD_COMMENTS",T.ww_rqs="LATENCY_ACTION_WHO_IS_WATCHING",
T["video.analytics"]="LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS",T["video.comments"]="LATENCY_ACTION_CREATOR_VIDEO_COMMENTS",T["video.edit"]="LATENCY_ACTION_CREATOR_VIDEO_EDIT",T["video.editor"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR",T["video.editor_async"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC",T["video.live_settings"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS",T["video.live_streaming"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING",T["video.monetization"]="LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION",
T["video.translations"]="LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS",T.voice_assistant="LATENCY_ACTION_VOICE_ASSISTANT",T.cast_load_by_entity_to_watch="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH",T.networkless_performance="LATENCY_ACTION_NETWORKLESS_PERFORMANCE",T),U={},St=(U.ad_allowed="adTypesAllowed",U.yt_abt="adBreakType",U.ad_cpn="adClientPlaybackNonce",U.ad_docid="adVideoId",U.yt_ad_an="adNetworks",U.ad_at="adType",U.aida="appInstallDataAgeMs",U.browse_id="browseId",U.p="httpProtocol",U.t="transportProtocol",
U.cs="commandSource",U.cpn="clientPlaybackNonce",U.ccs="creatorInfo.creatorCanaryState",U.ctop="creatorInfo.topEntityType",U.csn="clientScreenNonce",U.docid="videoId",U.GetHome_rid="requestIds",U.GetSearch_rid="requestIds",U.GetPlayer_rid="requestIds",U.GetWatchNext_rid="requestIds",U.GetBrowse_rid="requestIds",U.GetLibrary_rid="requestIds",U.is_continuation="isContinuation",U.is_nav="isNavigation",U.b_p="kabukiInfo.browseParams",U.is_prefetch="kabukiInfo.isPrefetch",U.is_secondary_nav="kabukiInfo.isSecondaryNav",
U.nav_type="kabukiInfo.navigationType",U.prev_browse_id="kabukiInfo.prevBrowseId",U.query_source="kabukiInfo.querySource",U.voz_type="kabukiInfo.vozType",U.yt_lt="loadType",U.mver="creatorInfo.measurementVersion",U.yt_ad="isMonetized",U.nr="webInfo.navigationReason",U.nrsu="navigationRequestedSameUrl",U.pnt="performanceNavigationTiming",U.prt="playbackRequiresTap",U.plt="playerInfo.playbackType",U.pis="playerInfo.playerInitializedState",U.paused="playerInfo.isPausedOnLoad",U.yt_pt="playerType",U.fmt=
"playerInfo.itag",U.yt_pl="watchInfo.isPlaylist",U.yt_pre="playerInfo.preloadType",U.yt_ad_pr="prerollAllowed",U.pa="previousAction",U.yt_red="isRedSubscriber",U.rce="mwebInfo.responseContentEncoding",U.rc="resourceInfo.resourceCache",U.scrh="screenHeight",U.scrw="screenWidth",U.st="serverTimeMs",U.ssdm="shellStartupDurationMs",U.br_trs="tvInfo.bedrockTriggerState",U.kebqat="kabukiInfo.earlyBrowseRequestInfo.abandonmentType",U.kebqa="kabukiInfo.earlyBrowseRequestInfo.adopted",U.label="tvInfo.label",
U.is_mdx="tvInfo.isMdx",U.preloaded="tvInfo.isPreloaded",U.aac_type="tvInfo.authAccessCredentialType",U.upg_player_vis="playerInfo.visibilityState",U.query="unpluggedInfo.query",U.upg_chip_ids_string="unpluggedInfo.upgChipIdsString",U.yt_vst="videoStreamType",U.vph="viewportHeight",U.vpw="viewportWidth",U.yt_vis="isVisible",U.rcl="mwebInfo.responseContentLength",U.GetSettings_rid="requestIds",U.GetTrending_rid="requestIds",U.GetMusicSearchSuggestions_rid="requestIds",U.REQUEST_ID="requestIds",U),
Tt="isContinuation isNavigation kabukiInfo.earlyBrowseRequestInfo.adopted kabukiInfo.isPrefetch kabukiInfo.isSecondaryNav isMonetized navigationRequestedSameUrl performanceNavigationTiming playerInfo.isPausedOnLoad prerollAllowed isRedSubscriber tvInfo.isMdx tvInfo.isPreloaded isVisible watchInfo.isPlaylist playbackRequiresTap".split(" "),Ut={},Vt=(Ut.ccs="CANARY_STATE_",Ut.mver="MEASUREMENT_VERSION_",Ut.pis="PLAYER_INITIALIZED_STATE_",Ut.yt_pt="LATENCY_PLAYER_",Ut.pa="LATENCY_ACTION_",Ut.ctop="TOP_ENTITY_TYPE_",
Ut.yt_vst="VIDEO_STREAM_TYPE_",Ut),Wt="all_vc ap aq c cbr cbrand cbrver cmodel cos cosver cplatform ctheme cver ei l_an l_mm plid srt yt_fss yt_li vpst vpni2 vpil2 icrc icrt pa GetAccountOverview_rid GetHistory_rid cmt d_vpct d_vpnfi d_vpni nsru pc pfa pfeh pftr pnc prerender psc rc start tcrt tcrc ssr vpr vps yt_abt yt_fn yt_fs yt_pft yt_pre yt_pt yt_pvis ytu_pvis yt_ref yt_sts tds".split(" ");function Xt(a){return Rt[a]||"LATENCY_ACTION_UNKNOWN"}
function Yt(a,b,c){c=It(c);if(c.gelInfos)c.gelInfos[a]=!0;else{var d={};c.gelInfos=(d[a]=!0,d)}if(a.match("_rid")){var e=a.split("_rid")[0];a="REQUEST_ID"}if(a in St){c=St[a];0<=eb(Tt,c)&&(b=!!b);a in Vt&&"string"===typeof b&&(b=Vt[a]+b.toUpperCase());a=b;b=c.split(".");for(var f=d={},g=0;g<b.length-1;g++){var h=b[g];f[h]={};f=f[h]}f[b[b.length-1]]="requestIds"===c?[{id:a,endpoint:e}]:a;return ot({},d)}0<=eb(Wt,a)||Tr(new Q("Unknown label logged with GEL CSI",a))}
;var V={LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING:179,LATENCY_ACTION_KIDS_PROFILE_SWITCHER:90,LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER:100,LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC:46,LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR:37,LATENCY_ACTION_SPINNER_DISPLAYED:14,LATENCY_ACTION_PLAYABILITY_CHECK:10,LATENCY_ACTION_PROCESS:9,LATENCY_ACTION_APP_STARTUP:5,LATENCY_ACTION_COMMERCE_TRANSACTION:184,LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC:173,LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC:172,
LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC:171,LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC:170,LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC:169,LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC:168,LATENCY_ACTION_GET_OFFERS_RPC:167,LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC:166,LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC:165,LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC:164,LATENCY_ACTION_GET_OFFER_DETAILS_RPC:163,LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC:162,LATENCY_ACTION_GET_TIP_MODULE_RPC:161,LATENCY_ACTION_HANDLE_TRANSACTION_RPC:160,
LATENCY_ACTION_COMPLETE_TRANSACTION_RPC:159,LATENCY_ACTION_GET_CART_RPC:158,LATENCY_ACTION_THUMBNAIL_FETCH:156,LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK:154,LATENCY_ACTION_SHARE_VIDEO:153,LATENCY_ACTION_AD_TO_VIDEO_INT:152,LATENCY_ACTION_ABANDONED_BROWSE:151,LATENCY_ACTION_PLAYER_ROTATION:150,LATENCY_ACTION_GENERIC_WEB_VIEW:183,LATENCY_ACTION_SHOPPING_IN_APP:124,LATENCY_ACTION_PLAYER_ATTESTATION:121,LATENCY_ACTION_PLAYER_SEEK:119,LATENCY_ACTION_SUPER_STICKER_BUY_FLOW:114,LATENCY_ACTION_DOWNLOADS_DATA_ACCESS:180,
LATENCY_ACTION_BLOCKS_PERFORMANCE:148,LATENCY_ACTION_ASSISTANT_QUERY:138,LATENCY_ACTION_ASSISTANT_SETTINGS:137,LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF:129,LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF:128,LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE:127,LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION:123,LATENCY_ACTION_NETWORKLESS_PERFORMANCE:122,LATENCY_ACTION_DOWNLOADS_EXPANSION:133,LATENCY_ACTION_ENTITY_TRANSFORM:131,LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER:96,LATENCY_ACTION_EMBEDS_SET_VIDEO:95,
LATENCY_ACTION_SETTINGS:93,LATENCY_ACTION_ABANDONED_STARTUP:81,LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY:80,LATENCY_ACTION_MEDIA_BROWSER_SEARCH:79,LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE:78,LATENCY_ACTION_WHO_IS_WATCHING:77,LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH:76,LATENCY_ACTION_LITE_SWITCH_ACCOUNT:73,LATENCY_ACTION_ELEMENTS_PERFORMANCE:70,LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION:69,LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION:65,LATENCY_ACTION_OFFLINE_STORE_START:61,LATENCY_ACTION_REEL_EDITOR:58,
LATENCY_ACTION_CHANNEL_SUBSCRIBE:56,LATENCY_ACTION_CHANNEL_PREVIEW:55,LATENCY_ACTION_PREFETCH:52,LATENCY_ACTION_ABANDONED_WATCH:45,LATENCY_ACTION_LOAD_COMMENT_REPLIES:26,LATENCY_ACTION_LOAD_COMMENTS:25,LATENCY_ACTION_EDIT_COMMENT:24,LATENCY_ACTION_NEW_COMMENT:23,LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING:19,LATENCY_ACTION_EMBED:18,LATENCY_ACTION_MDX_LAUNCH:15,LATENCY_ACTION_RESOLVE_URL:13,LATENCY_ACTION_CAST_SPLASH:149,LATENCY_ACTION_MDX_STREAM_TRANSFER:178,LATENCY_ACTION_MDX_CAST:120,LATENCY_ACTION_MDX_COMMAND:12,
LATENCY_ACTION_REEL_SELECT_SEGMENT:136,LATENCY_ACTION_ACCELERATED_EFFECTS:145,LATENCY_ACTION_EDIT_AUDIO_GEN:182,LATENCY_ACTION_UPLOAD_AUDIO_MIXER:147,LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING:157,LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING:146,LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK:130,LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD:125,LATENCY_ACTION_SHORTS_VIDEO_INGESTION:155,LATENCY_ACTION_SHORTS_GALLERY:107,LATENCY_ACTION_SHORTS_TRIM:105,LATENCY_ACTION_SHORTS_EDIT:104,LATENCY_ACTION_SHORTS_CAMERA:103,
LATENCY_ACTION_PARENT_TOOLS_DASHBOARD:102,LATENCY_ACTION_PARENT_TOOLS_COLLECTION:101,LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS:116,LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS:115,LATENCY_ACTION_MUSIC_ALBUM_DETAIL:72,LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL:71,LATENCY_ACTION_STORE:175,LATENCY_ACTION_CHIPS:68,LATENCY_ACTION_SEARCH_ZERO_STATE:67,LATENCY_ACTION_LIVE_PAGINATION:117,LATENCY_ACTION_LIVE:20,LATENCY_ACTION_PREBUFFER:40,LATENCY_ACTION_TENX:39,LATENCY_ACTION_KIDS_PROFILE_SETTINGS:94,LATENCY_ACTION_KIDS_WATCH_IT_AGAIN:92,
LATENCY_ACTION_KIDS_SECRET_CODE:91,LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS:89,LATENCY_ACTION_KIDS_ONBOARDING:88,LATENCY_ACTION_KIDS_VOICE_SEARCH:82,LATENCY_ACTION_KIDS_CURATED_COLLECTION:62,LATENCY_ACTION_KIDS_LIBRARY:53,LATENCY_ACTION_CREATOR_PROMOTION_LIST:186,LATENCY_ACTION_CREATOR_PROMOTION_EDIT:185,LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS:38,LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION:74,LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING:141,LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS:142,LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC:51,
LATENCY_ACTION_CREATOR_VIDEO_EDITOR:50,LATENCY_ACTION_CREATOR_VIDEO_EDIT:36,LATENCY_ACTION_CREATOR_VIDEO_COMMENTS:34,LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS:33,LATENCY_ACTION_CREATOR_SONG_ANALYTICS:176,LATENCY_ACTION_CREATOR_POST_LIST:112,LATENCY_ACTION_CREATOR_POST_EDIT:110,LATENCY_ACTION_CREATOR_POST_COMMENTS:111,LATENCY_ACTION_CREATOR_LIVE_STREAMING:108,LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT:174,LATENCY_ACTION_CREATOR_DIALOG_UPLOADS:86,LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES:87,LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS:32,
LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS:48,LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS:139,LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT:177,LATENCY_ACTION_CREATOR_CHANNEL_MUSIC:99,LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION:43,LATENCY_ACTION_CREATOR_CHANNEL_EDITING:113,LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD:49,LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT:44,LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS:66,LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS:31,LATENCY_ACTION_CREATOR_ARTIST_PROFILE:85,LATENCY_ACTION_CREATOR_ARTIST_CONCERTS:84,
LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS:83,LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE:140,LATENCY_ACTION_EXPERIMENTAL_WATCH_UI:181,LATENCY_ACTION_STORYBOARD_THUMBNAILS:118,LATENCY_ACTION_SEARCH_THUMBNAILS:59,LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD:54,LATENCY_ACTION_VOICE_ASSISTANT:47,LATENCY_ACTION_SEARCH_UI:35,LATENCY_ACTION_SUGGEST:30,LATENCY_ACTION_AUTO_SEARCH:126,LATENCY_ACTION_DOWNLOADS:98,LATENCY_ACTION_EXPLORE:75,LATENCY_ACTION_VIDEO_LIST:63,LATENCY_ACTION_HOME_RESUME:60,LATENCY_ACTION_SUBSCRIPTIONS_LIST:57,
LATENCY_ACTION_THUMBNAIL_LOAD:42,LATENCY_ACTION_FIRST_THUMBNAIL_LOAD:29,LATENCY_ACTION_SUBSCRIPTIONS_FEED:109,LATENCY_ACTION_SUBSCRIPTIONS:28,LATENCY_ACTION_TRENDING:27,LATENCY_ACTION_LIBRARY:21,LATENCY_ACTION_VIDEO_THUMBNAIL:8,LATENCY_ACTION_SHOW_MORE:7,LATENCY_ACTION_VIDEO_PREVIEW:6,LATENCY_ACTION_PREBUFFER_VIDEO:144,LATENCY_ACTION_PREFETCH_VIDEO:143,LATENCY_ACTION_DIRECT_PLAYBACK:132,LATENCY_ACTION_REEL_WATCH:41,LATENCY_ACTION_AD_TO_AD:22,LATENCY_ACTION_VIDEO_TO_AD:17,LATENCY_ACTION_AD_TO_VIDEO:16,
LATENCY_ACTION_ONBOARDING:135,LATENCY_ACTION_LOGIN:97,LATENCY_ACTION_BROWSE:11,LATENCY_ACTION_CHANNELS:4,LATENCY_ACTION_WATCH:3,LATENCY_ACTION_RESULTS:2,LATENCY_ACTION_HOME:1,LATENCY_ACTION_STARTUP:106,LATENCY_ACTION_UNKNOWN:0};V[V.LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING]="LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING";V[V.LATENCY_ACTION_KIDS_PROFILE_SWITCHER]="LATENCY_ACTION_KIDS_PROFILE_SWITCHER";V[V.LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER]="LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER";
V[V.LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC";V[V.LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR";V[V.LATENCY_ACTION_SPINNER_DISPLAYED]="LATENCY_ACTION_SPINNER_DISPLAYED";V[V.LATENCY_ACTION_PLAYABILITY_CHECK]="LATENCY_ACTION_PLAYABILITY_CHECK";V[V.LATENCY_ACTION_PROCESS]="LATENCY_ACTION_PROCESS";V[V.LATENCY_ACTION_APP_STARTUP]="LATENCY_ACTION_APP_STARTUP";V[V.LATENCY_ACTION_COMMERCE_TRANSACTION]="LATENCY_ACTION_COMMERCE_TRANSACTION";
V[V.LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC]="LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC";V[V.LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC]="LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC";V[V.LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC]="LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC";V[V.LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC]="LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC";V[V.LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC]="LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC";
V[V.LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC]="LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC";V[V.LATENCY_ACTION_GET_OFFERS_RPC]="LATENCY_ACTION_GET_OFFERS_RPC";V[V.LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC]="LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC";V[V.LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC]="LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC";V[V.LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC]="LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC";V[V.LATENCY_ACTION_GET_OFFER_DETAILS_RPC]="LATENCY_ACTION_GET_OFFER_DETAILS_RPC";
V[V.LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC]="LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC";V[V.LATENCY_ACTION_GET_TIP_MODULE_RPC]="LATENCY_ACTION_GET_TIP_MODULE_RPC";V[V.LATENCY_ACTION_HANDLE_TRANSACTION_RPC]="LATENCY_ACTION_HANDLE_TRANSACTION_RPC";V[V.LATENCY_ACTION_COMPLETE_TRANSACTION_RPC]="LATENCY_ACTION_COMPLETE_TRANSACTION_RPC";V[V.LATENCY_ACTION_GET_CART_RPC]="LATENCY_ACTION_GET_CART_RPC";V[V.LATENCY_ACTION_THUMBNAIL_FETCH]="LATENCY_ACTION_THUMBNAIL_FETCH";
V[V.LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK]="LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK";V[V.LATENCY_ACTION_SHARE_VIDEO]="LATENCY_ACTION_SHARE_VIDEO";V[V.LATENCY_ACTION_AD_TO_VIDEO_INT]="LATENCY_ACTION_AD_TO_VIDEO_INT";V[V.LATENCY_ACTION_ABANDONED_BROWSE]="LATENCY_ACTION_ABANDONED_BROWSE";V[V.LATENCY_ACTION_PLAYER_ROTATION]="LATENCY_ACTION_PLAYER_ROTATION";V[V.LATENCY_ACTION_GENERIC_WEB_VIEW]="LATENCY_ACTION_GENERIC_WEB_VIEW";V[V.LATENCY_ACTION_SHOPPING_IN_APP]="LATENCY_ACTION_SHOPPING_IN_APP";
V[V.LATENCY_ACTION_PLAYER_ATTESTATION]="LATENCY_ACTION_PLAYER_ATTESTATION";V[V.LATENCY_ACTION_PLAYER_SEEK]="LATENCY_ACTION_PLAYER_SEEK";V[V.LATENCY_ACTION_SUPER_STICKER_BUY_FLOW]="LATENCY_ACTION_SUPER_STICKER_BUY_FLOW";V[V.LATENCY_ACTION_DOWNLOADS_DATA_ACCESS]="LATENCY_ACTION_DOWNLOADS_DATA_ACCESS";V[V.LATENCY_ACTION_BLOCKS_PERFORMANCE]="LATENCY_ACTION_BLOCKS_PERFORMANCE";V[V.LATENCY_ACTION_ASSISTANT_QUERY]="LATENCY_ACTION_ASSISTANT_QUERY";V[V.LATENCY_ACTION_ASSISTANT_SETTINGS]="LATENCY_ACTION_ASSISTANT_SETTINGS";
V[V.LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF]="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF";V[V.LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF]="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF";V[V.LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE]="LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE";V[V.LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION]="LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION";V[V.LATENCY_ACTION_NETWORKLESS_PERFORMANCE]="LATENCY_ACTION_NETWORKLESS_PERFORMANCE";
V[V.LATENCY_ACTION_DOWNLOADS_EXPANSION]="LATENCY_ACTION_DOWNLOADS_EXPANSION";V[V.LATENCY_ACTION_ENTITY_TRANSFORM]="LATENCY_ACTION_ENTITY_TRANSFORM";V[V.LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER]="LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER";V[V.LATENCY_ACTION_EMBEDS_SET_VIDEO]="LATENCY_ACTION_EMBEDS_SET_VIDEO";V[V.LATENCY_ACTION_SETTINGS]="LATENCY_ACTION_SETTINGS";V[V.LATENCY_ACTION_ABANDONED_STARTUP]="LATENCY_ACTION_ABANDONED_STARTUP";V[V.LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY]="LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY";
V[V.LATENCY_ACTION_MEDIA_BROWSER_SEARCH]="LATENCY_ACTION_MEDIA_BROWSER_SEARCH";V[V.LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE]="LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE";V[V.LATENCY_ACTION_WHO_IS_WATCHING]="LATENCY_ACTION_WHO_IS_WATCHING";V[V.LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH]="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH";V[V.LATENCY_ACTION_LITE_SWITCH_ACCOUNT]="LATENCY_ACTION_LITE_SWITCH_ACCOUNT";V[V.LATENCY_ACTION_ELEMENTS_PERFORMANCE]="LATENCY_ACTION_ELEMENTS_PERFORMANCE";
V[V.LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION]="LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION";V[V.LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION]="LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION";V[V.LATENCY_ACTION_OFFLINE_STORE_START]="LATENCY_ACTION_OFFLINE_STORE_START";V[V.LATENCY_ACTION_REEL_EDITOR]="LATENCY_ACTION_REEL_EDITOR";V[V.LATENCY_ACTION_CHANNEL_SUBSCRIBE]="LATENCY_ACTION_CHANNEL_SUBSCRIBE";V[V.LATENCY_ACTION_CHANNEL_PREVIEW]="LATENCY_ACTION_CHANNEL_PREVIEW";V[V.LATENCY_ACTION_PREFETCH]="LATENCY_ACTION_PREFETCH";
V[V.LATENCY_ACTION_ABANDONED_WATCH]="LATENCY_ACTION_ABANDONED_WATCH";V[V.LATENCY_ACTION_LOAD_COMMENT_REPLIES]="LATENCY_ACTION_LOAD_COMMENT_REPLIES";V[V.LATENCY_ACTION_LOAD_COMMENTS]="LATENCY_ACTION_LOAD_COMMENTS";V[V.LATENCY_ACTION_EDIT_COMMENT]="LATENCY_ACTION_EDIT_COMMENT";V[V.LATENCY_ACTION_NEW_COMMENT]="LATENCY_ACTION_NEW_COMMENT";V[V.LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING]="LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING";V[V.LATENCY_ACTION_EMBED]="LATENCY_ACTION_EMBED";
V[V.LATENCY_ACTION_MDX_LAUNCH]="LATENCY_ACTION_MDX_LAUNCH";V[V.LATENCY_ACTION_RESOLVE_URL]="LATENCY_ACTION_RESOLVE_URL";V[V.LATENCY_ACTION_CAST_SPLASH]="LATENCY_ACTION_CAST_SPLASH";V[V.LATENCY_ACTION_MDX_STREAM_TRANSFER]="LATENCY_ACTION_MDX_STREAM_TRANSFER";V[V.LATENCY_ACTION_MDX_CAST]="LATENCY_ACTION_MDX_CAST";V[V.LATENCY_ACTION_MDX_COMMAND]="LATENCY_ACTION_MDX_COMMAND";V[V.LATENCY_ACTION_REEL_SELECT_SEGMENT]="LATENCY_ACTION_REEL_SELECT_SEGMENT";V[V.LATENCY_ACTION_ACCELERATED_EFFECTS]="LATENCY_ACTION_ACCELERATED_EFFECTS";
V[V.LATENCY_ACTION_EDIT_AUDIO_GEN]="LATENCY_ACTION_EDIT_AUDIO_GEN";V[V.LATENCY_ACTION_UPLOAD_AUDIO_MIXER]="LATENCY_ACTION_UPLOAD_AUDIO_MIXER";V[V.LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING]="LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING";V[V.LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING]="LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING";V[V.LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK]="LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK";V[V.LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD]="LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD";
V[V.LATENCY_ACTION_SHORTS_VIDEO_INGESTION]="LATENCY_ACTION_SHORTS_VIDEO_INGESTION";V[V.LATENCY_ACTION_SHORTS_GALLERY]="LATENCY_ACTION_SHORTS_GALLERY";V[V.LATENCY_ACTION_SHORTS_TRIM]="LATENCY_ACTION_SHORTS_TRIM";V[V.LATENCY_ACTION_SHORTS_EDIT]="LATENCY_ACTION_SHORTS_EDIT";V[V.LATENCY_ACTION_SHORTS_CAMERA]="LATENCY_ACTION_SHORTS_CAMERA";V[V.LATENCY_ACTION_PARENT_TOOLS_DASHBOARD]="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD";V[V.LATENCY_ACTION_PARENT_TOOLS_COLLECTION]="LATENCY_ACTION_PARENT_TOOLS_COLLECTION";
V[V.LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS]="LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS";V[V.LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS]="LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS";V[V.LATENCY_ACTION_MUSIC_ALBUM_DETAIL]="LATENCY_ACTION_MUSIC_ALBUM_DETAIL";V[V.LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL]="LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL";V[V.LATENCY_ACTION_STORE]="LATENCY_ACTION_STORE";V[V.LATENCY_ACTION_CHIPS]="LATENCY_ACTION_CHIPS";V[V.LATENCY_ACTION_SEARCH_ZERO_STATE]="LATENCY_ACTION_SEARCH_ZERO_STATE";
V[V.LATENCY_ACTION_LIVE_PAGINATION]="LATENCY_ACTION_LIVE_PAGINATION";V[V.LATENCY_ACTION_LIVE]="LATENCY_ACTION_LIVE";V[V.LATENCY_ACTION_PREBUFFER]="LATENCY_ACTION_PREBUFFER";V[V.LATENCY_ACTION_TENX]="LATENCY_ACTION_TENX";V[V.LATENCY_ACTION_KIDS_PROFILE_SETTINGS]="LATENCY_ACTION_KIDS_PROFILE_SETTINGS";V[V.LATENCY_ACTION_KIDS_WATCH_IT_AGAIN]="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN";V[V.LATENCY_ACTION_KIDS_SECRET_CODE]="LATENCY_ACTION_KIDS_SECRET_CODE";V[V.LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS]="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS";
V[V.LATENCY_ACTION_KIDS_ONBOARDING]="LATENCY_ACTION_KIDS_ONBOARDING";V[V.LATENCY_ACTION_KIDS_VOICE_SEARCH]="LATENCY_ACTION_KIDS_VOICE_SEARCH";V[V.LATENCY_ACTION_KIDS_CURATED_COLLECTION]="LATENCY_ACTION_KIDS_CURATED_COLLECTION";V[V.LATENCY_ACTION_KIDS_LIBRARY]="LATENCY_ACTION_KIDS_LIBRARY";V[V.LATENCY_ACTION_CREATOR_PROMOTION_LIST]="LATENCY_ACTION_CREATOR_PROMOTION_LIST";V[V.LATENCY_ACTION_CREATOR_PROMOTION_EDIT]="LATENCY_ACTION_CREATOR_PROMOTION_EDIT";
V[V.LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS]="LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS";V[V.LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION]="LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION";V[V.LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING";V[V.LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS";V[V.LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC]="LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC";
V[V.LATENCY_ACTION_CREATOR_VIDEO_EDITOR]="LATENCY_ACTION_CREATOR_VIDEO_EDITOR";V[V.LATENCY_ACTION_CREATOR_VIDEO_EDIT]="LATENCY_ACTION_CREATOR_VIDEO_EDIT";V[V.LATENCY_ACTION_CREATOR_VIDEO_COMMENTS]="LATENCY_ACTION_CREATOR_VIDEO_COMMENTS";V[V.LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS]="LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_SONG_ANALYTICS]="LATENCY_ACTION_CREATOR_SONG_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_POST_LIST]="LATENCY_ACTION_CREATOR_POST_LIST";
V[V.LATENCY_ACTION_CREATOR_POST_EDIT]="LATENCY_ACTION_CREATOR_POST_EDIT";V[V.LATENCY_ACTION_CREATOR_POST_COMMENTS]="LATENCY_ACTION_CREATOR_POST_COMMENTS";V[V.LATENCY_ACTION_CREATOR_LIVE_STREAMING]="LATENCY_ACTION_CREATOR_LIVE_STREAMING";V[V.LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT]="LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT";V[V.LATENCY_ACTION_CREATOR_DIALOG_UPLOADS]="LATENCY_ACTION_CREATOR_DIALOG_UPLOADS";V[V.LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES]="LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES";
V[V.LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS]="LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS]="LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS]="LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT";V[V.LATENCY_ACTION_CREATOR_CHANNEL_MUSIC]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC";V[V.LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION]="LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION";
V[V.LATENCY_ACTION_CREATOR_CHANNEL_EDITING]="LATENCY_ACTION_CREATOR_CHANNEL_EDITING";V[V.LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD]="LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD";V[V.LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT]="LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT";V[V.LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS]="LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS]="LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_ARTIST_PROFILE]="LATENCY_ACTION_CREATOR_ARTIST_PROFILE";
V[V.LATENCY_ACTION_CREATOR_ARTIST_CONCERTS]="LATENCY_ACTION_CREATOR_ARTIST_CONCERTS";V[V.LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS]="LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE]="LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE";V[V.LATENCY_ACTION_EXPERIMENTAL_WATCH_UI]="LATENCY_ACTION_EXPERIMENTAL_WATCH_UI";V[V.LATENCY_ACTION_STORYBOARD_THUMBNAILS]="LATENCY_ACTION_STORYBOARD_THUMBNAILS";V[V.LATENCY_ACTION_SEARCH_THUMBNAILS]="LATENCY_ACTION_SEARCH_THUMBNAILS";
V[V.LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD]="LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD";V[V.LATENCY_ACTION_VOICE_ASSISTANT]="LATENCY_ACTION_VOICE_ASSISTANT";V[V.LATENCY_ACTION_SEARCH_UI]="LATENCY_ACTION_SEARCH_UI";V[V.LATENCY_ACTION_SUGGEST]="LATENCY_ACTION_SUGGEST";V[V.LATENCY_ACTION_AUTO_SEARCH]="LATENCY_ACTION_AUTO_SEARCH";V[V.LATENCY_ACTION_DOWNLOADS]="LATENCY_ACTION_DOWNLOADS";V[V.LATENCY_ACTION_EXPLORE]="LATENCY_ACTION_EXPLORE";V[V.LATENCY_ACTION_VIDEO_LIST]="LATENCY_ACTION_VIDEO_LIST";
V[V.LATENCY_ACTION_HOME_RESUME]="LATENCY_ACTION_HOME_RESUME";V[V.LATENCY_ACTION_SUBSCRIPTIONS_LIST]="LATENCY_ACTION_SUBSCRIPTIONS_LIST";V[V.LATENCY_ACTION_THUMBNAIL_LOAD]="LATENCY_ACTION_THUMBNAIL_LOAD";V[V.LATENCY_ACTION_FIRST_THUMBNAIL_LOAD]="LATENCY_ACTION_FIRST_THUMBNAIL_LOAD";V[V.LATENCY_ACTION_SUBSCRIPTIONS_FEED]="LATENCY_ACTION_SUBSCRIPTIONS_FEED";V[V.LATENCY_ACTION_SUBSCRIPTIONS]="LATENCY_ACTION_SUBSCRIPTIONS";V[V.LATENCY_ACTION_TRENDING]="LATENCY_ACTION_TRENDING";
V[V.LATENCY_ACTION_LIBRARY]="LATENCY_ACTION_LIBRARY";V[V.LATENCY_ACTION_VIDEO_THUMBNAIL]="LATENCY_ACTION_VIDEO_THUMBNAIL";V[V.LATENCY_ACTION_SHOW_MORE]="LATENCY_ACTION_SHOW_MORE";V[V.LATENCY_ACTION_VIDEO_PREVIEW]="LATENCY_ACTION_VIDEO_PREVIEW";V[V.LATENCY_ACTION_PREBUFFER_VIDEO]="LATENCY_ACTION_PREBUFFER_VIDEO";V[V.LATENCY_ACTION_PREFETCH_VIDEO]="LATENCY_ACTION_PREFETCH_VIDEO";V[V.LATENCY_ACTION_DIRECT_PLAYBACK]="LATENCY_ACTION_DIRECT_PLAYBACK";V[V.LATENCY_ACTION_REEL_WATCH]="LATENCY_ACTION_REEL_WATCH";
V[V.LATENCY_ACTION_AD_TO_AD]="LATENCY_ACTION_AD_TO_AD";V[V.LATENCY_ACTION_VIDEO_TO_AD]="LATENCY_ACTION_VIDEO_TO_AD";V[V.LATENCY_ACTION_AD_TO_VIDEO]="LATENCY_ACTION_AD_TO_VIDEO";V[V.LATENCY_ACTION_ONBOARDING]="LATENCY_ACTION_ONBOARDING";V[V.LATENCY_ACTION_LOGIN]="LATENCY_ACTION_LOGIN";V[V.LATENCY_ACTION_BROWSE]="LATENCY_ACTION_BROWSE";V[V.LATENCY_ACTION_CHANNELS]="LATENCY_ACTION_CHANNELS";V[V.LATENCY_ACTION_WATCH]="LATENCY_ACTION_WATCH";V[V.LATENCY_ACTION_RESULTS]="LATENCY_ACTION_RESULTS";
V[V.LATENCY_ACTION_HOME]="LATENCY_ACTION_HOME";V[V.LATENCY_ACTION_STARTUP]="LATENCY_ACTION_STARTUP";V[V.LATENCY_ACTION_UNKNOWN]="LATENCY_ACTION_UNKNOWN";var Zt={LATENCY_NETWORK_MOBILE:2,LATENCY_NETWORK_WIFI:1,LATENCY_NETWORK_UNKNOWN:0};Zt[Zt.LATENCY_NETWORK_MOBILE]="LATENCY_NETWORK_MOBILE";Zt[Zt.LATENCY_NETWORK_WIFI]="LATENCY_NETWORK_WIFI";Zt[Zt.LATENCY_NETWORK_UNKNOWN]="LATENCY_NETWORK_UNKNOWN";
var X={CONN_INVALID:31,CONN_CELLULAR_5G_NSA:12,CONN_CELLULAR_5G_SA:11,CONN_WIFI_METERED:10,CONN_CELLULAR_5G:9,CONN_DISCO:8,CONN_CELLULAR_UNKNOWN:7,CONN_CELLULAR_4G:6,CONN_CELLULAR_3G:5,CONN_CELLULAR_2G:4,CONN_WIFI:3,CONN_NONE:2,CONN_UNKNOWN:1,CONN_DEFAULT:0};X[X.CONN_INVALID]="CONN_INVALID";X[X.CONN_CELLULAR_5G_NSA]="CONN_CELLULAR_5G_NSA";X[X.CONN_CELLULAR_5G_SA]="CONN_CELLULAR_5G_SA";X[X.CONN_WIFI_METERED]="CONN_WIFI_METERED";X[X.CONN_CELLULAR_5G]="CONN_CELLULAR_5G";X[X.CONN_DISCO]="CONN_DISCO";
X[X.CONN_CELLULAR_UNKNOWN]="CONN_CELLULAR_UNKNOWN";X[X.CONN_CELLULAR_4G]="CONN_CELLULAR_4G";X[X.CONN_CELLULAR_3G]="CONN_CELLULAR_3G";X[X.CONN_CELLULAR_2G]="CONN_CELLULAR_2G";X[X.CONN_WIFI]="CONN_WIFI";X[X.CONN_NONE]="CONN_NONE";X[X.CONN_UNKNOWN]="CONN_UNKNOWN";X[X.CONN_DEFAULT]="CONN_DEFAULT";
var Y={DETAILED_NETWORK_TYPE_NR_NSA:126,DETAILED_NETWORK_TYPE_NR_SA:125,DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED:124,DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT:123,DETAILED_NETWORK_TYPE_DISCONNECTED:122,DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN:121,DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN:120,DETAILED_NETWORK_TYPE_WIMAX:119,DETAILED_NETWORK_TYPE_ETHERNET:118,DETAILED_NETWORK_TYPE_BLUETOOTH:117,DETAILED_NETWORK_TYPE_WIFI:116,DETAILED_NETWORK_TYPE_LTE:115,DETAILED_NETWORK_TYPE_HSPAP:114,DETAILED_NETWORK_TYPE_EHRPD:113,
DETAILED_NETWORK_TYPE_EVDO_B:112,DETAILED_NETWORK_TYPE_UMTS:111,DETAILED_NETWORK_TYPE_IDEN:110,DETAILED_NETWORK_TYPE_HSUPA:109,DETAILED_NETWORK_TYPE_HSPA:108,DETAILED_NETWORK_TYPE_HSDPA:107,DETAILED_NETWORK_TYPE_EVDO_A:106,DETAILED_NETWORK_TYPE_EVDO_0:105,DETAILED_NETWORK_TYPE_CDMA:104,DETAILED_NETWORK_TYPE_1_X_RTT:103,DETAILED_NETWORK_TYPE_GPRS:102,DETAILED_NETWORK_TYPE_EDGE:101,DETAILED_NETWORK_TYPE_UNKNOWN:0};Y[Y.DETAILED_NETWORK_TYPE_NR_NSA]="DETAILED_NETWORK_TYPE_NR_NSA";
Y[Y.DETAILED_NETWORK_TYPE_NR_SA]="DETAILED_NETWORK_TYPE_NR_SA";Y[Y.DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED]="DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED";Y[Y.DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT]="DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT";Y[Y.DETAILED_NETWORK_TYPE_DISCONNECTED]="DETAILED_NETWORK_TYPE_DISCONNECTED";Y[Y.DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN]="DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN";Y[Y.DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN]="DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN";
Y[Y.DETAILED_NETWORK_TYPE_WIMAX]="DETAILED_NETWORK_TYPE_WIMAX";Y[Y.DETAILED_NETWORK_TYPE_ETHERNET]="DETAILED_NETWORK_TYPE_ETHERNET";Y[Y.DETAILED_NETWORK_TYPE_BLUETOOTH]="DETAILED_NETWORK_TYPE_BLUETOOTH";Y[Y.DETAILED_NETWORK_TYPE_WIFI]="DETAILED_NETWORK_TYPE_WIFI";Y[Y.DETAILED_NETWORK_TYPE_LTE]="DETAILED_NETWORK_TYPE_LTE";Y[Y.DETAILED_NETWORK_TYPE_HSPAP]="DETAILED_NETWORK_TYPE_HSPAP";Y[Y.DETAILED_NETWORK_TYPE_EHRPD]="DETAILED_NETWORK_TYPE_EHRPD";Y[Y.DETAILED_NETWORK_TYPE_EVDO_B]="DETAILED_NETWORK_TYPE_EVDO_B";
Y[Y.DETAILED_NETWORK_TYPE_UMTS]="DETAILED_NETWORK_TYPE_UMTS";Y[Y.DETAILED_NETWORK_TYPE_IDEN]="DETAILED_NETWORK_TYPE_IDEN";Y[Y.DETAILED_NETWORK_TYPE_HSUPA]="DETAILED_NETWORK_TYPE_HSUPA";Y[Y.DETAILED_NETWORK_TYPE_HSPA]="DETAILED_NETWORK_TYPE_HSPA";Y[Y.DETAILED_NETWORK_TYPE_HSDPA]="DETAILED_NETWORK_TYPE_HSDPA";Y[Y.DETAILED_NETWORK_TYPE_EVDO_A]="DETAILED_NETWORK_TYPE_EVDO_A";Y[Y.DETAILED_NETWORK_TYPE_EVDO_0]="DETAILED_NETWORK_TYPE_EVDO_0";Y[Y.DETAILED_NETWORK_TYPE_CDMA]="DETAILED_NETWORK_TYPE_CDMA";
Y[Y.DETAILED_NETWORK_TYPE_1_X_RTT]="DETAILED_NETWORK_TYPE_1_X_RTT";Y[Y.DETAILED_NETWORK_TYPE_GPRS]="DETAILED_NETWORK_TYPE_GPRS";Y[Y.DETAILED_NETWORK_TYPE_EDGE]="DETAILED_NETWORK_TYPE_EDGE";Y[Y.DETAILED_NETWORK_TYPE_UNKNOWN]="DETAILED_NETWORK_TYPE_UNKNOWN";var $t={LATENCY_PLAYER_RTSP:7,LATENCY_PLAYER_HTML5_INLINE:6,LATENCY_PLAYER_HTML5_FULLSCREEN:5,LATENCY_PLAYER_HTML5:4,LATENCY_PLAYER_FRAMEWORK:3,LATENCY_PLAYER_FLASH:2,LATENCY_PLAYER_EXO:1,LATENCY_PLAYER_UNKNOWN:0};$t[$t.LATENCY_PLAYER_RTSP]="LATENCY_PLAYER_RTSP";
$t[$t.LATENCY_PLAYER_HTML5_INLINE]="LATENCY_PLAYER_HTML5_INLINE";$t[$t.LATENCY_PLAYER_HTML5_FULLSCREEN]="LATENCY_PLAYER_HTML5_FULLSCREEN";$t[$t.LATENCY_PLAYER_HTML5]="LATENCY_PLAYER_HTML5";$t[$t.LATENCY_PLAYER_FRAMEWORK]="LATENCY_PLAYER_FRAMEWORK";$t[$t.LATENCY_PLAYER_FLASH]="LATENCY_PLAYER_FLASH";$t[$t.LATENCY_PLAYER_EXO]="LATENCY_PLAYER_EXO";$t[$t.LATENCY_PLAYER_UNKNOWN]="LATENCY_PLAYER_UNKNOWN";
var au={LATENCY_AD_BREAK_TYPE_POSTROLL:3,LATENCY_AD_BREAK_TYPE_MIDROLL:2,LATENCY_AD_BREAK_TYPE_PREROLL:1,LATENCY_AD_BREAK_TYPE_UNKNOWN:0};au[au.LATENCY_AD_BREAK_TYPE_POSTROLL]="LATENCY_AD_BREAK_TYPE_POSTROLL";au[au.LATENCY_AD_BREAK_TYPE_MIDROLL]="LATENCY_AD_BREAK_TYPE_MIDROLL";au[au.LATENCY_AD_BREAK_TYPE_PREROLL]="LATENCY_AD_BREAK_TYPE_PREROLL";au[au.LATENCY_AD_BREAK_TYPE_UNKNOWN]="LATENCY_AD_BREAK_TYPE_UNKNOWN";var bu={LATENCY_ACTION_ERROR_STARTUP_TIMEOUT:1,LATENCY_ACTION_ERROR_UNSPECIFIED:0};
bu[bu.LATENCY_ACTION_ERROR_STARTUP_TIMEOUT]="LATENCY_ACTION_ERROR_STARTUP_TIMEOUT";bu[bu.LATENCY_ACTION_ERROR_UNSPECIFIED]="LATENCY_ACTION_ERROR_UNSPECIFIED";var cu={LIVE_STREAM_MODE_WINDOW:5,LIVE_STREAM_MODE_POST:4,LIVE_STREAM_MODE_LP:3,LIVE_STREAM_MODE_LIVE:2,LIVE_STREAM_MODE_DVR:1,LIVE_STREAM_MODE_UNKNOWN:0};cu[cu.LIVE_STREAM_MODE_WINDOW]="LIVE_STREAM_MODE_WINDOW";cu[cu.LIVE_STREAM_MODE_POST]="LIVE_STREAM_MODE_POST";cu[cu.LIVE_STREAM_MODE_LP]="LIVE_STREAM_MODE_LP";
cu[cu.LIVE_STREAM_MODE_LIVE]="LIVE_STREAM_MODE_LIVE";cu[cu.LIVE_STREAM_MODE_DVR]="LIVE_STREAM_MODE_DVR";cu[cu.LIVE_STREAM_MODE_UNKNOWN]="LIVE_STREAM_MODE_UNKNOWN";var du={VIDEO_STREAM_TYPE_VOD:3,VIDEO_STREAM_TYPE_DVR:2,VIDEO_STREAM_TYPE_LIVE:1,VIDEO_STREAM_TYPE_UNSPECIFIED:0};du[du.VIDEO_STREAM_TYPE_VOD]="VIDEO_STREAM_TYPE_VOD";du[du.VIDEO_STREAM_TYPE_DVR]="VIDEO_STREAM_TYPE_DVR";du[du.VIDEO_STREAM_TYPE_LIVE]="VIDEO_STREAM_TYPE_LIVE";du[du.VIDEO_STREAM_TYPE_UNSPECIFIED]="VIDEO_STREAM_TYPE_UNSPECIFIED";
var eu={YT_IDB_TRANSACTION_TYPE_READ:2,YT_IDB_TRANSACTION_TYPE_WRITE:1,YT_IDB_TRANSACTION_TYPE_UNKNOWN:0};eu[eu.YT_IDB_TRANSACTION_TYPE_READ]="YT_IDB_TRANSACTION_TYPE_READ";eu[eu.YT_IDB_TRANSACTION_TYPE_WRITE]="YT_IDB_TRANSACTION_TYPE_WRITE";eu[eu.YT_IDB_TRANSACTION_TYPE_UNKNOWN]="YT_IDB_TRANSACTION_TYPE_UNKNOWN";var fu={PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN:2,PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT:1,PLAYER_ROTATION_TYPE_UNKNOWN:0};fu[fu.PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN]="PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN";
fu[fu.PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT]="PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT";fu[fu.PLAYER_ROTATION_TYPE_UNKNOWN]="PLAYER_ROTATION_TYPE_UNKNOWN";var gu="actionVisualElement spinnerInfo resourceInfo playerInfo commentInfo mdxInfo watchInfo thumbnailLoadInfo creatorInfo unpluggedInfo reelInfo subscriptionsFeedInfo requestIds mediaBrowserActionInfo musicLoadActionInfo shoppingInfo webViewInfo prefetchInfo accelerationSession commerceInfo webInfo tvInfo kabukiInfo mwebInfo musicInfo".split(" ");var hu=y.ytLoggingLatencyUsageStats_||{};z("ytLoggingLatencyUsageStats_",hu);function iu(){this.i=0}
function ju(){iu.i||(iu.i=new iu);return iu.i}
iu.prototype.tick=function(a,b,c,d){ku(this,"tick_"+a+"_"+b)||(c={timestamp:c,cttAuthInfo:d},M("web_csi_via_jspb")?(d=new Lj,D(d,1,a),D(d,2,b),a=new Oj,Xd(a,Lj,5,Pj,d),sr(a,c)):qm("latencyActionTicked",{tickName:a,clientActionNonce:b},c))};
iu.prototype.info=function(a,b,c){var d=Object.keys(a).join("");ku(this,"info_"+d+"_"+b)||(a=Object.assign({},a),a.clientActionNonce=b,qm("latencyActionInfo",a,{cttAuthInfo:c}))};
iu.prototype.jspbInfo=function(a,b,c){for(var d="",e=0;e<a.toJSON().length;e++)void 0!==a.toJSON()[e]&&(d=0===e?d.concat(""+e):d.concat("_"+e));ku(this,"info_"+d+"_"+b)||(D(a,2,b),b={cttAuthInfo:c},c=new Oj,Xd(c,Hj,7,Pj,a),sr(c,b))};
iu.prototype.span=function(a,b,c){var d=Object.keys(a).join("");ku(this,"span_"+d+"_"+b)||(a.clientActionNonce=b,qm("latencyActionSpan",a,{cttAuthInfo:c}))};
function ku(a,b){hu[b]=hu[b]||{count:0};var c=hu[b];c.count++;c.time=P();a.i||(a.i=bm(function(){var d=P(),e;for(e in hu)hu[e]&&6E4<d-hu[e].time&&delete hu[e];a&&(a.i=0)},0,5E3));
return 5<c.count?(6===c.count&&1>1E5*Math.random()&&(c=new Q("CSI data exceeded logging limit with key",b.split("_")),0<=b.indexOf("plev")||Tr(c)),!0):!1}
;function lu(){var a=["ol"];Qt("").info.actionType="embed";a&&Ak("TIMING_AFT_KEYS",a);Ak("TIMING_ACTION","embed");if(M("web_csi_via_jspb")){a=L("TIMING_INFO",{});var b=new Hj;a=p(Object.entries(a));for(var c=a.next();!c.done;c=a.next()){var d=p(c.value);c=d.next().value;d=d.next().value;switch(c){case "GetBrowse_rid":var e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetGuide_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetHome_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);
break;case "GetPlayer_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetSearch_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetSettings_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetTrending_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "GetWatchNext_rid":e=new Kj;D(e,1,c);D(e,2,String(d));Jj(b,e);break;case "yt_red":D(b,14,!!d);break;case "yt_ad":D(b,9,!!d)}}mu(b);b=new Hj;b=D(b,25,!0);b=D(b,1,V[Xt(L("TIMING_ACTION"))]);(a=L("PREVIOUS_ACTION"))&&
D(b,13,V[Xt(a)]);(a=L("CLIENT_PROTOCOL"))&&D(b,33,a);(a=L("CLIENT_TRANSPORT"))&&D(b,34,a);(a=ks())&&"UNDEFINED_CSN"!==a&&D(b,4,a);a=nu();1!==a&&-1!==a||D(b,6,!0);a=Gt();if(M("skip_setting_info_in_csi_data_object"))Ht();else{d=Kt();c=[];for(e=0;e<d.length;e++){var f=c,g=f.push;var h=d[e];var k=Hj;if(null==h||""==h)k=new k;else{h=JSON.parse(h);if(!Array.isArray(h))throw Error(void 0);be=h=qd(h);k=new k(h);be=null}g.call(f,k)}for(d=0;d<c.length&&"cold"!==Qd(c[d],3,"");d++);}D(b,3,"cold");ou(a);a=pu();
if(0<a.length)for(a=p(a),c=a.next();!c.done;c=a.next())c=c.value,d=new Gj,D(d,1,c),Zd(b,83,Gj,d);mu(b)}else{a=L("TIMING_INFO",{});for(b in a)a.hasOwnProperty(b)&&qu(b,a[b]);b={isNavigation:!0,actionType:Xt(L("TIMING_ACTION"))};if(a=L("PREVIOUS_ACTION"))b.previousAction=Xt(a);if(a=L("CLIENT_PROTOCOL"))b.httpProtocol=a;if(a=L("CLIENT_TRANSPORT"))b.transportProtocol=a;(a=ks())&&"UNDEFINED_CSN"!==a&&(b.clientScreenNonce=a);a=nu();if(1===a||-1===a)b.isVisible=!0;M("skip_setting_info_in_csi_data_object")?
Ht():Gt();b.loadType="cold";ou(Gt());a=pu();if(0<a.length)for(b.resourceInfo=[],a=p(a),c=a.next();!c.done;c=a.next())b.resourceInfo.push({resourceCache:c.value});ru(b)}b=Gt();a=Jt();if(!(M("skip_setting_info_in_csi_data_object")&&"cold"!==Ht().loadType||"cold"!==b.yt_lt&&"cold"!==a.loadType)){c=Bt();d=It();d=d.gelTicks?d.gelTicks:d.gelTicks={};for(var m in c)m in d||Z(m,c[m]);m={};c=!1;d=p(Object.keys(b));for(e=d.next();!e.done;e=d.next())e=e.value,(e=Yt(e,b[e]))&&!Nt(Jt(),e)&&(ot(a,e),ot(m,e),c=
!0);c&&ru(m)}z("ytglobal.timingready_",!0);m=L("TIMING_ACTION");B("ytglobal.timingready_")&&m&&"_start"in Bt()&&At()&&Mt()}
function qu(a,b,c,d){null!==b&&(M("skip_setting_info_in_csi_data_object")||(Gt(c)[a]=b),(a=Yt(a,b,c))&&ru(a,c,d))}
function ru(a,b,c){if(!M("web_csi_via_jspb")||(void 0===c?0:c))c=Qt(b||""),ot(c.info,a),M("skip_setting_info_in_csi_data_object")?a.loadType&&(c=a.loadType,Ht(b).loadType=c):ot(Jt(b),a),c=Lt(b),b=Ft(b).cttAuthInfo,ju().info(a,c,b);else{c=new Hj;var d=Object.keys(a);a=Object.values(a);for(var e=0;e<d.length;e++){var f=d[e];try{switch(f){case "actionType":D(c,1,V[a[e]]);break;case "clientActionNonce":D(c,2,a[e]);break;case "clientScreenNonce":D(c,4,a[e]);break;case "loadType":D(c,3,a[e]);break;case "isPrewarmedLaunch":D(c,
92,a[e]);break;case "isFirstInstall":D(c,55,a[e]);break;case "networkType":D(c,5,Zt[a[e]]);break;case "connectionType":D(c,26,X[a[e]]);break;case "detailedConnectionType":D(c,27,Y[a[e]]);break;case "isVisible":D(c,6,a[e]);break;case "playerType":D(c,7,$t[a[e]]);break;case "clientPlaybackNonce":D(c,8,a[e]);break;case "adClientPlaybackNonce":D(c,28,a[e]);break;case "previousCpn":D(c,77,a[e]);break;case "targetCpn":D(c,76,a[e]);break;case "isMonetized":D(c,9,a[e]);break;case "isPrerollAllowed":D(c,16,
a[e]);break;case "isPrerollShown":D(c,17,a[e]);break;case "adType":D(c,12,a[e]);break;case "adTypesAllowed":D(c,36,a[e]);break;case "adNetworks":D(c,37,a[e]);break;case "previousAction":D(c,13,V[a[e]]);break;case "isRedSubscriber":D(c,14,a[e]);break;case "serverTimeMs":D(c,15,a[e]);break;case "videoId":c.setVideoId(a[e]);break;case "adVideoId":D(c,20,a[e]);break;case "targetVideoId":D(c,78,a[e]);break;case "adBreakType":D(c,21,au[a[e]]);break;case "isNavigation":D(c,25,a[e]);break;case "viewportHeight":D(c,
29,a[e]);break;case "viewportWidth":D(c,30,a[e]);break;case "screenHeight":D(c,84,a[e]);break;case "screenWidth":D(c,85,a[e]);break;case "browseId":D(c,31,a[e]);break;case "isCacheHit":D(c,32,a[e]);break;case "httpProtocol":D(c,33,a[e]);break;case "transportProtocol":D(c,34,a[e]);break;case "searchQuery":D(c,41,a[e]);break;case "isContinuation":D(c,42,a[e]);break;case "availableProcessors":D(c,43,a[e]);break;case "sdk":D(c,44,a[e]);break;case "isLocalStream":D(c,45,a[e]);break;case "navigationRequestedSameUrl":D(c,
64,a[e]);break;case "shellStartupDurationMs":D(c,70,a[e]);break;case "appInstallDataAgeMs":D(c,73,a[e]);break;case "latencyActionError":D(c,71,bu[a[e]]);break;case "actionStep":D(c,79,a[e]);break;case "jsHeapSizeLimit":D(c,80,a[e]);break;case "totalJsHeapSize":D(c,81,a[e]);break;case "usedJsHeapSize":D(c,82,a[e]);break;case "sourceVideoDurationMs":D(c,90,a[e]);break;case "videoOutputFrames":D(c,93,a[e]);break;case "isResume":D(c,104,a[e]);break;case "adPrebufferedTimeSecs":D(c,39,a[e]);break;case "isLivestream":D(c,
47,a[e]);break;case "liveStreamMode":D(c,91,cu[a[e]]);break;case "adCpn2":D(c,48,a[e]);break;case "adDaiDriftMillis":D(c,49,a[e]);break;case "videoStreamType":D(c,53,du[a[e]]);break;case "playbackRequiresTap":D(c,56,a[e]);break;case "performanceNavigationTiming":D(c,67,a[e]);break;case "transactionType":D(c,74,eu[a[e]]);break;case "playerRotationType":D(c,101,fu[a[e]]);break;case "allowedPreroll":D(c,10,a[e]);break;case "shownPreroll":D(c,11,a[e]);break;case "getHomeRequestId":D(c,57,a[e]);break;
case "getSearchRequestId":D(c,60,a[e]);break;case "getPlayerRequestId":D(c,61,a[e]);break;case "getWatchNextRequestId":D(c,62,a[e]);break;case "getBrowseRequestId":D(c,63,a[e]);break;case "getLibraryRequestId":D(c,66,a[e]);break;default:gu.includes(f)&&Jk(new Q("Codegen laipb translator asked to translate message field",""+f))}}catch(g){Jk(Error("Codegen laipb translator failed to set "+f))}}mu(c,b)}}
function mu(a,b){if(M("skip_setting_info_in_csi_data_object")){var c=Qd(a,3,"");c&&(Ht(b).loadType=c)}else Kt(b).push(ce(a));Qt(b||"").jspbInfo.push(a);c=Lt(b);b=Ft(b).cttAuthInfo;ju().jspbInfo(a,c,b)}
function Z(a,b,c){if(!b&&"_"!==a[0]){var d=a;S.mark&&(0==d.lastIndexOf("mark_",0)||(d="mark_"+d),c&&(d+=" ("+c+")"),S.mark(d))}d=Qt(c||"");d.tick[a]=b||P();if(d.callback&&d.callback[a]){d=p(d.callback[a]);for(var e=d.next();!e.done;e=d.next())e=e.value,e()}d=It(c);d.gelTicks&&(d.gelTicks[a]=!0);d=Bt(c);e=b||P();d[a]=e;e=Lt(c);var f=Ft(c).cttAuthInfo;if("_start"===a){var g=ju();ku(g,"baseline_"+e)||(b={timestamp:b,cttAuthInfo:f},M("web_csi_via_jspb")?(f=new Fj,D(f,1,e),e=new Oj,Xd(e,Fj,6,Pj,f),sr(e,
b)):qm("latencyActionBaselined",{clientActionNonce:e},b))}else ju().tick(a,e,b,f);Mt(c);return d[a]}
function su(){var a=Lt();requestAnimationFrame(function(){setTimeout(function(){a===Lt()&&Z("ol",void 0,void 0)},0)})}
function nu(){var a=document;if("visibilityState"in a)a=a.visibilityState;else{var b=Gp+"VisibilityState";a=b in a?a[b]:void 0}switch(a){case "hidden":return 0;case "visible":return 1;case "prerender":return 2;case "unloaded":return 3;default:return-1}}
function ou(a){var b=Ct(),c=Et(),d=L("CSI_START_TIMESTAMP_MILLIS",0);0<d&&!M("embeds_web_enable_csi_start_override_killswitch")&&(c=d);c&&(Z("srt",b.responseStart),1!==a.prerender&&Z("_start",c,void 0));a=Ot();0<a&&Z("fpt",a);a=Ct();a.isPerformanceNavigationTiming&&ru({performanceNavigationTiming:!0});Z("nreqs",a.requestStart,void 0);Z("nress",a.responseStart,void 0);Z("nrese",a.responseEnd,void 0);0<a.redirectEnd-a.redirectStart&&(Z("nrs",a.redirectStart,void 0),Z("nre",a.redirectEnd,void 0));0<
a.domainLookupEnd-a.domainLookupStart&&(Z("ndnss",a.domainLookupStart,void 0),Z("ndnse",a.domainLookupEnd,void 0));0<a.connectEnd-a.connectStart&&(Z("ntcps",a.connectStart,void 0),Z("ntcpe",a.connectEnd,void 0));a.secureConnectionStart>=Et()&&0<a.connectEnd-a.secureConnectionStart&&(Z("nstcps",a.secureConnectionStart,void 0),Z("ntcpe",a.connectEnd,void 0));S&&"getEntriesByType"in S&&tu()}
function uu(a,b){a=document.querySelector(a);if(!a)return!1;var c="",d=a.nodeName;"SCRIPT"===d?(c=a.src,c||(c=a.getAttribute("data-timing-href"))&&(c=window.location.protocol+c)):"LINK"===d&&(c=a.href);ic()&&a.setAttribute("nonce",ic());return c?(a=S.getEntriesByName(c))&&a[0]&&(a=a[0],c=Et(),Z("rsf_"+b,c+Math.round(a.fetchStart)),Z("rse_"+b,c+Math.round(a.responseEnd)),void 0!==a.transferSize&&0===a.transferSize)?!0:!1:!1}
function pu(){var a=[];if(document.querySelector&&S&&S.getEntriesByName)for(var b in zt)if(zt.hasOwnProperty(b)){var c=zt[b];uu(b,c)&&a.push(c)}return a}
function tu(){var a=window.location.protocol,b=S.getEntriesByType("resource");b=gb(b,function(c){return 0===c.name.indexOf(a+"//fonts.gstatic.com/s/")});
(b=ib(b,function(c,d){return d.duration>c.duration?d:c},{duration:0}))&&0<b.startTime&&0<b.responseEnd&&(Z("wffs",Dt(b.startTime)),Z("wffe",Dt(b.responseEnd)))}
var vu=window;vu.ytcsi&&(vu.ytcsi.info=qu,vu.ytcsi.tick=Z);var wu="tokens consistency mss client_location entities response_received_commands store PLAYER_PRELOAD".split(" "),xu=["type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.BrowseResponse"];function yu(a,b,c,d){this.o=a;this.N=b;this.m=c;this.l=d;this.j=void 0;this.i=new Map;a.Ja||(a.Ja={});a.Ja=Object.assign({},nt,a.Ja)}
function zu(a,b,c,d){if(void 0!==yu.i){if(d=yu.i,a=[a!==d.o,b!==d.N,c!==d.m,!1,!1,void 0!==d.j],a.some(function(e){return e}))throw new Q("InnerTubeTransportService is already initialized",a);
}else yu.i=new yu(a,b,c,d)}
function Au(a){var b={signalServiceEndpoint:{signal:"GET_DATASYNC_IDS"}};var c=void 0===c?Ns:c;var d=Ws(b,a.o);if(!d)return Cf(new Q("Error: No request builder found for command.",b));var e=d.o(b,void 0,c);return e?new xf(function(f){var g,h,k;return w(function(m){if(1==m.i){h="cors"===(null==(g=e.ta)?void 0:g.mode)?"cors":void 0;if(a.m.md){var q=e.config,t;q=null==q?void 0:null==(t=q.Pa)?void 0:t.sessionIndex;t=Ms({sessionIndex:q});k=Object.assign({},Bu(h),t);return m.u(2)}return v(m,Cu(e.config,
h),3)}2!=m.i&&(k=m.j);f(Du(a,e,k));m.i=0})}):Cf(new Q("Error: Failed to build request for command.",b))}
function Eu(a,b,c){var d;if(b&&!(null==b?0:null==(d=b.Yq)?0:d.dr)&&a.l){d=p(wu);for(var e=d.next();!e.done;e=d.next())e=e.value,a.l[e]&&a.l[e].handleResponse(b,c)}}
function Du(a,b,c){var d,e,f,g,h,k,m,q,t,x,u,A,E,F,O,N,R,ca,W,nb,Va,la,H,ka,ea,Ae,Be,vd;return w(function(na){switch(na.i){case 1:na.u(2);break;case 3:if((d=na.j)&&!d.isExpired())return na.return(Promise.resolve(d.i()));case 2:if(null==(e=b)?0:null==(f=e.ga)?0:f.context)for(g=p([]),h=g.next();!h.done;h=g.next())k=h.value,k.Tq(b.ga.context);if(null==(m=a.j)||!m.Zq(b.input,b.ga)){na.u(4);break}return v(na,a.j.Oq(b.input,b.ga),5);case 5:return q=na.j,M("kevlar_process_local_innertube_responses_killswitch")||
Eu(a,q,b),na.return(q);case 4:return(u=null==(x=b.config)?void 0:x.Aa)&&a.i.has(u)&&M("web_memoize_inflight_requests")?t=a.i.get(u):(A=JSON.stringify(b.ga),O=null!=(F=null==(E=b.ta)?void 0:E.headers)?F:{},b.ta=Object.assign({},b.ta,{headers:Object.assign({},O,c)}),N=Object.assign({},b.ta),"POST"===b.ta.method&&(N=Object.assign({},N,{body:A})),(null==(R=b.config)?0:R.Xc)&&Z(b.config.Xc),ca=function(){return a.N.fetch(b.input,N,b.config)},t=ca(),u&&a.i.set(u,t)),v(na,t,6);
case 6:W=na.j;if(M("web_one_platform_error_handling")&&(null==(nb=W)?0:null==(Va=nb.error)?0:Va.details))for(la=W.error.details,H=p(la),ka=H.next();!ka.done;ka=H.next())ea=ka.value,(Ae=ea["@type"])&&-1<xu.indexOf(Ae)&&(delete ea["@type"],W=ea);u&&a.i.has(u)&&a.i.delete(u);(null==(Be=b.config)?0:Be.Yc)&&Z(b.config.Yc);if(W||null==(vd=a.j)||!vd.Iq(b.input,b.ga)){na.u(7);break}return v(na,a.j.Nq(b.input,b.ga),8);case 8:W=na.j;case 7:return Eu(a,W,b),na.return(W)}})}
function Cu(a,b){var c,d,e,f;return w(function(g){if(1==g.i){e=null==(c=a)?void 0:null==(d=c.Pa)?void 0:d.sessionIndex;var h=Ms({sessionIndex:e});if(!(h instanceof xf)){var k=new xf(cb);yf(k,2,h);h=k}return v(g,h,2)}f=g.j;return g.return(Promise.resolve(Object.assign({},Bu(b),f)))})}
function Bu(a){var b={"Content-Type":"application/json"};L("EOM_VISITOR_DATA")?b["X-Goog-EOM-Visitor-Id"]=L("EOM_VISITOR_DATA"):L("VISITOR_DATA")&&(b["X-Goog-Visitor-Id"]=L("VISITOR_DATA"));M("track_webfe_innertube_auth_mismatch")&&(b["X-Youtube-Bootstrap-Logged-In"]=L("LOGGED_IN",!1));"cors"!==a&&((a=L("INNERTUBE_CONTEXT_CLIENT_NAME"))&&(b["X-Youtube-Client-Name"]=a),(a=L("INNERTUBE_CONTEXT_CLIENT_VERSION"))&&(b["X-Youtube-Client-Version"]=a),(a=L("CHROME_CONNECTED_HEADER"))&&(b["X-Youtube-Chrome-Connected"]=
a),(a=L("DOMAIN_ADMIN_STATE"))&&(b["X-Youtube-Domain-Admin-State"]=a));return b}
;var Fu=new Ys("INNERTUBE_TRANSPORT_TOKEN");var Gu=["share/get_web_player_share_panel"],Hu=["feedback"],Iu=["notification/modify_channel_preference"],Ju=["browse/edit_playlist"],Ku=["subscription/subscribe"],Lu=["subscription/unsubscribe"];function Mu(){}
r(Mu,kt);Mu.prototype.l=function(){return Ku};
Mu.prototype.i=function(a){return ys(a,uk)||void 0};
Mu.prototype.j=function(a,b,c){c=void 0===c?{}:c;b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params);c.botguardResponse&&(a.botguardResponse=c.botguardResponse);c.feature&&(a.clientFeature=c.feature)};
fa.Object.defineProperties(Mu.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Nu(){}
r(Nu,kt);Nu.prototype.l=function(){return Lu};
Nu.prototype.i=function(a){return ys(a,tk)||void 0};
Nu.prototype.j=function(a,b){b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params)};
fa.Object.defineProperties(Nu.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Ou(){}
r(Ou,kt);Ou.prototype.l=function(){return Hu};
Ou.prototype.i=function(a){return ys(a,ej)||void 0};
Ou.prototype.j=function(a,b,c){a.feedbackTokens=[];b.feedbackToken&&a.feedbackTokens.push(b.feedbackToken);if(b=b.cpn||c.cpn)a.feedbackContext={cpn:b};a.isFeedbackTokenUnencrypted=!!c.is_feedback_token_unencrypted;a.shouldMerge=!1;c.extra_feedback_tokens&&(a.shouldMerge=!0,a.feedbackTokens=a.feedbackTokens.concat(c.extra_feedback_tokens))};
fa.Object.defineProperties(Ou.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Pu(){}
r(Pu,kt);Pu.prototype.l=function(){return Iu};
Pu.prototype.i=function(a){return ys(a,sk)||void 0};
Pu.prototype.j=function(a,b){b.params&&(a.params=b.params);b.secondaryParams&&(a.secondaryParams=b.secondaryParams)};function Qu(){}
r(Qu,kt);Qu.prototype.l=function(){return Ju};
Qu.prototype.i=function(a){return ys(a,rk)||void 0};
Qu.prototype.j=function(a,b){b.actions&&(a.actions=b.actions);b.params&&(a.params=b.params);b.playlistId&&(a.playlistId=b.playlistId)};function Ru(){}
r(Ru,kt);Ru.prototype.l=function(){return Gu};
Ru.prototype.i=function(a){return ys(a,qk)};
Ru.prototype.j=function(a,b,c){c=void 0===c?{}:c;b.serializedShareEntity&&(a.serializedSharedEntity=b.serializedShareEntity);c.includeListId&&(a.includeListId=!0)};var $s=new Ys("NETWORK_SLI_TOKEN");function Su(a){this.i=a}
Su.prototype.fetch=function(a,b){var c=this,d,e;return w(function(f){c.i&&(d=mc(nc(5,Dc(a,"key")))||"/UNKNOWN_PATH",c.i.start(d));e=new window.Request(a,b);return M("web_fetch_promise_cleanup_killswitch")?f.return(Promise.resolve(fetch(e).then(function(g){return c.handleResponse(g)}).catch(function(g){Tr(g)}))):f.return(fetch(e).then(function(g){return c.handleResponse(g)}).catch(function(g){Tr(g)}))})};
Su.prototype.handleResponse=function(a){var b=a.text().then(function(c){return JSON.parse(c.replace(")]}'",""))});
a.redirected||a.ok?this.i&&this.i.success():(this.i&&this.i.failure(),b=b.then(function(c){Tr(new Q("Error: API fetch failed",a.status,a.url,c));return Object.assign({},c,{errorMetadata:{status:a.status}})}));
return b};
Su[Xs]=[new Zs];var Tu=new Ys("NETWORK_MANAGER_TOKEN");var Uu;function Vu(a){Yn.call(this,1,arguments);this.csn=a}
r(Vu,Yn);var ho=new Zn("screen-created",Vu),Wu=[],Yu=Xu,Zu=0;function $u(a,b,c,d,e,f,g){function h(){Tr(new Q("newScreen() parent element does not have a VE - rootVe",b))}
var k=Yu();f=new ds({veType:b,youtubeData:f,jspbYoutubeData:void 0});e={cttAuthInfo:e,aa:k};if(M("il_via_jspb")){var m=new uj;m.l(k);vj(m,f.getAsJspb());c&&c.visualElement?(f=new wj,c.clientScreenNonce&&D(f,2,c.clientScreenNonce),xj(f,c.visualElement.getAsJspb()),g&&D(f,4,Qj[g]),G(m,wj,5,f)):c&&h();d&&D(m,3,d);xr(m,e,a)}else f={csn:k,pageVe:f.getAsJson()},c&&c.visualElement?(f.implicitGesture={parentCsn:c.clientScreenNonce,gesturedVe:c.visualElement.getAsJson()},g&&(f.implicitGesture.gestureType=
g)):c&&h(),d&&(f.cloneCsn=d),a?nr("screenCreated",f,a,e):qm("screenCreated",f,e);eo(ho,new Vu(k));return k}
function av(a,b,c,d){var e=d.filter(function(k){k.csn!==b?(k.csn=b,k=!0):k=!1;return k}),f={cttAuthInfo:ms(b),
aa:b};d=p(d);for(var g=d.next();!g.done;g=d.next())g=g.value.getAsJson(),(rb(g)||!g.trackingParams&&!g.veType)&&Tr(Error("Child VE logged with no data"));if(M("il_via_jspb")){var h=new yj;h.l(b);Aj(h,c.getAsJspb());hb(e,function(k){k=k.getAsJspb();Zd(h,3,sj,k)});
"UNDEFINED_CSN"==b?bv("visualElementAttached",f,void 0,h):yr(h,f,a)}else c={csn:b,parentVe:c.getAsJson(),childVes:hb(e,function(k){return k.getAsJson()})},"UNDEFINED_CSN"==b?bv("visualElementAttached",f,c):a?nr("visualElementAttached",c,a,f):qm("visualElementAttached",c,f)}
function Xu(){for(var a=Math.random()+"",b=[],c=0,d=0;d<a.length;d++){var e=a.charCodeAt(d);255<e&&(b[c++]=e&255,e>>=8);b[c++]=e}return dd(b,3)}
function bv(a,b,c,d){Wu.push({payloadName:a,payload:c,sa:d,options:b});Zu||(Zu=io())}
function jo(a){if(Wu){for(var b=p(Wu),c=b.next();!c.done;c=b.next())if(c=c.value,c.payload)if(M("il_via_jspb"))switch(c.sa.l(a.csn),c.payloadName){case "screenCreated":xr(c.sa,c.options);break;case "visualElementAttached":yr(c.sa,c.options);break;case "visualElementShown":tr(c.sa,c.options);break;case "visualElementHidden":ur(c.sa,c.options);break;case "visualElementGestured":vr(c.sa,c.options);break;case "visualElementStateChanged":wr(c.sa,c.options);break;default:Tr(new Q("flushQueue unable to map payloadName to JSPB setter"))}else c.payload.csn=
a.csn,nr(c.payloadName,c.payload,null,c.options);Wu.length=0}Zu=0}
;function cv(){this.j=new Set;this.i=new Set;this.l=new Map}
cv.prototype.C=function(){};
cv.prototype.clear=function(){this.j.clear();this.i.clear();this.l.clear()};
Na(cv);function dv(){this.o=[];this.I=[];this.i=[];this.m=[];this.s=[];this.j=new Set;this.A=new Map}
dv.prototype.C=function(a){this.client=a};
function ev(a,b,c){c=void 0===c?0:c;b.then(function(d){a.j.has(c)&&a.l&&a.l();var e=ks(c),f=is(c);if(e&&f){var g;(null==d?0:null==(g=d.response)?0:g.trackingParams)&&av(a.client,e,f,[es(d.response.trackingParams)]);var h;(null==d?0:null==(h=d.playerResponse)?0:h.trackingParams)&&av(a.client,e,f,[es(d.playerResponse.trackingParams)])}})}
function fv(a,b,c,d){d=void 0===d?0:d;if(a.j.has(d))a.o.push([b,c]);else{var e=ks(d);c=c||is(d);e&&c&&av(a.client,e,c,[b])}}
dv.prototype.clickCommand=function(a,b,c){var d=a.clickTrackingParams;c=void 0===c?0:c;if(d)if(c=ks(void 0===c?0:c)){a=this.client;var e=es(d);d={cttAuthInfo:ms(c),aa:c};M("il_via_jspb")?(b=new Bj,b.l(c),e=e.getAsJspb(),G(b,sj,2,e),D(b,4,Qj.INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK),"UNDEFINED_CSN"==c?bv("visualElementGestured",d,void 0,b):vr(b,d,a)):(e={csn:c,ve:e.getAsJson(),gestureType:"INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK"},b&&(e.clientData=b),"UNDEFINED_CSN"==c?bv("visualElementGestured",
d,e):a?nr("visualElementGestured",e,a,d):qm("visualElementGestured",e,d));b=!0}else b=!1;else b=!1;return b};
function gv(a,b,c){c=void 0===c?{}:c;a.j.add(c.layer||0);a.l=function(){hv(a,b,c);var f=is(c.layer);if(f){for(var g=p(a.o),h=g.next();!h.done;h=g.next())h=h.value,fv(a,h[0],h[1]||f,c.layer);f=p(a.I);for(g=f.next();!g.done;g=f.next()){var k=g.value;g=void 0;g=void 0===g?0:g;h=ks(g);var m=k[0]||is(g);if(h&&m){g=a.client;var q=k[1];k={cttAuthInfo:ms(h),aa:h};M("il_via_jspb")?(q=new Ej,q.l(h),m=m.getAsJspb(),G(q,sj,2,m),"UNDEFINED_CSN"==h?bv("visualElementStateChanged",k,void 0,q):wr(q,k,g)):(m={csn:h,
ve:m.getAsJson(),clientData:q},"UNDEFINED_CSN"==h?bv("visualElementStateChanged",k,m):g?nr("visualElementStateChanged",m,g,k):qm("visualElementStateChanged",m,k))}}}};
ks(c.layer)||a.l();if(c.Pb)for(var d=p(c.Pb),e=d.next();!e.done;e=d.next())ev(a,e.value,c.layer);else Sr(Error("Delayed screen needs a data promise."))}
function hv(a,b,c){c=void 0===c?{}:c;c.layer||(c.layer=0);var d=void 0!==c.Tc?c.Tc:c.layer;var e=ks(d);d=is(d);var f;d&&(void 0!==c.parentCsn?f={clientScreenNonce:c.parentCsn,visualElement:d}:e&&"UNDEFINED_CSN"!==e&&(f={clientScreenNonce:e,visualElement:d}));var g,h=L("EVENT_ID");"UNDEFINED_CSN"===e&&h&&(g={servletData:{serializedServletEventId:h}});try{var k=$u(a.client,b,f,c.Ob,c.cttAuthInfo,g,c.Lq)}catch(m){Vr(m,{Wq:b,rootVe:d,parentVisualElement:void 0,Jq:e,Sq:f,Ob:c.Ob});Sr(m);return}ns(k,b,
c.layer,c.cttAuthInfo);if(b=e&&"UNDEFINED_CSN"!==e&&d){a:{b=p(Object.values(cs));for(f=b.next();!f.done;f=b.next())if(ks(f.value)===e){b=!0;break a}b=!1}b=!b}b&&(b=a.client,g=!0,h=(g=void 0===g?!1:g)?16:8,f={cttAuthInfo:ms(e),aa:e,Qb:g},M("il_via_jspb")?(h=new Cj,h.l(e),d=d.getAsJspb(),G(h,sj,2,d),D(h,4,g?16:8),"UNDEFINED_CSN"==e?bv("visualElementHidden",f,void 0,h):ur(h,f,b)):(d={csn:e,ve:d.getAsJson(),eventType:h},"UNDEFINED_CSN"==e?bv("visualElementHidden",f,d):b?nr("visualElementHidden",d,b,f):
qm("visualElementHidden",d,f)));a.i[a.i.length-1]&&!a.i[a.i.length-1].csn&&(a.i[a.i.length-1].csn=k||"");ru({clientScreenNonce:k});cv.getInstance().clear();d=is(c.layer);e&&"UNDEFINED_CSN"!==e&&d&&(M("web_mark_root_visible")||M("music_web_mark_root_visible"))&&(e=k,k={cttAuthInfo:ms(e),aa:e},M("il_via_jspb")?(b=new Dj,b.l(e),f=d.getAsJspb(),G(b,sj,2,f),D(b,4,1),"UNDEFINED_CSN"==e?bv("visualElementShown",k,void 0,b):tr(b,k)):(b={csn:e,ve:d.getAsJson(),eventType:1},"UNDEFINED_CSN"==e?bv("visualElementShown",
k,b):qm("visualElementShown",b,k)));a.j.delete(c.layer||0);a.l=void 0;e=p(a.A);for(k=e.next();!k.done;k=e.next())b=p(k.value),k=b.next().value,b=b.next().value,b.has(c.layer)&&d&&fv(a,k,d,c.layer);for(c=0;c<a.m.length;c++){e=a.m[c];try{e()}catch(m){Sr(m)}}for(c=a.m.length=0;c<a.s.length;c++){e=a.s[c];try{e()}catch(m){Sr(m)}}}
;function iv(){var a,b;return w(function(c){if(1==c.i)return a=et().resolve(Fu),a?v(c,Au(a),2):(Tr(Error("InnertubeTransportService unavailable in fetchDatasyncIds")),c.return(void 0));if(b=c.j)return b.errorMetadata?(Tr(Error("Datasync IDs fetch responded with "+b.errorMetadata.status+": "+b.error)),c.return(void 0)):c.return(b.Kq);Tr(Error("Network request to get Datasync IDs failed."));return c.return(void 0)})}
;var jv=y.caches,kv;function lv(a){var b=a.indexOf(":");return-1===b?{ac:a}:{ac:a.substring(0,b),datasyncId:a.substring(b+1)}}
function mv(){return w(function(a){if(void 0!==kv)return a.return(kv);kv=new Promise(function(b){var c;return w(function(d){switch(d.i){case 1:return ya(d,2),v(d,jv.open("test-only"),4);case 4:return v(d,jv.delete("test-only"),5);case 5:za(d,3);break;case 2:if(c=Aa(d),c instanceof Error&&"SecurityError"===c.name)return b(!1),d.return();case 3:b("caches"in window),d.i=0}})});
return a.return(kv)})}
function nv(a){var b,c,d,e,f,g,h;w(function(k){if(1==k.i)return v(k,mv(),2);if(3!=k.i){if(!k.j)return k.return(!1);b=[];return v(k,jv.keys(),3)}c=k.j;d=p(c);for(e=d.next();!e.done;e=d.next())f=e.value,g=lv(f),h=g.datasyncId,!h||a.includes(h)||b.push(jv.delete(f));return k.return(Promise.all(b).then(function(m){return m.some(function(q){return q})}))})}
function ov(){var a,b,c,d,e,f,g;return w(function(h){if(1==h.i)return v(h,mv(),2);if(3!=h.i){if(!h.j)return h.return(!1);a=um("cache contains other");return v(h,jv.keys(),3)}b=h.j;c=p(b);for(d=c.next();!d.done;d=c.next())if(e=d.value,f=lv(e),(g=f.datasyncId)&&g!==a)return h.return(!0);return h.return(!1)})}
;function pv(){try{return!!self.localStorage}catch(a){return!1}}
;function qv(a){a=a.match(/(.*)::.*::.*/);if(null!==a)return a[1]}
function rv(a){if(pv()){var b=Object.keys(window.localStorage);b=p(b);for(var c=b.next();!c.done;c=b.next()){c=c.value;var d=qv(c);void 0===d||a.includes(d)||self.localStorage.removeItem(c)}}}
function sv(){if(!pv())return!1;var a=um(),b=Object.keys(window.localStorage);b=p(b);for(var c=b.next();!c.done;c=b.next())if(c=qv(c.value),void 0!==c&&c!==a)return!0;return!1}
;function tv(){iv().then(function(a){a&&(Fn(a),nv(a),rv(a))})}
function uv(){var a=new Po;Wh.S(function(){var b,c,d,e;return w(function(f){switch(f.i){case 1:if(M("ytidb_clear_optimizations_killswitch")){f.u(2);break}b=um("clear");if(b.startsWith("V")){var g=[b];Fn(g);nv(g);rv(g);return f.return()}c=sv();return v(f,ov(),3);case 3:return d=f.j,v(f,Gn(),4);case 4:if(e=f.j,!c&&!d&&!e)return f.return();case 2:a.M()?tv():a.m.add("publicytnetworkstatus-online",tv,!0,void 0,void 0),f.i=0}})})}
;function vv(a){a&&(a.dataset?a.dataset[wv("loaded")]="true":a.setAttribute("data-loaded","true"))}
function xv(a,b){return a?a.dataset?a.dataset[wv(b)]:a.getAttribute("data-"+b):null}
var yv={};function wv(a){return yv[a]||(yv[a]=String(a).replace(/\-([a-z])/g,function(b,c){return c.toUpperCase()}))}
;var zv=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,Av=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/;function Bv(a,b,c){c=void 0===c?null:c;if(window.spf&&spf.script){c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(zv,""),c=c.replace(Av,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else Cv(a,b,c)}
function Cv(a,b,c){c=void 0===c?null:c;var d=Dv(a),e=document.getElementById(d),f=e&&xv(e,"loaded"),g=e&&!f;f?b&&b():(b&&(f=xq(d,b),b=""+Ra(b),Ev[b]=f),g||(e=Fv(a,d,function(){xv(e,"loaded")||(vv(e),Aq(d),cl(Ya(Bq,d),0))},c)))}
function Fv(a,b,c,d){d=void 0===d?null:d;var e=jf("SCRIPT");e.id=b;e.onload=function(){c&&setTimeout(c,0)};
e.onreadystatechange=function(){switch(e.readyState){case "loaded":case "complete":e.onload()}};
d&&e.setAttribute("nonce",d);Fh(e,Jb(a));a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(e,a.firstChild);return e}
function Gv(a){a=Dv(a);var b=document.getElementById(a);b&&(Bq(a),b.parentNode.removeChild(b))}
function Hv(a,b){a&&b&&(a=""+Ra(b),(a=Ev[a])&&zq(a))}
function Dv(a){var b=document.createElement("a");fc(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+kc(a)}
var Ev={};var Iv=[],Jv=!1;function Kv(){if(!M("disable_biscotti_fetch_for_ad_blocker_detection")&&!M("disable_biscotti_fetch_entirely_for_all_web_clients")&&As()){var a=L("PLAYER_VARS",{});if("1"!=tb(a)&&!Bs(a)){var b=function(){Jv=!0;"google_ad_status"in window?Ak("DCLKSTAT",1):Ak("DCLKSTAT",2)};
try{Bv("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}Iv.push(Wh.S(function(){if(!(Jv||"google_ad_status"in window)){try{Hv("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}Jv=!0;Ak("DCLKSTAT",3)}},5E3))}}}
function Lv(){var a=Number(L("DCLKSTAT",0));return isNaN(a)?0:a}
;function Ov(){this.state=1;this.i=null}
l=Ov.prototype;
l.initialize=function(a,b,c){if(a.program){var d,e=null!=(d=a.interpreterScript)?d:null,f;d=null!=(f=a.interpreterUrl)?f:null;a.interpreterSafeScript&&(e=a.interpreterSafeScript,Db("From proto message. b/166824318"),e=e.privateDoNotAccessOrElseSafeScriptWrappedValue||"",e=(f=Ab())?f.createScript(e):e,e=(new Fb(e)).toString());a.interpreterSafeUrl&&(d=a.interpreterSafeUrl,Db("From proto message. b/166824318"),d=Jb(d.privateDoNotAccessOrElseTrustedResourceUrlWrappedValue||"").toString());Pv(this,e,
d,a.program,b,c)}else Tr(Error("Cannot initialize botguard without program"))};
function Pv(a,b,c,d,e,f){var g=void 0===g?"trayride":g;c?(a.state=2,Bv(c,function(){window[g]?Qv(a,d,g,e):(a.state=3,Gv(c),Tr(new Q("Unable to load Botguard","from "+c)))},f)):b?(f=jf("SCRIPT"),f.textContent=b,f.nonce=ic(),document.head.appendChild(f),document.head.removeChild(f),window[g]?Qv(a,d,g,e):(a.state=4,Tr(new Q("Unable to load Botguard from JS")))):Tr(new Q("Unable to load VM; no url or JS provided"))}
l.isInitialized=function(){return!!this.pb()};
function Qv(a,b,c,d){a.state=5;try{var e=new Bh({program:b,globalName:c});e.jd.then(function(){a.state=6;d&&d(b)});
a.zb(e)}catch(f){a.state=7,f instanceof Error&&Tr(f)}}
l.invoke=function(a){a=void 0===a?{}:a;var b=this.pb();if(b){var c={Nb:a};if(b.Ua)throw Error("Already disposed");a=zh();var d;null!=(d=b.ra)&&d.j.i.Cb("/client_streamz/bg/fsc",d.Aa);d=b.nd([c.Nb,c.ld]);null!=(b=b.ra)&&(a=zh()-a,b.l.i.fb("/client_streamz/bg/fsl",a,b.Aa));b=d}else b=null;return b};
l.dispose=function(){this.Db()};
l.Db=function(){this.zb(null);this.state=8};
l.pb=function(){return this.i};
l.zb=function(a){oe(this.i);this.i=a};function Rv(){Ov.apply(this,arguments)}
r(Rv,Ov);Rv.prototype.Db=function(){this.state=8};
Rv.prototype.pb=function(){return B("yt.abuse.playerAttLoader")};
Rv.prototype.zb=function(a){oe(B("yt.abuse.playerAttLoader"));z("yt.abuse.playerAttLoader",a)};var Sv=new Rv;var Tv=new Ov;function Uv(){return M("use_player_abuse_bg_library")?Sv.isInitialized():Tv.isInitialized()}
function Vv(a){a=void 0===a?{}:a;M("use_player_abuse_bg_library")?(a=void 0===a?{}:a,a=Sv.invoke(a)):a=Tv.invoke(a);return a}
;function Wv(a){var b=this;var c=void 0===c?0:c;var d=void 0===d?fm():d;this.m=c;this.l=d;this.j=new Ah;this.i=a;a={};c=p(this.i.entries());for(d=c.next();!d.done;a={Ba:a.Ba,La:a.La},d=c.next()){var e=p(d.value);d=e.next().value;e=e.next().value;a.La=d;a.Ba=e;d=function(f){return function(){f.Ba.sb();b.i[f.La].bb=!0;b.i.every(function(g){return!0===g.bb})&&b.j.resolve()}}(a);
e=bm(d,Xv(this,a.Ba));this.i[a.La]=Object.assign({},a.Ba,{sb:d,Xa:e})}}
function Yv(a){var b=Array.from(a.i.keys()).sort(function(d,e){return Xv(a,a.i[e])-Xv(a,a.i[d])});
b=p(b);for(var c=b.next();!c.done;c=b.next())c=a.i[c.value],void 0===c.Xa||c.bb||(a.l.ea(c.Xa),bm(c.sb,10))}
Wv.prototype.cancel=function(){for(var a=p(this.i),b=a.next();!b.done;b=a.next())b=b.value,void 0===b.Xa||b.bb||this.l.ea(b.Xa),b.bb=!0;this.j.resolve()};
function Xv(a,b){var c;return null!=(c=b.priority)?c:a.m}
;function Zv(a){this.state=a;this.plugins=[];this.s=void 0}
Zv.prototype.install=function(){this.plugins.push.apply(this.plugins,ia(Ja.apply(0,arguments)))};
Zv.prototype.transition=function(a,b){var c=this,d=this.C.find(function(f){return f.from===c.state&&f.F===a});
if(d){this.l&&(Yv(this.l),this.l=void 0);this.state=a;d=d.action.bind(this);var e=this.plugins.filter(function(f){return f[a]}).map(function(f){return f[a]});
d($v(this,e,this.s),b)}else throw Error("no transition specified from "+this.state+" to "+a);};
function $v(a,b,c){return function(){var d=Ja.apply(0,arguments),e=b.filter(function(k){var m;return 10===(null!=(m=null!=c?c:k.priority)?m:0)}),f=b.filter(function(k){var m;
return 10!==(null!=(m=null!=c?c:k.priority)?m:0)});
fm();var g={};e=p(e);for(var h=e.next();!h.done;g={Ma:g.Ma},h=e.next())g.Ma=h.value,dm(function(k){return function(){k.Ma.callback.apply(k.Ma,ia(d))}}(g));
f=f.map(function(k){var m;return{sb:function(){k.callback.apply(k,ia(d))},
priority:null!=(m=null!=c?c:k.priority)?m:0}});
f.length&&(a.l=new Wv(f))}}
fa.Object.defineProperties(Zv.prototype,{currentState:{configurable:!0,enumerable:!0,get:function(){return this.state}}});function aw(a){Zv.call(this,void 0===a?"document_active":a);var b=this;this.s=10;this.i=new Map;this.C=[{from:"document_active",F:"document_disposed_preventable",action:this.I},{from:"document_active",F:"document_disposed",action:this.m},{from:"document_disposed_preventable",F:"document_disposed",action:this.m},{from:"document_disposed_preventable",F:"flush_logs",action:this.o},{from:"document_disposed_preventable",F:"document_active",action:this.j},{from:"document_disposed",F:"flush_logs",action:this.o},
{from:"document_disposed",F:"document_active",action:this.j},{from:"document_disposed",F:"document_disposed",action:function(){}},
{from:"flush_logs",F:"document_active",action:this.j}];window.addEventListener("pagehide",function(c){b.transition("document_disposed",{event:c})});
window.addEventListener("beforeunload",function(c){b.transition("document_disposed_preventable",{event:c})})}
r(aw,Zv);aw.prototype.I=function(a,b){if(!this.i.get("document_disposed_preventable")){a(null==b?void 0:b.event);var c,d;if((null==b?0:null==(c=b.event)?0:c.defaultPrevented)||(null==b?0:null==(d=b.event)?0:d.returnValue)){b.event.returnValue||(b.event.returnValue=!0);b.event.defaultPrevented||b.event.preventDefault();this.i=new Map;this.transition("document_active");return}}this.i.set("document_disposed_preventable",!0);this.i.get("document_disposed")?this.transition("flush_logs"):this.transition("document_disposed")};
aw.prototype.m=function(a,b){this.i.get("document_disposed")?this.transition("document_active"):(a(null==b?void 0:b.event),this.i.set("document_disposed",!0),this.transition("flush_logs"))};
aw.prototype.o=function(a,b){a(null==b?void 0:b.event);this.transition("document_active")};
aw.prototype.j=function(){this.i=new Map};function bw(a){Zv.call(this,void 0===a?"document_visibility_unknown":a);var b=this;this.C=[{from:"document_visibility_unknown",F:"document_visible",action:this.j},{from:"document_visibility_unknown",F:"document_hidden",action:this.i},{from:"document_visibility_unknown",F:"document_foregrounded",action:this.o},{from:"document_visibility_unknown",F:"document_backgrounded",action:this.m},{from:"document_visible",F:"document_hidden",action:this.i},{from:"document_visible",F:"document_foregrounded",action:this.o},
{from:"document_visible",F:"document_visible",action:this.j},{from:"document_foregrounded",F:"document_visible",action:this.j},{from:"document_foregrounded",F:"document_hidden",action:this.i},{from:"document_foregrounded",F:"document_foregrounded",action:this.o},{from:"document_hidden",F:"document_visible",action:this.j},{from:"document_hidden",F:"document_backgrounded",action:this.m},{from:"document_hidden",F:"document_hidden",action:this.i},{from:"document_backgrounded",F:"document_hidden",action:this.i},
{from:"document_backgrounded",F:"document_backgrounded",action:this.m},{from:"document_backgrounded",F:"document_visible",action:this.j}];document.addEventListener("visibilitychange",function(c){"visible"===document.visibilityState?b.transition("document_visible",{event:c}):b.transition("document_hidden",{event:c})});
M("visibility_lifecycles_dynamic_backgrounding")&&(window.addEventListener("blur",function(c){b.transition("document_backgrounded",{event:c})}),window.addEventListener("focus",function(c){b.transition("document_foregrounded",{event:c})}))}
r(bw,Zv);bw.prototype.j=function(a,b){a(null==b?void 0:b.event);M("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_foregrounded")};
bw.prototype.i=function(a,b){a(null==b?void 0:b.event);M("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_backgrounded")};
bw.prototype.m=function(a,b){a(null==b?void 0:b.event)};
bw.prototype.o=function(a,b){a(null==b?void 0:b.event)};function cw(){this.i=new aw;this.j=new bw}
cw.prototype.install=function(){var a=Ja.apply(0,arguments);this.i.install.apply(this.i,ia(a));this.j.install.apply(this.j,ia(a))};function dw(){cw.call(this);var a={};this.install((a.document_disposed={callback:this.l},a));a={};this.install((a.flush_logs={callback:this.m},a))}
var ew;r(dw,cw);dw.prototype.m=function(){if(M("web_fp_via_jspb")){var a=new rj,b=ks();b&&D(a,1,b);b=new Oj;Xd(b,rj,380,Pj,a);sr(b);M("web_fp_via_jspb_and_json")&&qm("finalPayload",{csn:ks()})}else qm("finalPayload",{csn:ks()})};
dw.prototype.l=function(){Xr(Yr)};function fw(){}
fw.getInstance=function(){var a=B("ytglobal.storage_");a||(a=new fw,z("ytglobal.storage_",a));return a};
fw.prototype.estimate=function(){var a,b,c;return w(function(d){a=navigator;return(null==(b=a.storage)?0:b.estimate)?d.return(a.storage.estimate()):(null==(c=a.webkitTemporaryStorage)?0:c.queryUsageAndQuota)?d.return(gw()):d.return()})};
function gw(){var a=navigator;return new Promise(function(b,c){var d;null!=(d=a.webkitTemporaryStorage)&&d.queryUsageAndQuota?a.webkitTemporaryStorage.queryUsageAndQuota(function(e,f){b({usage:e,quota:f})},function(e){c(e)}):c(Error("webkitTemporaryStorage is not supported."))})}
z("ytglobal.storageClass_",fw);function om(a,b){var c=this;this.handleError=a;this.i=b;this.j=!1;void 0===self.document||self.addEventListener("beforeunload",function(){c.j=!0});
this.l=Math.random()<=Dk("ytidb_transaction_ended_event_rate_limit",.02)}
om.prototype.logEvent=function(a,b){switch(a){case "IDB_DATA_CORRUPTED":M("idb_data_corrupted_killswitch")||this.i("idbDataCorrupted",b);break;case "IDB_UNEXPECTEDLY_CLOSED":this.i("idbUnexpectedlyClosed",b);break;case "IS_SUPPORTED_COMPLETED":M("idb_is_supported_completed_killswitch")||this.i("idbIsSupportedCompleted",b);break;case "QUOTA_EXCEEDED":hw(this,b);break;case "TRANSACTION_ENDED":this.l&&this.i("idbTransactionEnded",b);break;case "TRANSACTION_UNEXPECTEDLY_ABORTED":a=Object.assign({},b,
{hasWindowUnloaded:this.j}),this.i("idbTransactionAborted",a)}};
function hw(a,b){fw.getInstance().estimate().then(function(c){c=Object.assign({},b,{isSw:void 0===self.document,isIframe:self!==self.top,deviceStorageUsageMbytes:iw(null==c?void 0:c.usage),deviceStorageQuotaMbytes:iw(null==c?void 0:c.quota)});a.i("idbQuotaExceeded",c)})}
function iw(a){return"undefined"===typeof a?"-1":String(Math.ceil(a/1048576))}
;function jw(a,b,c){J.call(this);var d=this;c=c||L("POST_MESSAGE_ORIGIN")||window.document.location.protocol+"//"+window.document.location.hostname;this.l=b||null;this.targetOrigin="*";this.m=c;this.sessionId=null;this.channel="widget";this.G=!!a;this.A=function(e){a:if(!("*"!=d.m&&e.origin!=d.m||d.l&&e.source!=d.l||"string"!==typeof e.data)){try{var f=JSON.parse(e.data)}catch(g){break a}if(!(null==f||d.G&&(d.sessionId&&d.sessionId!=f.id||d.channel&&d.channel!=f.channel))&&f)switch(f.event){case "listening":"null"!=
e.origin&&(d.m=d.targetOrigin=e.origin);d.l=e.source;d.sessionId=f.id;d.j&&(d.j(),d.j=null);break;case "command":d.o&&(!d.s||0<=eb(d.s,f.func))&&d.o(f.func,f.args,e.origin)}}};
this.s=this.j=this.o=null;window.addEventListener("message",this.A)}
r(jw,J);jw.prototype.sendMessage=function(a,b){if(b=b||this.l){this.sessionId&&(a.id=this.sessionId);this.channel&&(a.channel=this.channel);try{var c=JSON.stringify(a);b.postMessage(c,this.targetOrigin)}catch(d){Kk(d)}}};
jw.prototype.D=function(){window.removeEventListener("message",this.A);J.prototype.D.call(this)};function kw(){this.j=[];this.isReady=!1;this.l={};var a=this.i=new jw(!!L("WIDGET_ID_ENFORCE")),b=this.Vc.bind(this);a.o=b;a.s=null;this.i.channel="widget";if(a=L("WIDGET_ID"))this.i.sessionId=a}
l=kw.prototype;l.Vc=function(a,b,c){"addEventListener"===a&&b?(a=b[0],this.l[a]||"onReady"===a||(this.addEventListener(a,lw(this,a)),this.l[a]=!0)):this.Eb(a,b,c)};
l.Eb=function(){};
function lw(a,b){return function(c){return a.sendMessage(b,c)}}
l.addEventListener=function(){};
l.Ic=function(){this.isReady=!0;this.sendMessage("initialDelivery",this.nb());this.sendMessage("onReady");fb(this.j,this.jc,this);this.j=[]};
l.nb=function(){return null};
function mw(a,b){a.sendMessage("infoDelivery",b)}
l.jc=function(a){this.isReady?this.i.sendMessage(a):this.j.push(a)};
l.sendMessage=function(a,b){this.jc({event:a,info:void 0===b?null:b})};
l.dispose=function(){this.i=null};var nw=new Set("endSeconds startSeconds mediaContentUrl suggestedQuality videoId rct rctn".split(" "));function ow(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function pw(a,b,c){if("string"===typeof a)return{videoId:a,startSeconds:b,suggestedQuality:c};b={};c=p(nw);for(var d=c.next();!d.done;d=c.next())d=d.value,a[d]&&(b[d]=a[d]);return b}
function qw(a,b,c,d){if(Qa(a)&&!Array.isArray(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}b={index:b,startSeconds:c,suggestedQuality:d};"string"===typeof a&&16===a.length?b.list="PL"+a:b.playlist=a;return b}
;function rw(a){kw.call(this);this.listeners=[];this.api=a;this.addEventListener("onReady",this.onReady.bind(this));this.addEventListener("onVideoProgress",this.fd.bind(this));this.addEventListener("onVolumeChange",this.gd.bind(this));this.addEventListener("onApiChange",this.Zc.bind(this));this.addEventListener("onPlaybackQualityChange",this.cd.bind(this));this.addEventListener("onPlaybackRateChange",this.dd.bind(this));this.addEventListener("onStateChange",this.ed.bind(this));this.addEventListener("onWebglSettingsChanged",
this.hd.bind(this))}
r(rw,kw);l=rw.prototype;
l.Eb=function(a,b,c){if(this.api.isExternalMethodAvailable(a,c)){b=b||[];if(0<b.length&&ow(a)){var d=b;if(Qa(d[0])&&!Array.isArray(d[0]))var e=d[0];else switch(e={},a){case "loadVideoById":case "cueVideoById":e=pw(d[0],void 0!==d[1]?Number(d[1]):void 0,d[2]);break;case "loadVideoByUrl":case "cueVideoByUrl":e=d[0];"string"===typeof e&&(e={mediaContentUrl:e,startSeconds:void 0!==d[1]?Number(d[1]):void 0,suggestedQuality:d[2]});b:{if((d=e.mediaContentUrl)&&(d=/\/([ve]|embed)\/([^#?]+)/.exec(d))&&d[2]){d=
d[2];break b}d=null}e.videoId=d;e=pw(e);break;case "loadPlaylist":case "cuePlaylist":e=qw(d[0],d[1],d[2],d[3])}b.length=1;b[0]=e}this.api.handleExternalCall(a,b,c);ow(a)&&mw(this,this.nb())}};
l.onReady=function(){var a=this.Ic.bind(this);this.i.j=a;a=this.api.getVideoData();a.isPlayable||this.sendMessage("onError",a.errorCode)};
l.addEventListener=function(a,b){this.listeners.push({eventType:a,listener:b});this.api.addEventListener(a,b)};
l.nb=function(){if(!this.api)return null;var a=this.api.getApiInterface();lb(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c];if(0===e.search("get")||0===e.search("is")){var f=0;0===e.search("get")?f=3:0===e.search("is")&&(f=2);f=e.charAt(f).toLowerCase()+e.substr(f+1);try{var g=this.api[e]();b[f]=g}catch(h){}}}b.videoData=this.api.getVideoData();b.currentTimeLastUpdated_=Date.now()/1E3;return b};
l.ed=function(a){a={playerState:a,currentTime:this.api.getCurrentTime(),duration:this.api.getDuration(),videoData:this.api.getVideoData(),videoStartBytes:0,videoBytesTotal:this.api.getVideoBytesTotal(),videoLoadedFraction:this.api.getVideoLoadedFraction(),playbackQuality:this.api.getPlaybackQuality(),availableQualityLevels:this.api.getAvailableQualityLevels(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getVideoUrl&&
(a.videoUrl=this.api.getVideoUrl());this.api.getVideoContentRect&&(a.videoContentRect=this.api.getVideoContentRect());this.api.getProgressState&&(a.progressState=this.api.getProgressState());this.api.getPlaylist&&(a.playlist=this.api.getPlaylist());this.api.getPlaylistIndex&&(a.playlistIndex=this.api.getPlaylistIndex());this.api.getStoryboardFormat&&(a.storyboardFormat=this.api.getStoryboardFormat());mw(this,a)};
l.cd=function(a){mw(this,{playbackQuality:a})};
l.dd=function(a){mw(this,{playbackRate:a})};
l.Zc=function(){for(var a=this.api.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.api.getOptions(e);b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],m=this.api.getOption(e,k);b[e][k]=m}}this.sendMessage("apiInfoDelivery",b)};
l.gd=function(){mw(this,{muted:this.api.isMuted(),volume:this.api.getVolume()})};
l.fd=function(a){a={currentTime:a,videoBytesLoaded:this.api.getVideoBytesLoaded(),videoLoadedFraction:this.api.getVideoLoadedFraction(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getProgressState&&(a.progressState=this.api.getProgressState());mw(this,a)};
l.hd=function(){var a={sphericalProperties:this.api.getSphericalProperties()};mw(this,a)};
l.dispose=function(){kw.prototype.dispose.call(this);for(var a=0;a<this.listeners.length;a++){var b=this.listeners[a];this.api.removeEventListener(b.eventType,b.listener)}this.listeners=[]};function sw(a){J.call(this);this.j={};this.started=!1;this.connection=a;this.connection.subscribe("command",this.dc,this)}
r(sw,J);l=sw.prototype;l.start=function(){this.started||this.i()||(this.started=!0,this.connection.va("RECEIVING"))};
l.va=function(a,b){this.started&&!this.i()&&this.connection.va(a,b)};
l.dc=function(a,b,c){if(this.started&&!this.i()){var d=b||{};switch(a){case "addEventListener":"string"===typeof d.event&&this.addListener(d.event);break;case "removeEventListener":"string"===typeof d.event&&this.removeListener(d.event);break;default:this.api.isReady()&&this.api.isExternalMethodAvailable(a,c||null)&&(b=tw(a,b||{}),c=this.api.handleExternalCall(a,b,c||null),(c=uw(a,c))&&this.va(a,c))}}};
l.addListener=function(a){if(!(a in this.j)){var b=this.bd.bind(this,a);this.j[a]=b;this.addEventListener(a,b)}};
l.bd=function(a,b){this.started&&!this.i()&&this.connection.va(a,this.mb(a,b))};
l.mb=function(a,b){if(null!=b)return{value:b}};
l.removeListener=function(a){a in this.j&&(this.removeEventListener(a,this.j[a]),delete this.j[a])};
l.D=function(){var a=this.connection;a.i()||ui(a.j,"command",this.dc,this);this.connection=null;for(var b in this.j)this.j.hasOwnProperty(b)&&this.removeListener(b);J.prototype.D.call(this)};function vw(a,b){sw.call(this,b);this.api=a;this.start()}
r(vw,sw);vw.prototype.addEventListener=function(a,b){this.api.addEventListener(a,b)};
vw.prototype.removeEventListener=function(a,b){this.api.removeEventListener(a,b)};
function tw(a,b){switch(a){case "loadVideoById":return a=pw(b),[a];case "cueVideoById":return a=pw(b),[a];case "loadVideoByPlayerVars":return[b];case "cueVideoByPlayerVars":return[b];case "loadPlaylist":return a=qw(b),[a];case "cuePlaylist":return a=qw(b),[a];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];case "setLoop":return[b.loopPlaylists];
case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey,b.ctrlKey,b.altKey,b.metaKey,b.key,b.code]}return[]}
function uw(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
vw.prototype.mb=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return sw.prototype.mb.call(this,a,b)};
vw.prototype.D=function(){sw.prototype.D.call(this);delete this.api};function ww(a){a=void 0===a?!1:a;J.call(this);this.j=new K(a);qe(this,this.j)}
Za(ww,J);ww.prototype.subscribe=function(a,b,c){return this.i()?0:this.j.subscribe(a,b,c)};
ww.prototype.m=function(a,b){this.i()||this.j.oa.apply(this.j,arguments)};function xw(a,b,c){ww.call(this);this.l=a;this.destination=b;this.id=c}
r(xw,ww);xw.prototype.va=function(a,b){this.i()||this.l.va(this.destination,this.id,a,b)};
xw.prototype.D=function(){this.destination=this.l=null;ww.prototype.D.call(this)};function yw(a,b,c){J.call(this);this.destination=a;this.origin=c;this.j=kq(window,"message",this.l.bind(this));this.connection=new xw(this,a,b);qe(this,this.connection)}
r(yw,J);yw.prototype.va=function(a,b,c,d){this.i()||a!==this.destination||(a={id:b,command:c},d&&(a.data=d),this.destination.postMessage(JSON.stringify(a),this.origin))};
yw.prototype.l=function(a){if(!this.i()&&a.origin===this.origin){var b=a.data;if("string"===typeof b){try{b=JSON.parse(b)}catch(d){return}if(b.command){var c=this.connection;c.i()||c.m("command",b.command,b.data,a.origin)}}}};
yw.prototype.D=function(){lq(this.j);this.destination=null;J.prototype.D.call(this)};function zw(a){a=a||{};var b={},c={};this.url=a.url||"";this.args=a.args||vb(b);this.assets=a.assets||{};this.attrs=a.attrs||vb(c);this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
zw.prototype.clone=function(){var a=new zw,b;for(b in this)if(this.hasOwnProperty(b)){var c=this[b];"object"==Oa(c)?a[b]=vb(c):a[b]=c}return a};var Aw=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;function Bw(a){a=a||"";if(window.spf){var b=a.match(Aw);spf.style.load(a,b?b[1]:"",void 0)}else Cw(a)}
function Cw(a){var b=Dw(a),c=document.getElementById(b),d=c&&xv(c,"loaded");d||c&&!d||(c=Ew(a,b,function(){xv(c,"loaded")||(vv(c),Aq(b),cl(Ya(Bq,b),0))}))}
function Ew(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=Jb(a);gc(d,a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function Dw(a){var b=jf("A");Db("This URL is never added to the DOM");fc(b,new Ob(a,Pb));a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+kc(a)}
;function Fw(){J.call(this);this.j=[]}
r(Fw,J);Fw.prototype.D=function(){for(;this.j.length;){var a=this.j.pop();a.target.removeEventListener(a.name,a.callback,void 0)}J.prototype.D.call(this)};function Gw(){Fw.apply(this,arguments)}
r(Gw,Fw);function Hw(a,b,c,d){J.call(this);var e=this;this.A=b;this.webPlayerContextConfig=d;this.ca=!1;this.api={};this.V=this.s=null;this.L=new K;this.j={};this.R=this.W=this.elementId=this.qa=this.config=null;this.P=!1;this.m=this.G=null;this.ka={};this.Na=["onReady"];this.lastError=null;this.Da=NaN;this.K={};this.Oa=new Gw(this);this.T=0;this.l=this.o=a;qe(this,this.L);Iw(this);Jw(this);qe(this,this.Oa);c?this.T=cl(function(){e.loadNewVideoConfig(c)},0):d&&(Kw(this),Lw(this))}
r(Hw,J);l=Hw.prototype;l.getId=function(){return this.A};
l.loadNewVideoConfig=function(a){if(!this.i()){this.T&&(dl(this.T),this.T=0);var b=a||{};b instanceof zw||(b=new zw(b));this.config=b;this.setConfig(a);Lw(this);this.isReady()&&Mw(this)}};
function Kw(a){var b;a.webPlayerContextConfig?b=a.webPlayerContextConfig.rootElementId:b=a.config.attrs.id;a.elementId=b||a.elementId;"video-player"===a.elementId&&(a.elementId=a.A,a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.A:a.config.attrs.id=a.A);var c;(null==(c=a.l)?void 0:c.id)===a.elementId&&(a.elementId+="-player",a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.elementId:a.config.attrs.id=a.elementId)}
l.setConfig=function(a){this.qa=a;this.config=Nw(a);Kw(this);if(!this.W){var b;this.W=Ow(this,(null==(b=this.config.args)?void 0:b.jsapicallback)||"onYouTubePlayerReady")}this.config.args?this.config.args.jsapicallback=null:this.config.args={jsapicallback:null};var c;if(null==(c=this.config)?0:c.attrs)a=this.config.attrs,(b=a.width)&&this.l&&(this.l.style.width=Ph(Number(b)||b)),(a=a.height)&&this.l&&(this.l.style.height=Ph(Number(a)||a))};
function Mw(a){if(a.config&&!0!==a.config.loaded)if(a.config.loaded=!0,!a.config.args||"0"!==a.config.args.autoplay&&0!==a.config.args.autoplay&&!1!==a.config.args.autoplay){var b;a.api.loadVideoByPlayerVars(null!=(b=a.config.args)?b:null)}else a.api.cueVideoByPlayerVars(a.config.args)}
function Pw(a){var b=!0,c=Qw(a);c&&a.config&&(a=Rw(a),b=xv(c,"version")===a);return b&&!!B("yt.player.Application.create")}
function Lw(a){if(!a.i()&&!a.P){var b=Pw(a);if(b&&"html5"===(Qw(a)?"html5":null))a.R="html5",a.isReady()||Sw(a);else if(Tw(a),a.R="html5",b&&a.m&&a.o)a.o.appendChild(a.m),Sw(a);else{a.config&&(a.config.loaded=!0);var c=!1;a.G=function(){c=!0;var d=Uw(a,"player_bootstrap_method")?B("yt.player.Application.createAlternate")||B("yt.player.Application.create"):B("yt.player.Application.create");var e=a.config?Nw(a.config):void 0;d&&d(a.o,e,a.webPlayerContextConfig);Sw(a)};
a.P=!0;b?a.G():(Bv(Rw(a),a.G),(b=Vw(a))&&Bw(b),Ww(a)&&!c&&z("yt.player.Application.create",null))}}}
function Qw(a){var b=hf(a.elementId);!b&&a.l&&a.l.querySelector&&(b=a.l.querySelector("#"+a.elementId));return b}
function Sw(a){if(!a.i()){var b=Qw(a),c=!1;b&&b.getApiInterface&&b.getApiInterface()&&(c=!0);if(c){a.P=!1;if(!Uw(a,"html5_remove_not_servable_check_killswitch")){var d;if((null==b?0:b.isNotServable)&&a.config&&(null==b?0:b.isNotServable(null==(d=a.config.args)?void 0:d.video_id)))return}Xw(a)}else a.Da=cl(function(){Sw(a)},50)}}
function Xw(a){Iw(a);a.ca=!0;var b=Qw(a);if(b){a.s=Yw(a,b,"addEventListener");a.V=Yw(a,b,"removeEventListener");var c=b.getApiInterface();c=c.concat(b.getInternalApiInterface());for(var d=a.api,e=0;e<c.length;e++){var f=c[e];d[f]||(d[f]=Yw(a,b,f))}}for(var g in a.j)a.j.hasOwnProperty(g)&&a.s&&a.s(g,a.j[g]);Mw(a);a.W&&a.W(a.api);a.L.oa("onReady",a.api)}
function Yw(a,b,c){var d=b[c];return function(){var e=Ja.apply(0,arguments);try{return a.lastError=null,d.apply(b,e)}catch(f){"sendAbandonmentPing"!==c&&(f.params=c,a.lastError=f,Tr(f))}}}
function Iw(a){a.ca=!1;if(a.V)for(var b in a.j)a.j.hasOwnProperty(b)&&a.V(b,a.j[b]);for(var c in a.K)a.K.hasOwnProperty(c)&&dl(Number(c));a.K={};a.s=null;a.V=null;b=a.api;for(var d in b)b.hasOwnProperty(d)&&(b[d]=null);b.addEventListener=function(e,f){a.addEventListener(e,f)};
b.removeEventListener=function(e,f){a.removeEventListener(e,f)};
b.destroy=function(){a.dispose()};
b.getLastError=function(){return a.getLastError()};
b.getPlayerType=function(){return a.getPlayerType()};
b.getCurrentVideoConfig=function(){return a.qa};
b.loadNewVideoConfig=function(e){a.loadNewVideoConfig(e)};
b.isReady=function(){return a.isReady()}}
l.isReady=function(){return this.ca};
function Jw(a){a.addEventListener("WATCH_LATER_VIDEO_ADDED",function(b){Aq("WATCH_LATER_VIDEO_ADDED",b)});
a.addEventListener("WATCH_LATER_VIDEO_REMOVED",function(b){Aq("WATCH_LATER_VIDEO_REMOVED",b)})}
l.addEventListener=function(a,b){var c=this,d=Ow(this,b);d&&(0<=eb(this.Na,a)||this.j[a]||(b=Zw(this,a),this.s&&this.s(a,b)),this.L.subscribe(a,d),"onReady"===a&&this.isReady()&&cl(function(){d(c.api)},0))};
l.removeEventListener=function(a,b){this.i()||(b=Ow(this,b))&&ui(this.L,a,b)};
function Ow(a,b){var c=b;if("string"===typeof b){if(a.ka[b])return a.ka[b];c=function(){var d=Ja.apply(0,arguments),e=B(b);if(e)try{e.apply(y,d)}catch(f){Sr(f)}};
a.ka[b]=c}return c?c:null}
function Zw(a,b){var c="ytPlayer"+b+a.A;a.j[b]=c;y[c]=function(d){var e=cl(function(){if(!a.i()){try{a.L.oa(b,null!=d?d:void 0)}catch(h){Tr(new Q("PlayerProxy error when creating global callback",{error:h,event:b,playerId:a.A,data:d}))}var f=a.K,g=String(e);g in f&&delete f[g]}},0);
sb(a.K,String(e))};
return c}
l.getPlayerType=function(){return this.R||(Qw(this)?"html5":null)};
l.getLastError=function(){return this.lastError};
function Tw(a){a.cancel();Iw(a);a.R=null;a.config&&(a.config.loaded=!1);var b=Qw(a);b&&(Pw(a)||!Ww(a)?a.m=b:(b&&b.destroy&&b.destroy(),a.m=null));if(a.o)for(a=a.o;b=a.firstChild;)a.removeChild(b)}
l.cancel=function(){this.G&&Hv(Rw(this),this.G);dl(this.Da);this.P=!1};
l.D=function(){Tw(this);if(this.m&&this.config&&this.m.destroy)try{this.m.destroy()}catch(b){Sr(b)}this.ka=null;for(var a in this.j)this.j.hasOwnProperty(a)&&(y[this.j[a]]=null);this.qa=this.config=this.api=null;delete this.o;delete this.l;J.prototype.D.call(this)};
function Ww(a){var b,c;a=null==(b=a.config)?void 0:null==(c=b.args)?void 0:c.fflags;return!!a&&-1!==a.indexOf("player_destroy_old_version=true")}
function Rw(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.jsUrl:(a=a.config.assets)?a.js:""}
function Vw(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.cssUrl:(a=a.config.assets)?a.css:""}
function Uw(a,b){if(a.webPlayerContextConfig)var c=a.webPlayerContextConfig.serializedExperimentFlags;else{var d;if(null==(d=a.config)?0:d.args)c=a.config.args.fflags}return"true"===Qk(c||"","&")[b]}
function Nw(a){for(var b={},c=p(Object.keys(a)),d=c.next();!d.done;d=c.next()){d=d.value;var e=a[d];b[d]="object"===typeof e?vb(e):e}return b}
;var $w={},ax="player_uid_"+(1E9*Math.random()>>>0);function bx(a,b){var c="player",d=!1;d=void 0===d?!0:d;c="string"===typeof c?hf(c):c;var e=ax+"_"+Ra(c),f=$w[e];if(f&&d)return cx(a,b)?f.api.loadVideoByPlayerVars(a.args||null):f.loadNewVideoConfig(a),f.api;f=new Hw(c,e,a,b);$w[e]=f;Aq("player-added",f.api);re(f,function(){delete $w[f.getId()]});
return f.api}
function cx(a,b){return b&&b.serializedExperimentFlags?b.serializedExperimentFlags.includes("web_player_remove_playerproxy=true"):a&&a.args&&a.args.fflags?a.args.fflags.includes("web_player_remove_playerproxy=true"):!1}
;var dx=null,ex=null,fx=null;function gx(){hx()}
function ix(){hx()}
function hx(){var a=dx.getVideoData(1);a=a.title?a.title+" - YouTube":"YouTube";document.title!==a&&(document.title=a)}
function jx(){dx&&dx.sendAbandonmentPing&&dx.sendAbandonmentPing();L("PL_ATT")&&(M("use_player_abuse_bg_library")?Sv.dispose():Tv.dispose());for(var a=Wh,b=0,c=Iv.length;b<c;b++)a.ea(Iv[b]);Iv.length=0;Gv("//static.doubleclick.net/instream/ad_status.js");Jv=!1;Ak("DCLKSTAT",0);pe(fx,ex);dx&&(dx.removeEventListener("onVideoDataChange",gx),dx.destroy())}
;function kx(a,b,c){a="ST-"+kc(a).toString(36);b=b?tc(b):"";c=c||5;As()&&tl(a,b,c)}
;function lx(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=L("EVENT_ID");d&&(b.ei||(b.ei=d));if(b){d=a;var e=void 0===e?!0:e;var f=L("VALID_SESSION_TEMPDATA_DOMAINS",[]),g=oc(window.location.href);g&&f.push(g);g=oc(d);if(0<=eb(f,g)||!g&&0==d.lastIndexOf("/",0))if(M("autoescape_tempdata_url")&&(f=document.createElement("a"),fc(f,d),d=f.href),d&&(d=pc(d),f=d.indexOf("#"),d=0>f?d:d.slice(0,f)))if(e&&!b.csn&&(b.itct||b.ved)&&(b=Object.assign({csn:ks()},b)),h){var h=parseInt(h,10);isFinite(h)&&0<h&&
kx(d,b,h)}else kx(d,b)}if(c)return!1;if((window.ytspf||{}).enabled)spf.navigate(a);else{var k=void 0===k?{}:k;var m=void 0===m?"":m;var q=void 0===q?window:q;c=q.location;a=vc(a,k)+m;var t=void 0===t?Oh:t;a:{t=void 0===t?Oh:t;for(k=0;k<t.length;++k)if(m=t[k],m instanceof Mh&&m.isValid(a)){t=new Ob(a,Pb);break a}t=void 0}t=t||Sb;if(t instanceof Ob)var x=Qb(t);else{b:if(Eh){try{x=new URL(t)}catch(u){x="https:";break b}x=x.protocol}else c:{x=document.createElement("a");try{x.href=t}catch(u){x=void 0;
break c}x=x.protocol;x=":"===x||""===x?"https:":x}x="javascript:"!==x?t:void 0}void 0!==x&&(c.href=x)}return!0}
;z("yt.setConfig",Ak);z("yt.config.set",Ak);z("yt.setMsg",ps);z("yt.msgs.set",ps);z("yt.logging.errors.log",Sr);
z("writeEmbed",function(){var a=L("PLAYER_CONFIG");if(!a){var b=L("PLAYER_VARS");b&&(a={args:b})}Ks(!0);"gvn"===a.args.ps&&(document.body.style.backgroundColor="transparent");a.attrs||(a.attrs={width:"100%",height:"100%",id:"video-player"});var c=document.referrer;b=L("POST_MESSAGE_ORIGIN");window!==window.top&&c&&c!==document.URL&&(a.args.loaderUrl=c);M("embeds_js_api_set_1p_cookie")&&(c=Vk(window.location.href),c.embedsTokenValue&&(a.args.embedsTokenValue=c.embedsTokenValue));lu();c=L("WEB_PLAYER_CONTEXT_CONFIGS").WEB_PLAYER_CONTEXT_CONFIG_ID_EMBEDDED_PLAYER;
if(!c.serializedForcedExperimentIds){var d=Vk(window.location.href);d.forced_experiments&&(c.serializedForcedExperimentIds=d.forced_experiments)}dx=bx(a,c);dx.addEventListener("onVideoDataChange",gx);dx.addEventListener("onReady",ix);a=L("POST_MESSAGE_ID","player");L("ENABLE_JS_API")?fx=new rw(dx):L("ENABLE_POST_API")&&"string"===typeof a&&"string"===typeof b&&(ex=new yw(window.parent,a,b),fx=new vw(dx,ex.connection));Kv();M("ytidb_create_logger_embed_killswitch")||nm();a={};ew||(ew=new dw);ew.install((a.flush_logs=
{callback:function(){Zq()}},a));
M("embeds_web_enable_new_nwl")?Wo():dp();M("ytidb_clear_embedded_player")&&Wh.S(function(){var e;if(!Uu){var f=et(),g={wb:Tu,nc:Su};f.providers.set(g.wb,g);g={Mb:{feedbackEndpoint:ft(Ou),modifyChannelNotificationPreferenceEndpoint:ft(Pu),playlistEditEndpoint:ft(Qu),subscribeEndpoint:ft(Mu),unsubscribeEndpoint:ft(Nu),webPlayerShareEntityServiceEndpoint:ft(Ru)}};var h=Ts.getInstance(),k={};h&&(k.client_location=h);if(void 0===m){Ls.i||(Ls.i=new Ls);var m=Ls.i}void 0===e&&(e=f.resolve(Tu));zu(g,e,m,
k);m={wb:Fu,oc:yu.i};f.providers.set(m.wb,m);Uu=f.resolve(Fu)}uv()})});
var mx=Ik(function(){su();var a=xl.getInstance(),b=Al(119),c=1<window.devicePixelRatio;if(document.body&&hi(document.body,"exp-invert-logo"))if(c&&!hi(document.body,"inverted-hdpi")){var d=document.body;if(d.classList)d.classList.add("inverted-hdpi");else if(!hi(d,"inverted-hdpi")){var e=fi(d);gi(d,e+(0<e.length?" inverted-hdpi":"inverted-hdpi"))}}else!c&&hi(document.body,"inverted-hdpi")&&ii();if(b!=c){b="f"+(Math.floor(119/31)+1);d=Bl(b)||0;d=c?d|67108864:d&-67108865;0==d?delete wl[b]:(c=d.toString(16),
wl[b]=c.toString());c=!0;M("web_secure_pref_cookie_killswitch")&&(c=!1);b=a.i;d=[];for(var f in wl)d.push(f+"="+encodeURIComponent(String(wl[f])));tl(b,d.join("&"),63072E3,a.j,c)}dv.i||(dv.i=new dv);a=dv.i;f=16623;var g=void 0===g?{}:g;Object.values(qs).includes(f)||(Tr(new Q("createClientScreen() called with a non-page VE",f)),f=83769);g.isHistoryNavigation||a.i.push({rootVe:f,key:g.key||""});a.o=[];a.I=[];g.Pb?gv(a,f,g):hv(a,f,g)}),nx=Ik(function(a){M("embeds_web_enable_dispose_player_if_page_not_cached_killswitch")?
jx():a.persisted||jx()}),ox=Ik(jx);
window.addEventListener?(window.addEventListener("load",mx),window.addEventListener("pagehide",nx)):window.attachEvent&&(window.attachEvent("onload",mx),window.attachEvent("onunload",ox));z("yt.abuse.player.botguardInitialized",B("yt.abuse.player.botguardInitialized")||Uv);z("yt.abuse.player.invokeBotguard",B("yt.abuse.player.invokeBotguard")||Vv);z("yt.abuse.dclkstatus.checkDclkStatus",B("yt.abuse.dclkstatus.checkDclkStatus")||Lv);z("yt.player.exports.navigate",B("yt.player.exports.navigate")||lx);
z("yt.util.activity.init",B("yt.util.activity.init")||pq);z("yt.util.activity.getTimeSinceActive",B("yt.util.activity.getTimeSinceActive")||sq);z("yt.util.activity.setTimestamp",B("yt.util.activity.setTimestamp")||qq);}).call(this);
