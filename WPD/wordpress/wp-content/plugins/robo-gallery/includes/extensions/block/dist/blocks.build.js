!function(e){function t(o){if(n[o])return n[o].exports;var l=n[o]={i:o,l:!1,exports:{}};return e[o].call(l.exports,l,l.exports,t),l.l=!0,l.exports}var n={};t.m=e,t.c=n,t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});n(1)},function(e,t,n){"use strict";var o=n(2),l=(n.n(o),n(3));Object(o.registerBlockType)("robo/block-robo-gallery",l.a)},function(e,t){e.exports=wp.blocks},function(e,t,n){"use strict";n.d(t,"a",function(){return b});var o=n(4),l=(n.n(o),n(5)),r=(n.n(l),n(6)),a=(n.n(r),n(7)),i=n(9),__=wp.i18n.__,c=void 0!=wp.blockEditor&&void 0!=wp.blockEditor.InspectorControls?wp.blockEditor:wp.editor,u=c.InspectorControls,s=c.BlockControls,d=wp.components,p=d.PanelBody,f=d.PanelRow,w=(d.SelectControl,d.Dashicon,d.Toolbar),y=d.Button,m=d.Icon;d.Tooltip;window.roboGalleryList=[],window.roboGalleryLoad=!1,window.roboGalleryLoading=!1,window.roboGalleryLoadedCallBack=[];var b={title:__("Robo Gallery"),icon:{background:"#2c8ded",foreground:"#fff",src:"format-gallery"},category:"common",keywords:[__("gallery"),__("photo image gallery block"),__("robo gallery ")],attributes:{galleryid:{type:"string",default:0},forseReload:{type:"bool",default:!1},loaded:{type:"bool",default:!1}},edit:function(e){function t(){var e="post-new.php?post_type="+g+"&showDialog=1";window.open(e,"_blank")}var n=e.attributes,o=e.setAttributes,l=e.className,r=e.isSelected,c=n.galleryid,d=n.forseReload,b=n.loaded,g="robo_gallery_table",h=function(e){o({galleryid:e})},E=function(){o({forseReload:!1,loaded:!1}),o({forseReload:!1,loaded:!0})},v=function(){o({forseReload:!0,loaded:!1})},_=function(){if(G){var e="post.php?post="+c+"&action=edit";window.open(e,"_blank")}else alert(__("Select Gallery first"))},G=c>0,k=function(e){return e.title+" [ID:"+c+"]"},C=function(){if(G)for(var e=0;e<window.roboGalleryList.length;e++)if(window.roboGalleryList[e].id==c)return k(window.roboGalleryList[e]);return""},L=function(){return!r&&!G&&wp.element.createElement(y,{isSecondary:!0,isLarge:!0},__("Select Gallery")," ")},R=function(){return!r&&G&&wp.element.createElement(y,{isSecondary:!0,isLarge:!0},__("Select Other Gallery")," ")},O=function(){return wp.element.createElement(y,{isSecondary:!0,isLarge:!0,onClick:t}," ",__("Create Gallery")," ")},S=function(){return wp.element.createElement("div",{className:"robo-gallery_block_buttons"},wp.element.createElement(L,null),wp.element.createElement(R,null),wp.element.createElement(O,null))},j=function(){return!r&&!G&&wp.element.createElement("p",null,__("Click to select Robo gallery from list or create new Robo gallery item"))},P=function(){return G&&wp.element.createElement("p",null,__("Selected Robo Gallery"),": ",wp.element.createElement("strong",null,C()))},x=function(){return r&&!G&&wp.element.createElement("p",null,"OR")},T=function(){return wp.element.createElement("div",{className:"robo-gallery_block_div"},wp.element.createElement(j,null),wp.element.createElement(P,null),wp.element.createElement(x,null),wp.element.createElement(S,null))},I=function(){return r&&wp.element.createElement(i.a,{galleryid:c,forseReload:d,hideLabel:!0,loaded:b,onGalleryIdChange:h})},D=function(){return G&&wp.element.createElement(y,{className:"robo-gallery_icon",label:__("Edit gallery"),icon:"edit",onClick:_})},B=function(){return r&&wp.element.createElement(s,null,wp.element.createElement(w,null,wp.element.createElement(D,null),wp.element.createElement(y,{className:"robo-gallery_icon",label:__("Add gallery"),icon:"plus",onClick:t}),wp.element.createElement(y,{className:"robo-gallery_icon robo-gallery_icon-reload",label:__("Reload galleries"),icon:"update",onClick:v})))},N=function(){return!!r&&wp.element.createElement(u,{key:"inspector"},wp.element.createElement(p,{title:__("Robo Gallery Block Settings"),initialOpen:!0},wp.element.createElement(i.a,{galleryid:c,forseReload:d,loaded:b,onGalleryIdChange:h}),wp.element.createElement(f,null,wp.element.createElement(y,{isLink:!0,onClick:v},__("Refresh Gallery List"))),wp.element.createElement(f,null,G&&wp.element.createElement(y,{isSecondary:!0,isSmall:!0,onClick:_},__("Edit Gallery")),wp.element.createElement(y,{isSecondary:!0,isSmall:!0,onClick:t},__("Create Gallery")))))};return[wp.element.createElement(a.a,{forseReload:d,onDataLoaded:E}),wp.element.createElement(B,null),wp.element.createElement(N,null),wp.element.createElement("div",{className:l},wp.element.createElement("h2",{className:"robo-logo"},wp.element.createElement(m,{size:"25",icon:"format-gallery"})," ",__("Robo Gallery")),wp.element.createElement(I,null),wp.element.createElement(T,null))]},save:function(e){return null}}},function(e,t){},function(e,t){},function(e,t){e.exports=wp.element},function(e,t,n){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function l(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function r(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}var a=n(8),i=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),c=function(e){function t(e){o(this,t);var n=l(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e));return n.handleDataLoaded=n.handleDataLoaded.bind(n),n}return r(t,e),i(t,[{key:"handleDataLoaded",value:function(e){this.props.onDataLoaded(e)}},{key:"readConfig",value:function(e){var t=this;1!=e&&(e=!1),Object(a.a)(e,function(){t.handleDataLoaded(!0)})}},{key:"componentDidMount",value:function(){this.readConfig(!1)}},{key:"componentWillReceiveProps",value:function(e){e.forseReload&&e.forseReload!=this.props.forseReload&&this.readConfig(!0)}},{key:"render",value:function(){return null}}]),t}(React.Component);t.a=c},function(e,t,n){"use strict";var __=wp.i18n.__,o=function(e,t){if(null==e&&(e=!1),window.roboGalleryLoad&&!e)return void t();if(window.roboGalleryLoadedCallBack.push(t),!window.roboGalleryLoading){window.roboGalleryLoading=!0;new Promise(function(e,t){var n=new XMLHttpRequest;n.onreadystatechange=function(){if(4===n.readyState)if(n.status>=200&&n.status<300){var o=JSON.parse(n.responseText);window.roboGalleryList=o,window.roboGalleryList.unshift({id:0,title:__("Select gallery")}),e(!0)}else window.roboGalleryLoad=!1,window.roboGalleryLoadError=!0,t({status:n.status,statusText:n.statusText})};var o=ajaxurl+"?action=robo_gallery_get_gallery_json";n.open("GET",o,!0),n.setRequestHeader("X_REQUESTED_WITH","xmlhttprequest"),n.send()}).then(function(e){window.roboGalleryLoading=!1,window.roboGalleryLoad=!0;for(var t=window.roboGalleryLoadedCallBack.length,n=0;n<t;n++)window.roboGalleryLoadedCallBack[n]();window.roboGalleryLoadedCallBack=[]}).catch(function(e){console.log("Robo GalleryConfig Request is wrong",e)})}};t.a=o},function(e,t,n){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function l(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function r(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}var a=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),i=wp.components.SelectControl,__=wp.i18n.__,c=function(e){function t(e){o(this,t);var n=l(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e));return n.handleGalleryIdChange=n.handleGalleryIdChange.bind(n),n}return r(t,e),a(t,[{key:"handleGalleryIdChange",value:function(e){this.props.onGalleryIdChange(e)}},{key:"render",value:function(){var e=window.roboGalleryList;return wp.element.createElement(i,{label:this.props.hideLabel?"":__("Gallery List"),onChange:this.handleGalleryIdChange,value:this.props.galleryid,options:e.map(function(e){return{label:e.title,value:e.id}})})}}]),t}(React.Component);t.a=c}]);