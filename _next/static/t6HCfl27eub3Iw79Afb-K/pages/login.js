(window.webpackJsonp=window.webpackJsonp||[]).push([[12],{"3niX":function(e,t,s){"use strict";t.__esModule=!0,t.flush=function(){var e=i.cssRules();return i.flush(),e},t.default=void 0;var n,r=s("q1tI");var i=new(((n=s("SevZ"))&&n.__esModule?n:{default:n}).default),o=function(e){var t,s;function n(t){var s;return(s=e.call(this,t)||this).prevProps={},s}s=e,(t=n).prototype=Object.create(s.prototype),t.prototype.constructor=t,t.__proto__=s,n.dynamic=function(e){return e.map((function(e){var t=e[0],s=e[1];return i.computeId(t,s)})).join(" ")};var r=n.prototype;return r.shouldComponentUpdate=function(e){return this.props.id!==e.id||String(this.props.dynamic)!==String(e.dynamic)},r.componentWillUnmount=function(){i.remove(this.props)},r.render=function(){return this.shouldComponentUpdate(this.prevProps)&&(this.prevProps.id&&i.remove(this.prevProps),i.add(this.props),this.prevProps=this.props),null},n}(r.Component);t.default=o},"9kyW":function(e,t,s){"use strict";e.exports=function(e){for(var t=5381,s=e.length;s;)t=33*t^e.charCodeAt(--s);return t>>>0}},EKK9:function(e,t,s){"use strict";var n=s("ANjH"),r={loged:!1},i=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:r,t=arguments.length>1?arguments[1]:void 0;return"LOGIN"===t.type&&(e.loged=t.data.status),e},o=Object(n.b)(i);t.a=o},"HaE+":function(e,t,s){"use strict";function n(e,t,s,n,r,i,o){try{var a=e[i](o),l=a.value}catch(c){return void s(c)}a.done?t(l):Promise.resolve(l).then(n,r)}function r(e){return function(){var t=this,s=arguments;return new Promise((function(r,i){var o=e.apply(t,s);function a(e){n(o,r,i,a,l,"next",e)}function l(e){n(o,r,i,a,l,"throw",e)}a(void 0)}))}}s.d(t,"a",(function(){return r}))},MX0m:function(e,t,s){e.exports=s("3niX")},O2ls:function(e,t,s){"use strict";s.r(t);var n=s("o0o1"),r=s.n(n),i=s("HaE+"),o=s("MX0m"),a=s.n(o),l=s("q1tI"),c=s.n(l),u=s("8Kt/"),h=s.n(u),d=s("nOHt"),p=s("YFqc"),m=s.n(p),f=s("vDqi"),v=s.n(f),_=s("/MKj"),g=(s("hiJD"),s("EKK9"),c.a.createElement);t.default=Object(_.b)((function(e){return{loginData:e}}))((function(e){console.log(e);var t=Object(l.useState)({}),s=(t[0],t[1]),n=Object(l.useState)(!1),o=n[0],u=n[1],p=Object(l.useState)(!1),f=p[0],_=p[1],S=Object(l.useState)(!1),y=S[0],x=S[1],j=Object(d.useRouter)();function b(){return(b=Object(i.a)(r.a.mark((function e(t){var n,i,o,a,l;return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.preventDefault(),_(!0),n=t.target,i=n.user.value,o=n.pass.value,e.prev=5,e.next=8,v.a.post("https://app.preposisi.com/v1/app/login",{email:i,password:o});case 8:a=e.sent,l=a.data,s(a.data),l.status_code?(console.log("berhsil"),localStorage.setItem("login-state",JSON.stringify(l)),j.push("/")):(console.log("gagal login"),u(!0),_(!1),localStorage.setItem("login-state",JSON.stringify(l))),e.next=19;break;case 14:e.prev=14,e.t0=e.catch(5),console.log(e.t0),u(!0),_(!1);case 19:case"end":return e.stop()}}),e,null,[[5,14]])})))).apply(this,arguments)}return y&&j.push("/profile"),Object(l.useEffect)((function(){var e=JSON.parse(localStorage.getItem("login-state"));e&&x(e.status_code)}),[]),g(c.a.Fragment,null,g(h.a,null,g("title",{className:"jsx-4292405320"},"Login"),g("script",{src:"/assets/js/form.js",className:"jsx-4292405320"})),g("nav",{className:"jsx-4292405320 navbar navbar-expand-lg my-navbar"},g("div",{className:"jsx-4292405320 container navbar-container justify-content-start"},g(m.a,{href:"/"},g("a",{className:"jsx-4292405320 navbar-brand"},g("svg",{xmlns:"http://www.w3.org/2000/svg",width:"18",height:"18",viewBox:"0 0 448 512",className:"jsx-4292405320"},g("path",{fill:"#fff",d:"M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z",className:"jsx-4292405320"})))),g("span",{style:{color:"#fff"},className:"jsx-4292405320 navbar-title"},"Login"))),g("section",{className:"jsx-4292405320 app-container m-auto"},g("div",{style:{height:"100vh"},className:"jsx-4292405320 content pt-4"},f?"loding...":g(c.a.Fragment,null,g("h5",{className:"jsx-4292405320 content-label pt-1"},"Masuk ke Akun Anda"),o?g("p",{className:"jsx-4292405320 alert alert-danger"},"Username or password wrong"):null,g("form",{action:"",method:"post",onSubmit:function(e){return b.apply(this,arguments)},className:"jsx-4292405320 pt-3 auth-form"},g("div",{className:"jsx-4292405320 form-group"},g("input",{type:"text",name:"user",placeholder:"Username or Email",className:"jsx-4292405320 form-control"})),g("div",{className:"jsx-4292405320 form-group password-append-icon"},g("input",{id:"pass",type:"password",name:"pass",placeholder:"Password",className:"jsx-4292405320 form-control"}),g("div",{className:"jsx-4292405320 append-icon"},g("div",{onClick:function(e){return showPass(e)},"data-state":"hidden","data-target":"#pass",className:"jsx-4292405320 eye-overlay"},g("svg",{xmlns:"http://www.w3.org/2000/svg",width:"15",height:"15",viewBox:"0 0 640 512",className:"jsx-4292405320 eye eye-shown active"},g("path",{fill:"#999",d:"M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z",className:"jsx-4292405320"})),g("svg",{xmlns:"http://www.w3.org/2000/svg",width:"15",height:"15",viewBox:"0 0 576 512",className:"jsx-4292405320 eye eye-hidden"},g("path",{fill:"#333",d:"M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z",className:"jsx-4292405320"}))))),g("div",{className:"jsx-4292405320 form-group"},g("button",{type:"submit",className:"jsx-4292405320 btn btn-success btn-block"},"MASUK"))),g("div",{className:"jsx-4292405320 pt-3"},g("p",{className:"jsx-4292405320"},"Belum punya akun? ",g(m.a,{href:"/register"},g("a",{className:"jsx-4292405320"},"Daftar"))))))),g("section",{className:"jsx-4292405320 bottom-navigator-section"},g("div",{className:"jsx-4292405320 bottom-navigator"},g("ul",{className:"jsx-4292405320 bottom-menu"},g("li",{className:"jsx-4292405320"},g(m.a,{href:"/"},g("a",{className:"jsx-4292405320 d-flex flex-column"},g("img",{src:"/assets/icons/home_navbar.svg",alt:"",className:"jsx-4292405320"}),g("span",{className:"jsx-4292405320 bottom-title"},"Home")))),g("li",{className:"jsx-4292405320"},g("a",{href:"",className:"jsx-4292405320 d-flex flex-column"},g("img",{src:"/assets/icons/donasi_navbar.svg",alt:"",className:"jsx-4292405320"}),g("span",{className:"jsx-4292405320 bottom-title"},"Donasi"))),g("li",{className:"jsx-4292405320"},g("a",{href:"",className:"jsx-4292405320 d-flex flex-column"},g("img",{src:"/assets/icons/plus_navbar.svg",alt:"",className:"jsx-4292405320"}),g("span",{className:"jsx-4292405320 bottom-title"},"Galang Dana"))),g("li",{className:"jsx-4292405320"},g("a",{href:"",className:"jsx-4292405320 d-flex flex-column"},g("img",{src:"/assets/icons/inbox_navbar.svg",alt:"",className:"jsx-4292405320"}),g("span",{className:"jsx-4292405320 bottom-title"},"Inbox"))),g("li",{className:"jsx-4292405320"},g(m.a,{href:y?"/profile":"/login"},g("a",{className:"jsx-4292405320 d-flex flex-column active"},g("img",{src:"/assets/icons/account_navbar_2.svg",alt:"",className:"jsx-4292405320"}),g("span",{className:"jsx-4292405320 bottom-title"},"Account"))))))),g(a.a,{id:"4292405320"},[".b.jsx-4292405320{border:1px solid tomato;}"]))}))},SevZ:function(e,t,s){"use strict";t.__esModule=!0,t.default=void 0;var n=i(s("9kyW")),r=i(s("bVZc"));function i(e){return e&&e.__esModule?e:{default:e}}var o=function(){function e(e){var t=void 0===e?{}:e,s=t.styleSheet,n=void 0===s?null:s,i=t.optimizeForSpeed,o=void 0!==i&&i,a=t.isBrowser,l=void 0===a?"undefined"!==typeof window:a;this._sheet=n||new r.default({name:"styled-jsx",optimizeForSpeed:o}),this._sheet.inject(),n&&"boolean"===typeof o&&(this._sheet.setOptimizeForSpeed(o),this._optimizeForSpeed=this._sheet.isOptimizeForSpeed()),this._isBrowser=l,this._fromServer=void 0,this._indices={},this._instancesCounts={},this.computeId=this.createComputeId(),this.computeSelector=this.createComputeSelector()}var t=e.prototype;return t.add=function(e){var t=this;void 0===this._optimizeForSpeed&&(this._optimizeForSpeed=Array.isArray(e.children),this._sheet.setOptimizeForSpeed(this._optimizeForSpeed),this._optimizeForSpeed=this._sheet.isOptimizeForSpeed()),this._isBrowser&&!this._fromServer&&(this._fromServer=this.selectFromServer(),this._instancesCounts=Object.keys(this._fromServer).reduce((function(e,t){return e[t]=0,e}),{}));var s=this.getIdAndRules(e),n=s.styleId,r=s.rules;if(n in this._instancesCounts)this._instancesCounts[n]+=1;else{var i=r.map((function(e){return t._sheet.insertRule(e)})).filter((function(e){return-1!==e}));this._indices[n]=i,this._instancesCounts[n]=1}},t.remove=function(e){var t=this,s=this.getIdAndRules(e).styleId;if(function(e,t){if(!e)throw new Error("StyleSheetRegistry: "+t+".")}(s in this._instancesCounts,"styleId: `"+s+"` not found"),this._instancesCounts[s]-=1,this._instancesCounts[s]<1){var n=this._fromServer&&this._fromServer[s];n?(n.parentNode.removeChild(n),delete this._fromServer[s]):(this._indices[s].forEach((function(e){return t._sheet.deleteRule(e)})),delete this._indices[s]),delete this._instancesCounts[s]}},t.update=function(e,t){this.add(t),this.remove(e)},t.flush=function(){this._sheet.flush(),this._sheet.inject(),this._fromServer=void 0,this._indices={},this._instancesCounts={},this.computeId=this.createComputeId(),this.computeSelector=this.createComputeSelector()},t.cssRules=function(){var e=this,t=this._fromServer?Object.keys(this._fromServer).map((function(t){return[t,e._fromServer[t]]})):[],s=this._sheet.cssRules();return t.concat(Object.keys(this._indices).map((function(t){return[t,e._indices[t].map((function(e){return s[e].cssText})).join(e._optimizeForSpeed?"":"\n")]})).filter((function(e){return Boolean(e[1])})))},t.createComputeId=function(){var e={};return function(t,s){if(!s)return"jsx-"+t;var r=String(s),i=t+r;return e[i]||(e[i]="jsx-"+(0,n.default)(t+"-"+r)),e[i]}},t.createComputeSelector=function(e){void 0===e&&(e=/__jsx-style-dynamic-selector/g);var t={};return function(s,n){this._isBrowser||(n=n.replace(/\/style/gi,"\\/style"));var r=s+n;return t[r]||(t[r]=n.replace(e,s)),t[r]}},t.getIdAndRules=function(e){var t=this,s=e.children,n=e.dynamic,r=e.id;if(n){var i=this.computeId(r,n);return{styleId:i,rules:Array.isArray(s)?s.map((function(e){return t.computeSelector(i,e)})):[this.computeSelector(i,s)]}}return{styleId:this.computeId(r),rules:Array.isArray(s)?s:[s]}},t.selectFromServer=function(){return Array.prototype.slice.call(document.querySelectorAll('[id^="__jsx-"]')).reduce((function(e,t){return e[t.id.slice(2)]=t,e}),{})},e}();t.default=o},bVZc:function(e,t,s){"use strict";(function(e){function s(e,t){for(var s=0;s<t.length;s++){var n=t[s];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}t.__esModule=!0,t.default=void 0;var n="undefined"!==typeof e&&e.env&&!0,r=function(e){return"[object String]"===Object.prototype.toString.call(e)},i=function(){function e(e){var t=void 0===e?{}:e,s=t.name,i=void 0===s?"stylesheet":s,a=t.optimizeForSpeed,l=void 0===a?n:a,c=t.isBrowser,u=void 0===c?"undefined"!==typeof window:c;o(r(i),"`name` must be a string"),this._name=i,this._deletedRulePlaceholder="#"+i+"-deleted-rule____{}",o("boolean"===typeof l,"`optimizeForSpeed` must be a boolean"),this._optimizeForSpeed=l,this._isBrowser=u,this._serverSheet=void 0,this._tags=[],this._injected=!1,this._rulesCount=0;var h=this._isBrowser&&document.querySelector('meta[property="csp-nonce"]');this._nonce=h?h.getAttribute("content"):null}var t,i,a,l=e.prototype;return l.setOptimizeForSpeed=function(e){o("boolean"===typeof e,"`setOptimizeForSpeed` accepts a boolean"),o(0===this._rulesCount,"optimizeForSpeed cannot be when rules have already been inserted"),this.flush(),this._optimizeForSpeed=e,this.inject()},l.isOptimizeForSpeed=function(){return this._optimizeForSpeed},l.inject=function(){var e=this;if(o(!this._injected,"sheet already injected"),this._injected=!0,this._isBrowser&&this._optimizeForSpeed)return this._tags[0]=this.makeStyleTag(this._name),this._optimizeForSpeed="insertRule"in this.getSheet(),void(this._optimizeForSpeed||(n||console.warn("StyleSheet: optimizeForSpeed mode not supported falling back to standard mode."),this.flush(),this._injected=!0));this._serverSheet={cssRules:[],insertRule:function(t,s){return"number"===typeof s?e._serverSheet.cssRules[s]={cssText:t}:e._serverSheet.cssRules.push({cssText:t}),s},deleteRule:function(t){e._serverSheet.cssRules[t]=null}}},l.getSheetForTag=function(e){if(e.sheet)return e.sheet;for(var t=0;t<document.styleSheets.length;t++)if(document.styleSheets[t].ownerNode===e)return document.styleSheets[t]},l.getSheet=function(){return this.getSheetForTag(this._tags[this._tags.length-1])},l.insertRule=function(e,t){if(o(r(e),"`insertRule` accepts only strings"),!this._isBrowser)return"number"!==typeof t&&(t=this._serverSheet.cssRules.length),this._serverSheet.insertRule(e,t),this._rulesCount++;if(this._optimizeForSpeed){var s=this.getSheet();"number"!==typeof t&&(t=s.cssRules.length);try{s.insertRule(e,t)}catch(a){return n||console.warn("StyleSheet: illegal rule: \n\n"+e+"\n\nSee https://stackoverflow.com/q/20007992 for more info"),-1}}else{var i=this._tags[t];this._tags.push(this.makeStyleTag(this._name,e,i))}return this._rulesCount++},l.replaceRule=function(e,t){if(this._optimizeForSpeed||!this._isBrowser){var s=this._isBrowser?this.getSheet():this._serverSheet;if(t.trim()||(t=this._deletedRulePlaceholder),!s.cssRules[e])return e;s.deleteRule(e);try{s.insertRule(t,e)}catch(i){n||console.warn("StyleSheet: illegal rule: \n\n"+t+"\n\nSee https://stackoverflow.com/q/20007992 for more info"),s.insertRule(this._deletedRulePlaceholder,e)}}else{var r=this._tags[e];o(r,"old rule at index `"+e+"` not found"),r.textContent=t}return e},l.deleteRule=function(e){if(this._isBrowser)if(this._optimizeForSpeed)this.replaceRule(e,"");else{var t=this._tags[e];o(t,"rule at index `"+e+"` not found"),t.parentNode.removeChild(t),this._tags[e]=null}else this._serverSheet.deleteRule(e)},l.flush=function(){this._injected=!1,this._rulesCount=0,this._isBrowser?(this._tags.forEach((function(e){return e&&e.parentNode.removeChild(e)})),this._tags=[]):this._serverSheet.cssRules=[]},l.cssRules=function(){var e=this;return this._isBrowser?this._tags.reduce((function(t,s){return s?t=t.concat(Array.prototype.map.call(e.getSheetForTag(s).cssRules,(function(t){return t.cssText===e._deletedRulePlaceholder?null:t}))):t.push(null),t}),[]):this._serverSheet.cssRules},l.makeStyleTag=function(e,t,s){t&&o(r(t),"makeStyleTag acceps only strings as second parameter");var n=document.createElement("style");this._nonce&&n.setAttribute("nonce",this._nonce),n.type="text/css",n.setAttribute("data-"+e,""),t&&n.appendChild(document.createTextNode(t));var i=document.head||document.getElementsByTagName("head")[0];return s?i.insertBefore(n,s):i.appendChild(n),n},t=e,(i=[{key:"length",get:function(){return this._rulesCount}}])&&s(t.prototype,i),a&&s(t,a),e}();function o(e,t){if(!e)throw new Error("StyleSheet: "+t+".")}t.default=i}).call(this,s("8oxB"))},hiJD:function(e,t,s){"use strict";t.a=function(e){return{type:"LOGIN",data:e}}},u6Hu:function(e,t,s){(window.__NEXT_P=window.__NEXT_P||[]).push(["login.php",function(){return s("O2ls")}])}},[["u6Hu",0,1,2,3,4,5]]]);