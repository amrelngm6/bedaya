(window.webpackJsonp=window.webpackJsonp||[]).push([[20],{31:function(t,e,r){"use strict";function i(t,e,r,i,a,n,o,s){var l,c="function"==typeof t?t.options:t;if(e&&(c.render=e,c.staticRenderFns=r,c._compiled=!0),i&&(c.functional=!0),n&&(c._scopeId="data-v-"+n),o?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),a&&a.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(o)},c._ssrRegister=l):a&&(l=s?function(){a.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:a),l)if(c.functional){c._injectStyles=l;var u=c.render;c.render=function(t,e){return l.call(e),u(t,e)}}else{var f=c.beforeCreate;c.beforeCreate=f?[].concat(f,l):[l]}return{exports:t,options:c}}r.d(e,"a",(function(){return i}))},81:function(t,e,r){"use strict";r.r(e);var i=function(){var t=this,e=t._self._c;return e("div",{staticClass:"block w-full overflow-x-auto"},[t.activeItem?e("div",{staticClass:"w-full lg:flex gap gap-6"},[e("div",{staticClass:"w-full"},[e("div",{staticClass:"card flex-fill"},[t._m(0),t._v(" "),e("div",{staticClass:"card-body"},[e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("First name")]),t._v(" "),e("div",{staticClass:"w-full"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.first_name,expression:"activeItem.first_name"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",attrs:{type:"text",required:""},domProps:{value:t.activeItem.first_name},on:{input:function(e){e.target.composing||t.$set(t.activeItem,"first_name",e.target.value)}}})])]),t._v(" "),e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Last name")]),t._v(" "),e("div",{staticClass:"w-full"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.last_name,expression:"activeItem.last_name"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",attrs:{type:"text",required:""},domProps:{value:t.activeItem.last_name},on:{input:function(e){e.target.composing||t.$set(t.activeItem,"last_name",e.target.value)}}})])]),t._v(" "),e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Phone")]),t._v(" "),e("div",{staticClass:"w-full"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.phone,expression:"activeItem.phone"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",attrs:{type:"tel",required:""},domProps:{value:t.activeItem.phone},on:{input:function(e){e.target.composing||t.$set(t.activeItem,"phone",e.target.value)}}})])]),t._v(" "),e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Picture")]),t._v(" "),t.activeItem.profile_image?e("div",{staticClass:"w-full flex gap gap-6"},[e("img",{staticClass:"w-20",attrs:{src:t.activeItem.profile_image}}),t._v(" "),e("span",{on:{click:function(e){t.activeItem.profile_image=null}}},[t._v("change")])]):t.activeItem.profile_image?t._e():e("div",{staticClass:"w-full"},[e("vue-medialibrary-field",{attrs:{api_url:"/"},model:{value:t.activeItem.file,callback:function(e){t.$set(t.activeItem,"file",e)},expression:"activeItem.file"}})],1)])])])]),t._v(" "),e("div",{staticClass:"w-full"},[e("div",{staticClass:"card flex-fill"},[t._m(1),t._v(" "),e("div",{staticClass:"card-body"},[e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Email")]),t._v(" "),e("div",{staticClass:"w-full"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.email,expression:"activeItem.email"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",attrs:{type:"email"},domProps:{value:t.activeItem.email},on:{input:function(e){e.target.composing||t.$set(t.activeItem,"email",e.target.value)}}})])]),t._v(" "),e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Password")]),t._v(" "),e("div",{staticClass:"w-full"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.password,expression:"activeItem.password"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",attrs:{type:"password"},domProps:{value:t.activeItem.password},on:{input:function(e){e.target.composing||t.$set(t.activeItem,"password",e.target.value)}}})])]),t._v(" "),e("div",{staticClass:"gap gap-6 w-full flex py-2"},[e("label",{staticClass:"w-full col-form-label"},[t._v("Status")]),t._v(" "),e("div",{staticClass:"w-full"},[e("select",{directives:[{name:"model",rawName:"v-model",value:t.activeItem.active,expression:"activeItem.active"}],staticClass:"h-auto py-1 w-full form-control border rounded-lg border-gray-200 px-2",on:{change:function(e){var r=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.activeItem,"active",e.target.multiple?r:r[0])}}},[e("option",{attrs:{value:"1"}},[t._v("Active")]),t._v(" "),e("option",{attrs:{value:"0"}},[t._v("In-Active")])])])])])])])]):t._e(),t._v(" "),e("div",{staticClass:"w-full"},[e("div",{staticClass:"card flex-fill"},[e("div",{staticClass:"card-body"},[e("button",{staticClass:"bg-purple-600 px-4 py-2 text-sm text-white",attrs:{value:"Save"},on:{click:t.submit}},[t._v("Save")])])])])])};function a(t){return(a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function n(){/*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */n=function(){return t};var t={},e=Object.prototype,r=e.hasOwnProperty,i=Object.defineProperty||function(t,e,r){t[e]=r.value},o="function"==typeof Symbol?Symbol:{},s=o.iterator||"@@iterator",l=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function u(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{u({},"")}catch(t){u=function(t,e,r){return t[e]=r}}function f(t,e,r,a){var n=e&&e.prototype instanceof d?e:d,o=Object.create(n.prototype),s=new S(a||[]);return i(o,"_invoke",{value:I(t,r,s)}),o}function p(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=f;var v={};function d(){}function h(){}function m(){}var y={};u(y,s,(function(){return this}));var g=Object.getPrototypeOf,w=g&&g(g(P([])));w&&w!==e&&r.call(w,s)&&(y=w);var _=m.prototype=d.prototype=Object.create(y);function b(t){["next","throw","return"].forEach((function(e){u(t,e,(function(t){return this._invoke(e,t)}))}))}function x(t,e){var n;i(this,"_invoke",{value:function(i,o){function s(){return new e((function(n,s){!function i(n,o,s,l){var c=p(t[n],t,o);if("throw"!==c.type){var u=c.arg,f=u.value;return f&&"object"==a(f)&&r.call(f,"__await")?e.resolve(f.__await).then((function(t){i("next",t,s,l)}),(function(t){i("throw",t,s,l)})):e.resolve(f).then((function(t){u.value=t,s(u)}),(function(t){return i("throw",t,s,l)}))}l(c.arg)}(i,o,n,s)}))}return n=n?n.then(s,s):s()}})}function I(t,e,r){var i="suspendedStart";return function(a,n){if("executing"===i)throw new Error("Generator is already running");if("completed"===i){if("throw"===a)throw n;return O()}for(r.method=a,r.arg=n;;){var o=r.delegate;if(o){var s=C(o,r);if(s){if(s===v)continue;return s}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===i)throw i="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);i="executing";var l=p(t,e,r);if("normal"===l.type){if(i=r.done?"completed":"suspendedYield",l.arg===v)continue;return{value:l.arg,done:r.done}}"throw"===l.type&&(i="completed",r.method="throw",r.arg=l.arg)}}}function C(t,e){var r=t.iterator[e.method];if(void 0===r){if(e.delegate=null,"throw"===e.method){if(t.iterator.return&&(e.method="return",e.arg=void 0,C(t,e),"throw"===e.method))return v;e.method="throw",e.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}var i=p(r,t.iterator,e.arg);if("throw"===i.type)return e.method="throw",e.arg=i.arg,e.delegate=null,v;var a=i.arg;return a?a.done?(e[t.resultName]=a.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=void 0),e.delegate=null,v):a:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,v)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function E(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function S(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function P(t){if(t){var e=t[s];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var i=-1,a=function e(){for(;++i<t.length;)if(r.call(t,i))return e.value=t[i],e.done=!1,e;return e.value=void 0,e.done=!0,e};return a.next=a}}return{next:O}}function O(){return{value:void 0,done:!0}}return h.prototype=m,i(_,"constructor",{value:m,configurable:!0}),i(m,"constructor",{value:h,configurable:!0}),h.displayName=u(m,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===h||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,m):(t.__proto__=m,u(t,c,"GeneratorFunction")),t.prototype=Object.create(_),t},t.awrap=function(t){return{__await:t}},b(x.prototype),u(x.prototype,l,(function(){return this})),t.AsyncIterator=x,t.async=function(e,r,i,a,n){void 0===n&&(n=Promise);var o=new x(f(e,r,i,a),n);return t.isGeneratorFunction(r)?o:o.next().then((function(t){return t.done?t.value:o.next()}))},b(_),u(_,c,"Generator"),u(_,s,(function(){return this})),u(_,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=Object(t),r=[];for(var i in e)r.push(i);return r.reverse(),function t(){for(;r.length;){var i=r.pop();if(i in e)return t.value=i,t.done=!1,t}return t.done=!0,t}},t.values=P,S.prototype={constructor:S,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(E),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function i(r,i){return o.type="throw",o.arg=t,e.next=r,i&&(e.method="next",e.arg=void 0),!!i}for(var a=this.tryEntries.length-1;a>=0;--a){var n=this.tryEntries[a],o=n.completion;if("root"===n.tryLoc)return i("end");if(n.tryLoc<=this.prev){var s=r.call(n,"catchLoc"),l=r.call(n,"finallyLoc");if(s&&l){if(this.prev<n.catchLoc)return i(n.catchLoc,!0);if(this.prev<n.finallyLoc)return i(n.finallyLoc)}else if(s){if(this.prev<n.catchLoc)return i(n.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<n.finallyLoc)return i(n.finallyLoc)}}}},abrupt:function(t,e){for(var i=this.tryEntries.length-1;i>=0;--i){var a=this.tryEntries[i];if(a.tryLoc<=this.prev&&r.call(a,"finallyLoc")&&this.prev<a.finallyLoc){var n=a;break}}n&&("break"===t||"continue"===t)&&n.tryLoc<=e&&e<=n.finallyLoc&&(n=null);var o=n?n.completion:{};return o.type=t,o.arg=e,n?(this.method="next",this.next=n.finallyLoc,v):this.complete(o)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),v},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),E(r),v}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var i=r.completion;if("throw"===i.type){var a=i.arg;E(r)}return a}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:P(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),v}},t}function o(t,e,r,i,a,n,o){try{var s=t[n](o),l=s.value}catch(t){return void r(t)}s.done?e(l):Promise.resolve(l).then(i,a)}function s(t){return function(){var e=this,r=arguments;return new Promise((function(i,a){var n=t.apply(e,r);function s(t){o(n,i,a,s,l,"next",t)}function l(t){o(n,i,a,s,l,"throw",t)}s(void 0)}))}}i._withStripped=!0;var l,c,u,f=r(16).default,p={computed:{},data:function(){return{pending:!1,tabs:[{title:"Info",code:"info"},{title:"Pictures",code:"pictures"},{title:"Activities",code:"activities"}],currentTab:"info",file:null,activeItem:{id:0,first_name:"",last_name:"",email:"",phone:"",password:"",files:[]},showList:!0}},props:["site_url","user","lang","role_id"],mounted:function(){this.user&&(this.activeItem=this.user)},methods:(l={addTask:function(){},addFile:function(){return this.showList=!1,this.activeItem.files.push({}),this.showList=!0,this},filterFiles:function(){return this.activeItem.files=this.activeItem.files.filter((function(t){return t})),this},pushToFiles:function(t,e){return this.activeItem.files.push(e),this},setTab:function(t){return this.currentTab=t,this},__:function(t){return(t.charAt(0).toUpperCase()+t.slice(1)).replace("_"," ")},submit:function(){var t=this;if(this.pending)return null;this.pending=!0;var e=new URLSearchParams([]),r=this.activeItem.id?"update":"create";e.append("type","User."+r),this.activeItem.id&&e.append("params[user][id]",this.activeItem.id),e.append("params[user][first_name]",this.activeItem.first_name?this.activeItem.first_name:""),e.append("params[user][last_name]",this.activeItem.last_name?this.activeItem.last_name:""),e.append("params[user][password]",this.activeItem.password?this.activeItem.password:""),e.append("params[user][phone]",this.activeItem.phone?this.activeItem.phone:""),e.append("params[user][email]",this.activeItem.email?this.activeItem.email:""),e.append("params[user][role_id]",this.activeItem.role_id?this.activeItem.role_id:this.role_id),e.append("params[user][active]",this.activeItem.active?this.activeItem.active:0),e.append("params[user][profile_image]",this.activeItem.file?this.activeItem.file:this.activeItem.profile_image),this.handleRequest(e,"/api/"+r).then((function(e){t.$alert(e.result),e.reload&&window.location.reload(),t.pending=!1}))},handleRequest:function(t){var e=arguments;return s(n().mark((function r(){var i;return n().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return i=e.length>1&&void 0!==e[1]?e[1]:"/",r.next=3,f.post(i,t.toString()).then((function(t){return t.data}));case 3:return r.abrupt("return",r.sent);case 4:case"end":return r.stop()}}),r)})))()}},c="__",u=function(t){return this.$parent.__(t)},c in l?Object.defineProperty(l,c,{value:u,enumerable:!0,configurable:!0,writable:!0}):l[c]=u,l)},v=r(31),d=Object(v.a)(p,i,[function(){var t=this._self._c;return t("div",{staticClass:"card-header"},[t("h4",{staticClass:"card-title mb-0"},[this._v("Basic Information")])])},function(){var t=this._self._c;return t("div",{staticClass:"card-header"},[t("h4",{staticClass:"card-title mb-0"},[this._v("Assigned info")])])}],!1,null,null,null);e.default=d.exports}}]);