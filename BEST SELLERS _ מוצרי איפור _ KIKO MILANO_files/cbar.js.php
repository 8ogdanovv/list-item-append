
//<script>

try {
	// prevent multiple load
	if (typeof cbar_scraper_start === 'undefined') {
		if (typeof window.cbar_loaded === 'undefined') {
			window.cbar_loaded = true; 
		} else {
			throw {
				name: "dontsend", 
				message: "cbar_already_loaded", 
				stack: ""
			};
		}
	}


/* Fixing chrome highlighting */
var cbar_version = '1694620252';
var cbar_url = window.location.href;
var cbar_url_en = encodeURIComponent(cbar_url);
var cbar_dynamic_url = 'https://www.barilliance.net/';
var cbar_static_url = 'https://static.barilliance.com/';
var cbar_userimages = 'https://userimages.barilliance.com/';
var cbar_cp_show = false;
var cbar_shortlist_show = false;
var cbar_quiet = false;
var cbar_debug = 1;
var cbar_debug_show = false;
var cbar_startearly = false;
var cbar_md = false;
var cbar_ro = false;
var cbar_force_li = false;
var cbar_cid = '';
var cbar_pid2cid = '';
var cbar_cname = '';
var cbar_c_from_p = false;
var cbar_cat_cids = [];
var cbar_cat_level  = 0;
var cbar_cids_cur = '';
var cbar_cids_p = '';
var cbar_cats_l = [];
var cbar_cats_c = [];
var cbar_lnk = 5;
var cbar_pid = '';
var cbar_masterid = '';
var cbar_platform_id = '';
var cbar_qty = 1;
var cbar_results = null;
var cbar_sid = 0;
var cbar_uid;
var cbar_pic = '';
var cbar_name = '';
var cbar_purl = '';
var cbar_auto_curl = '';
var cbar_auto_cname = '';
var cbar_auto_curl_p = '';
var cbar_catmode = 1;
var cbar_pri = '';
var cbar_is_pur = false;
var cbar_is_checkout = false;
var cbar_pur_pids = [];
var cbar_pur_qtys = [];
var cbar_pur_imgs = [];
var cbar_pur_names = [];
var cbar_pur_urls = [];
var cbar_pur_prices = [];
var cbar_pur_subttls = [];
var cbar_pur_xtr1s = [];
var cbar_pur_xtr2s = [];
var cbar_pur_xtr3s = [];
var cbar_pur_xtr4s = [];
var cbar_pur_add = false;
var cbar_pur_pid_add = '';
var cbar_pur_qty_add = 0;
var cbar_crt = '';
var cbar_crst = '';
var cbar_crtn = '';
var cbar_shp = '';
var cbar_pur_com = false;
var cbar_pur_mode = 0;
var cbar_home = false;
var cbar_4U = false;
var cbar_other = false;
var cbar_brand = false;
var cbar_encode = false; //false means utf-8
var cbar_block_bt = false;
var cbar_cookiedomain = '';
var cbar_user_attributes = {};
var cbar_user_attribute = {};
var cbar_product_attributes = {};
var cbar_del_user_attributes = {};
var cbar_del_product_attributes = {};
var cbar_userinfo = {};
var cbar_numicons1 = 6;
var cbar_numicons2 = 4;
var cbar_pagetype = 'U';
var cbar_log = '';
var cbar_elog = '';
var cbar_logg = '';
var cbar_oos = 2;
var cbar_norecs = null;
var cbar_oos_page = 0;
var cbar_auto_oos = false;
var cbar_fl1 = null;
var cbar_fl1_html = '';
var cbar_ipuid_save = false;
var cbar_ipuid_get = false;
var cbar_extra1 = '';
var cbar_extra2 = '';
var cbar_extra3 = '';
var cbar_xtxt = '';
var cbar_filter_val = '';
var cbar_flow = '';
var cbar_num_widgets = 2;
var cbar_search = '';
var cbar_ctr1 = 0;
var cbar_ctr2 = 0;
var cbar_ctr3 = 0;
var cbar_liX = 1;
var cbar_liP = 1;
var cbar_liL = 1;

var cbar_widget_show = false;
var cbar_widget_to_draw = 0; //1,2,0 = all
var cbar_widget = false;
var cbar_w_template_head = [];
var cbar_w_item_template = [];
var cbar_w_linebreak_template = [];
var cbar_w_iconsperline = [];
var cbar_w_template_bottom = [];
var cbar_w_anchor = [];
var cbar_w_insert_where = []; // 0=after 1=before 2=child 3= overwrite
var cbar_w_title_len = 199;
var cbar_w_scrollbuttons = [];
var cbar_w_numshowicons = [];
var cbar_w_next_html = [];
var cbar_w_prev_html = [];

// internal
var cbar_preview_sid ='';
var cbar_preview_rules = '';
var cbar_preview_variation = '';
var cbar_preview_widgets = '';
var cbar_preview_live = false;
var cbar_actual_rule_ids = [];
var cbar_datajs = 'data.js.php';
var cbar_override_titles = [];
var rule_title_index = [];
var cbar_recstep_titles = [];
//var cbar_new_mode = false;
var cbar_suppress_rules = [];
var cbar_data_params = '';
var cbar_lvt = 0;
var cbar_sess = 0;
var cbar_sess_pv = 0;
var cbar_date = new Date();
var cbar_ban_resizetimeout = 0;
var cbar_ban_scrolltimeout = 0;
var cbar_banners = [];
var cbar_coups = [];
var cbar_e_input = [];
var cbar_e_last = '';
var cbar_e_com = false;
var cbar_e_checkbox = [];
var cbar_cou_input = '';
var cbar_cou_in_cart = false;
var cbar_rules_str = '';
var cbar_popups = [];
var cbar_pop_scrolltimeout = 0;
var cbar_trust_outdiv_css = 'position:absolute';
var cbar_subproducts_attrib = '';
var cbar_zindex = 2000000000; 
var cbar_alreadyrunflag = false; //flag to indicate whether target function has already been run
var cbar_readyBound = false;
var cbar_isReady = false;
var cbar_use_cookies = false;
window.cbar_globals = [];

var cbarApp = {
	appDomain: 'https://app.barilliance.com',
	asyncDatajs: true,
	cartMonitorInitiated: false,
	categoryProductsCache: null,
	clickMonitor: {
		enabled: true,
		fastReport: false,
		groupingStrategy: 'lf',
		hashingConfig: {}	},
	closeButtons: {},
	emailCaptureDebug:{},
	fixReferrer: false,
	gaClickEvents: {},
	gaEvents: {},
	isPageviewCompleted: false,
	isWhiteLable: false,
	maxWidgetSlots: 12,
	monitorPageClicks: false,
	noPageReload: false,
	previewBoxId: 'cbar-prev-msg-div',
	recsAttributes: {},
	ruleVariations: {},
	ruleSuppressed: {},
	var2urlParam: {
		cbar_auto_cname: 'acname',
		cbar_auto_curl: 'acurl',
		cbar_auto_curl_p: 'acurl_p',
		cbar_cid: 'cid',
		cbar_crst: 'crst',
		cbar_crt: 'crt',
		cbar_crtn: 'crtn',
		cbar_elog: 'elo',
		cbar_extra1: 'xtr1',
		cbar_extra2: 'xtr2',
		cbar_extra3: 'xtr3',
		cbar_extra4: 'xtr4',
		cbar_filter_val: 'fltr',
		cbar_log: 'lo',
		cbar_logg: 'logg',
		cbar_masterid: 'master_str',
		cbar_misc: 'misc',
		cbar_name: 'name',
		cbar_oos: 'oos',
		cbar_pic: 'pic',
		cbar_pid2cid: 'pid2cid',
		cbar_platform_id: 'platform_id',
		cbar_pri: 'pri',
		cbar_purl: 'purl',
		cbar_shp: 'shp',
		cbar_subproducts_attrib: 'subattr',
		cbar_xtxt: 'xtxt'
	}
};

/*! Sizzle v1.9.4-pre | (c) 2013 jQuery Foundation, Inc. | jquery.org/license
*/(function(e,t){function n(e,t,n,r){var o,i,u,l,a,c,f,s,h,g;if((t?t.ownerDocument||t:F)!==R&&I(t),t=t||R,n=n||[],!e||"string"!=typeof e)return n;if(1!==(l=t.nodeType)&&9!==l)return[];if($&&!r){if(o=vt.exec(e))if(u=o[1]){if(9===l){if(i=t.getElementById(u),!i||!i.parentNode)return n;if(i.id===u)return n.push(i),n}else if(t.ownerDocument&&(i=t.ownerDocument.getElementById(u))&&O(t,i)&&i.id===u)return n.push(i),n}else{if(o[2])return et.apply(n,t.getElementsByTagName(e)),n;if((u=o[3])&&E.getElementsByClassName&&t.getElementsByClassName)return et.apply(n,t.getElementsByClassName(u)),n}if(E.qsa&&(!q||!q.test(e))){if(s=f=k,h=t,g=9===l&&e,1===l&&"object"!==t.nodeName.toLowerCase()){for(c=p(e),(f=t.getAttribute("id"))?s=f.replace(xt,"\\$&"):t.setAttribute("id",s),s="[id='"+s+"'] ",a=c.length;a--;)c[a]=s+d(c[a]);h=pt.test(e)&&t.parentNode||t,g=c.join(",")}if(g)try{return et.apply(n,h.querySelectorAll(g)),n}catch(m){}finally{f||t.removeAttribute("id")}}}return x(e.replace(ct,"$1"),t,n,r)}function r(){function e(n,r){return t.push(n+=" ")>T.cacheLength&&delete e[t.shift()],e[n]=r}var t=[];return e}function o(e){return e[k]=!0,e}function i(e){var t=R.createElement("div");try{return!!e(t)}catch(n){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function u(e,t){for(var n=e.split("|"),r=e.length;r--;)T.attrHandle[n[r]]=t}function l(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&(~t.sourceIndex||Q)-(~e.sourceIndex||Q);if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function a(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function c(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function f(e){return o(function(t){return t=+t,o(function(n,r){for(var o,i=e([],n.length,t),u=i.length;u--;)n[o=i[u]]&&(n[o]=!(r[o]=n[o]))})})}function s(){}function p(e,t){var r,o,i,u,l,a,c,f=U[e+" "];if(f)return t?0:f.slice(0);for(l=e,a=[],c=T.preFilter;l;){(!r||(o=ft.exec(l)))&&(o&&(l=l.slice(o[0].length)||l),a.push(i=[])),r=!1,(o=st.exec(l))&&(r=o.shift(),i.push({value:r,type:o[0].replace(ct," ")}),l=l.slice(r.length));for(u in T.filter)!(o=mt[u].exec(l))||c[u]&&!(o=c[u](o))||(r=o.shift(),i.push({value:r,type:u,matches:o}),l=l.slice(r.length));if(!r)break}return t?l.length:l?n.error(e):U(e,a).slice(0)}function d(e){for(var t=0,n=e.length,r="";n>t;t++)r+=e[t].value;return r}function h(e,t,n){var r=t.dir,o=n&&"parentNode"===r,i=j++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||o)return e(t,n,i)}:function(t,n,u){var l,a,c,f=z+" "+i;if(u){for(;t=t[r];)if((1===t.nodeType||o)&&e(t,n,u))return!0}else for(;t=t[r];)if(1===t.nodeType||o)if(c=t[k]||(t[k]={}),(a=c[r])&&a[0]===f){if((l=a[1])===!0||l===w)return l===!0}else if(a=c[r]=[f],a[1]=e(t,n,u)||w,a[1]===!0)return!0}}function g(e){return e.length>1?function(t,n,r){for(var o=e.length;o--;)if(!e[o](t,n,r))return!1;return!0}:e[0]}function m(e,t,n,r,o){for(var i,u=[],l=0,a=e.length,c=null!=t;a>l;l++)(i=e[l])&&(!n||n(i,r,o))&&(u.push(i),c&&t.push(l));return u}function y(e,t,n,r,i,u){return r&&!r[k]&&(r=y(r)),i&&!i[k]&&(i=y(i,u)),o(function(o,u,l,a){var c,f,s,p=[],d=[],h=u.length,g=o||b(t||"*",l.nodeType?[l]:l,[]),y=!e||!o&&t?g:m(g,p,e,l,a),v=n?i||(o?e:h||r)?[]:u:y;if(n&&n(y,v,l,a),r)for(c=m(v,d),r(c,[],l,a),f=c.length;f--;)(s=c[f])&&(v[d[f]]=!(y[d[f]]=s));if(o){if(i||e){if(i){for(c=[],f=v.length;f--;)(s=v[f])&&c.push(y[f]=s);i(null,v=[],c,a)}for(f=v.length;f--;)(s=v[f])&&(c=i?nt.call(o,s):p[f])>-1&&(o[c]=!(u[c]=s))}}else v=m(v===u?v.splice(h,v.length):v),i?i(null,u,v,a):et.apply(u,v)})}function v(e){for(var t,n,r,o=e.length,i=T.relative[e[0].type],u=i||T.relative[" "],l=i?1:0,a=h(function(e){return e===t},u,!0),c=h(function(e){return nt.call(t,e)>-1},u,!0),f=[function(e,n,r){return!i&&(r||n!==L)||((t=n).nodeType?a(e,n,r):c(e,n,r))}];o>l;l++)if(n=T.relative[e[l].type])f=[h(g(f),n)];else{if(n=T.filter[e[l].type].apply(null,e[l].matches),n[k]){for(r=++l;o>r&&!T.relative[e[r].type];r++);return y(l>1&&g(f),l>1&&d(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(ct,"$1"),n,r>l&&v(e.slice(l,r)),o>r&&v(e=e.slice(r)),o>r&&d(e))}f.push(n)}return g(f)}function N(e,t){var r=0,i=t.length>0,u=e.length>0,l=function(o,l,a,c,f){var s,p,d,h=[],g=0,y="0",v=o&&[],N=null!=f,b=L,x=o||u&&T.find.TAG("*",f&&l.parentNode||l),C=z+=null==b?1:Math.random()||.1;for(N&&(L=l!==R&&l,w=r);null!=(s=x[y]);y++){if(u&&s){for(p=0;d=e[p++];)if(d(s,l,a)){c.push(s);break}N&&(z=C,w=++r)}i&&((s=!d&&s)&&g--,o&&v.push(s))}if(g+=y,i&&y!==g){for(p=0;d=t[p++];)d(v,h,l,a);if(o){if(g>0)for(;y--;)v[y]||h[y]||(h[y]=Z.call(c));h=m(h)}et.apply(c,h),N&&!o&&h.length>0&&g+t.length>1&&n.uniqueSort(c)}return N&&(z=C,L=b),v};return i?o(l):l}function b(e,t,r){for(var o=0,i=t.length;i>o;o++)n(e,t[o],r);return r}function x(e,t,n,r){var o,i,u,l,a,c=p(e);if(!r&&1===c.length){if(i=c[0]=c[0].slice(0),i.length>2&&"ID"===(u=i[0]).type&&E.getById&&9===t.nodeType&&$&&T.relative[i[1].type]){if(t=(T.find.ID(u.matches[0].replace(Ct,Et),t)||[])[0],!t)return n;e=e.slice(i.shift().value.length)}for(o=mt.needsContext.test(e)?0:i.length;o--&&(u=i[o],!T.relative[l=u.type]);)if((a=T.find[l])&&(r=a(u.matches[0].replace(Ct,Et),pt.test(i[0].type)&&t.parentNode||t))){if(i.splice(o,1),e=r.length&&d(i),!e)return et.apply(n,r),n;break}}return D(e,c)(r,t,!$,n,pt.test(e)),n}var C,E,w,T,A,S,D,L,B,I,R,P,$,q,H,M,O,k="sizzle"+-new Date,F=e.document,z=0,j=0,G=r(),U=r(),V=r(),X=!1,J=function(e,t){return e===t?(X=!0,0):0},K=typeof t,Q=1<<31,W={}.hasOwnProperty,Y=[],Z=Y.pop,_=Y.push,et=Y.push,tt=Y.slice,nt=Y.indexOf||function(e){for(var t=0,n=this.length;n>t;t++)if(this[t]===e)return t;return-1},rt="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",ot="[\\x20\\t\\r\\n\\f]",it="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",ut=it.replace("w","w#"),lt="\\["+ot+"*("+it+")"+ot+"*(?:([*^$|!~]?=)"+ot+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+ut+")|)|)"+ot+"*\\]",at=":("+it+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+lt.replace(3,8)+")*)|.*)\\)|)",ct=RegExp("^"+ot+"+|((?:^|[^\\\\])(?:\\\\.)*)"+ot+"+$","g"),ft=RegExp("^"+ot+"*,"+ot+"*"),st=RegExp("^"+ot+"*([>+~]|"+ot+")"+ot+"*"),pt=RegExp(ot+"*[+~]"),dt=RegExp("="+ot+"*([^\\]'\"]*)"+ot+"*\\]","g"),ht=RegExp(at),gt=RegExp("^"+ut+"$"),mt={ID:RegExp("^#("+it+")"),CLASS:RegExp("^\\.("+it+")"),TAG:RegExp("^("+it.replace("w","w*")+")"),ATTR:RegExp("^"+lt),PSEUDO:RegExp("^"+at),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+ot+"*(even|odd|(([+-]|)(\\d*)n|)"+ot+"*(?:([+-]|)"+ot+"*(\\d+)|))"+ot+"*\\)|)","i"),bool:RegExp("^(?:"+rt+")$","i"),needsContext:RegExp("^"+ot+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+ot+"*((?:-\\d)?\\d*)"+ot+"*\\)|)(?=[^-]|$)","i")},yt=/^[^{]+\{\s*\[native \w/,vt=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,Nt=/^(?:input|select|textarea|button)$/i,bt=/^h\d$/i,xt=/'|\\/g,Ct=RegExp("\\\\([\\da-f]{1,6}"+ot+"?|("+ot+")|.)","ig"),Et=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:0>r?String.fromCharCode(r+65536):String.fromCharCode(55296|r>>10,56320|1023&r)};try{et.apply(Y=tt.call(F.childNodes),F.childNodes),Y[F.childNodes.length].nodeType}catch(wt){et={apply:Y.length?function(e,t){_.apply(e,tt.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}S=n.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},E=n.support={},I=n.setDocument=function(e){var n=e?e.ownerDocument||e:F,r=n.defaultView;return n!==R&&9===n.nodeType&&n.documentElement?(R=n,P=n.documentElement,$=!S(n),r&&r.attachEvent&&r!==r.top&&r.attachEvent("onbeforeunload",function(){I()}),E.attributes=i(function(e){return e.className="i",!e.getAttribute("className")}),E.getElementsByTagName=i(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),E.getElementsByClassName=i(function(e){return e.innerHTML="<div class='a'></div><div class='a i'></div>",e.firstChild.className="i",2===e.getElementsByClassName("i").length}),E.getById=i(function(e){return P.appendChild(e).id=k,!n.getElementsByName||!n.getElementsByName(k).length}),E.getById?(T.find.ID=function(e,t){if(typeof t.getElementById!==K&&$){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){return e.getAttribute("id")===t}}):(delete T.find.ID,T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){var n=typeof e.getAttributeNode!==K&&e.getAttributeNode("id");return n&&n.value===t}}),T.find.TAG=E.getElementsByTagName?function(e,n){return typeof n.getElementsByTagName!==K?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],o=0,i=t.getElementsByTagName(e);if("*"===e){for(;n=i[o++];)1===n.nodeType&&r.push(n);return r}return i},T.find.CLASS=E.getElementsByClassName&&function(e,n){return typeof n.getElementsByClassName!==K&&$?n.getElementsByClassName(e):t},H=[],q=[],(E.qsa=yt.test(n.querySelectorAll))&&(i(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||q.push("\\["+ot+"*(?:value|"+rt+")"),e.querySelectorAll(":checked").length||q.push(":checked")}),i(function(e){var t=n.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("t",""),e.querySelectorAll("[t^='']").length&&q.push("[*^$]="+ot+"*(?:''|\"\")"),e.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),q.push(",.*:")})),(E.matchesSelector=yt.test(M=P.webkitMatchesSelector||P.mozMatchesSelector||P.oMatchesSelector||P.msMatchesSelector))&&i(function(e){E.disconnectedMatch=M.call(e,"div"),M.call(e,"[s!='']:x"),H.push("!=",at)}),q=q.length&&RegExp(q.join("|")),H=H.length&&RegExp(H.join("|")),O=yt.test(P.contains)||P.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},J=P.compareDocumentPosition?function(e,t){if(e===t)return X=!0,0;var r=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t);return r?1&r||!E.sortDetached&&t.compareDocumentPosition(e)===r?e===n||O(F,e)?-1:t===n||O(F,t)?1:B?nt.call(B,e)-nt.call(B,t):0:4&r?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,o=0,i=e.parentNode,u=t.parentNode,a=[e],c=[t];if(e===t)return X=!0,0;if(!i||!u)return e===n?-1:t===n?1:i?-1:u?1:B?nt.call(B,e)-nt.call(B,t):0;if(i===u)return l(e,t);for(r=e;r=r.parentNode;)a.unshift(r);for(r=t;r=r.parentNode;)c.unshift(r);for(;a[o]===c[o];)o++;return o?l(a[o],c[o]):a[o]===F?-1:c[o]===F?1:0},n):R},n.matches=function(e,t){return n(e,null,null,t)},n.matchesSelector=function(e,t){if((e.ownerDocument||e)!==R&&I(e),t=t.replace(dt,"='$1']"),!(!E.matchesSelector||!$||H&&H.test(t)||q&&q.test(t)))try{var r=M.call(e,t);if(r||E.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(o){}return n(t,R,null,[e]).length>0},n.contains=function(e,t){return(e.ownerDocument||e)!==R&&I(e),O(e,t)},n.attr=function(e,n){(e.ownerDocument||e)!==R&&I(e);var r=T.attrHandle[n.toLowerCase()],o=r&&W.call(T.attrHandle,n.toLowerCase())?r(e,n,!$):t;return o===t?E.attributes||!$?e.getAttribute(n):(o=e.getAttributeNode(n))&&o.specified?o.value:null:o},n.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},n.uniqueSort=function(e){var t,n=[],r=0,o=0;if(X=!E.detectDuplicates,B=!E.sortStable&&e.slice(0),e.sort(J),X){for(;t=e[o++];)t===e[o]&&(r=n.push(o));for(;r--;)e.splice(n[r],1)}return e},A=n.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=A(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r];r++)n+=A(t);return n},T=n.selectors={cacheLength:50,createPseudo:o,match:mt,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Ct,Et),e[3]=(e[4]||e[5]||"").replace(Ct,Et),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||n.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&n.error(e[0]),e},PSEUDO:function(e){var n,r=!e[5]&&e[2];return mt.CHILD.test(e[0])?null:(e[3]&&e[4]!==t?e[2]=e[4]:r&&ht.test(r)&&(n=p(r,!0))&&(n=r.indexOf(")",r.length-n)-r.length)&&(e[0]=e[0].slice(0,n),e[2]=r.slice(0,n)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Ct,Et).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=G[e+" "];return t||(t=RegExp("(^|"+ot+")"+e+"("+ot+"|$)"))&&G(e,function(e){return t.test("string"==typeof e.className&&e.className||typeof e.getAttribute!==K&&e.getAttribute("class")||"")})},ATTR:function(e,t,r){return function(o){var i=n.attr(o,e);return null==i?"!="===t:t?(i+="","="===t?i===r:"!="===t?i!==r:"^="===t?r&&0===i.indexOf(r):"*="===t?r&&i.indexOf(r)>-1:"$="===t?r&&i.slice(-r.length)===r:"~="===t?(" "+i+" ").indexOf(r)>-1:"|="===t?i===r||i.slice(0,r.length+1)===r+"-":!1):!0}},CHILD:function(e,t,n,r,o){var i="nth"!==e.slice(0,3),u="last"!==e.slice(-4),l="of-type"===t;return 1===r&&0===o?function(e){return!!e.parentNode}:function(t,n,a){var c,f,s,p,d,h,g=i!==u?"nextSibling":"previousSibling",m=t.parentNode,y=l&&t.nodeName.toLowerCase(),v=!a&&!l;if(m){if(i){for(;g;){for(s=t;s=s[g];)if(l?s.nodeName.toLowerCase()===y:1===s.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[u?m.firstChild:m.lastChild],u&&v){for(f=m[k]||(m[k]={}),c=f[e]||[],d=c[0]===z&&c[1],p=c[0]===z&&c[2],s=d&&m.childNodes[d];s=++d&&s&&s[g]||(p=d=0)||h.pop();)if(1===s.nodeType&&++p&&s===t){f[e]=[z,d,p];break}}else if(v&&(c=(t[k]||(t[k]={}))[e])&&c[0]===z)p=c[1];else for(;(s=++d&&s&&s[g]||(p=d=0)||h.pop())&&((l?s.nodeName.toLowerCase()!==y:1!==s.nodeType)||!++p||(v&&((s[k]||(s[k]={}))[e]=[z,p]),s!==t)););return p-=o,p===r||0===p%r&&p/r>=0}}},PSEUDO:function(e,t){var r,i=T.pseudos[e]||T.setFilters[e.toLowerCase()]||n.error("unsupported pseudo: "+e);return i[k]?i(t):i.length>1?(r=[e,e,"",t],T.setFilters.hasOwnProperty(e.toLowerCase())?o(function(e,n){for(var r,o=i(e,t),u=o.length;u--;)r=nt.call(e,o[u]),e[r]=!(n[r]=o[u])}):function(e){return i(e,0,r)}):i}},pseudos:{not:o(function(e){var t=[],n=[],r=D(e.replace(ct,"$1"));return r[k]?o(function(e,t,n,o){for(var i,u=r(e,null,o,[]),l=e.length;l--;)(i=u[l])&&(e[l]=!(t[l]=i))}):function(e,o,i){return t[0]=e,r(t,null,i,n),!n.pop()}}),has:o(function(e){return function(t){return n(e,t).length>0}}),contains:o(function(e){return function(t){return(t.textContent||t.innerText||A(t)).indexOf(e)>-1}}),lang:o(function(e){return gt.test(e||"")||n.error("unsupported lang: "+e),e=e.replace(Ct,Et).toLowerCase(),function(t){var n;do if(n=$?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===P},focus:function(e){return e===R.activeElement&&(!R.hasFocus||R.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!T.pseudos.empty(e)},header:function(e){return bt.test(e.nodeName)},input:function(e){return Nt.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:f(function(){return[0]}),last:f(function(e,t){return[t-1]}),eq:f(function(e,t,n){return[0>n?n+t:n]}),even:f(function(e,t){for(var n=0;t>n;n+=2)e.push(n);return e}),odd:f(function(e,t){for(var n=1;t>n;n+=2)e.push(n);return e}),lt:f(function(e,t,n){for(var r=0>n?n+t:n;--r>=0;)e.push(r);return e}),gt:f(function(e,t,n){for(var r=0>n?n+t:n;t>++r;)e.push(r);return e})}},T.pseudos.nth=T.pseudos.eq;for(C in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})T.pseudos[C]=a(C);for(C in{submit:!0,reset:!0})T.pseudos[C]=c(C);s.prototype=T.filters=T.pseudos,T.setFilters=new s,D=n.compile=function(e,t){var n,r=[],o=[],i=V[e+" "];if(!i){for(t||(t=p(e)),n=t.length;n--;)i=v(t[n]),i[k]?r.push(i):o.push(i);i=V(e,N(o,r))}return i},E.sortStable=k.split("").sort(J).join("")===k,E.detectDuplicates=X,I(),E.sortDetached=i(function(e){return 1&e.compareDocumentPosition(R.createElement("div"))}),i(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||u("type|href|height|width",function(e,n,r){return r?t:e.getAttribute(n,"type"===n.toLowerCase()?1:2)}),E.attributes&&i(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||u("value",function(e,n,r){return r||"input"!==e.nodeName.toLowerCase()?t:e.defaultValue}),i(function(e){return null==e.getAttribute("disabled")})||u(rt,function(e,n,r){var o;return r?t:(o=e.getAttributeNode(n))&&o.specified?o.value:e[n]===!0?n.toLowerCase():null}),"function"==typeof define&&define.noamd?define('cbar_Sizzle',function(){return n}):e.cbar_Sizzle=n})(window);


// widget file
var cbar_curricon = [0, 0, 0, 0];
var action_text = '';
var action_city = '';
var action_country = '';

var cbar_w_shownext = [false, false, false, false];
var cbar_w_showprev = [false, false, false, false];

function cbar_w_init() {
	return;
}

function cbar_replace_global(search, replace, source) {
	var myRegExp = new RegExp(search, 'ig');
	return source.replace(myRegExp, replace);
}

function cbar_data_returned_widget(redraw) {
	for (var i = 0; i < cbar_results.length; i++) {
		if ((cbar_widget_to_draw > 0) && (cbar_widget_to_draw - 1) != i) {
			continue;
		}

		if (
			(cbar_results[i].length == 0) || 
			(cbar_w_anchor.length < i) || 
			(typeof cbar_w_anchor[i] == "undefined") || 
			(cbar_w_anchor[i] == null)
		) {
			continue;
		}

		var cbar_recstep = eval(`typeof cbar_rectype${i}!='undefined' ? cbar_rectype${i} : 0`);
		if ((cbar_w_scrollbuttons == true) || ((typeof cbar_w_scrollbuttons[i] != 'undefined') && cbar_w_scrollbuttons[i])) {
			cbar_w_shownext[i] = (cbar_w_numshowicons[i] + cbar_curricon[i]) < cbar_results[i].length;
			cbar_w_showprev[i] = cbar_curricon[i] > 0;
		}

		if (typeof cbar_w_numshowicons[i] != 'number') {
			cbar_w_numshowicons[i] = 99;
		}

		var title_index = (typeof cbar_override_titles[i] !== 'undefined') ? cbar_override_titles[i] : cbar_recstep;
		if (typeof rule_title_index[i] !== 'undefined') {
			title_index = rule_title_index[i];
		}
		
		var title = cbar_recstep_titles[title_index];
		if (title === undefined) {
			title = cbar_recstep_titles[5];
			if (title === undefined) {
				console.log('Widget v1: Can not found title for widget #' + i);
				continue;
			}
		}
		cbar_widget_html = cbar_w_template_head[i].replace(/%group_title%/g, decodeURIComponent(title.replace(/\+/g, ' ')));

		var cbar_numicons = eval('cbar_numicons' + (i + 1));

		for (var t = cbar_curricon[i]; (t < cbar_results[i].length) && (t < cbar_numicons) && ((t - cbar_curricon[i]) < cbar_w_numshowicons[i]); t++) {
			if (
				(typeof cbar_w_iconsperline[i] == "number") && 
				(t > 0) && 
				((t % cbar_w_iconsperline[i]) == 0) && 
				(typeof cbar_w_linebreak_template[i] != 'undefined')
			) {
				cbar_widget_html += cbar_w_linebreak_template[i];
			}

			var cbar_short_title;
			try {//#231
				cbar_short_title = decodeURIComponent(cbar_results[i][t][2].replace(/\+/g, ' '));
			} catch (err) {
				cbar_short_title = unescape(cbar_results[i][t][2]).replace(/\+/g, ' ');
			}

			cbar_short_title = cbar_short_title.substring(0, cbar_w_title_len);
			if (cbar_short_title.length == cbar_w_title_len) {
				cbar_short_title += '...';
			}

			// detect safari replace bug and fix price
			xyz = '%str%';
			if (xyz.replace(/%str%/g, '$15') != '$15') {
				cbar_results[i][t][4] = cbar_results[i][t][4].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][16] = cbar_results[i][t][16].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][17] = cbar_results[i][t][17].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][18] = cbar_results[i][t][18].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][23] = cbar_results[i][t][23].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][21] = cbar_results[i][t][21].replace('$', '&#36;').replace('%24', '&#36;');
			}

			var cbar_tmp_xtr1;
			var cbar_tmp_xtr2;
			var cbar_tmp_xtr3;
			var cbar_tmp_xtr4;
			var cbar_tmp_xtxt;
			try { //#231
				cbar_tmp_xtr1 = decodeURIComponent(cbar_results[i][t][16].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr1 = unescape(cbar_results[i][t][16]);
			}
			try {
				cbar_tmp_xtr2 = decodeURIComponent(cbar_results[i][t][17].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr2 = unescape(cbar_results[i][t][17]);
			}
			try {
				cbar_tmp_xtr3 = decodeURIComponent(cbar_results[i][t][18].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr3 = unescape(cbar_results[i][t][18]);
			}
			try {
				cbar_tmp_xtr4 = decodeURIComponent(cbar_results[i][t][23].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr4 = unescape(cbar_results[i][t][23]);
			}
			try {
				cbar_tmp_xtxt = decodeURIComponent(cbar_results[i][t][21].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtxt = unescape(cbar_results[i][t][21]);
			}

			var cbar_clk_js = ' return cbar_click(document.getElementById(\'cbar_div_' + (i + 1) + (t + 1) + '\'))'; // taken from bar. needs check

			if (cbar_recstep == 19) {
				try {
					action_text = eval('ra_action_texts.' + eval('cbar_ra_data_' + cbar_results[i][t][0] + '.activity'));
				} catch (error) {
					action_text = '';
				}
				
				try {
					action_city = eval('cbar_ra_data_' + cbar_results[i][t][0] + '.city');
				} catch (error) {
					action_city = '';
				}
				
				try {
					action_country = eval('cbar_ra_data_' + cbar_results[i][t][0] + '.country');
				} catch (error) {
					action_country = '';
				}
			}
			
			var cbar_recs_live = '';
			var cbar_notifications = JSON.parse(cbar_results[i][t][22]);
			if (cbar_notifications.length > 0) {
				cbar_recs_live = "<div style='" + cbar_LIRE_css1 + "'>";
				for (var key = 0; key < cbar_notifications.length; key++) {
					cbar_recs_live += "<div style='" + cbar_LIRE_css2 + "'>" + cbar_notifications[key] + "</div>";
				}
				cbar_recs_live += "</div>";
			}

			cbar_widget_html += cbar_w_item_template[i].replace(/%picture%/g, decodeURIComponent(cbar_results[i][t][1].replace(/\+/g, ' ')))
				.replace(/%idx%/g, cbar_results[i][t][0])
				.replace(/%rectype%/g, cbar_recstep)
				.replace(/%title%/g, cbar_short_title)
				.replace(/%ra_action%/g, action_text)
				.replace(/%ra_city%/g, action_city)
				.replace(/%ra_country%/g, action_country)
				.replace(/%url%/g, decodeURIComponent(cbar_results[i][t][3].replace(/\+/g, ' ')))
				.replace(/%price%/g, decodeURIComponent(cbar_results[i][t][4].replace(/\+/g, ' ')))
				.replace(/%price_clean%/g, decodeURIComponent(cbar_results[i][t][5].replace(/\+/g, ' ')))
				.replace(/%pid%/g, decodeURIComponent(cbar_results[i][t][6].replace(/\+/g, ' ')))
				.replace(/%clicks%/g, 0)
				.replace(/%hoovers%/g, 0)
				.replace(/%onclick%/g, cbar_clk_js)
				.replace(/%new%/g, '') //Not in use
				.replace(/%sale%/g, '') //Not in use
				.replace(/%bestseller%/g, '') //Not in use
				.replace(/%pricedrop%/g, '') //Not in use
				.replace(/%flag1%/g, (cbar_results[i][t][14] == '1') ? cbar_fl1_html : '')
				.replace(/%flag2%/g, '') //Not in use
				.replace(/%xtr1%/g, cbar_tmp_xtr1)
				.replace(/%xtr2%/g, cbar_tmp_xtr2)
				.replace(/%xtr3%/g, cbar_tmp_xtr3)
				.replace(/%xtr4%/g, cbar_tmp_xtr4)
				.replace(/%xtxt%/g, cbar_tmp_xtxt)
				.replace(/%live_notifications%/g, cbar_recs_live)
				.replace(/%perc_purchased%/g, decodeURIComponent(cbar_results[i][t][19].replace(/\+/g, ' ')))
				.replace(/%subproducts%/g, decodeURIComponent(cbar_results[i][t][25].replace(/\+/g, ' ')))
				.replace(/%brand%/g, decodeURIComponent(cbar_results[i][t][27].replace(/\+/g, ' ')))
				.replace(/%eu_lastprice%/g, decodeURIComponent(cbar_results[i][t][29]))
			.replace(/%t%/g, t);
		}

		cbar_widget_html += cbar_w_template_bottom[i];

		cbar_w_prev_html_tmp = '';
		if (typeof cbar_w_prev_html == 'object' && typeof cbar_w_prev_html[i] != 'undefined') {
			cbar_w_prev_html_tmp = cbar_w_prev_html[i];
		}
		if (typeof cbar_w_prev_html == 'string') {
			cbar_w_prev_html_tmp = cbar_w_prev_html;
		}
		cbar_widget_html = cbar_widget_html.replace(/%prevbutton%/g, (cbar_w_showprev[i]) ? cbar_w_prev_html_tmp : "");

		cbar_w_next_html_tmp = '';
		if (typeof cbar_w_next_html == 'object' && typeof cbar_w_next_html[i] != 'undefined') {
			cbar_w_next_html_tmp = cbar_w_next_html[i];
		}
		if (typeof cbar_w_next_html == 'string') {
			cbar_w_next_html_tmp = cbar_w_next_html;
		}
		cbar_widget_html = cbar_widget_html.replace(/%nextbutton%/g, (cbar_w_shownext[i]) ? cbar_w_next_html_tmp : "");

		var cbar_tmp = document.createElement('div');
		cbar_tmp.innerHTML = cbar_widget_html.replace(/%i%/g, i);
		var cbar_new_w = cbar_tmp.firstChild;
		var parent = cbar_w_anchor[i].parentNode;

		if (cbar_w_insert_where[i] == 2) {
			cbar_w_anchor[i].appendChild(cbar_new_w);
		} else if (cbar_w_insert_where[i] == 1) {
			parent.insertBefore(cbar_new_w, cbar_w_anchor[i]);
		} else if (cbar_w_insert_where[i] == 3) {
			parent.replaceChild(cbar_new_w, cbar_w_anchor[i]);
		} else if (cbar_w_insert_where[i] == 0) {
			if (parent.lastchild == cbar_w_anchor[i]) {
				parent.appendChild(cbar_new_w);
			} else {
				parent.insertBefore(cbar_new_w, cbar_w_anchor[i].nextSibling);
			}
		}
	}
	
	if (typeof cbar_after_show == 'function') {
		cbar_after_show('widget');
	}
}

function cbar_del_widgets() {
	for (var i = 0; i < cbar_num_widgets; i++) {
		var cbar_widget = document.getElementById("cbar_widget" + i);
		if (cbar_widget != null) {
			cbar_widget.parentNode.removeChild(cbar_widget);
		}
	}
}

function cbar_w_next(group) {
	cbar_del_widgets();
	cbar_curricon[group] += 1;
	cbar_data_returned_widget(true);
	return false;
}

function cbar_w_prev(group) {
	cbar_del_widgets();
	cbar_curricon[group] -= 1;
	cbar_data_returned_widget(true);
	return false;
}

function switch_subproduct(widget, item, subproduct_index) {
	// check if the data on the wifget item is of a subproduct
	var dom_item = document.getElementById('cbar_w' + widget + '_' + item + '_item_s');
	if (dom_item !== null) {
		// check if the data on the widget item is of a subproduct
		prev_subproduct_index = dom_item.getAttribute('subproduct_index'); // find which subproduct data is in the widget now
		var current_data = prev_subproduct_index ? cbar_subproducts[widget][item][prev_subproduct_index] : cbar_results[widget][item];
		var new_data = cbar_subproducts[widget][item][subproduct_index];
		var html = dom_item.innerHTML;

		// switch img, price, name
		html = cbar_replace_global(decodeURIComponent(current_data[1].replace(/\+/g, ' ')), decodeURIComponent(new_data[1].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[2].replace(/\+/g, ' ')), decodeURIComponent(new_data[2].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[3].replace(/\+/g, ' ')), decodeURIComponent(new_data[3].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[4].replace(/\+/g, ' ')), decodeURIComponent(new_data[4].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[6].replace(/\+/g, ' ')), decodeURIComponent(new_data[6].replace(/\+/g, ' ')), html);

		// write back
		dom_item.innerHTML = html;
		dom_item.setAttribute('subproduct_index', subproduct_index); // remember which subproduct data is in the widget
	}
}


!function(){"use strict";var t=function(t,e,r){t.setItem(e,JSON.stringify(r))},e=function(t,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,i=t.getItem(e);return null===i?r:JSON.parse(i)},r=function(t){var r=e(localStorage,t);return null!==r&&(0===r.expire||!r.expire<parseInt(Date.now()/1e3))?r:null},i=function(e,r){var i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0;return t(localStorage,e,{expire:i>0?parseInt(Date.now()/1e3)+i:i,value:r})},n=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,i=r(t);return null!==i?i.value:e},o=function(e,r){return t(sessionStorage,e,r)},a=function(t){return e(sessionStorage,t,arguments.length>1&&void 0!==arguments[1]?arguments[1]:null)},s=null,c=console.log,l=function(t,e){return null===s&&(s=0!==n("cbar-debug",0)),s?function(r){c("%c".concat(t,":%c ").concat(r),"background-color: ".concat(e,";"),"");for(var i=arguments.length,n=new Array(i>1?i-1:0),o=1;o<i;o++)n[o-1]=arguments[o];n.forEach((function(t){return c(t)}))}:function(){return!0}};function u(t){return u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},u(t)}function d(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,f(i.key),i)}}function h(t,e,r){return(e=f(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function f(t){var e=function(t,e){if("object"!==u(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==u(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===u(e)?e:String(e)}var p=function(){function t(e){var r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),h(this,"id",0),h(this,"originalId",0),h(this,"image",""),h(this,"name",""),h(this,"url",""),h(this,"price",""),h(this,"priceClean",""),h(this,"brand",""),h(this,"live",""),h(this,"rec18precent",""),h(this,"xtr1",""),h(this,"xtr1Clean",0),h(this,"xtr2",""),h(this,"xtr3",""),h(this,"xtr4",""),h(this,"xtxt",""),h(this,"discount",0),h(this,"discountProc",0),h(this,"promotedRuleId",0),h(this,"itemIndex",null),h(this,"isDataEncoded",!0),this.itemIndex=r,this.isDataEncoded=0===e[28],this.id=e[0],this.image=this._cleanEncoding(e[1],!1,!1),this.name=this._cleanEncoding(e[2]),this.url=this._cleanEncoding(e[3],!1),this.price=this._cleanEncoding(e[4]),this.priceClean=this._cleanEncoding(e[5]),this.originalId=this._cleanEncoding(e[6],!1),this.rec18precent=e[19],this.live=""===e[22]||"{}"===e[22]||"[]"===e[22]?"":JSON.parse(e[22])[0],this.promotedRuleId=e[26],this.brand=this._cleanEncoding(e[27]),this.eu_lastprice=0!=e[29]?e[29]:"",this.xtr1=this._cleanEncoding(e[16]),this.xtr1Clean=e[7],this.xtr2=this._cleanEncoding(e[17]),this.xtr3=this._cleanEncoding(e[18]),this.xtr4=this._cleanEncoding(e[23]),this.xtxt=this._cleanEncoding(e[21]);var i=parseFloat(this.priceClean);isNaN(i)||isNaN(this.xtr1Clean)||(this.discount=Math.round(100*(this.xtr1Clean-i))/100,this.discountProc=Math.floor(100*(1-i/this.xtr1Clean)))}var e,r;return e=t,r=[{key:"_cleanEncoding",value:function(t){var e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];if(!this.isDataEncoded)return t;var i=t;r&&"string"==typeof t&&(i=t.replace(/\+/gi," "));try{i=decodeURIComponent(i)}catch(t){}if(e)try{i=decodeURIComponent(i)}catch(t){}return i}}],r&&d(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}(),g=p;function b(t){return b="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},b(t)}function m(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,i=new Array(e);r<e;r++)i[r]=t[r];return i}function v(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,(void 0,n=function(t,e){if("object"!==b(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==b(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(i.key),"symbol"===b(n)?n:String(n)),i)}var n}void 0===String.prototype.matchAll&&(String.prototype.matchAll=function(t){for(var e,r=[];e=t.exec(this);)r.push(e);return r});var y=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),null!==e&&(this.html=document.getElementById(e).innerHTML)}var e,r;return e=t,r=[{key:"setHtml",value:function(t){this.html=t}},{key:"getHtml",value:function(){var t,e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},r=this.html;return Object.keys(e).forEach((function(t){return r=r.replace(new RegExp("{"+t+"}","g"),e[t])})),(t=r.matchAll(/{if:(.+)}(.+){:if}/g),function(t){if(Array.isArray(t))return m(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(t){if("string"==typeof t)return m(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?m(t,e):void 0}}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()).forEach((function(t){var i=t[0],n=t[1],o=t[2],a=!1,s=n.indexOf("=");if(s>-1){var c=n.substr(0,s),l=n.substr(s+1);e[c]==l&&(a=!0)}else("!"===n[0]?!e[n.substr(1)]:e[n])&&(a=!0);r=r.replace(i,a?o:"")})),r}}],r&&v(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}(),w=y;function x(t){return x="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},x(t)}function S(){return S=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var i in r)Object.prototype.hasOwnProperty.call(r,i)&&(t[i]=r[i])}return t},S.apply(this,arguments)}function I(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,C(i.key),i)}}function _(t,e,r){return(e=C(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function C(t){var e=function(t,e){if("object"!==x(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==x(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===x(e)?e:String(e)}var E="Unnamed Section",k=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),_(this,"name",E),_(this,"type","text"),_(this,"source","name"),_(this,"align","left"),_(this,"valign","top"),_(this,"marginTop",0),_(this,"marginBottom",10),_(this,"marginLeft",0),_(this,"marginRight",0),_(this,"paddingTop",0),_(this,"paddingBottom",0),_(this,"paddingLeft",0),_(this,"paddingRight",0),_(this,"float","none"),_(this,"direction",""),_(this,"html",""),_(this,"defaultValue",""),_(this,"displayCondition",0),_(this,"displayConditionField",""),_(this,"imageHeightRatio",""),_(this,"imageHoverSource",""),_(this,"imageEffect","none"),_(this,"imageCircleBorderColor","#FFFFFF"),_(this,"imageCircleBorderSize",1),_(this,"imageAdjust","stretch"),_(this,"imageAlt",0),_(this,"badgeFont",""),_(this,"badgeSize",12),_(this,"badgeSizeUnit","px"),_(this,"badgeColor","#ffffff"),_(this,"badgeText",""),_(this,"badgeBgColor","#009900"),_(this,"badgeStyle",""),_(this,"badgeBgColorHover",""),_(this,"badgePadding",0),_(this,"badgeBorderRadius",0),_(this,"badgeOffsetX",0),_(this,"badgeOffsetY",0),_(this,"badgeImage",""),_(this,"badgeShadowOffset",0),_(this,"badgeShadowColor","#aaaaaa"),_(this,"badgeShadowBlur",0),_(this,"buttonJs",""),_(this,"buttonText",""),_(this,"textFont",""),_(this,"textSize",12),_(this,"textSizeUnit","px"),_(this,"textColor","#000000"),_(this,"textBgColor",""),_(this,"textStyle",""),_(this,"textBoldType","bold"),_(this,"textHoverTypes",[]),_(this,"textHoverStyle",""),_(this,"textHoverBoldType","bold"),_(this,"textHoverColor","#000000"),_(this,"textBgHoverColor",""),_(this,"textEllipsis",0),_(this,"textEllipsisLines",1),_(this,"textEllipsisMode",0),_(this,"textPrefix",""),_(this,"textSuffix",""),_(this,"textLetterSpacing",""),_(this,"textLetterSpacingUnit","px"),_(this,"textLineHeight",""),_(this,"textLineHeightUnit","px"),_(this,"separatorColor","#999999"),_(this,"separatorHeight",1),_(this,"separatorHeightUnit","px"),_(this,"ratingStarSize",16),_(this,"ratingColor","#ffc83d"),_(this,"ratingDisColor","#999999"),_(this,"ratingBorderColor","#ffc83d"),_(this,"ratingMaxValue",5),_(this,"ratingIconType",1),_(this,"ratingUrlEmpty",""),_(this,"ratingUrlHalf",""),_(this,"ratingUrlFull",""),_(this,"subproductMaxItems",12),_(this,"subproductMaxRowItems",6),_(this,"subproductSourceType",0),_(this,"columnCount",2),_(this,"columnWidth",[50,50]),_(this,"columnItems",[1,1]),_(this,"columnJustifyContent","normal"),_(this,"columnAlignItems","normal"),null!==e&&this.fromData(e)}var e,r;return e=t,(r=[{key:"getDisplayName",value:function(){var t=this.name.trim();return""===t&&(t=E),"columns"===this.type&&(t+=' [<span class="wdes-section-mark">'.concat(this.getCapacity(),"</span>]")),t}},{key:"toData",value:function(){var t={name:this.name,type:this.type,source:this.source,align:this.align,marginTop:this.marginTop,marginBottom:this.marginBottom,marginLeft:this.marginLeft,marginRight:this.marginRight,paddingTop:this.paddingTop,paddingBottom:this.paddingBottom,paddingLeft:this.paddingLeft,paddingRight:this.paddingRight,float:this.float,direction:this.direction,html:this.html,defaultValue:this.defaultValue,displayCondition:parseInt(this.displayCondition),displayConditionField:this.displayConditionField};return"badge"===this.type&&S(t,{badgeFont:this.badgeFont,badgeSize:this.badgeSize,badgeSizeUnit:this.badgeSizeUnit,badgeColor:this.badgeColor,badgeText:this.badgeText,badgeBgColor:this.badgeBgColor,badgeStyle:this.badgeStyle,badgeBgColorHover:this.badgeBgColorHover,badgeBorderRadius:this.badgeBorderRadius,badgeOffsetX:this.badgeOffsetX,badgeOffsetY:this.badgeOffsetY,badgeImage:this.badgeImage,badgeShadowOffset:this.badgeShadowOffset,badgeShadowColor:this.badgeShadowColor,badgeShadowBlur:this.badgeShadowBlur}),"image"===this.type&&S(t,{imageHeightRatio:this.imageHeightRatio,imageHoverSource:this.imageHoverSource,imageEffect:this.imageEffect,imageCircleBorderColor:this.imageCircleBorderColor,imageCircleBorderSize:this.imageCircleBorderSize,imageAlt:this.imageAlt}),"imageStories"===this.type&&S(t,{imageAdjust:this.imageAdjust}),"rating"===this.type&&S(t,{ratingStarSize:this.ratingStarSize,ratingColor:this.ratingColor,ratingDisColor:this.ratingDisColor,ratingBorderColor:this.ratingBorderColor,ratingMaxValue:parseInt(this.ratingMaxValue),ratingIconType:parseInt(this.ratingIconType),ratingUrlEmpty:this.ratingUrlEmpty,ratingUrlHalf:this.ratingUrlHalf,ratingUrlFull:this.ratingUrlFull}),"separator"===this.type&&S(t,{separatorColor:this.separatorColor,separatorHeight:this.separatorHeight,separatorHeightUnit:this.separatorHeightUnit}),"subproduct"===this.type&&S(t,{subproductMaxItems:parseInt(this.subproductMaxItems),subproductMaxRowItems:parseInt(this.subproductMaxRowItems),subproductSourceType:this.subproductSourceType}),"text"!==this.type&&"button"!==this.type||S(t,{textFont:this.textFont,textSize:this.textSize,textSizeUnit:this.textSizeUnit,textColor:this.textColor,textBgColor:this.textBgColor,textHoverTypes:this.textHoverTypes,textBgHoverColor:this.textBgHoverColor,textStyle:this.textStyle,textBoldType:this.textBoldType,textHoverStyle:this.textHoverStyle,textHoverBoldType:this.textHoverBoldType,textHoverColor:this.textHoverColor,textEllipsis:this.textEllipsis,textEllipsisLines:this.textEllipsisLines,textEllipsisMode:this.textEllipsisMode,textPrefix:this.textPrefix,textSuffix:this.textSuffix,valign:this.valign,textLetterSpacing:this.textLetterSpacing,textLetterSpacingUnit:this.textLetterSpacingUnit,textLineHeight:this.textLineHeight,textLineHeightUnit:this.textLineHeightUnit}),"button"===this.type&&S(t,{buttonJs:this.buttonJs,buttonText:this.buttonText}),"columns"===this.type?{name:this.name,type:this.type,columnCount:parseInt(this.columnCount),columnWidth:this.columnWidth,columnItems:this.columnItems,columnJustifyContent:this.columnJustifyContent,columnAlignItems:this.columnAlignItems}:t}},{key:"fromData",value:function(t){for(var e in t)this[e]=t[e]}},{key:"getCapacity",value:function(){return"columns"===this.type?this.columnItems.reduce((function(t,e){return t+e})):0}},{key:"setColumnCount",value:function(t){var e=Math.floor(100/t);this.columnWidth=new Array(t).fill(e),this.columnItems=new Array(t).fill(1)}}])&&I(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}();function P(t){return P="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},P(t)}function O(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,H(i.key),i)}}function T(t,e,r){return(e=H(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function H(t){var e=function(t,e){if("object"!==P(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==P(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===P(e)?e:String(e)}var B=function(){function t(e,r){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),T(this,"section",null),T(this,"sectionId",0),T(this,"itemCount",0),T(this,"sectionsHtml",[]),this.section=e,this.sectionId=r,this.itemCount=e.columnItems.reduce((function(t,e){return t+e}))}var e,r;return e=t,(r=[{key:"pushSection",value:function(t){this.sectionsHtml.push(t)}},{key:"isFilled",value:function(){return this.sectionsHtml.length===this.itemCount}},{key:"getHtml",value:function(){for(var t=this,e=function(e){for(var r=[],i=0;i<e;++i)r.push(0===t.sectionsHtml.length?"":t.sectionsHtml.shift());return r.join("")},r='<div class="cbar-wdes-grouping-'.concat(this.sectionId,'">'),i=0;i<this.section.columnCount;++i)r+='<div class="cbar-wdes-group-cell-'.concat(this.sectionId,"-").concat(i,'">').concat(e(this.section.columnItems[i]),"</div>");return r+"</div>"}}])&&O(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}();function j(t){return j="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},j(t)}function L(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,A(i.key),i)}}function A(t){var e=function(t,e){if("object"!==j(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==j(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===j(e)?e:String(e)}var z=function(){function t(e){var r,i,n;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),r=this,n=void 0,(i=A(i="widget"))in r?Object.defineProperty(r,i,{value:n,enumerable:!0,configurable:!0,writable:!0}):r[i]=n,this.widget=e}var e,r;return e=t,(r=[{key:"setCss",value:function(){}},{key:"render",value:function(t){return t}},{key:"setHandlers",value:function(){}}])&&L(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}();function R(t){return R="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},R(t)}function U(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,i=new Array(e);r<e;r++)i[r]=t[r];return i}function D(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,N(i.key),i)}}function M(t,e){return M=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},M(t,e)}function W(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function F(t){return F=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},F(t)}function q(t,e,r){return(e=N(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function N(t){var e=function(t,e){if("object"!==R(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==R(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===R(e)?e:String(e)}var V="cbar-wdes-item-box",J="cbar-wdes-slider-arrow",Y=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&M(t,e)}(a,t);var e,r,i,n,o=(i=a,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=F(i);if(n){var r=F(this).constructor;t=Reflect.construct(e,arguments,r)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===R(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return W(t)}(this,t)});function a(){var t;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a);for(var e=arguments.length,r=new Array(e),i=0;i<e;i++)r[i]=arguments[i];return q(W(t=o.call.apply(o,[this].concat(r))),"sliderOffset",0),q(W(t),"sliderIndex",0),q(W(t),"sliderAutoStatus",1),q(W(t),"autoslideTimer",null),q(W(t),"sliderAutoDirection","next"),t}return e=a,(r=[{key:"setCss",value:function(t){var e=this.widget.config,r=this.widget.ruleId,i=1===e.slider.floatArrows,n="100%";"popup"===e.flavor&&(n=parseInt(getComputedStyle(this.widget.wrapperElement).width)-2*e.slider.internal.size+1+"px"),[[".cbar-wdes-".concat(r," .cbar-wdes-slider-block"),[["display","flex"],["justify-content","strech"],["direction",e.layout.direction],i?["position","relative"]:null]],[".cbar-wdes-".concat(r," .cbar-wdes-slider-btn"),[i?["position","absolute"]:null,i?["height","100%"]:null]],[".cbar-wdes-".concat(r," .cbar-wdes-slider-btn.cbar-wdes-sleft"),[i?["ltr"===e.layout.direction?"left":"right","0"]:null]],[".cbar-wdes-".concat(r," .cbar-wdes-slider-btn.cbar-wdes-sright"),[i?["ltr"===e.layout.direction?"right":"left","0"]:null]],[".cbar-wdes-".concat(r," .cbar-wdes-sliding"),[["overflow","hidden"],["width",n]]],[".cbar-wdes-".concat(r," .cbar-wdes-slider"),[["width","".concat(e.slider.internal.size,"px")],["height","".concat(e.slider.internal.size,"px")],["top","calc(50% - ".concat(parseInt(e.slider.internal.size/2),"px)")],["position","relative"],["cursor","pointer"],["user-select","none"],["z-index",1]]],[".cbar-wdes-".concat(r," .cbar-wdes-slider .cbar-wdes-image"),[["width","100%"]]],[".cbar-wdes-".concat(r," .cbar-wdes-slider img"),[["width","100%"]]]].forEach((function(e){return t.push(e)}));var o=".cbar-wdes-".concat(r," .cbar-wdes-wrapper");for(var a in t)if(t[a][0]===o){t[a][1]=t[a][1].filter((function(t){return null!==t&&"overflow"!==t[0]})),t[a][1].push(["position","relative"]),t[a][1].push(["left","0px"]);break}}},{key:"render",value:function(t){var e=this,r=this.widget.config;if(0===this.widget.renderedItemsCount)return t;var i="ltr"===r.layout.direction?"prev":"next",n="ltr"===r.layout.direction?"next":"prev",o=r.slider.internal.leftImage||"https://static.barilliance.com/img/common/".concat(i,".svg"),a=r.slider.internal.rightImage||"https://static.barilliance.com/img/common/".concat(n,".svg"),s=function(t,e){return'<img src="'.concat(t,'" class="').concat(J,'" data-act="').concat(e,'">')},c=function(t,i){var n=window[r.slider.internal.customRenderer](t,e.widget.ruleId);if(!(n instanceof Element))return e.widget.log("Custom slider arrows renderer provided, but did not returned instance of DOM element"),s(i,t);n.classList.add(J),n.dataset.act=t;var o=document.createElement("div");return o.appendChild(n),o.innerHTML},l=s(o,"prev"),u=s(a,"next");return""!==r.slider.internal.customRenderer&&"function"==typeof window[r.slider.internal.customRenderer]&&(l=c("prev",o),u=c("next",a)),'<div class="cbar-wdes-slider-block">\n\t\t\t<div class="cbar-wdes-slider-btn cbar-wdes-sleft">\n\t\t\t\t<div class="cbar-wdes-slider">'.concat(l,'</div>\n\t\t\t</div>\n\t\t\t<div class="cbar-wdes-sliding">').concat(t,'</div>\n\t\t\t<div class="cbar-wdes-slider-btn cbar-wdes-sright">\n\t\t\t\t<div class="cbar-wdes-slider">').concat(u,"</div>\n\t\t\t</div>\n\t\t</div>")}},{key:"setHandlers",value:function(){var t=this,e=this.widget.config;if(0!==this.widget.renderedItemsCount){var r=this.widget.wrapperElement.querySelectorAll(".cbar-wdes-slider .".concat(J)),i=this.widget.wrapperElement.querySelector(".cbar-wdes-wrapper"),n=this.widget.wrapperElement.querySelector(".cbar-wdes-wrapper-holder"),o=i.querySelector("."+V);this.sliderOffset=0,this.sliderIndex=0,this.sliderAutoStatus=1;var a="ltr"===e.layout.direction?-1:1,s={prev:{status:!0},next:{status:!0}},c=null,l=0,u=0,d=0,h=function(){var r=function(t,e){s[t].status!==e&&(s[t].status=e,s[t].elem.style.display=e?"":"none")};if(1!==e.slider.internal.alwaysShow){var i=p();r("prev",t.sliderOffset>5),r("next",i>0&&t.sliderOffset<i-5)}},f=function(){t.sliderOffset<0&&(t.sliderOffset=0),t.sliderIndex=parseInt(t.sliderOffset/o.clientWidth);var e=a*t.sliderOffset;i.style.left="".concat(e,"px"),h()},p=function(){var e=t.widget.countCurrentLayerItems();return(t.widget.renderedItemsCount-e)*o.clientWidth},g=function(){i.classList.remove("touch-started");var e,r=o.clientWidth,s=0,l=null,d=!1;if((e=i.querySelectorAll("."+V),function(t){if(Array.isArray(t))return U(t)}(e)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(e)||function(t,e){if(t){if("string"==typeof t)return U(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?U(t,e):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()).some((function(e){var r=1===a?i.clientWidth-o.clientWidth-e.offsetLeft:e.offsetLeft,n=Math.abs(r-t.sliderOffset);return 0===n?(d=!0,!0):((null===l||n<l)&&(l=n,s=r),!1)})),!d&&r/n.clientWidth>.5){var h=(u<c?-1*r:r)*a;s+h>i.scrollWidth-r&&(h=0),s+=h}d||(t.sliderOffset=s,f())};r.forEach((function(e){s[e.dataset.act].elem=e,e.addEventListener("click",(function(e){t.sliderAutoStatus=0;var r=o.clientWidth,i=p();if(i>0)switch(e.currentTarget.dataset.act){case"prev":t.sliderOffset-=r;break;case"next":t.sliderOffset+=r,t.sliderOffset>i&&(t.sliderOffset=i)}f()}))})),i.addEventListener("touchstart",(function(e){c=e.targetTouches[0].clientX,l=t.sliderOffset,d=p(),i.classList.add("touch-started"),t.sliderAutoStatus=0})),i.addEventListener("touchend",(function(){g()})),i.addEventListener("touchcancel",(function(){g()})),i.addEventListener("touchmove",(function(e){u=e.targetTouches[0].clientX;var r=a*(u-c);t.sliderOffset=l+r,t.sliderOffset>d&&(t.sliderOffset=d),f()})),document.addEventListener("cbar_resize",(function(){var e,r=(e=t.widget.countCurrentLayerItems(),t.widget.renderedItemsCount-e);t.sliderIndex>r&&(t.sliderIndex=r),t.sliderOffset=t.sliderIndex*o.clientWidth,f()}));var b=setInterval((function(){o.clientWidth>0&&(clearInterval(b),h(),""!=e.slider.internal.autoslide&&"0"!=e.slider.internal.autoslide&&(null!=t.autoslideTimer&&clearInterval(t.autoslideTimer),t.autoslideTimer=setInterval((function(){var e=o.clientWidth;if(1===t.sliderAutoStatus&&e>0){var r=p();"next"===t.sliderAutoDirection?(t.sliderOffset+=e,t.sliderOffset>=r&&(t.sliderOffset=r,t.sliderAutoDirection="prev")):(t.sliderOffset-=e,t.sliderOffset<=0&&(t.sliderAutoDirection="next")),f()}}),1e3*parseInt(e.slider.internal.autoslide)),t.widget.wrapperElement.addEventListener("mouseenter",(function(){t.sliderAutoStatus=0})),t.widget.wrapperElement.addEventListener("mouseleave",(function(){t.sliderAutoStatus=1}))))}),100)}}}])&&D(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),a}(z),X=Y;function Q(){return Q=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var i in r)Object.prototype.hasOwnProperty.call(r,i)&&(t[i]=r[i])}return t},Q.apply(this,arguments)}function $(t){return $="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},$(t)}var G=function(t){return decodeURIComponent(t.replace(/\+/g," "))},K=function t(e,r){var i=[];if("object"===$(r))for(var n in r)r.hasOwnProperty(n)&&i.push(t(e+"["+encodeURIComponent(n)+"]",r[n]));else i.push(e+"="+encodeURIComponent((""+r).trim()));return i.join("&")},Z=function(t,e,r){var i=new CustomEvent(t,{bubbles:!0,cancelable:!0,detail:r});e.dispatchEvent(i)},tt=function(t,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,i=null;"js"===e?((i=document.createElement("script")).setAttribute("type","text/javascript"),i.setAttribute("src",t),ut(t)):"css"===e&&((i=document.createElement("link")).setAttribute("rel","stylesheet"),i.setAttribute("type","text/css"),i.setAttribute("href",t)),null!==i&&(r&&(i.onload=r),document.getElementsByTagName("head")[0].appendChild(i))},et=function(t,e,r,n){var o=arguments.length>5&&void 0!==arguments[5]&&arguments[5],a={w:e,c:r,i:n,r:arguments.length>4&&void 0!==arguments[4]?arguments[4]:0};i("cp_wid_clk",a),Z("cbar_widget_clicked",document,Q(a,{t:"rec"})),!0===o?window.open(t):document.location=t},rt=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,i=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{},n=[];""!==e&&"&"!==e[0]&&(e="&"+e),Object.keys(t).forEach((function(e){return n.push(e+"="+t[e])})),n.push("ts="+Math.ceil(1e4*Math.random()));var o=cbar_dynamic_url+cbar_datajs+"?"+n.join("&")+e;if(cbarApp.asyncDatajs){var a=new XMLHttpRequest;a.open("POST",o+"&xhr=1"),a.onreadystatechange=function(){4===a.readyState&&200===a.status&&(eval.call(window,a.responseText),"function"==typeof r&&r())},a.send(JSON.stringify(i))}else tt(o,"js",r)},it=function(t){if(!cbar_suppress_rules.includes(t.ruleId)){var e=document.querySelectorAll(t.elementType+"["+t.attrName+"*='"+t.attrVal+"']");e.length>0&&e.forEach((function(e){var r=document.createElement("span");r.className="cbar-overlay-image-box",r.innerHTML='<img style="top:'+t.tbmargin+"px; left:"+t.lrmargin+'px" src="'+cbar_userimages+t.image+'">',""!==t.zIndex&&(r.style.zIndex=t.zIndex),e.parentNode.insertBefore(r,e)}))}},nt=null,ot=null,at=function(){var t=function(){null!==ot&&(window.clearInterval(ot),ot=null)};null===nt&&(nt=document.location.pathname+document.location.search),t(),ot=window.setInterval((function(){document.location.pathname+document.location.search!==nt&&(document.querySelectorAll('div[rule_id][id^="cbar_"]').forEach((function(t){t.remove()})),nt=document.location.pathname+document.location.search,t())}),500)},st=function(){var t="cbar_fix_referrer",e=document.referrer;if(!0===cbarApp.fixReferrer){var r=a(t);e=null===r?"":r[r[0]===cbar_url?1:0],cbar_url!==e&&o(t,[cbar_url,e])}return e},ct=function(t){var e=document.getElementById("cbar-widget-preview-ids");null!==e&&(e.innerHTML=t.join(", "))},lt=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;cbar_results=[],cbar_subproducts=[];var r={a:"refrecs",sid:cbar_sid,uid:cbar_uid,pid:encodeURIComponent(cbar_pid),cid:encodeURIComponent(cbar_cid),url:cbar_url_en,flow:cbar_flow,pt:cbar_pagetype,subattr:cbar_subproducts_attrib};"object"===$(t)&&Object.keys(t).forEach((function(e){return r[e]=t[e]})),rt(r,cbar_data_params+"&"+K("attu",cbar_user_attributes)+"&"+K("attu1",cbar_user_attribute)+"&"+K("attrecs",cbarApp.recsAttributes),e)},ut=function(t){cbar_debug<2||t.split("?")[1].split("&").forEach((function(t){return e=t,void(0!==cbar_debug&&window.console&&console.log(e));var e}))};function dt(t){return dt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},dt(t)}function ht(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,mt(i.key),i)}}function ft(t,e){return ft=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},ft(t,e)}function pt(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function gt(t){return gt=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},gt(t)}function bt(t,e,r){return(e=mt(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function mt(t){var e=function(t,e){if("object"!==dt(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==dt(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===dt(e)?e:String(e)}!function t(){"undefined"!=typeof cbarApp?(cbarApp.cleanDom=at,cbarApp.cleanString=G,cbarApp.getReferrer=st,cbarApp.refreshRecommendations=lt,cbarApp.setPreviewRuleIds=ct,cbarApp.showImageOverlay=it):setTimeout((function(){return t()}),200)}();var vt=!1,yt=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&ft(t,e)}(a,t);var e,r,i,n,o=(i=a,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=gt(i);if(n){var r=gt(this).constructor;t=Reflect.construct(e,arguments,r)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===dt(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return pt(t)}(this,t)});function a(t){var e;return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),bt(pt(e=o.call(this,t)),"widgetLoaded",!1),bt(pt(e),"loadLeft",0),bt(pt(e),"loadTries",0),bt(pt(e),"isPreviewMode",!1),e.isPreviewMode=e.widget.isPreviewMode,e}return e=a,(r=[{key:"setCss",value:function(t){var e=this;t.push([".cbar-wdes-".concat(this.widget.ruleId," .cbar-wdes-item-box"),[["width","100% !important"]]]);var r=this.widget.config.slider.owl.loadType;if(this.isPreviewMode){if(vt)return void(this.widgetLoaded=!0);r=2,vt=!0}if(1===r)this.widgetLoaded=!0;else if(2===r){var i=this.widget.config.slider.owl.loadList.split("\n").map((function(t){return t.trim()}));this.isPreviewMode&&(i=["https://static.barilliance.com/owlcarousel2-2.2.0/owl.carousel.min.js"]);var n=function(){e.loadLeft--,e.loadLeft<=0&&(e.widgetLoaded=!0)};i.forEach((function(t){".js"===t.toLowerCase().substring(t.length-3)?(e.loadLeft++,tt(t,"js",n)):".css"===t.toLowerCase().substring(t.length-4)?(e.loadLeft++,tt(t,"css",n)):e.widget.log("Unable to load Owl library fail: ".concat(t," (unknown file type)"))}))}}},{key:"setHandlers",value:function(){var t=this;if(!1===this.widgetLoaded||"undefined"==typeof jQuery||"function"!=typeof jQuery.fn.owlCarousel)return t.loadTries++,void(t.loadTries>=100?t.widget.log("Unable to load Owl library: (timeout)"):setTimeout((function(){return t.setHandlers()}),100));var e=this.widget.config.slider.owl,r={loop:1===e.repeat,rewind:2===e.repeat,touchDrag:1===e.touchDrag,mouseDrag:1===e.mouseDrag,navSpeed:e.navSpeed,dots:1===e.dots,rtl:"rtl"===this.widget.config.layout.direction,nav:!0,slideBy:e.slideBy};if(""!==e.leftArrow&&""!==e.rightArrow&&(r.navText=[e.leftArrow,e.rightArrow]),""!==e.autoslide){var i=parseInt(e.autoslide);i>0&&(r.autoplay=!0,r.autoplaySpeed=i)}var n={},o=0;if(this.widget.config.layout.layers.forEach((function(t){n[t.size]={items:t.count},o=Math.max(o,t.count)})),r.responsive=n,r.items=o,null!==this.widget.triggerCallback("owlInit",[r])){var a=this.widget.wrapperElement.querySelector(".cbar-wdes-wrapper");jQuery(a).owlCarousel(r),a.classList.add("owl-carousel"),a.classList.add("owl-theme")}else this.widget.log("Rendering Owl carousel canceled by custom code")}}])&&ht(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),a}(z);function wt(t){return wt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},wt(t)}function xt(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,It(i.key),i)}}function St(t,e,r){return(e=It(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function It(t){var e=function(t,e){if("object"!==wt(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==wt(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===wt(e)?e:String(e)}var _t=function(){function t(e,r,i){var n=this;(function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")})(this,t),St(this,"products",null),St(this,"productIndex",0),St(this,"scrollIndex",0),St(this,"wrapper",null),St(this,"renderer",null),St(this,"xDown",null),St(this,"yDown",null),St(this,"countLines",4),St(this,"stayTime",null),this.renderer=r,this.ruleId=r.ruleId,this.widgetId=r.config.engine.group,this.config=r.config.stories,this.targetBody=i,this.renderer.isPreviewMode&&cbar_sid!=this.config.siteId?rt({a:"pv",sid:this.config.siteId,uid:1234,pid:encodeURIComponent(cbar_pid),url:cbar_url_en,cm:cbar_catmode,pt:"h"},"",(function(){n._loadData(n.config.siteId,1234,e)})):this._loadData(cbar_sid,cbar_uid,e)}var e,r;return e=t,r=[{key:"_loadData",value:function(t,e,r){var i=this;if(JSON.stringify(r)==JSON.stringify(this.renderer.storiesSendingData))return null;this.renderer.storiesSendingData=r;var n={a:"refst",sid:t,uid:e,rid:this.config.ruleId,pid:"P"===cbar_pagetype?encodeURIComponent(cbar_pid):"",url:cbar_url_en,flow:cbar_flow,pt:cbar_pagetype,subattr:cbar_subproducts_attrib,wid:this.widgetId,attr:r.attrib,attr_value:r.attrib_value};this.renderer.isPreviewMode&&(n.prev_ru=this.config.ruleId),void 0!==this.renderer.config.prev_ru&&(n.prev_ru=this.renderer.config.prev_ru),rt(n,cbar_data_params,(function(){if(i.renderer.storiesSendingData=null,i.products=storiesResult,0!==i.products.length){i.products.length<i.countLines&&(i.countLines=i.products.length);var t=i._getImageSource();i.products.forEach((function(e){e.imgSrc=e[t]}));var e=new Image;e.onload=function(){i._renderLayer(i.products[0])},e.src=i.products[0].imgSrc}}))}},{key:"_restartInterval",value:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.config.timeInterval;void 0!==window.cbarStoryInterval&&clearInterval(window.cbarStoryInterval),window.cbarStoryInterval=setInterval((function(){if(null!=t.targetBody.querySelector(".cbar-wdes-stories-".concat(t.ruleId," .story-slide-active"))){var r=e<t.config.timeInterval;t._changeSlide("next",r)}else t._stopInterval()}),e)}},{key:"_stopInterval",value:function(){clearInterval(window.cbarStoryInterval),delete window.cbarStoryInterval}},{key:"_slideAnimation",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.config.timeInterval,e=this.wrapper.querySelectorAll(".slide")[this.scrollIndex];e.style.transition="background-position ".concat(t,"ms linear"),e.style.backgroundPosition="100% 200%"}},{key:"_renderLayer",value:function(t){var e=this,r="cbar_WDES_stories_".concat(this.ruleId);this.wrapper=document.getElementById(r),null!=this.wrapper&&this.targetBody.removeChild(this.wrapper),this.wrapper=document.createElement("div"),this.wrapper.className="cbar-wdes-stories-".concat(this.ruleId),this.wrapper.id=r;var i=[],n=[];this.products.forEach((function(t,r){i.push("url(".concat(t.imgSrc,")")),n.push(0==r?e.config.backgroundSize:"0")})),this.wrapper.style.backgroundImage=i.join(","),this.wrapper.style.backgroundSize=n.join(","),this.wrapper.innerHTML=this._renderScrollBar()+this._renderCloseButton()+'<div class="cbar-wdes-stories-content">'.concat(this._renderContent(t),"</div>")+'<div class="cbar-wdes-stories-bottom"><span class="cbar-wdes-stories-bottomimage">'.concat(this.config.bottomIconHtml,"</span>")+"</div>",this.targetBody.append(this.wrapper),this._registerEventHandlers(),setTimeout((function(){return e._slideAnimation()}),1),this._restartInterval()}},{key:"_registerEventHandlers",value:function(){var t=this;this.wrapper.querySelector(".cbar-wdes-stories-content").addEventListener("click",(function(){return t._changeSlide("next")})),this.wrapper.addEventListener("touchstart",(function(e){return t._handleTouchStart(e)})),this.wrapper.addEventListener("touchmove",(function(e){return t._handleTouchMove(e)})),this.wrapper.addEventListener("touchend",(function(e){return t._handleTouchEnd(e)})),null!=this.wrapper.querySelector(".cbar-wdes-stories-close-button")&&this.wrapper.querySelector(".cbar-wdes-stories-close-button").addEventListener("click",(function(){return t._closeLayer()})),null!=this.wrapper.querySelector(".cbar-wdes-stories-bottomtext")&&this.wrapper.querySelector(".cbar-wdes-stories-bottomtext").addEventListener("click",(function(){return t._handleClick()})),this.wrapper.querySelector(".cbar-wdes-stories-bottomimage").addEventListener("click",(function(){return t._handleClick()}))}},{key:"_handleTouchStart",value:function(t){var e=t.touches||t.originalEvent.touches;this.xDown=e[0].clientX,this.yDown=e[0].clientY;var r=this.wrapper.querySelectorAll(".slide")[this.scrollIndex],i=window.getComputedStyle(r).backgroundPosition;r.style.transition="",r.style.backgroundPosition=i,this._stopInterval(),this.stayTime=(new Date).getTime()}},{key:"_handleTouchMove",value:function(t){if(this.xDown&&this.yDown){var e=t.touches||t.originalEvent.touches,r=this.xDown-e[0].clientX,i=this.yDown-e[0].clientY;Math.abs(r)>Math.abs(i)?this._changeSlide(r>0?"next":"prev"):i>0&&this._handleClick(),this.xDown=null,this.yDown=null}}},{key:"_handleTouchEnd",value:function(){var t=this.config.timeInterval-((new Date).getTime()-this.stayTime);this._slideAnimation(t),this._restartInterval(t)}},{key:"_handleClick",value:function(){var t=this.products[this.productIndex];et(t.url,this.renderer.config.wdescpSetting.widget_id,this.renderer.config.wdescpSetting.content[0][0],t.id,this.ruleId)}},{key:"_closeLayer",value:function(){clearInterval(window.cbarStoryInterval),delete window.cbarStoryInterval,this.wrapper.removeEventListener("click",this._changeSlide),this.wrapper.removeEventListener("touchstart",this._handleTouchStart),this.wrapper.removeEventListener("touchmove",this._handleTouchMove),this.targetBody.removeChild(this.wrapper)}},{key:"_renderCloseButton",value:function(){var t=cbar_static_url+"img/common/dialog_close.png",e="";return this.config.closeIcon>-1&&this.config.closeSize>-1&&(t=cbar_static_url+"img/close_buttons/close"+this.config.closeIcon+"_"+this.config.closeSize+".png"),void 0!==this.config.closeCustom&&null!=this.config.closeCustom&&(t=this.config.closeCustom.url,""!=this.config.closeCustom.size&&(e+="width:".concat(this.config.closeCustom.size,"px;"))),'<img src="'.concat(t,'" style="').concat(e,'" class="cbar-wdes-stories-close-button"/>')}},{key:"_renderContent",value:function(t){var e=this,r="";return this.config.sections.forEach((function(i,n){"imageStories"!=i.type&&(r+=e.renderer._getSectionHtml(n,t,i))})),r}},{key:"_changeSlide",value:function(t){var e=this,r=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];"next"==t?(this.productIndex++,this.scrollIndex++,this.productIndex>this.products.length-1&&(this.productIndex=0),this.scrollIndex>this.countLines-1&&(this.scrollIndex=0)):(this.productIndex--,this.scrollIndex--,this.productIndex<0&&(this.productIndex=this.products.length-1),this.scrollIndex<0&&(this.scrollIndex=this.countLines-1));var i=this.products[this.productIndex],n=[];this.products.forEach((function(t,r){n.push(r==e.productIndex?e.config.backgroundSize:"0")})),this.wrapper.style.backgroundSize=n.join(","),this.wrapper.querySelector(".cbar-wdes-stories-content").innerHTML=this._renderContent(i);var o=this.wrapper.querySelector(".story-slide-active");o.style.transition="",o.classList.remove("story-slide-active"),this.wrapper.querySelectorAll(".slide").forEach((function(t,r){t.style.backgroundPosition=e.scrollIndex<=r||0==e.scrollIndex?"200% 200%":"100% 200%"})),this.wrapper.querySelectorAll(".slide")[this.scrollIndex].classList.add("story-slide-active"),setTimeout((function(){return e._slideAnimation()}),1),1==r&&this._restartInterval()}},{key:"_getImageSource",value:function(){return this.config.sections.filter((function(t){return"imageStories"==t.type}))[0].source}},{key:"_renderScrollBar",value:function(){for(var t=[],e=0;e<this.countLines;e++)t.push('<div class="slide '.concat(0==e?"story-slide-active":"",'"></div>'));return'<div class="slide-panel">'.concat(t.join(""),"</div>")}}],r&&xt(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}(),Ct=_t,Et={"4U":"Recommended For You Page",B:"Brand",C:"Category",H:"Home Page",O:"Other",P:"Product",Po:"Popup",Pu:"Thank you",S:"Search",Sc:"Cart",U:"Unknown"},kt=function(t){var e=[];for(var r in t)t.hasOwnProperty(r)&&e.push(t[r]);return e};function Pt(){return Pt=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var i in r)Object.prototype.hasOwnProperty.call(r,i)&&(t[i]=r[i])}return t},Pt.apply(this,arguments)}var Ot="Report Click",Tt=l(Ot,"#baf3d1");function Ht(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,i=new Array(e);r<e;r++)i[r]=t[r];return i}function Bt(t){return Bt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Bt(t)}function jt(){return jt=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var i in r)Object.prototype.hasOwnProperty.call(r,i)&&(t[i]=r[i])}return t},jt.apply(this,arguments)}function Lt(t,e){for(var r=0;r<e.length;r++){var i=e[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,zt(i.key),i)}}function At(t,e,r){return(e=zt(e))in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}function zt(t){var e=function(t,e){if("object"!==Bt(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var i=r.call(t,"string");if("object"!==Bt(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===Bt(e)?e:String(e)}var Rt="cbar-wdes-item-box",Ut=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),At(this,"config",{}),At(this,"ruleId",0),At(this,"ruleName",""),At(this,"ruleVariation","a"),At(this,"isPreviewMode",!1),At(this,"isWarapperInitiated",!1),At(this,"isImageHoverActivated",!1),At(this,"isPopup",!1),At(this,"wrapperElement",null),At(this,"customProducts",null),At(this,"styleElement",null),At(this,"renderedItemsCount",0),At(this,"products",null),At(this,"subProducts",null),At(this,"logger",null),At(this,"renderRetry",1),At(this,"isSubproductExists",!1),At(this,"sliderEngine",null),At(this,"flavor",0),At(this,"storiesSendingData",null),this.logger=l("WidgetRenderer","#aaffaa")}var e,r;return e=t,r=[{key:"setRuleData",value:function(t){return this.ruleId=t.id,this.ruleVariation=t.variation,this.ruleName=t.name,this}},{key:"setConfig",value:function(t){return this.isWarapperInitiated=this.isWarapperInitiated&&t.targetDiv===this.config.targetDiv,jt(this.config,function(t){for(var e=t.configVersion||1;e<26;){if(9===e&&(t.slider.customRenderer=""),10===e)for(var r in t.wdescpSetting=null,t.sections)"image"===t.sections[r].type&&(t.sections[r].imageEffect="none",t.sections[r].imageCircleBorderColor="#FFFFFF",t.sections[r].imageCircleBorderSize=1);if(11===e&&(t.tweaks={noLinkBottomMargin:0}),12===e&&(t.staticItem={url:"",minItems:3}),13===e&&(t.staticItem.href=""),e>13&&(void 0===t.stories&&(t.stories=null),void 0===t.flavor&&(t.flavor="")),16===e&&null!==t.stories){var i=t.stories.defaultCss[".slide"].filter((function(t){return!1===["background","background-size","background-position"].includes(t[0])}));i.push(["background","-webkit-linear-gradient(180deg, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255,0.42) 50%)"]),i.push(["background-size","200% 200%"]),i.push(["background-position","200% 200%"]),t.stories.defaultCss[".slide"]=i,t.stories.defaultCss[".cbar-wdes-stories-content"]=t.stories.defaultCss[".cbar-wdes-stories-content"].filter((function(t){return"background-image"!==t[0]})),t.stories.defaultCss[".cbar-wdes-stories-content"].push(["background-image","-webkit-linear-gradient(270deg,rgba(0,0,0,.2),rgba(0,0,0,0))"])}if(17===e&&(t.itemPaddingUnit="px",t.layout.paddingTop=t.itemPadding),18===e&&null!==t.stories){var n=t.stories.defaultCss[".slide"].filter((function(t){return!1===["direction"].includes(t[0])}));n.push(["direction","ltr"]),t.stories.defaultCss[".slide"]=n}if(19===e&&void 0===t.slider.autoslide&&(t.slider.autoslide=""),20===e){for(var o in t.events.hideOnShow="",t.slider.floatArrows=0,t.title.sizeUnit="px",t.title.boldType="bold",t.title.marginTop=0,t.title.marginLeft=0,t.title.marginRight=0,t.title.marginBottom=t.titleUnderline.marginBottom,t.sections)"rating"===t.sections[o].type&&(t.sections[o].ratingUrlEmpty="",t.sections[o].ratingUrlHalf="",t.sections[o].ratingUrlFull=""),"badge"===t.sections[o].type&&(t.sections[o].badgeSizeUnit="px"),"text"===t.sections[o].type&&(t.sections[o].textSizeUnit="px",t.sections[o].textBoldType="bold",t.sections[o].textHoverBoldType="bold",t.sections[o].textLetterSpacing="",t.sections[o].textLetterSpacingUnit="px",t.sections[o].textLineHeight="",t.sections[o].textLineHeightUnit="px");delete t.titleUnderline.marginBottom}if(21===e)for(var a in t.sections)if("text"===t.sections[a].type||"button"===t.sections[a].type){var s=[];""!==t.sections[a].textBgHoverColor&&s.push("bgColor"),"color"===t.sections[a].textHoverStyle?(s.push("color"),t.sections[a].textHoverStyle=""):""!==t.sections[a].textHoverStyle&&s.push("style"),t.sections[a].textHoverTypes=s}if(22===e&&(t.slider.type=1,t.slider.internal={leftImage:t.slider.leftImage,rightImage:t.slider.rightImage,floatArrows:t.slider.floatArrows,alwaysShow:t.slider.alwaysShow,customRenderer:t.slider.customRenderer,autoslide:t.slider.autoslide,size:t.slider.size},t.slider.owl={loadType:1,loadList:"",autoslide:"",repeat:0,dots:0,leftArrow:"",rightArrow:"",navSpeed:100,slideBy:1}),23===e&&(t.events.owlInit="",t.slider.owl.touchDrag=1,t.slider.owl.mouseDrag=1),24===e){for(var c in t.sections)t.sections[c].direction="";if(t.hasOwnProperty("stories")&&null!==t.stories&&t.stories.hasOwnProperty("sections"))for(var l in t.stories.sections)t.stories.sections[l].direction=t.stories.sections[l].textDir,["text","button"].includes(t.stories.sections[l].type)&&void 0===t.stories.sections[l].textHoverTypes&&(t.stories.sections[l].textHoverTypes=[])}if(25===e)for(var u in t.sections)"columns"===t.sections[u].type&&(t.sections[u].columnJustifyContent="normal",t.sections[u].columnAlignItems="normal");e++}return t}(t)),this.triggerCallback("init"),this}},{key:"setPreviewWrapper",value:function(t){return this.isWarapperInitiated=!0,this.isPreviewMode=!0,this.wrapperElement=t,this}},{key:"setProducts",value:function(t){return this.products=null,this.customProducts=t,this}},{key:"renderInPopup",value:function(){var t=document.getElementById("cbar_iframe_POP2_".concat(this.ruleId)).contentWindow.document.getElementById("cbar-wdes-popup-".concat(this.ruleId));this.setPreviewWrapper(t),this.isPreviewMode=!1,this.isPopup=!0,this._adjustWrapperElement(t),this.render();var e=0;kt(this.wrapperElement.querySelectorAll("img")).forEach((function(t){e++,t.onload=function(){0==--e&&Z("cbar_resize_popup",window,{})}}))}},{key:"render",value:function(){var t=this,e="",r=this._getProducts();0!==r.length?this._renderWrapper((function(){if(t.sliderEngine=function(t){var e=new z;if(1!==t.config.layout.mode)return e;switch(t.config.slider.type){case 1:e=new X(t);break;case 2:e=new yt(t)}return e}(t),t.isPreviewMode&&null!==t.styleElement&&(t.styleElement.remove(),t.styleElement=null),null===t.styleElement&&t._updateCssRules(),t.isImageHoverActivated=!1,t.renderedItemsCount=0,e+=t._renderStaticImage(),r.forEach((function(r,i){e+=t._renderItemWrapper(t._getItemHtml(r),i),t.renderedItemsCount++})),e=t._renderTitle()+t._renderMainWrapper(e),e=t.sliderEngine.render(e),t.wrapperElement.innerHTML=e,t.sliderEngine.setHandlers(),t._setClickHandlers(),t._setButtonHandlers(),t._setImageHoverHandlers(),t.triggerCallback("show"),""!==t.config.events.hideOnShow){var i=document.querySelector(t.config.events.hideOnShow);null!==i&&(i.style.display="none")}})):this.log("Widget for rule ".concat(this.ruleId," not rendered, no products"))}},{key:"log",value:function(t){this.logger(t),this.triggerCallback("error",[t])}},{key:"_setImageHoverHandlers",value:function(){this.isImageHoverActivated&&kt(this.wrapperElement.querySelectorAll("img")).forEach((function(t){var e=t.dataset.hover||"",r=t.src;""!==e&&(t.addEventListener("mouseenter",(function(t){t.currentTarget.src=e})),t.addEventListener("mouseout",(function(t){t.currentTarget.src=r})))}))}},{key:"_setButtonHandlers",value:function(){var t=this,e=[];this.config.sections.forEach((function(t,r){"button"===t.type&&e.push(r)})),0!==e.length&&kt(this.wrapperElement.querySelectorAll(".cbar-wdes-item")).forEach((function(r){var i=r.dataset.id;e.forEach((function(e){var n=r.querySelector(".cbar-wdes-section-".concat(e));null!==n?n.addEventListener("click",(function(r){r.stopPropagation(),r.preventDefault();var n=t._getProducts()[i];t._reportClick(n);var o=t.config.sections[e].buttonJs,a=new w;a.setHtml(o),new Function(a.getHtml(n))()})):t.log("Unable to set button handler. Product: ".concat(i,", section: ").concat(e,"."))}))}))}},{key:"_setClickHandlers",value:function(){var t=this,e=function(e,r){var i,n=e;return(n=(n=(n=n.replace("{rule_name}",t.ruleName)).replace("{product_name}",r.name)).replace("{page_url}",document.location.href)).replace("{page_type}",(i=cbar_pagetype,Et.hasOwnProperty(i)?Et[i]:""))},r=function e(r){var i=parseInt(r.dataset.id);kt(r.querySelectorAll(".cbar-wdes-subproduct")).forEach((function(n){n.addEventListener("click",(function(o){o.stopPropagation(),o.preventDefault();var a=t._getSubProducts(i);if(a.hasOwnProperty(n.dataset.id)){var s=a[n.dataset.id];s.itemIndex=i,t.products[i]=s,r.innerHTML=t._getItemHtml(s),r.href=s.url,e(r)}}))}))};kt(this.wrapperElement.querySelectorAll(".cbar-wdes-item")).forEach((function(i){i.addEventListener("click",(function(r){var i=r.currentTarget.dataset.id,n=t._getProducts()[i];if(t.isPreviewMode||1!==t.config.tracking.enable||cbarDirectTriggerGAEvent({tracker:t.config.tracking.tracker,category:t.config.tracking.category||"Barilliance",action:e(t.config.tracking.action,n),label:e(t.config.tracking.label,n),isNonInteraction:!1}),null!=t.config.stories){r.stopPropagation();var o=t.isPreviewMode?document.querySelector("#wdes_preview_widget .preview-block iframe").contentDocument.body:document.querySelector("body");new Ct({attrib:n.xtr3,attrib_value:n.xtr4},t,o)}else if(null!=t.config.wdescpSetting)et(n.url,t.config.wdescpSetting.widget_id,t.config.wdescpSetting.content[0][0],n.id,t.ruleId,1===t.config.linkTargetBlank);else{var a=t._reportClick(n);Z("cbar_widget_clicked",document,jt(a,{t:"rec"})),1===t.config.linkTargetBlank?window.open(n.url):(t.isPopup?top.document.location:document.location).href=n.url}r.preventDefault()})),t.isSubproductExists&&r(i)}))}},{key:"_reportClick",value:function(t){return function(t){if(!navigator.sendBeacon){var e="Beacon API not supported";return Tt(e),cbar_log_error("".concat(Ot,": ").concat(e)),{}}var r=0;t.hasOwnProperty("ruleId")&&cbarApp.ruleVariations.hasOwnProperty(t.ruleId)&&(r=cbarApp.ruleVariations[t.ruleId]);var i=Pt({siteId:cbar_sid,userId:cbar_uid,pagetype:cbar_pagetype,productId:cbar_pid,categoryId:cbar_cid,variationId:r},t),n=new FormData;return Object.keys(i).forEach((function(t){return n.append(t,i[t])})),navigator.sendBeacon("https://www.barilliance.net/api/report/click",n),i}({mode:"widgetV3",ruleId:this.ruleId,clickedProductId:t.id,variation:this.ruleVariation,widgetId:this.config.engine.group,rectype:this._getRectype(),originalProductId:t.originalId,promotedRuleId:t.promotedRuleId})}},{key:"_renderTitle",value:function(){var t=this.config.title.text.trim();if(null===this.customProducts&&!this.isPopup){var e=!1;if(rule_title_index.length>0){var r=rule_title_index[this.config.engine.group]||0,i="object"===("undefined"==typeof cbar_recstep_titles?"undefined":Bt(cbar_recstep_titles))&&cbar_recstep_titles[r]||"";""!==i&&(e=!0,t=decodeURIComponent(i.replace(/\+/g," ")))}if(cbar_override_titles&&!e){var n=cbar_override_titles[this.config.engine.group]||0;n>0&&this.config.engine.flowTitles[n]&&(t=this.config.engine.flowTitles[n])}}return""===t?"":'<div class="cbar-wdes-title">'.concat(t,"</div>")}},{key:"_adjustWrapperElement",value:function(t){t.className="cbar-wdes-".concat(this.ruleId),t.dataset.rule=this.ruleId,t.dataset.rectype=this._getRectype(),t.dataset.content=this.config.engine.group}},{key:"_renderWrapper",value:function(t){var e=this;if(this.isWarapperInitiated)t();else{var r=null;try{r=document.querySelector(this.config.targetDiv.toString())}catch(t){}if(null===r)return 10===this.renderRetry?void this.log("Wrapper not initialized; Rule ID: ".concat(this.ruleId)):(this.log("Wrapper not found. Attempt ".concat(this.renderRetry)),this.renderRetry++,void setTimeout((function(){return e._renderWrapper(t)}),500));switch(this.wrapperElement=document.createElement("div"),this.wrapperElement.id="cbar_widget_".concat(this.ruleId),this._adjustWrapperElement(this.wrapperElement),this.config.insertPosition){case 2:r.parentNode.insertBefore(this.wrapperElement,r);break;case 3:r.parentNode.insertBefore(this.wrapperElement,r.nextSibling);break;default:r.appendChild(this.wrapperElement)}document.addEventListener("cbar_resize",(function(){return e._getRequiredItems()})),this.isWarapperInitiated=!0,t()}}},{key:"_getRequiredItems",value:function(){var t,e=this;if(1!==this.config.layout.mode&&void 0!==this.config.wdescpSetting&&null!==this.config.wdescpSetting){var r=(t=this.config.layout.layers,function(t){if(Array.isArray(t))return Ht(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(t){if("string"==typeof t)return Ht(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?Ht(t,e):void 0}}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()).filter((function(t){return t.size<=window.innerWidth})).pop(),i=2===this.config.layout.mode?r.rows:1,n=r.count*i,o=this._getProducts(),a=o.length;n>a&&(this.config.wdescpSetting.sizes=[r.size,r.count,r.rows,5,[]],this.config.wdescpSetting.amount=n-a,this.config.wdescpSetting.offset=a,rt({a:"refcp",sid:cbar_sid,uid:cbar_uid,WDESCP:JSON.stringify(this.config.wdescpSetting)},"",(function(){cp_products.forEach((function(t,r){t=new g(t,r),o.push(t);var i=document.createElement("div");i.innerHTML=e._renderItemWrapper(e._getItemHtml(t),a+r),e.wrapperElement.querySelector(".cbar-wdes-wrapper").append(i.firstChild),e.renderedItemsCount++}))})))}}},{key:"_updateCssRules",value:function(){var t=this,e=this.ruleId,r=2===this.config.layout.mode||3===this.config.layout.mode;this.styleElement=this.wrapperElement.ownerDocument.createElement("style"),this.wrapperElement.ownerDocument.head.appendChild(this.styleElement);var i={left:"flex-start",center:"center",right:"flex-end"},n=function(t){return""===t?"transparent":t},o=this.isPopup&&!this.isPreviewMode?"only screen and (min-device-width:":"only screen and (min-width:",a=[[".cbar-wdes-".concat(e),[""!==this.config.widgetBgColor?["background-color",n(this.config.widgetBgColor)]:null]],[".cbar-wdes-".concat(e," .cbar-wdes-wrapper-holder"),[["width","100%"],["overflow","hidden"]]],[".cbar-wdes-".concat(e," .cbar-wdes-wrapper"),[["all","initial"],["width","100%"],["display","flex"],["justify-content","ltr"===this.config.layout.direction?"left":"right"],["transition","0.5s ease-in-out"],["padding-top","".concat(this.config.layout.paddingTop,"px")],["direction",this.config.layout.direction],["touch-action","manipulation"],1===this.config.layout.mode?["will-change","left"]:null,r?null:["overflow","hidden"],r?["flex-wrap","wrap"]:null]],[".cbar-wdes-".concat(e," img.cbar-wdes-static-image"),[["width",1===this.config.layout.mode?"calc(100% - 0.5em)":"100%"],["height","100%"],["object-fit","cover"]]],[".cbar-wdes-".concat(e," .cbar-wdes-wrapper.touch-started"),[["transition","unset"]]],[".cbar-wdes-".concat(e," .cbar-wdes-wrapper-border"),[this.config.widgetBorder.size>0?["border","".concat(this.config.widgetBorder.size,"px solid ").concat(n(this.config.widgetBorder.color))]:null,this.config.widgetBorder.radius>0?["border-radius","".concat(this.config.widgetBorder.radius,"px")]:null]],[".cbar-wdes-".concat(e," .cbar-wdes-wrapper *"),[["box-sizing","border-box"]]],[".cbar-wdes-".concat(e," .cbar-wdes-title"),[["font-size","".concat(this.config.title.size).concat(this.config.title.sizeUnit)],this._getTextStyle(this.config.title.style,this.config.title.boldType),["padding-bottom","0.2em"],["margin","".concat(this.config.title.marginTop,"px ").concat(this.config.title.marginRight,"px ").concat(this.config.title.marginBottom,"px ").concat(this.config.title.marginLeft,"px")],this.config.titleUnderline.size>0?["border-bottom","".concat(this.config.titleUnderline.size,"px solid ").concat(n(this.config.titleUnderline.color))]:null,["text-align",this.config.title.align],["color",this.config.title.color],""!==this.config.title.bgColor?["background-color",n(this.config.title.bgColor)]:null,""!==this.config.title.font?["font-family",this.config.title.font]:null]],[".cbar-wdes-".concat(e," .").concat(Rt),[["width","100%"],["padding-bottom","0.5em"],["flex","none"],["touch-action","pan-y"],["user_select","none"]]],[".cbar-wdes-".concat(e," .cbar-wdes-item"),[["display","block"],["color","black"],["padding","".concat(this.config.itemPadding).concat(this.config.itemPaddingUnit)],["margin","0 0.5em"+(1===this.config.tweaks.noLinkBottomMargin?"":" 0.5em")],["text-decoration","none"],this.config.itemBorder.size>0?["border","".concat(this.config.itemBorder.size,"px solid ").concat(n(this.config.itemBorder.color))]:null,this.config.itemBorder.radius>0?["border-radius","".concat(this.config.itemBorder.radius,"px")]:null,this.config.itemShadow.offset>0?["box-shadow","".concat(this.config.itemShadow.offset,"px ").concat(this.config.itemShadow.offset,"px ").concat(this.config.itemShadow.blur,"px 0 ").concat(n(this.config.itemShadow.color))]:null,""!==this.config.itemBgColor?["background-color",n(this.config.itemBgColor)]:null,["height","100%"],["overflow","hidden"]]],[".cbar-wdes-".concat(e," .cbar-wdes-item:hover"),[this.config.itemBorder.size>0?["border-color",n(this.config.itemBorder.hoverColor)]:null,this.config.itemShadow.offset>0?["box-shadow","".concat(this.config.itemShadow.offset,"px ").concat(this.config.itemShadow.offset,"px ").concat(this.config.itemShadow.blur,"px 0 ").concat(n(this.config.itemShadow.hoverColor))]:null]],[".cbar-wdes-".concat(e," .cbar-wdes-item:after"),[["content",""],["clear","both"],["height","0"],["display","block"]]]];this.sliderEngine.setCss(a);var s=function(r,i){0!==r.textHoverTypes.length&&a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(i,":hover"),[r.textHoverTypes.includes("style")?t._getTextStyle(r.textHoverStyle,r.textHoverBoldType):null,r.textHoverTypes.includes("color")?["color",n(r.textHoverColor)]:null,r.textHoverTypes.includes("bgColor")?["background",n(r.textBgHoverColor)]:null]])};if(1!==this.config.layout.mode&&this._layerItterator((function(r){var i=r.count*(2===t.config.layout.mode?r.rows:1);a.push([".cbar-wdes-".concat(e," .").concat(Rt,":nth-child(-n+").concat(i,")"),[["display","block"]],"".concat(o," ").concat(r.size,"px)")]),a.push([".cbar-wdes-".concat(e," .").concat(Rt,":nth-child(n+").concat(i+1,")"),[["display","none"]],"".concat(o," ").concat(r.size,"px)")])}),"a",!0),this.config.sections.forEach((function(r,c){var l=[];switch("columns"!==r.type&&(l=[".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c),[["text-align",r.align],["margin","".concat(r.marginTop,"px ").concat(r.marginRight,"px ").concat(r.marginBottom,"px ").concat(r.marginLeft,"px")],["padding","".concat(r.paddingTop,"px ").concat(r.paddingRight,"px ").concat(r.paddingBottom,"px ").concat(r.paddingLeft,"px")],"none"===r.float?["clear","both"]:null,"none"!==r.float?["float",r.float]:null,""!==r.direction?["direction",r.direction]:null]]),r.type){case"badge":l[1].push(["color",r.badgeColor]),l[1].push(["font-size","".concat(r.badgeSize).concat(r.badgeSizeUnit)]),""!==r.badgeStyle&&l[1].push(t._getTextStyle(r.badgeStyle)),""!==r.badgeFont&&l[1].push(["font-family",r.badgeFont]),r.badgeBorderRadius>0&&l[1].push(["border-radius","".concat(r.badgeBorderRadius,"px")]),""===r.badgeImage?l[1].push(["background-color",n(r.badgeBgColor)]):l[1].push(["background-image","url(".concat(r.badgeImage,")")]),0==r.badgeOffsetX&&0==r.badgeOffsetY||(l[1].push(["position","relative"]),l[1].push(["display","inline"]),l[1].push(["left","".concat(r.badgeOffsetX,"px")]),l[1].push(["top","".concat(r.badgeOffsetY,"px")]),a.push([".cbar-wdes-".concat(e," .cbar-badge-wrapper-").concat(c),[["height",0]]])),""!==r.badgeBgColorHover&&a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c,":hover"),[["background-color",n(r.badgeBgColorHover)]]]),(0!==r.badgeShadowOffset||r.badgeShadowBlur>0)&&l[1].push(["box-shadow","".concat(r.badgeShadowOffset,"px ").concat(r.badgeShadowOffset,"px ").concat(r.badgeShadowBlur,"px 0 ").concat(n(r.badgeShadowColor))]);break;case"columns":l=[".cbar-wdes-".concat(e," .cbar-wdes-grouping-").concat(c),[["display","flex"],["justify-content",r.columnJustifyContent],["align-items",r.columnAlignItems]]];for(var u=0;u<r.columnCount;++u)a.push([".cbar-wdes-".concat(e," .cbar-wdes-grouping-").concat(c," .cbar-wdes-group-cell-").concat(c,"-").concat(u),[["width",0==r.columnWidth[u]?"auto":"".concat(r.columnWidth[u],"%")]]]);break;case"image":var d=[["width","100%"]];"circle"===r.imageEffect&&(""!==r.imageCircleBorderColor&&""!==r.imageCircleBorderSize&&d.push(["border","solid "+r.imageCircleBorderColor+" "+r.imageCircleBorderSize+"px"]),d.push(["border-radius","50%"]),d.push(["aspect-ratio","1 / 1"]),d.push(["object-fit","cover"])),"circle"!==r.imageEffect&&""!==r.imageHeightRatio&&(d.push(["object-fit","contain"]),t._layerItterator((function(i){var n=3===t.config.layout.mode?1:i.count;a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c," .cbar-wdes-image"),[["height",parseInt((i.size/n-32)*r.imageHeightRatio/100)+"px"]],"".concat(o," ").concat(i.size,"px)")])}),"a",!0)),a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c," .cbar-wdes-image"),d]);break;case"rating":a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c," .cbar-wdes-star"),[["width","".concat(r.ratingStarSize,"px")],["height","".concat(r.ratingStarSize,"px")]]]);break;case"separator":l[1].push(["background-color",n(r.separatorColor)]),l[1].push(["height","".concat(r.separatorHeight).concat(r.separatorHeightUnit)]);break;case"subproduct":l[1].push(["display","flex"]),l[1].push(["justify-content",i[r.align]]),l[1].push(["flex-wrap","wrap"]),l[1].push(["flex-wrap","wrap"]),a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c," .cbar-wdes-subproduct"),[["width","".concat(parseInt(100/r.subproductMaxRowItems),"%")],["aspect-ratio","1 / 1"],["padding","2px"]]]),a.push([".cbar-wdes-".concat(e," .cbar-wdes-section-").concat(c," .cbar-wdes-subproduct .cbar-item"),[["width","100%"],["height","100%"],["border-radius","50%"]]]);break;case"button":case"text":if(l[1].push(["font-size","".concat(r.textSize).concat(r.textSizeUnit)]),l[1].push(["color",""===r.textColor?"#000000":r.textColor]),""!==r.textBgColor&&l[1].push(["background-color",n(r.textBgColor)]),""!==r.textStyle&&l[1].push(t._getTextStyle(r.textStyle,r.textBoldType)),""!==r.textFont&&l[1].push(["font-family",r.textFont]),""!==r.textLetterSpacing&&l[1].push(["letter-spacing","".concat(r.textLetterSpacing).concat(r.textLetterSpacingUnit)]),""!==r.textLineHeight&&l[1].push(["line-height","".concat(r.textLineHeight).concat(r.textLineHeightUnit)]),1==r.textEllipsis){var h=""!==r.textLineHeight?parseFloat(r.textLineHeight):1.3,f=""!==r.textLineHeight?r.textLineHeightUnit:"em",p=parseInt(r.textEllipsisLines)*h,g=["max-height","height"][parseInt(r.textEllipsisMode)];l[1].push(["display","-webkit-box"]),l[1].push(["-webkit-line-clamp",r.textEllipsisLines]),l[1].push(["-webkit-box-orient","vertical"]),l[1].push(["overflow","hidden"]),l[1].push(["line-height","".concat(h).concat(f)]),l[1].push([g,"".concat(p).concat(f)])}s(r,c)}a.push(l)})),null!=this.config.stories){Object.keys(this.config.stories.defaultCss).forEach((function(r){a.push([".cbar-wdes-stories-".concat(e).concat(0==r.length?"":" "+r),t.config.stories.defaultCss[r]])})),a.push([".cbar-wdes-stories-".concat(e),[["background-size",this.config.stories.backgroundSize]]]);var c=["top","1px"],l=["left","1px"];switch(this.config.stories.closePos){case"tr":l=["right","1px"];break;case"br":c=["bottom","1px"],l=["right","1px"];break;case"bl":c=["bottom","1px"]}a.push([".cbar-wdes-stories-".concat(e," .cbar-wdes-stories-close-button"),[["position","absolute"],c,l,["margin",this.config.stories.closeOffset+"px"],["z-index","2"]]]),this.config.stories.sections.forEach((function(r,i){var o=[".cbar-wdes-stories-".concat(e," .cbar-wdes-section-").concat(i),[["text-align",r.align],["margin","".concat(r.marginTop,"px ").concat(r.marginRight,"px ").concat(r.marginBottom,"px ").concat(r.marginLeft,"px")],["padding","".concat(r.paddingTop,"px ").concat(r.paddingRight,"px ").concat(r.paddingBottom,"px ").concat(r.paddingLeft,"px")],"none"===r.float?["clear","both"]:null,"none"!==r.float?["float",r.float]:null,""!==r.direction?["direction",r.direction]:null]];if("text"===r.type){if(o[1].push(["font-size","".concat(r.textSize,"px")]),o[1].push(["color",""===r.textColor?"#000000":r.textColor]),""!==r.textBgColor&&o[1].push(["background-color",n(r.textBgColor)]),""!==r.textStyle&&o[1].push(t._getTextStyle(r.textStyle,r.textBoldType)),""!==r.textFont&&o[1].push(["font-family",r.textFont]),1==r.textEllipsis){var c=1.3*parseInt(r.textEllipsisLines),l=["max-height","height"][parseInt(r.textEllipsisMode)];o[1].push(["display","-webkit-box"]),o[1].push(["-webkit-line-clamp",r.textEllipsisLines]),o[1].push(["-webkit-box-orient","vertical"]),o[1].push(["overflow","hidden"]),o[1].push(["line-height","".concat(1.3,"em")]),o[1].push([l,"".concat(c,"em")])}o[1].push(["z-index",2]),o[1].push(["width","calc(100% - ".concat(parseFloat(r.marginRight)+parseFloat(r.marginLeft),"px)")]),void 0!==r.valign&&(o[1].push(["position","absolute"]),"middle"==r.valign&&(o[1].push(["top","50%"]),o[1].push(["transform","translateY(-50%)"])),"bottom"==r.valign&&(o[1].push(["top","100%"]),o[1].push(["transform","translateY(-100%)"]))),s(r,i),o[1].push(["direction",r.textDir])}a.push(o)}))}this._layerItterator((function(r){a.push([".cbar-wdes-".concat(e," .").concat(Rt),[["width",t._niceDivide(100,r.count)+"%"]],"".concat(o," ").concat(r.size,"px)")])}),"a"),this.isPopup&&a.push([".block-grid > div",[["display","block !important"]]]),a.forEach((function(e){var r="".concat(e[0]," {");e[1].forEach((function(t){null!==t&&(r+="".concat(t[0],": ").concat(t[1],"; "))})),r+="}",e[2]&&(r="@media ".concat(e[2]," { ").concat(r," }")),t.styleElement.sheet.insertRule(r,t.styleElement.sheet.cssRules.length)}))}},{key:"_getTextStyle",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"bold";switch(t){case"bold":return["font-weight",e];case"italic":return["font-style",t];case"line-through":case"underline":return["text-decoration",t]}return null}},{key:"_layerItterator",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],i=this.config.layout.layers;r||3!==this.config.layout.mode||(i=[{size:1,count:1}]),"desc"!==e&&"d"!==e||i.sort((function(t,e){return e.size-t.size})),"asc"!==e&&"a"!==e||i.sort((function(t,e){return t.size-e.size})),"function"==typeof e&&i.sort(e),i.forEach((function(e){""!==e.size&&t(e)}))}},{key:"_niceDivide",value:function(t,e){return 0===e?t:Math.floor(t/e*100)/100}},{key:"_getProducts",value:function(){if(null!==this.products)return this.products;var t=[],e=[];return null!==this.customProducts?e=this.customProducts:cbar_results&&cbar_results[this.config.engine.group]&&(e=cbar_results[this.config.engine.group]),e.forEach((function(e,r){return t.push(new g(e,r))})),this.products=t,t}},{key:"_getSubProducts",value:function(t){if(null===this.subProducts){var e=[];cbar_subproducts&&cbar_subproducts[this.config.engine.group]&&cbar_subproducts[this.config.engine.group].forEach((function(t,r){e[r]=[],t.forEach((function(t){return e[r].push(new g(t))}))})),this.subProducts=e}return this.subProducts.hasOwnProperty(t)?this.subProducts[t]:[]}},{key:"_getItemHtml",value:function(t){var e=this,r="",i=[];for(this.config.sections.forEach((function(n,o){if("columns"===n.type)i.push(new B(n,o));else{var a=e._getSectionHtml(o,t);if(0===i.length)r+=a;else{var s=i[i.length-1];for(s.pushSection(a);i.length>0&&s.isFilled();)i.pop(),0===i.length?r+=s.getHtml():(i[i.length-1].pushSection(s.getHtml()),s=i[i.length-1])}}}));i.length>0;){var n=i.pop();0===i.length?r+=n.getHtml():i[i.length-1].pushSection(n.getHtml())}return r}},{key:"_getSectionHtml",value:function(t,e){var r=this,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,n=new k(null!==i?i:this.config.sections[t]);if(1===n.displayCondition){if(void 0!==e[n.displayConditionField]){var o=e[n.displayConditionField];if(null!==o&&""!==(""+o).trim())return""}}else if(2===n.displayCondition){if(void 0===e[n.displayConditionField])return"";var a=e[n.displayConditionField];if(null===a||""===(""+a).trim())return""}if(""!==n.html.trim()){var s=new w;return s.setHtml(n.html),s.getHtml(e)}var c='<div class="cbar-wdes-section-'.concat(t,'">'),l=e[n.source];switch("rec18precent"===n.source&&(l=this.config.engine[e.id==cbar_pid?"rec18TitleCurrent":"rec18Title"].replace("{percent}",e.rec18precent)),!l&&n.defaultValue&&(l=n.defaultValue),n.type){case"badge":var u=""!==n.badgeText?n.badgeText:l;c='<div class="cbar-badge-wrapper-'.concat(t,'">').concat(c).concat(u,"</div>");break;case"image":var d="";if(""!==n.imageHoverSource){this.isImageHoverActivated=!0;var h=e[n.imageHoverSource]||"";d='data-hover="'.concat(h,'"')}var f="";1===n.imageAlt&&(f=e.name),c+='<img src="'.concat(l,'" class="cbar-wdes-image" loading="eager" alt="').concat(f,'" title="').concat(f,'" ').concat(d,">");break;case"rating":c+=this._getRatingSectionHtml(n,l);break;case"separator":break;case"subproduct":var p=0===parseInt(n.subproductSourceType);c+=this._getSubProducts(e.itemIndex).map((function(t,e){r.isSubproductExists=!0;var i=t[n.source];return'<div class="cbar-wdes-subproduct" data-id="'.concat(e,'">')+(p?'<img class="cbar-item" src="'.concat(i,'" alt="">'):'<div class="cbar-item" style="background-color: '.concat(i,'"></div>'))+"</div>"})).splice(0,n.subproductMaxItems).join("");break;case"button":""!==n.buttonText&&(l=n.buttonText),c+=n.textPrefix+l+n.textSuffix;break;case"text":c+=n.textPrefix+l+n.textSuffix;break;default:return""}return c+"</div>"}},{key:"_getRatingSectionHtml",value:function(t,e){var r=parseFloat(e||0),i="";isNaN(r)&&(r=0);for(var n=0;n<t.ratingMaxValue;++n)i+=this._getRatingStar(t,r),r-=1;return i}},{key:"_getRatingStar",value:function(t,e){var r="",i=e<.25?t.ratingDisColor:t.ratingColor,n=e>.75?t.ratingColor:t.ratingDisColor;if("rtl"===this.config.layout.direction){var o=[n,i];i=o[0],n=o[1]}if(1===t.ratingIconType)r='<svg class="cbar-wdes-star" width="475.044" height="475.044" version="1.1" viewBox="0 0 475.044 475.044">\n\t\t\t\t<path fill="'.concat(n,'" d="m237.5044,394.08104l130.42796,68.45295c10.68757,5.63708 23.84912,-2.89371 21.83035,-14.60004l-25.07621,-145.94401l106.08405,-103.23372c8.41151,-8.17377 3.58231,-22.04099 -8.37193,-23.76969l-146.0239,-21.17663l-65.45148,-132.35864c-4.88858,-9.88368 -4.9689,-8.88368 -13.85747,-8l0.43863,380.62978z"/>\n\t\t\t\t<path fill="').concat(i,'" d="m237.531,10.977c-5.519,0 -10.183,3.9 -13.988,11.704l-64.241,129.905l-143.324,20.839c-8.564,1.332 -13.704,4.615 -15.415,9.851c-1.709,5.236 0.478,10.898 6.567,16.989l103.924,101.068l-24.553,142.749c-0.95,6.286 -0.381,11.173 1.715,14.702c2.092,3.524 5.33,5.283 9.707,5.283c3.237,0 7.043,-1.14 11.42,-3.433l128.194,-67.382l-0.006,-382.275z"/>\n\t\t\t</svg>');else if(2===t.ratingIconType)r='<svg class="cbar-wdes-star" version="1.1" width="460" height="460" viewBox="0 0 460 460">\n\t\t\t\t<path fill="none" stroke="'.concat(t.ratingBorderColor,'" stroke-width="40" stroke-miterlimit="40" d="M211.904,207.675l-24.51,2.14   c-0.7,0.07-44.109,3.86-87.71,7.66c34.689,30.21,66.17,57.669,66.71,58.14l18.58,16.211l-5.601,24.01c0,0-10.52,45.08-19.789,84.83   c39.39-23.76,75.039-45.26,75.039-45.26l20.66-12.464l21.682,12.462c0,0,35.569,21.451,74.858,45.141   c-10.439-44.389-19.859-84.25-20.02-84.939l-5.718-24.191l18.8-16.26c0.54-0.459,31.96-27.619,66.58-57.57   c-38.51-3.35-86.59-7.559-87.21-7.619l-24.521-2.141l-9.63-22.66c-0.269-0.64-15.77-37.075-33.581-78.995L211.904,207.675z"/>\n\t\t\t\t<path fill="').concat(n,'" d="M411.467,217.584c-34.621,29.95-66.041,57.11-66.58,57.571l-18.801,16.26l5.719,24.191   c0.16,0.688,9.58,40.549,20.02,84.938c-39.289-23.688-74.859-45.139-74.859-45.139l-21.16-12.762V104.575l34.301,80.59l9.629,22.66   L411.467,217.584z"/>\n\t\t\t\t<path fill="').concat(i,'" d="M255.805,104.575v238.069l-1.082,0.638c0,0-55.986,32.575-95.275,56.263c10.439-44.389,19.859-84.25,20.02-84.938  l5.719-24.191l-18.801-16.26c-0.539-0.461-31.959-27.621-66.58-57.571l111.732-9.76"/>\n\t\t\t</svg>');else if(3===t.ratingIconType){var a="ratingUrlHalf";e<.25?a="ratingUrlEmpty":e>.75&&(a="ratingUrlFull"),r='<img class="cbar-wdes-star" src="'.concat(t[a],'" alt="">')}return r}},{key:"_renderMainWrapper",value:function(t){return'<div class="cbar-wdes-wrapper-border">\n\t\t\t<div class="cbar-wdes-wrapper-holder">\n\t\t\t\t<div class="cbar-wdes-wrapper">'.concat(t,"</div>\n\t\t\t</div>\n\t\t</div>")}},{key:"_renderItemWrapper",value:function(t,e){var r=this._getProducts()[e],i=this.isPopup?'target="_top"':"",n="cp"==this.config.flavor?decodeURI(r.url):r.url;return'<div class="'.concat(Rt,'" cbar_type="rec" cbar_pid="').concat(r.originalId,'">\n\t\t\t<a href="').concat(encodeURI(n),'" class="cbar-wdes-item" data-id="').concat(e,'" ').concat(i,">").concat(t,"</a>\n\t\t</div>")}},{key:"countCurrentLayerItems",value:function(){var t=window.innerWidth;if(this.isPreviewMode){for(var e=this.wrapperElement;"BODY"!==e.tagName;)e=e.parentNode;e.clientWidth}var r=0;return this._layerItterator((function(e){t>=e.size&&(r=e.count)}),"a"),0===r&&(r=this.config.layout.layers[0].count),r}},{key:"_renderStaticImage",value:function(){if(""===this.config.staticItem.url)return"";var t=this.countCurrentLayerItems();if(this.config.staticItem.minItems>t)return"";this.renderedItemsCount++;var e=""===this.config.staticItem.href?"div":"a",r=""===this.config.staticItem.href?"":'href="'.concat(this.config.staticItem.href,'"'),i="popup"==this.config.flavor?'target="_parent"':"";return"<".concat(e,' class="').concat(Rt,'" ').concat(r," ").concat(i,'>\n\t\t\t<img src="').concat(encodeURI(this.config.staticItem.url),'" alt="" class="cbar-wdes-static-image">\n\t\t</').concat(e,">")}},{key:"triggerCallback",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[],r=this.config.events[t]||"";return""!==r&&"function"==typeof window[r]&&window[r].apply(this,e)}},{key:"_getRectype",value:function(){return null!==this.customProducts?"content":window["cbar_rectype"+this.config.engine.group]||0}}],r&&Lt(e.prototype,r),Object.defineProperty(e,"prototype",{writable:!1}),t}(),Dt=Ut;window.CbarWidgetRenderer=Dt}();

(function(){"use strict";var __webpack_modules__={889:function(t,e){function n(t){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(t)}function r(){return r=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},r.apply(this,arguments)}function o(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,a(r.key),r)}}function i(t,e,n){return(e=a(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function a(t){var e=function(t,e){if("object"!==n(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var o=r.call(t,"string");if("object"!==n(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===n(e)?e:String(e)}var c=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),i(this,"pos3",0),i(this,"pos4",0),i(this,"config",null),i(this,"screenLimit",null),this.config=r({movable:null,mover:null,exceptionClass:"",onDragStop:function(){return!0},onDragMove:function(){return!0}},e),this._dragMouseDown=this._dragMouseDown.bind(this),this._closeDragElement=this._closeDragElement.bind(this),this._elementDrag=this._elementDrag.bind(this),null!==this.config.movable&&null!==this.config.mover&&(this.config.mover.addEventListener("mousedown",this._dragMouseDown),this.config.mover.addEventListener("touchstart",this._dragMouseDown))}var e,n;return e=t,(n=[{key:"_dragMouseDown",value:function(t){""!==this.config.exceptionClass&&t.target.classList.contains(this.config.exceptionClass)||(t.preventDefault(),this.pos3=t.clientX||t.changedTouches[0].clientX,this.pos4=t.clientY||t.changedTouches[0].clientY,this.screenLimit={left:document.documentElement.getBoundingClientRect().width-this.config.mover.getBoundingClientRect().width,top:window.innerHeight-this.config.mover.getBoundingClientRect().height},document.addEventListener("mouseup",this._closeDragElement),document.addEventListener("mousemove",this._elementDrag),document.addEventListener("touchend",this._closeDragElement),document.addEventListener("touchmove",this._elementDrag))}},{key:"_elementDrag",value:function(t){var e=t.clientX||t.changedTouches[0].clientX,n=t.clientY||t.changedTouches[0].clientY,r=this.pos3-e,o=this.pos4-n;this.pos3=e,this.pos4=n;var i=Math.max(this.config.movable.offsetTop-o,0),a=Math.max(this.config.movable.offsetLeft-r,0);i<this.screenLimit.top&&a<this.screenLimit.left&&(this.config.movable.style.top="".concat(i,"px"),this.config.movable.style.left="".concat(a,"px"),this.config.onDragMove())}},{key:"_closeDragElement",value:function(t){document.removeEventListener("mouseup",this._closeDragElement),document.removeEventListener("mousemove",this._elementDrag),document.removeEventListener("touchend",this._closeDragElement),document.removeEventListener("touchmove",this._elementDrag),this.config.onDragStop(t)}},{key:"destroy",value:function(){document.removeEventListener("mouseup",this._closeDragElement),document.removeEventListener("mousemove",this._elementDrag),document.removeEventListener("touchend",this._closeDragElement),document.removeEventListener("touchmove",this._elementDrag),this.config.mover.removeEventListener("mousedown",this._dragMouseDown),this.config.mover.removeEventListener("touchstart",this._dragMouseDown)}}])&&o(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}();e.Z=c},869:function(t,e,n){var r=n(552),o=null,i=console.log;e.Z={register:function(t,e){return null===o&&(o=0!==r.Z.local.get("cbar-debug",0)),o?function(n){i("%c".concat(t,":%c ").concat(n),"background-color: ".concat(e,";"),"");for(var r=arguments.length,o=new Array(r>1?r-1:0),a=1;a<r;a++)o[a-1]=arguments[a];o.forEach((function(t){return i(t)}))}:function(){return!0}}}},374:function(t,e){function n(t){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(t)}function r(t,e){for(var r=0;r<e.length;r++){var o=e[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,(void 0,i=function(t,e){if("object"!==n(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var o=r.call(t,"string");if("object"!==n(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(o.key),"symbol"===n(i)?i:String(i)),o)}var i}var o=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}var e,n;return e=t,(n=[{key:"setCss",value:function(){}},{key:"inject",value:function(){}},{key:"_getResetStyles",value:function(){return["line-height: initial;","box-sizing: border-box;","position: absolute;","text-align: center;"]}},{key:"_getFontString",value:function(t){return t.split(",").map((function(t){return-1!==(t=t.trim()).indexOf?'"'.concat(t,'"'):t})).join(", ")}},{key:"_getClassName",value:function(t){return"cbar-badge-"+t}},{key:"_setGeneralStyle",value:function(t,e){switch(e){case"bold":t.push("font-weight: ".concat(e,";"));break;case"italic":t.push("font-style: ".concat(e,";"));break;case"line-through":case"underline":t.push("text-decoration: ".concat(e,";"));break;case"lowercase":case"uppercase":t.push("text-transform: ".concat(e,";"))}}},{key:"_setGeneralPosition",value:function(t,e){switch(e.position){case"nw":t.push("top: ".concat(e.offsetVertical,"px;")),t.push("left: ".concat(e.offsetHorizontal,"px;"));break;case"ne":t.push("top: ".concat(e.offsetVertical,"px;")),t.push("right: ".concat(e.offsetHorizontal,"px;"));break;case"sw":t.push("bottom: ".concat(e.offsetVertical,"px;")),t.push("left: ".concat(e.offsetHorizontal,"px;"));break;case"se":t.push("bottom: ".concat(e.offsetVertical,"px;")),t.push("right: ".concat(e.offsetHorizontal,"px;"))}}}])&&r(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}();e.Z=o},412:function(t,e){var n,r,o,i,a=[{string:navigator.userAgent,subString:"Edg",identity:"Edge"},{string:navigator.userAgent,subString:"Chrome",identity:"Chrome"},{string:navigator.userAgent,subString:"OmniWeb",versionSearch:"OmniWeb/",identity:"OmniWeb"},{string:navigator.vendor,subString:"Apple",identity:"Safari",versionSearch:"Version"},{prop:window.opera,identity:"Opera",versionSearch:"Version"},{string:navigator.vendor,subString:"iCab",identity:"iCab"},{string:navigator.vendor,subString:"KDE",identity:"Konqueror"},{string:navigator.userAgent,subString:"Firefox",identity:"Firefox"},{string:navigator.vendor,subString:"Camino",identity:"Camino"},{string:navigator.userAgent,subString:"Netscape",identity:"Netscape"},{string:navigator.userAgent,subString:"MSIE",identity:"Explorer",versionSearch:"MSIE"},{string:navigator.userAgent,subString:"Trident",identity:"Explorer",versionSearch:"rv"},{string:navigator.userAgent,subString:"Gecko",identity:"Mozilla",versionSearch:"rv"},{string:navigator.userAgent,subString:"Mozilla",identity:"Netscape",versionSearch:"Mozilla"}],c=[{string:navigator.userAgent,subString:"Android",identity:"Android"},{string:navigator.platform,subString:"Win",identity:"Windows"},{string:navigator.platform,subString:"Mac",identity:"Mac"},{string:navigator.userAgent,subString:"iPhone",identity:"iPhone"},{string:navigator.userAgent,subString:"iPad",identity:"iPad"},{string:navigator.platform,subString:"Linux",identity:"Linux"}],s=function(t){for(var e=0;e<t.length;e++){var n=t[e].string,r=t[e].prop;if(i=t[e].versionSearch||t[e].identity,n){if(-1!==n.indexOf(t[e].subString))return t[e].identity}else if(r)return t[e].identity}return!1},l=function(t){var e=t.indexOf(i);return-1!==e&&parseFloat(t.substring(e+i.length+1))};n=s(a)||"An unknown browser",r=l(navigator.userAgent)||l(navigator.appVersion)||"an unknown version","iPhone"===(o=s(c)||"an unknown OS")&&(navigator.appVersion.indexOf("CriOS")>-1&&(n="Chrome"),navigator.appVersion.indexOf("FxiOS")>-1&&(n="Firefox")),e.Z={browser:n,version:r,OS:o}},196:function(t,e,n){n.d(e,{lq:function(){return s},mF:function(){return l}});var r=n(869),o=n(977);function i(){return i=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},i.apply(this,arguments)}var a="Report Click",c=r.Z.register(a,"#baf3d1"),s=function(t){if(!navigator.sendBeacon){var e="Beacon API not supported";return c(e),cbar_log_error("".concat(a,": ").concat(e)),{}}var n=0;t.hasOwnProperty("ruleId")&&cbarApp.ruleVariations.hasOwnProperty(t.ruleId)&&(n=cbarApp.ruleVariations[t.ruleId]);var r=i({siteId:cbar_sid,userId:cbar_uid,pagetype:cbar_pagetype,productId:cbar_pid,categoryId:cbar_cid,variationId:n},t),o=new FormData;return Object.keys(r).forEach((function(t){return o.append(t,r[t])})),navigator.sendBeacon("https://www.barilliance.net/api/report/click",o),r},l=function(t,e,n,r){var i={rectype:n};return"bannerPopupEtc"!==n?(t.href=e,i.clickedProductId=r):(i.ruleId=r,cbarApp.gaClickEvents.hasOwnProperty(r)&&(0,o.to)(cbarApp.gaClickEvents[r])),s(i),!0};e.ZP={cbar_click:function(t){return s({clickedProductId:t.getAttribute("idx"),rectype:t.getAttribute("rectype")}),!1},cbar_click2:l,cbar_click3:function(t,e,n,r,o){for(var i=0,a=0,c=0;c<cbar_results.length;c++)for(var l=0;l<cbar_results[c].length;l++)if(cbar_results[c][l][0]==r){i=c,a=cbar_results[c][l][26],c=cbar_results.length;break}return s({rectype:n,clickedProductId:r,productId:o,widgetId:i,promotedRuleId:a}),t.href=e,!0}}},738:function(t,e,n){var r=n(552),o=function(t,e,n){if(cbar_use_cookies){var o="";if(void 0!==n){var i=new Date;i.setTime(i.getTime()+parseInt(24*n*60*60*1e3)),0!=n&&(o="; expires="+i.toGMTString())}document.cookie=t+"="+e+o+"; path=/; domain="+cbar_cookiedomain+"; secure; SameSite=Lax"}else document.cookie=t+"=0;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/; domain="+cbar_cookiedomain+"; secure; SameSite=Lax",0==n?r.Z.local.create(t,e,parseInt(1800)):r.Z.local.create(t,e,parseInt(24*n*60*60))};e.Z={create:o,read:function(t){var e=function(t){for(var e=t+"=",n=document.cookie.split(";"),r=0;r<n.length;r++){for(var o=n[r];" "==o.charAt(0);)o=o.substring(1,o.length);if(0==o.indexOf(e))return o.substring(e.length,o.length)}return null};if(1==cbar_use_cookies){var n=e(t);if(null!==n)return n}var i=r.Z.local.getRaw(t);if(null!==i){if(1==cbar_use_cookies){var a=parseInt((i.expire-(new Date).getTime()/1e3)/24/60/60);o(t,i.value,a)}return i.value}return null!==(i=r.Z.session.get(t))?(1==cbar_use_cookies&&o(t,i,0),i):e(t)}}},916:function(t,e,n){var r=n(268),o=n(599),i=n(297),a=n(977);function c(t){return c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},c(t)}function s(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,u(r.key),r)}}function l(t,e,n){return(e=u(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function u(t){var e=function(t,e){if("object"!==c(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==c(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===c(e)?e:String(e)}var f=function(){function t(e,n){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),l(this,"ruleId",null),l(this,"ruleType",null),l(this,"renderers",null),l(this,"styleSheet",null),l(this,"styleNumber",0),this.ruleId=e,this.ruleType=n,this.renderers={"basic-pagetab":new r.Z,"image-pagetab":new o.Z,"ribbon-pagetab":new i.Z}}var e,n;return e=t,(n=[{key:"inject",value:function(t,e,n){if(!this.renderers.hasOwnProperty(n.type))throw new Error("Wrong badge type "+n.type);var r="".concat(this.ruleId,"-").concat(this.ruleType,"-").concat(this.styleNumber);return null===this.styleSheet&&(this.styleSheet=(0,a.co)("cbar-badge-style-".concat(this.ruleId,"-").concat(this.ruleType))),this.renderers[n.type].setCss(r,this.styleSheet,n),this.styleNumber++,this.renderers[n.type].inject(r,e,t,n)}}])&&s(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}();e.Z=f},649:function(t,e,n){function r(t){return r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},r(t)}function o(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,s(r.key),r)}}function i(t,e){return i=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},i(t,e)}function a(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function c(t){return c=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},c(t)}function s(t){var e=function(t,e){if("object"!==r(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var o=n.call(t,"string");if("object"!==r(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===r(e)?e:String(e)}var l=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&i(t,e)}(p,t);var e,n,l,u,f=(l=p,u=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=c(l);if(u){var n=c(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===r(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return a(t)}(this,t)});function p(){var t,e,n,r;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,p);for(var o=arguments.length,i=new Array(o),c=0;c<o;c++)i[c]=arguments[c];return e=a(t=f.call.apply(f,[this].concat(i))),r="//s3.amazonaws.com/static.barilliance.com/img/close_buttons/close7_12.png",(n=s(n="iconUrl"))in e?Object.defineProperty(e,n,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[n]=r,t}return e=p,n=[{key:"renderCloseBtnPageTab",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",e=document.createElement("img");return e.src=this.iconUrl,e.className="js-badge-close-btn",e.style.cssText=t,e}},{key:"setSizeCss",value:function(t,e){this.lastStyleshit.insertRule(".".concat(this._getClassName(t)," { ").concat(["will-change:top, left, inset;"].join(" ")," } "),this.lastStyleshit.cssRules.length)}},{key:"_getResetStyles",value:function(){return["line-height: initial;","box-sizing: border-box;","position: absolute;","text-align: center;","-webkit-text-stroke-width:initial;"]}}],n&&o(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),p}(n(374).Z);e.Z=l},268:function(t,e,n){function r(t){return r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},r(t)}function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function i(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,u(r.key),r)}}function a(t,e){return a=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},a(t,e)}function c(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function s(t){return s=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},s(t)}function l(t,e,n){return(e=u(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function u(t){var e=function(t,e){if("object"!==r(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var o=n.call(t,"string");if("object"!==r(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===r(e)?e:String(e)}var f=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&a(t,e)}(d,t);var e,n,u,f,p=(u=d,f=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=s(u);if(f){var n=s(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===r(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return c(t)}(this,t)});function d(){var t;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,d);for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return l(c(t=p.call.apply(p,[this].concat(n))),"lastStyleshit",null),l(c(t),"preview",null),t}return e=d,(n=[{key:"setCss",value:function(t,e,n){this.preview=e.ownerNode.id.indexOf("preview")>-1;var r,i=[].concat(function(t){if(Array.isArray(t))return o(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return o(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?o(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"border-radius: ".concat(n.borderRadius,"px;"),"z-index: ".concat(n.zIndex,";"),"cursor:pointer;"]);this.preview||i.push("position:fixed;"),""!==n.font&&i.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(i.push("font-size: ".concat(n.size,"px;")),i.push("line-height: ".concat(n.size,"px;"))),"0"===n.shadowHorizontal&&"0"===n.shadowVertical&&"0"===n.shadowBlur||i.push("box-shadow: ".concat(n.shadowHorizontal,"px ").concat(n.shadowVertical,"px ").concat(n.shadowBlur,"px ").concat(n.shadowColor,";"));var a=[];"ver"===n.align?(i.push("writing-mode: vertical-lr;"),a.push("vertical-align:baseline;"),a.push("margin:6px 0 6px 0;")):(a.push("vertical-align:middle;"),a.push("margin-left:6px;")),this._setGeneralStyle(i,n.style),this._setGeneralPosition(i,n),this.lastStyleshit=e,e.insertRule(".".concat(this._getClassName(t)," { ").concat(i.join(" ")," } "),e.cssRules.length),e.insertRule(".".concat(this._getClassName(t)," .js-badge-close-btn{ ").concat(a.join(" ")," } "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=this,i=document.createElement("span");i.classList.add(this._getClassName(t)),i.innerHTML=e,i.style.visibility="hidden",n.insertAdjacentElement("beforeend",i);var a=this.renderCloseBtnPageTab();return a.addEventListener("load",(function(e){o.setSizeCss(t,i),i.style.visibility="visible"})),i.append(a),this.preview&&(n.style.position="relative",n.style.overflow="visible"),i}}])&&i(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),d}(n(649).Z);e.Z=f},599:function(t,e,n){function r(t){return r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},r(t)}function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function i(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,l(r.key),r)}}function a(t,e){return a=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},a(t,e)}function c(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function s(t){return s=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},s(t)}function l(t){var e=function(t,e){if("object"!==r(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var o=n.call(t,"string");if("object"!==r(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===r(e)?e:String(e)}var u=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&a(t,e)}(d,t);var e,n,u,f,p=(u=d,f=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=s(u);if(f){var n=s(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===r(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return c(t)}(this,t)});function d(){var t,e,n;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,d);for(var r=arguments.length,o=new Array(r),i=0;i<r;i++)o[i]=arguments[i];return e=c(t=p.call.apply(p,[this].concat(o))),null,(n=l(n="preview"))in e?Object.defineProperty(e,n,{value:null,enumerable:!0,configurable:!0,writable:!0}):e[n]=null,t}return e=d,(n=[{key:"setCss",value:function(t,e,n){this.preview=e.ownerNode.id.indexOf("preview")>-1;var r,i=[].concat(function(t){if(Array.isArray(t))return o(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return o(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?o(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"z-index: ".concat(n.zIndex,";"),"cursor:pointer;"]);0==this.preview&&i.push("position:fixed;"),""!==n.width&&i.push("width: ".concat(n.width,"px;")),""!==n.height&&i.push("height: ".concat(n.height,"px;")),this._setGeneralPosition(i,n);var a=this._getClassName(t);this.lastStyleshit=e,e.insertRule(".".concat(a," { ").concat(i.join(" ")," } "),e.cssRules.length),e.insertRule(".".concat(a," .js-badge-img{max-width:100%;max-height:100%;} "),e.cssRules.length),e.insertRule(".".concat(a," .js-badge-close-btn{position:absolute;width:12px;height:12px;transform:translateX(-12px)} "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=this;if(""!==r.url.trim()){var i=this._getClassName(t),a=document.createElement("span");a.classList.add(i),a.style.visibility="hidden";var c=document.createElement("img");return c.className="js-badge-img",c.src=r.url,c.addEventListener("load",(function(e){a.style.visibility="visible",o.setSizeCss(t,a)})),a.append(c),a.append(this.renderCloseBtnPageTab()),this.preview&&(n.style.position="relative",n.style.overflow="visible"),n.insertAdjacentElement("beforeend",a),a}}}])&&i(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),d}(n(649).Z);e.Z=u},297:function(t,e,n){function r(t){return r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},r(t)}function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function i(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,u(r.key),r)}}function a(t,e){return a=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},a(t,e)}function c(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function s(t){return s=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},s(t)}function l(t,e,n){return(e=u(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function u(t){var e=function(t,e){if("object"!==r(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var o=n.call(t,"string");if("object"!==r(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===r(e)?e:String(e)}var f=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&a(t,e)}(d,t);var e,n,u,f,p=(u=d,f=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=s(u);if(f){var n=s(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===r(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return c(t)}(this,t)});function d(){var t;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,d);for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return l(c(t=p.call.apply(p,[this].concat(n))),"lastStyleshit",null),l(c(t),"preview",null),t}return e=d,(n=[{key:"setCss",value:function(t,e,n){this.preview=e.ownerNode.id.indexOf("preview")>-1;var r,i=[].concat(function(t){if(Array.isArray(t))return o(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return o(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?o(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"z-index: ".concat(n.zIndex,";"),"letter-spacing: ".concat(n.letterSpacing,"px;"),"cursor:pointer;"]),a=["vertical-align:initial;"];!1===this.preview&&i.push("position:fixed;"),""!==n.font&&i.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(i.push("font-size: ".concat(n.size,"px;")),i.push("line-height: ".concat(n.size,"px;"))),"ver"===n.align?(i.push("writing-mode: vertical-lr;"),a.push("margin:6px 0 6px 0;")):a.push("margin:0 6px 0 6px;"),this._setGeneralStyle(i,n.style),this._setGeneralPosition(i,n),this.lastStyleshit=e,e.insertRule(".".concat(this._getClassName(t)," { ").concat(i.join(" ")," } "),e.cssRules.length),e.insertRule(".".concat(this._getClassName(t)," .js-badge-close-btn{").concat(a.join(" "),"} "),e.cssRules.length)}},{key:"_setCapCss",value:function(t,e,n){var r=["content: '';","display: block;","position: absolute;","z-index: -1;"],o=[],i=n.getBoundingClientRect(),a=Math.ceil(("ver"===e.align?i.width:i.height)/2),c=function(t,e,n){var o=a,i=parseInt(e.ribonType),c=2===i?e.background:"transparent",s=2===i?"transparent":e.background,l=n;if("1"===e.ribonType&&(l={left:"right",right:"left",top:"bottom",bottom:"top"}[n],o*=2),t.push("border: ".concat(a,"px solid ").concat(c,";")),t.push("border-".concat(l,"-color: ").concat(s,";")),t.push("".concat(n,": -").concat(o,"px;")),"1"===i){var u="0";"bottom"==n&&(u="-1"),"top"==n&&(u="1"),r.push("box-shadow:0px ".concat(u,"px 0px ").concat(s,";"))}};"ver"===e.align?(r.push("left: 0;"),"nw"===e.position||"ne"===e.position?c(r,e,"bottom"):c(r,e,"top"),o.push("width:".concat(2*a,"px;")),o.push("height:".concat(i.height,"px;"))):(r.push("top: 0;"),"nw"===e.position||"sw"===e.position?c(r,e,"right"):c(r,e,"left"),o.push("height:".concat(2*a,"px;")),1===parseInt(e.ribonType)&&o.push("width:".concat(Math.ceil(i.width),"px;"))),this.lastStyleshit.insertRule(".".concat(this._getClassName(t),"{ ").concat(o.join(" ")," } "),this.lastStyleshit.cssRules.length),this.lastStyleshit.insertRule(".".concat(this._getClassName(t),":after { ").concat(r.join(" ")," } "),this.lastStyleshit.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=this,i=document.createElement("span");i.classList.add(this._getClassName(t)),i.style.visibility="hidden",i.innerHTML=e,this.preview&&(n.style.position="relative",n.style.overflow="visible");var a=this.renderCloseBtnPageTab();return a.addEventListener("load",(function(e){e.target.parentNode.style.visibility="visible",o._setCapCss(t,r,i)})),i.append(a),n.insertAdjacentElement("beforeend",i),i}}])&&i(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),d}(n(649).Z);e.Z=f},208:function(__unused_webpack_module,__webpack_exports__,__webpack_require__){var _browser_detect_js__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(412),_cookies_js__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(738),_common_draggable_element_js__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(889),_pagetab_injector_render_tab_factory_js__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(916),_text_rotator_v2_js__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(692),_click_report_js__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(196),_unsorted_js__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(977);function _typeof(t){return _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_typeof(t)}function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function _defineProperties(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,_toPropertyKey(r.key),r)}}function _createClass(t,e,n){return e&&_defineProperties(t.prototype,e),n&&_defineProperties(t,n),Object.defineProperty(t,"prototype",{writable:!1}),t}function _defineProperty(t,e,n){return(e=_toPropertyKey(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function _toPropertyKey(t){var e=_toPrimitive(t,"string");return"symbol"===_typeof(e)?e:String(e)}function _toPrimitive(t,e){if("object"!==_typeof(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,e||"default");if("object"!==_typeof(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===e?String:Number)(t)}var Popup=function(){function Popup(t,e){var n=this;if(_classCallCheck(this,Popup),_defineProperty(this,"popupElement",null),_defineProperty(this,"iframeElement",null),_defineProperty(this,"parent_divElement",null),_defineProperty(this,"lpb_divElement",null),_defineProperty(this,"pagetabElement",null),_defineProperty(this,"pageTab",{element:null,draggableHandler:null,clickable:!0}),_defineProperty(this,"countdownInterval",null),_defineProperty(this,"bodyPrevCSS",""),_defineProperty(this,"pop_max_size",null),_defineProperty(this,"pop_min_size",null),_defineProperty(this,"closeCallbacks",[]),_defineProperty(this,"rendered",!1),_defineProperty(this,"args",{}),_defineProperty(this,"css_rules",{vpos:{t:["top:0;","0"],b:["top:100%;","-100%"],c:["top:50%;","-50%"]},hpos:{l:["left:0;","0"],c:["left:50%;","-50%"],r:["left:100%;","-100%"]}}),_defineProperty(this,"css",{popup:{display:"block",position:"fixed","z-index":cbar_zindex,width:"100%",height:"100%","transform-origin":"left top","-webkit-transform-origin":"left top"},iframe:{width:"100%",height:"100%",border:"0","transform-origin":"left top","-webkit-transform-origin":"left top","max-width":"initial"}}),!cbar_suppress_rules.includes(t)&&(""!==cbar_preview_rules||1!==parseInt(_cookies_js__WEBPACK_IMPORTED_MODULE_1__.Z.read("cbar_pc_"+t))&&1!==parseInt(_cookies_js__WEBPACK_IMPORTED_MODULE_1__.Z.read("cbar_pc_"+cbar_sess+"_"+t)))&&("LPB"===e.type||null===document.getElementById("cbar_"+e.type+"_"+t))){if(["closebtn","closePageTab","scale","trans","darken","countdown_timer","textRotation","fixedHeader"].forEach((function(t){void 0===e[t]&&(e[t]=null)})),this.args=e,null!=e.closePageTab){var r=this.storagePageTab("status");if(null===r&&(r=!0===e.closePageTab.visible?"popup":"tab"),this.closeCallbacks.push((function(){n.storagePageTab("status","tab"),n._renderPageTab()})),"tab"===r)return void this._renderPageTab()}this._preparePopup()}}return _createClass(Popup,[{key:"_preparePopup",value:function(){var t,e=this,n=this.args;if(this.popupElement=document.createElement("div"),this.popupElement.id="cbar_"+n.type+"_"+n.rule_id,this.popupElement.setAttribute("rule_id",n.rule_id),this.popupElement.style.position=this._is("LPB")?"absolute":"fixed",this._is("LPB")&&(this.css.popup.position="absolute",this.css.popup["z-index"]=1),this._is("MSG2")&&(this.css.popup["z-index"]=cbar_zindex-10,"toppush"===n.location&&(this.bodyPrevCSS=document.body.style.cssText)),this.iframeElement=document.createElement("iframe"),this.iframeElement.id="cbar_iframe_"+n.type+"_"+n.rule_id,this.iframeElement.className="cbar_iframe",this.iframeElement.style.width="100%",this.iframeElement.style.height="100%",this._is("OVERLAY")&&(n.vpos="c",n.hpos="c"),n.trans=[this.css_rules.hpos[n.hpos][1],this.css_rules.vpos[n.vpos][1]],this.iframeElement.scrolling="no",this._is("MSG2")&&(this._setPopupStyle("width: 100%; text-align: center;"),this.css.iframe.position="absolute",this.css.iframe.left="0"),!this._is("OVERLAY")&&null!==n.closebtn){if(n.closebtn.offset<0){var r=[n.closebtn.offset,n.closebtn.offset];n.closebtn.pos.indexOf(n.vpos)>-1&&(r[0]=0),(this._is("POP2")&&n.closebtn.pos.indexOf(n.hpos)>-1||this._is("MSG2"))&&(r[1]=0),n.closebtn.offset=r[0]+"px "+r[1]}this.popupElement.appendChild(this._renderCloseButton(n.rule_id,n.type))}this.popupElement.appendChild(this.iframeElement),this._is("OVERLAY")||null!==n.darken?(this.parent_divElement=document.createElement("div"),this.parent_divElement.id="cbar_parent_"+n.type+"_"+n.rule_id,this._is("OVERLAY")&&null!==n.closebtn?this.parent_divElement.appendChild(this._renderCloseButton(n.rule_id,n.type)):this._is("POP2")&&(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("click",this.parent_divElement,(function(t){"undefined"==typeof cbar_underlay_noclick&&e.closePopup()})),this.parent_divElement.appendChild(this.popupElement),t=this.parent_divElement):this._is("LPB")?(this.lpb_divElement=document.createElement("div"),this.lpb_divElement.style.margin=n.margin,this.lpb_divElement.style.position="relative",this.lpb_divElement.style.height="var(--my-height, 0px)",this.lpb_divElement.appendChild(this.popupElement),t=this.lpb_divElement):t=this.popupElement,void 0!==n.place_id?document.getElementById(n.place_id).appendChild(t):document.body.appendChild(t);var o=cbarApp.cleanString(n.template).replace(new RegExp("%close_button_url%","g"),"javascript:(function(event) { cbarApp.popup.get('"+n.rule_id+"','"+n.type+'\').closePopup(); })(); " target="_self');"iPhone"===cbar_BrowserDetect.OS&&(o=o.replace(".stack .column{width:100%;display:block}",".stack tr{display:flex;flex-direction: column;}.stack .column{width:100%;display:block;}"));var i=this._iframeDoc();i.open(),i.close(),i.documentElement.innerHTML=o;var a=this._parseCSSText(i.styleSheets),c=Object.keys(a).filter((function(t){return t.indexOf("@media")>-1}))[0];if(this.pop_max_size=void 0!==a[".bee-row-content"]&&void 0!==a[".bee-row-content"]["max-width"]?parseFloat(a[".bee-row-content"]["max-width"]):parseFloat(c.match(/\(max-width:([\d ]*)px\)/)[1].trim()),this.pop_min_size=void 0!==a[c][".block-grid, .col"]?parseFloat(a[c][".block-grid, .col"]["min-width"]):parseFloat(c.match(/\(max-width: (\d*)px\)/)[1]),-1===window.location.href.indexOf("cbar_iframe_preview")||window.innerWidth>500)if("iPhone"===_browser_detect_js__WEBPACK_IMPORTED_MODULE_0__.Z.OS)this._reloadSafariMediaQueries(i.styleSheets);else for(var s in i.styleSheets){var l=i.styleSheets[s];if(null==l.href&&null!=l.ownerNode&&""!=l.ownerNode.innerText){var u=l.ownerNode.innerText;if(u.indexOf("@media")>-1){var f=u.match(u.indexOf("@media screen and")>-1?/@media screen and \(max-width:(.*)px\)/:/@media \(max-width:(.*)px\)/);l.ownerNode.innerText=u.replace(f[0],"Safari"!==_browser_detect_js__WEBPACK_IMPORTED_MODULE_0__.Z.browser?"@media only screen and (min-device-width: 240px) and (max-device-width: 520px)":"@media none")}}}"loading"!=this._iframeDoc().readyState?this._onLoadImages(n):(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("load",this.iframeElement,(function(){e._onLoadImages(n)})),null!==n.countdown_timer&&this.countdownTimerInline(this.args.countdown_timer),null!==n.textRotation&&this._iframeDoc().querySelectorAll(".cbar-text-rotator").forEach((function(t){new _text_rotator_v2_js__WEBPACK_IMPORTED_MODULE_5__.Z(t,n.textRotation)})),this.resizePopup=this.resizePopup.bind(this),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("cbar_resize_popup",window,this.resizePopup),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("cbar_resize",window,this.resizePopup)}},{key:"_cancelCountdownTimerInline",value:function(){return clearInterval(this.countdownInterval),this.countdownInterval=null,!1}},{key:"countdownTimerInline",value:function(t){var e=this;if(null===this.countdownInterval){var n=new Date,r=t.time-(Math.ceil(n.getTime()/1e3)+t.timediff),o=this._iframeDoc().body.innerHTML,i={DD:86400,HH:3600,MM:60,SS:1};for(var a in i){var c=o.search(new RegExp("(?![a-zA-Z])."+a+"(?![a-zA-Z])."));if(c>-1){var s=o.substr(c,4);o=o.replace(s,s.replace(a,'<span class="cbar_countdown'+this.args.rule_id+'" rel="'+a+'" secs_left='+r+" unit_secs="+i[a]+">00</span>"))}}this._iframeDoc().body.innerHTML=o,this.countdownInterval=setInterval((function(){if(null===e.iframeElement)return e._cancelCountdownTimerInline();var t=e._iframeDoc().body.querySelectorAll(".cbar_countdown"+e.args.rule_id);if(0===t.length)return e._cancelCountdownTimerInline();if(r=t[0].getAttribute("secs_left"),--r<1)return e._cancelCountdownTimerInline();for(var n=0;n<t.length;n++){var o=parseInt(t[n].getAttribute("unit_secs"));t[n].setAttribute("secs_left",r);var i=Math.floor(r/o);r-=i*o,1==i.toString().length&&(i="0"+i),t[n].innerHTML=i}}),1e3)}}},{key:"storagePageTab",value:function(t,e){var n="cbar-pagetab-".concat(this.args.rule_id,"-").concat(this.args.type),r=localStorage.getItem(n);if(r=null===r?{position:null,status:null}:JSON.parse(r),void 0===e)return r[t];r[t]=e,localStorage.setItem(n,JSON.stringify(r))}},{key:"_isTouchDevice",value:function(){return"ontouchstart"in window||navigator.maxTouchPoints>0||navigator.msMaxTouchPoints>0}},{key:"_renderPageTab",value:function(){var t=this,e=this.args,n=JSON.parse(e.closePageTab.badgeConfig),r=(document.createElement("div"),new _pagetab_injector_render_tab_factory_js__WEBPACK_IMPORTED_MODULE_2__.Z(e.rule_id,e.type));this.pageTab.element=r.inject(document.body,e.closePageTab.text,n),document.body.append(this.pageTab.element);var o=this.storagePageTab("position");if(null!==o){var i=this.pageTab.element.style;i.top=o.top,i.left=o.left,i.right=i.bottom="auto"}var a=this._isTouchDevice()?"touchend":"mouseup";(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)(a,this.pageTab.element,(function(e){return t._onClickPageTab(e)})),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)(a,this.pageTab.element.querySelector(".js-badge-close-btn"),(function(e){return t._onClosePageTab(e)})),this.pageTab.draggableHandler=new _common_draggable_element_js__WEBPACK_IMPORTED_MODULE_6__.Z({movable:this.pageTab.element,mover:this.pageTab.element,onDragMove:function(){"auto"!==t.pageTab.element.style.right&&(t.pageTab.element.style.right="auto"),"auto"!==t.pageTab.element.style.bottom&&(t.pageTab.element.style.bottom="auto"),t.pageTab.clickable=!1},onDragStop:function(e){null!=e&&e.stopPropagation(),t.pageTab.clickable=!0,null!=t.pageTab.element&&t.storagePageTab("position",{top:t.pageTab.element.style.top,left:t.pageTab.element.style.left})}}),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("cbar_resize",window,(function(){return t._repositionPagetab()}))}},{key:"_onClosePageTab",value:function(t){this.pageTab.clickable&&(t.stopPropagation(),-1!==this.args.popup_close&&_cookies_js__WEBPACK_IMPORTED_MODULE_1__.Z.create(this._getCloseCookieName(),1,parseInt(this.args.popup_close)),this._destroyPagetab(),this.closePopup())}},{key:"_onClickPageTab",value:function(t){this.pageTab.clickable&&(t.stopPropagation(),this._destroyPagetab(),this._preparePopup(),this.storagePageTab("status","popup"))}},{key:"_repositionPagetab",value:function(){if(null!==this.pageTab.element){var t=this.pageTab.element.style;t.top=t.right=t.bottom=t.left="",this.storagePageTab("position",null)}}},{key:"_destroyPagetab",value:function(){null!=this.pageTab.element&&(this.pageTab.element.parentNode.removeChild(this.pageTab.element),this.pageTab.element=null,this.pageTab.draggableHandler.destroy())}},{key:"resizePopup",value:function(){null!==this.popupElement&&null!=this.iframeElement.contentWindow&&(this._reloadSafariMediaQueries(this._iframeDoc().styleSheets),this._recalcWH())}},{key:"_reloadSafariMediaQueries",value:function(t){if("iPhone"===_browser_detect_js__WEBPACK_IMPORTED_MODULE_0__.Z.OS){var e="@media all and (hover:none)",n="@media not all";for(var r in t){var o=t[r];if(null==o.href&&null!=o.ownerNode&&""!=o.ownerNode.innerText){var i,a=o.ownerNode.innerText;if(a.indexOf("@media")>-1){var c=a.match(a.indexOf("@media screen and ")>-1?/@media screen and \(max-width:(.*)px\)/:/@media \(max-width:(.*)px\)/);i=null!=c?c[0]:window.innerHeight>window.innerWidth?n:e;var s=window.innerHeight>window.innerWidth?e:n;o.ownerNode.innerText=a.replace(i,s)}}}}}},{key:"_cssVarSupported",value:function(){return void 0!==window.CSS&&window.CSS.supports("color","var(--fake-var)")}},{key:"_toCssVar",value:function(t,e){return(this._cssVarSupported()?"var(--my-"+t+", "+e+") !important":e)+";"}},{key:"_resizePopIframe",value:function(t,e,n){null!==this["".concat(t,"Element")]&&(this._cssVarSupported()?("lpb_div"==t&&null!=this.args.scale&&(n=parseFloat(n)*this.args.scale+"px"),this["".concat(t,"Element")].style.setProperty("--my-"+e,n,"important")):this["".concat(t,"Element")].style.cssText+=e+":"+n+"!important;")}},{key:"_gms",value:function(t,e){var n=this._iframeHeight();null!==this.args.trans&&this._setIframeStyle(this._transformCss(t,0,0));var r=n*t;if(this._resizePopIframe("popup","height",r+"px"),this._resizePopIframe("iframe","height",n+"px"),"toppush"==this.args.location&&(document.body.style.cssText+="margin-top:"+r+"px;",null!==this.args.fixedHeader))for(var o=document.body.querySelectorAll(this.args.fixedHeader),i=0;i<o.length;i++)if(o[i].classList.contains("barilliance-modified"))o[i].style.marginTop=o[i].getAttribute("initMarginTop")+r+"px";else{o[i].setAttribute("oldStyle",o[i].style.cssText),o[i].classList.add("barilliance-modified");var a=parseInt(this._getStyle(o[i]).marginTop);o[i].setAttribute("initMarginTop",a),o[i].style.marginTop=a+r+"px"}return{s:1,w:e,h:r}}},{key:"_gps",value:function(t,e){var n=this._iframeHeight(),r=n;r>this.scr[1]&&(r=this.scr[1]);var o=Math.min(t,r/n);return this.args.trans,null!==this.args.trans&&(null!=this.args.scale&&(o=this.args.scale),this._setPopupStyle(this._transformCss(o,this.args.trans[0],this.args.trans[1]))),this._resizePopIframe("popup","height",n+"px"),this._resizePopIframe("iframe","height",n+"px"),this._is("LPB")&&this._resizePopIframe("lpb_div","height",n+"px"),{s:o,w:e,h:r}}},{key:"_recalcWH",value:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]&&arguments[0],n=this.args;this.scr=[window.innerWidth,window.innerHeight],this._is("LPB")&&null!==document.getElementById(n.place_id)?this.scr[0]=parseFloat(this._getStyle(document.getElementById(n.place_id)).width):this._is("MSG2")||(this.scr[0]-=40,this.scr[1]-=40);var r=this.pop_min_size>this.scr[0]?this.pop_min_size:this.pop_max_size;this._is("LPB")||(r-=20);var o=r;this.scr[0]<r&&(r=this.scr[0],this._is("LPB")&&(o=r));var i=r/o;if(null!==n.scale&&(i=n.scale),this._is("MSG2"))return this._resizePopIframe("iframe","width",o>r?o+"px":"100%"),setTimeout((function(e){t._gms(e,r)}),1,i),this._gms(i,r);if(e&&this.lastw===o){var a=this._iframeHeight(),c=a;return c>this.scr[1]&&(c=this.scr[1]),null!==n.trans&&this._setPopupStyle(this._transformCss(Math.min(i,c/a),n.trans[0],n.trans[1])),void(this.lastw=o)}return this.lastw=o,this._resizePopIframe("iframe","width",o+"px"),this._resizePopIframe("popup","width",o+"px"),setTimeout((function(e,n){t._gps(e,n)}),1,i,r),this._gps(i,r)}},{key:"_iframeHeight",value:function(){return null!==this.iframeElement&&void 0!==this.iframeElement.contentWindow&&null!=this.iframeElement.contentWindow&&parseFloat(this._getStyle(this._iframeDoc().body.children[0]).height)}},{key:"_getStyle",value:function(t){return window.getComputedStyle(t)}},{key:"_transformCss",value:function(t,e,n){return"-webkit-transform: scale(".concat(t,") translate(").concat(e,",").concat(n,");transform:scale(").concat(t,") translate(").concat(e,",").concat(n,");")}},{key:"_onLoadImages",value:function(t){var e=this,n=this._iframeDoc().querySelectorAll("img"),r=n.length;if(0!=r){for(var o in setTimeout((function(t){if(t)return e._render(),void e._recalcWH()}),1e3,r),n)if(n.hasOwnProperty(o)&&(n[o].complete?r--:(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("load",n[o],(function(){--r||(e._render(),e._recalcWH())})),!r))return this._render(),void this._recalcWH()}else{if(this._render(),this.loadIndex=0,this.lastHeight=this._iframeHeight(),!1===this.lastHeight)return;this.waitIntval=setInterval((function(t){e.lastHeight!=e._iframeHeight()&&(e._recalcWH(),clearInterval(e.waitIntval)),e.loadIndex>100&&clearInterval(e.waitIntval),e.loadIndex++}),1,t)}}},{key:"_setPopupStyle",value:function(t){null!==this.popupElement&&(this.popupElement.style.cssText+=t)}},{key:"_setIframeStyle",value:function(t){null!==this.iframeElement&&(this.iframeElement.style.cssText+=t)}},{key:"_render",value:function _render(){var _this7=this;if(this.rendered)return!1;this.rendered=!0;var arg=this.args,iframeDoc=this._iframeDoc();if(void 0!==arg.scripts)for(var s in arg.scripts){if("css"===arg.scripts[s][1]){var link=iframeDoc.createElement("link");link.href=arg.scripts[s][0],link.rel="stylesheet",iframeDoc.head.appendChild(link)}if("style"===arg.scripts[s][1]){var style=iframeDoc.createElement("style");style.innerHTML=arg.scripts[s][0],iframeDoc.head.appendChild(style)}if("js"===arg.scripts[s][1]){var script=iframeDoc.createElement("script");script.type="text/javascript",script.src=arg.scripts[s][0],void 0!==arg.scripts[s][2]&&(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("load",script,(function(){eval(arg.scripts[s][2])(_this7)})),iframeDoc.head.appendChild(script)}}var tlinks=iframeDoc.querySelectorAll("a");if(tlinks.length>0)for(var i=0;i<tlinks.length;i++){var code="",h=tlinks[i].href,preCode="js:return true;"!=h?"; cbarApp.popup.get(".concat(arg.rule_id,",'").concat(arg.type,"').reportClick(").concat(arg.rule_id,");"):"",isJS="js:"==h.substr(0,3)||"javascript:"==h.substr(0,11);isJS?code=preCode+("js:"==h.substr(0,3)?h.replace("js:",""):h):"newtab:"===h.substr(0,7)?(code=preCode+"window.open('".concat(h.substr(7).trim(),"','").concat(tlinks[i].target,"');"),tlinks[i].href=h.substr(7).trim()):code="_blank"===tlinks[i].target&&null===tlinks[i].closest(".button_block")&&null===tlinks[i].closest(".button-container")?preCode+"window.open('".concat(h,"','").concat(tlinks[i].target,"');"):preCode+"window.location='".concat(h,"';"),this._is("LPB")&&(code+="return false;"),tlinks[i].target="_parent",code="(function() { "+"var res = window.parent.eval('(function() {".concat(code.replace(/'/g,"\\'"),"})()');")+"if (typeof res === 'undefined' || res ){ cbarApp.popup.get(".concat(arg.rule_id,",'").concat(arg.type,"').closePopup(); }")+"})();",isJS?tlinks[i].href="javascript:"+code:tlinks[i].setAttribute("js-code",code)}(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("click",iframeDoc,(function(e){for(var a=e.target;void 0!==a.tagName&&"A"!=a.tagName;)a=a.parentNode;if("A"===a.tagName){var links=[];iframeDoc.querySelectorAll("a").forEach((function(t){links.push(t)})),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.LI)("cbar_content_event",document,{i:links.indexOf(a),r:_this7.args.rule_id,a:"click"}),null!=a.getAttribute("js-code")&&(e.preventDefault(),eval(a.getAttribute("js-code")))}})),this._setPopupStyle("height:".concat(this._toCssVar("height","0px"))),this._setIframeStyle("height:".concat(this._toCssVar("height","0px"))),this._setPopupStyle("width:".concat(this._is("MSG2")?this._toCssVar("width","100%"):this._toCssVar("width","0px"))),this._setIframeStyle("width:".concat(this._toCssVar("width","0px"))),(null!==this.parent_divElement||this._is("MSG2"))&&(this[null!==this.parent_divElement?"parent_divElement":"popupElement"].style.cssText+="background-color:"+(null!==arg.darken?arg.darken:this._getStyle(iframeDoc.querySelector(".nl-container")).backgroundColor)+";");var scale=this._recalcWH(),cssTo="",cssFrom="";for(var k in this.css.popup)cssTo+="".concat(k,":").concat(this.css.popup[k],";");this.css_rules.effect={sl:["left: 0;".concat(this._transformCss(scale.s,"-100%",arg.trans[1])),"left:-100%;"],sr:["left: 100%;".concat(this._transformCss(scale.s,"0",arg.trans[1])),"left:100%;"],st:["top: 0; ".concat(this._transformCss(scale.s,arg.trans[0],"-100%")),"top:-100%;"],sb:["'top: 100%;".concat(this._transformCss(scale.s,arg.trans[0],"0")),"top:100%;"],fi:["opacity: 0; ","opacity: 0;"]},"Edge"===_browser_detect_js__WEBPACK_IMPORTED_MODULE_0__.Z.browser&&(this.css_rules.effect.sl[0]="left:-"+scale.w+"px;",this.css_rules.effect.st[0]="top:-"+scale.h+"px;"),cssTo+=this.css_rules.hpos[arg.hpos][0]+this.css_rules.vpos[arg.vpos][0]+this._transformCss(scale.s,arg.trans[0],arg.trans[1]),void 0!==this.css_rules.effect[arg.effect]&&(cssFrom+=this.css_rules.effect[arg.effect][0],["sl","sr"].indexOf(arg.effect)>-1?cssFrom+=this.css_rules.vpos[arg.vpos][0]:"st"==arg.effect&&(cssFrom+=this.css_rules.hpos[arg.hpos][0])),cssTo+="fi"==arg.effect?"opacity:1;":"";var stId="cbar_style_".concat(arg.type,"_").concat(arg.rule_id);null===document.getElementById(stId)&&(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.co)(stId);var cssToken1="",cssToken2="";null===this.parent_divElement?(cssToken1="-webkit-animation: cbar_anim".concat(this.popupElement.id," linear 1s;"),cssToken2="@-webkit-keyframes cbar_anim".concat(this.popupElement.id,"{from{ ").concat(cssFrom," }}")):cssToken2="#".concat(this.parent_divElement.id,"{width:100%;height:100%;top:0px;left:0px;position:fixed;")+"z-index:".concat(cbar_zindex-1,";-webkit-transform:translate(0,0);transform:translate(0,0); ")+"-webkit-animation: cbar_anim_parent_".concat(this.popupElement.id,"linear 1s;} ")+(void 0!==this.css_rules.effect[arg.effect]?"@-webkit-keyframes cbar_anim_parent_".concat(this.popupElement.id,"{from{").concat(this.css_rules.effect[arg.effect][1],"}}"):"");var css_text="#".concat(this.iframeElement.id,"{").concat(Object.keys(this.css.iframe).map((function(t){return"".concat(t,":").concat(_this7.css.iframe[t],";")})).join(""),"} \n")+"#".concat(this.popupElement.id,"{").concat(cssTo," ").concat(cssToken1,"}")+"".concat(cssToken2);document.getElementById(stId).appendChild(document.createTextNode(css_text)),this._is("MSG2")&&"toppush"===arg.location&&(document.body.style.cssText+="transition:margin-top 1s 0.3s;-webkit-transition:margin-top 1s 0.3s;margin-top:".concat(this._getStyle(this.popupElement).height,";"),void 0!==arg.fixedHeader?this.closeCallbacks.push((function(){document.body.setAttribute("style",_this7.bodyPrevCSS);for(var t=document.body.querySelectorAll(arg.fixedHeader),e=0;e<t.length;e++)t[e].setAttribute("style",t[e].getAttribute("oldStyle"))})):this.closeCallbacks.push((function(){document.body.setAttribute("style",_this7.bodyPrevCSS)})),setTimeout((function(){document.body.style.transition=""}),1e3)),this.args.autohide_secs>0&&setTimeout((function(){_this7.args.closebtn.nocookie=!0,_this7.args.autohide_secs=0,_this7.closePopup()}),1e3*this.args.autohide_secs)}},{key:"_extractAttributes",value:function(t,e){for(var n=e.trim().match(/{(.*)}/)[1].trim().split(";"),r=0;r<n.length;++r){var o=n[r].split(":");2==o.length&&(t[o[0].trim()]=o[1].trim())}}},{key:"_parseCSSText",value:function(t){for(var e=this,n={},r=0;r<t.length;++r){var o=t[r];if(null==o.href&&void 0!==o.cssRules)for(var i=0;i<o.cssRules.length;++i){var a=o.cssRules[i];if(void 0!==a.cssText)if(void 0!==a.cssRules&&void 0!==a.media){var c="@media "+a.media.mediaText;void 0===n[c]&&(n[c]={}),Object.keys(a.cssRules).forEach((function(t){var r=a.cssRules[t];void 0!==r.cssText&&(void 0===n[c][r.selectorText]&&(n[c][r.selectorText]={}),e._extractAttributes(n[c][r.selectorText],r.cssText))}))}else void 0!==a.selectorText&&(void 0===n[a.selectorText]&&(n[a.selectorText]={}),this._extractAttributes(n[a.selectorText],a.cssText))}}return n}},{key:"_renderCloseButton",value:function(t,e){var n=this,r=this.args.closebtn,o="";""!=r.pos?(r.pos.search("t")>-1&&(o+="top: 1px; bottom: auto;"),r.pos.search("b")>-1&&(o+="top: auto; bottom: 1px;"),r.pos.search("l")>-1&&(o+="left: 1px; right: auto;"),r.pos.search("r")>-1&&(o+="left: auto; right: 1px;")):o+="top: -15px; right: -15px;";var i=cbar_static_url+"img/common/dialog_close.png";void 0!==r.custom&&null!=r.custom&&""!=r.custom.url?(i=r.custom.url,""!=r.custom.size&&(o+="width:".concat(r.custom.size,"px;"))):r.icon>-1&&r.size>-1&&(i="".concat(cbar_static_url,"img/close_buttons/close").concat(r.icon,"_").concat(r.size,".png"));var a=document.createElement("img");return a.src=i,a.className="cbar-close-button",a.style.cssText="z-index: 1; ".concat(o," margin: ").concat(r.offset,"px;"),(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.Eh)("click",a,(function(t){return t.stopPropagation(),n.closePopup(),!1})),a}},{key:"_getCloseCookieName",value:function(){return(void 0===this.args.popup_close||isNaN(parseInt(this.args.popup_close)))&&(this.args.popup_close=365),"cbar_pc_"+(0==this.args.popup_close?cbar_sess+"_":"")+this.args.rule_id}},{key:"closePopup",value:function(){var t=this.args.rule_id,e=this.args.type;if(this._destroyPagetab(),null!=this.popupElement){(void 0===this.args.popup_close||isNaN(parseInt(this.args.popup_close)))&&(this.args.popup_close=365);var n=null!==this.parent_divElement?this.parent_divElement:this.popupElement;n.parentNode.removeChild(n);var r=document.getElementById("cbar_style_"+e+"_"+t);if(null!==r&&r.parentNode.removeChild(r),this.closeCallbacks.length>0)for(var o in this.closeCallbacks)this.closeCallbacks[o]();null==this.args.closePageTab&&-1!=this.args.popup_close&&""==cbar_preview_rules&&void 0===this.args.closebtn.nocookie&&_cookies_js__WEBPACK_IMPORTED_MODULE_1__.Z.create(this._getCloseCookieName(),1,parseInt(this.args.popup_close)),this.popupElement=null,this.iframeElement=null,window.removeEventListener("cbar_resize",this.resizePopup),window.removeEventListener("cbar_resize_popup",this.resizePopup),this.parent_divElement=null,this.rendered=!1,(0,_unsorted_js__WEBPACK_IMPORTED_MODULE_4__.LI)("cbar_content_event",document,{i:0,r:this.args.rule_id,a:"close"})}}},{key:"_is",value:function(t){return this.args.type==t}},{key:"reportClick",value:function(t){(0,_click_report_js__WEBPACK_IMPORTED_MODULE_3__.mF)(null,null,"bannerPopupEtc",t)}},{key:"_iframeDoc",value:function(){return this.iframeElement.contentWindow.document}}]),Popup}(),PopupController=function(){function t(){_classCallCheck(this,t),_defineProperty(this,"handlers",{})}return _createClass(t,[{key:"show",value:function(t,e){this.handlers["".concat(t,"|").concat(e.type)]=new Popup(t,e)}},{key:"get",value:function(t,e){return void 0!==this.handlers["".concat(t,"|").concat(e)]?this.handlers["".concat(t,"|").concat(e)]:null}}]),t}();__webpack_exports__.Z=new PopupController},552:function(t,e){var n=function(t,e,n){t.setItem(e,JSON.stringify(n))},r=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=t.getItem(e);return null===r?n:JSON.parse(r)},o=function(t,e){t.removeItem(e)},i=function(t){var e=r(localStorage,t);return null!==e&&(0===e.expire||!e.expire<parseInt(Date.now()/1e3))?e:null};e.Z={local:{create:function(t,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0;return n(localStorage,t,{expire:r>0?parseInt(Date.now()/1e3)+r:r,value:e})},getRaw:i,get:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=i(t);return null!==n?n.value:e},remove:function(t){return o(localStorage,t)}},session:{create:function(t,e){return n(sessionStorage,t,e)},get:function(t){return r(sessionStorage,t,arguments.length>1&&void 0!==arguments[1]?arguments[1]:null)},remove:function(t){return o(sessionStorage,t)}}}},692:function(t,e){function n(t){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(t)}function r(){return r=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},r.apply(this,arguments)}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function i(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,s(r.key),r)}}function a(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),Object.defineProperty(t,"prototype",{writable:!1}),t}function c(t,e,n){return(e=s(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function s(t){var e=function(t,e){if("object"!==n(t)||null===t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var o=r.call(t,"string");if("object"!==n(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===n(e)?e:String(e)}var l=function(){function t(e){var n=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];o(this,t),c(this,"fadeIn",void 0),c(this,"container",void 0),this.container=e,this.fadeIn=n}return a(t,[{key:"step",value:function(t){this.container.style.opacity=this.fadeIn?t:1-t}}]),t}(),u=function(){function t(e){var n=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];o(this,t),c(this,"container",void 0),c(this,"slideIn",void 0),c(this,"height",void 0),this.container=e,this.slideIn=n,this.height=e.getBoundingClientRect().height}return a(t,[{key:"step",value:function(t){var e=this.slideIn?this.height*(1-t):this.height*t*-1;this.container.style.transform="translateY(".concat(e,"px)")}}]),t}(),f=function(){function t(e,n){var i=this;if(o(this,t),c(this,"options",void 0),c(this,"container",void 0),c(this,"currentText",0),c(this,"animState",{}),c(this,"animPaused",!1),this.container=e,this.options=r({texts:[],showTime:5e3,animation:{type:"fade",speed:500},stopOnFocustLost:!0},n),0===this.options.texts.length)throw new Error("No texts are set for text rotation");this._switchText(),this._setState(0,this.options.showTime),window.requestAnimationFrame((function(){return i._doAnimation()})),this.options.stopOnFocustLost&&document.addEventListener("visibilitychange",(function(){return i.animPaused="hidden"===document.visibilityState}))}return a(t,[{key:"_switchText",value:function(){this.container.innerHTML=this.options.texts[this.currentText]}},{key:"_setState",value:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{};r.action=t,r.start=Date.now(),r.end=r.start+e,r.engine=n,this.animState=r}},{key:"_doAnimation",value:function(){var t=this;if(window.requestAnimationFrame((function(){return t._doAnimation()})),!this.animPaused){var e=Date.now(),n=e>this.animState.end?this.animState.end:e;if(null!==this.animState.engine){var r=1-(this.animState.end-n)/(this.animState.end-this.animState.start);this.animState.engine.step(r)}n>=this.animState.end&&this._switchState()}}},{key:"_switchState",value:function(){switch(this.animState.action){case 0:this._setState(1,this.options.animation.speed,this._createAnimationEngine());break;case 1:this.currentText++,this.options.texts.length===this.currentText&&(this.currentText=0),this._switchText(),this._setState(2,this.options.animation.speed,this._createAnimationEngine());break;case 2:this._setState(0,this.options.showTime)}}},{key:"_createAnimationEngine",value:function(){switch(this.options.animation.type){case"fade":return new l(this.container,1===this.animState.action);case"slide":return new u(this.container,1===this.animState.action);default:return null}}}]),t}();e.Z=f},977:function(t,e,n){n.d(e,{Eh:function(){return p},FY:function(){return j},GP:function(){return m},H:function(){return k},LI:function(){return d},R:function(){return b},SM:function(){return v},co:function(){return f},mu:function(){return y},ng:function(){return c},re:function(){return u},to:function(){return g}});var r=n(738),o=n(552);function i(){return i=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},i.apply(this,arguments)}function a(t){return a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},a(t)}var c=function(t){return Object.keys(t).map((function(e){return e+"="+encodeURIComponent(t[e])})).join("&")},s=function(t){return decodeURIComponent(t.replace(/\+/g," "))},l=function t(e,n){var r=[];if("object"===a(n))for(var o in n)n.hasOwnProperty(o)&&r.push(t(e+"["+encodeURIComponent(o)+"]",n[o]));else r.push(e+"="+encodeURIComponent((""+n).trim()));return r.join("&")},u=function(t){t=t.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var e=new RegExp("[\\?&]"+t+"=([^&#]*)").exec(window.location.href);return null===e?"":e[1]},f=function(t){var e=document.getElementById(t);null!==e&&(e.disabled=!0,e.parentNode.removeChild(e));var n=document.createElement("style");return n.setAttribute("id",t),n.appendChild(document.createTextNode("")),document.head.appendChild(n),n.sheet},p=function(t,e,n){return e.addEventListener(t,n),!1},d=function(t,e,n){var r=new CustomEvent(t,{bubbles:!0,cancelable:!0,detail:n});e.dispatchEvent(r)},h={},m=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=null;"js"===e?((r=document.createElement("script")).setAttribute("type","text/javascript"),r.setAttribute("src",t),T(t)):"css"===e&&((r=document.createElement("link")).setAttribute("rel","stylesheet"),r.setAttribute("type","text/css"),r.setAttribute("href",t)),null!==r&&(n&&(r.onload=n),document.getElementsByTagName("head")[0].appendChild(r))},y=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{},o=[];""!==e&&"&"!==e[0]&&(e="&"+e),Object.keys(t).forEach((function(e){return o.push(e+"="+t[e])})),o.push("ts="+Math.ceil(1e4*Math.random()));var i=cbar_dynamic_url+cbar_datajs+"?"+o.join("&")+e;if(cbarApp.asyncDatajs){var a=new XMLHttpRequest;a.open("POST",i+"&xhr=1"),a.onreadystatechange=function(){4===a.readyState&&200===a.status&&(eval.call(window,a.responseText),"function"==typeof n&&n())},a.send(JSON.stringify(r))}else m(i,"js",n)},b=function(){return"undefined"==typeof cbarParseCategoryProducts?{products:[]}:arguments.length>0&&void 0!==arguments[0]&&arguments[0]||null===cbarApp.categoryProductsCache?cbarApp.categoryProductsCache=cbarParseCategoryProducts():cbarApp.categoryProductsCache},g=function(t){cbarApp.gaEvents[0]=t,v(0)},v=function(t){var e=cbarApp.gaEvents[t]||null;null!==e&&("function"==typeof gtag?gtag("event",e.category,{action:e.action,label:e.label}):"object"===("undefined"==typeof dataLayer?"undefined":a(dataLayer))&&dataLayer.push({event:"cbarGTMEvent",eventCategory:e.category,eventAction:e.action,eventLabel:e.label}))},_=function(t){if(!cbar_suppress_rules.includes(t.ruleId)){var e=document.querySelectorAll(t.elementType+"["+t.attrName+"*='"+t.attrVal+"']");e.length>0&&e.forEach((function(e){var n=document.createElement("span");n.className="cbar-overlay-image-box",n.innerHTML='<img style="top:'+t.tbmargin+"px; left:"+t.lrmargin+'px" src="'+cbar_userimages+t.image+'">',""!==t.zIndex&&(n.style.zIndex=t.zIndex),e.parentNode.insertBefore(n,e)}))}},w=null,E=null,O=function(){var t=function(){null!==E&&(window.clearInterval(E),E=null)};null===w&&(w=document.location.pathname+document.location.search),t(),E=window.setInterval((function(){document.location.pathname+document.location.search!==w&&(document.querySelectorAll('div[rule_id][id^="cbar_"]').forEach((function(t){t.remove()})),w=document.location.pathname+document.location.search,t())}),500)},P=function(){var t="cbar_fix_referrer",e=document.referrer;if(!0===cbarApp.fixReferrer){var n=o.Z.session.get(t);e=null===n?"":n[n[0]===cbar_url?1:0],cbar_url!==e&&o.Z.session.create(t,[cbar_url,e])}return e},S=function(t){var e=document.getElementById("cbar-widget-preview-ids");null!==e&&(e.innerHTML=t.join(", "))},x=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;cbar_results=[],cbar_subproducts=[];var n={a:"refrecs",sid:cbar_sid,uid:cbar_uid,pid:encodeURIComponent(cbar_pid),cid:encodeURIComponent(cbar_cid),url:cbar_url_en,flow:cbar_flow,pt:cbar_pagetype,subattr:cbar_subproducts_attrib};"object"===a(t)&&Object.keys(t).forEach((function(e){return n[e]=t[e]})),y(n,cbar_data_params+"&"+l("attu",cbar_user_attributes)+"&"+l("attu1",cbar_user_attribute)+"&"+l("attrecs",cbarApp.recsAttributes),e)},k=function(t,e){var n=r.Z.read("cbar_uid"),o=cbar_dynamic_url+"logger.js.php?sid="+cbar_sid+"&uid="+n+"&elo="+encodeURIComponent(t)+"&url="+encodeURIComponent(window.location.href)+"&browser="+encodeURIComponent(navigator.appCodeName+" "+navigator.appVersion);e&&(o+="&stack="+encodeURIComponent(e)),m(o+"&version="+cbar_version,"js")},j=function(t){0!==cbar_debug&&window.console&&console.log(t)},T=function(t){cbar_debug<2||t.split("?")[1].split("&").forEach((function(t){return j(t)}))};!function t(){"undefined"!=typeof cbarApp?(cbarApp.cleanDom=O,cbarApp.cleanString=s,cbarApp.getReferrer=P,cbarApp.refreshRecommendations=x,cbarApp.setPreviewRuleIds=S,cbarApp.showImageOverlay=_):setTimeout((function(){return t()}),200)}(),e.ZP={cbar_add_css:function(t,e,n){try{t.insertRule?t.insertRule(e+"{"+n+"}"):t.addRule(e,n)}catch(t){j("Failed to add CSS")}},cbar_any2url:l,cbar_cp_clicked:function(t,e,n,r){var a=arguments.length>5&&void 0!==arguments[5]&&arguments[5],c={w:e,c:n,i:r,r:arguments.length>4&&void 0!==arguments[4]?arguments[4]:0};o.Z.local.create("cp_wid_clk",c),d("cbar_widget_clicked",document,i(c,{t:"rec"})),!0===a?window.open(t):document.location=t},cbar_create_stylesheet:f,cbar_countdown_timer:function(t){var e=function(){h.hasOwnProperty(t)&&(clearInterval(h[t]),delete h[t])};e(),h[t]=setInterval((function(){var n=document.querySelector(".cbar_countdown"+t);if(null===n)return e(),!1;var r=n.getAttribute("secs_left");if(r--,n.setAttribute("secs_left",r),r<1)return e(),!1;n.querySelectorAll(".time").forEach((function(t){var e=t.getAttribute("unit_secs"),n=Math.floor(r/e);r-=n*e,1===n.toString().length&&(n="0"+n),t.innerHTML=n}))}),1e3)},cbar_debug_log:T,cbar_firecustomevent:d,cbar_getnums:function(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=t.match(/\d+(\.\d|\,\d)?\d*(\.\d|\,\d)?\d*/gim);return null===n?[]:n.map((function(t){if(!1===e)return t;if(t.length<=2)return parseFloat(t);var n=","==t[t.length-3]||"."==t[t.length-3],r=","==t[t.length-2]||"."==t[t.length-2];return t=t.replace(/[^0-9]+/gim,""),n?parseFloat(t/100):r?parseFloat(t/10):parseFloat(t)}))},cbar_gup:u,cbar_in_array:function(t,e){return e.includes(t)},cbar_insert_html:function(t,e,n){var r="string"==typeof t?document.querySelector(t):t;"object"===a(r)&&null!==r&&r.insertAdjacentHTML(e,n)},cbar_listen:p,cbar_log_console:j,cbar_log_error:k,cbar_log_event:function(t){var e=r.Z.read("cbar_uid");m(cbar_dynamic_url+"logger.js.php?a=lg&sid="+cbar_sid+"&uid="+e+"&lo="+encodeURIComponent(t)+"&ts="+Math.ceil(1e4*Math.random())+"&version="+cbar_version,"js")},cbar_monitorelement:function(t,e,n){var o=0,i=setInterval((function(){var a=e();null!=a&&!1!==a&&r.Z.read(t)!=a&&(r.Z.create(t,a,0),++o>5?clearInterval(i):n(a))}),500)},cbar_monitorelement_inpage:function(t,e,n){var r=0,o=null,i=setInterval((function(){var t=e();if(null!=t&&!1!==t){if(null!==o){if(o===t)return;if(++r>10)return void clearInterval(i);n(t)}o=t}}),500)},cbar_refresh_recommendations:function(t){if(!(arguments.length>1&&void 0!==arguments[1])||arguments[1])for(var e=0;e<cbarApp.maxWidgetSlots;e++){var n=document.getElementById("cbar_widget"+e);null!==n&&n.parentNode.removeChild(n)}x({pid:t})},cbar_waitforelement:function(t,e){var n=setInterval((function(){var r=document.querySelectorAll(t);r.length>0&&(clearInterval(n),"function"==typeof e&&e(r))}),500)},cbarDirectTriggerGAEvent:g,cbarGetAccurateLocation:function(t){var e="accurate-location"+t;o.Z.session.get(e,!1)||(o.Z.session.create(e,!0),navigator.geolocation&&navigator.geolocation.getCurrentPosition((function(e){cbar_late_update("geo_coordinates",(function(){return e.coords.longitude+":"+e.coords.latitude+":"+t}),!0)})))},cbarGetCategoryProducts:b,cbarGetPreviewParams:function(){var t="&prev_ru="+cbar_preview_rules+"&prev_var="+cbar_preview_variation;return"true"===cbar_preview_widgets&&(t+="&prev_widgets=1"),""!=cbar_preview_sid&&(t+="&prev_sid=".concat(cbar_preview_sid)),t},cbarLoadData:y,cbarTriggerGAEvent:v,loadjscssfile:m,loadjscssfile_callback:m}},228:function(t,e){var n,r,o,i;function a(){return a=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},a.apply(this,arguments)}function c(t){return c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},c(t)}i=function(t){function e(t){return null==t?window:"[object Window]"!==t.toString()?(t=t.ownerDocument)&&t.defaultView||window:t}function n(t){return t instanceof e(t).Element||t instanceof Element}function r(t){return t instanceof e(t).HTMLElement||t instanceof HTMLElement}function o(t){return"undefined"!=typeof ShadowRoot&&(t instanceof e(t).ShadowRoot||t instanceof ShadowRoot)}function i(t,e){void 0===e&&(e=!1);var n=t.getBoundingClientRect(),o=1,i=1;return r(t)&&e&&(e=t.offsetHeight,0<(t=t.offsetWidth)&&(o=U(n.width)/t||1),0<e&&(i=U(n.height)/e||1)),{width:n.width/o,height:n.height/i,top:n.top/i,right:n.right/o,bottom:n.bottom/i,left:n.left/o,x:n.left/o,y:n.top/i}}function c(t){return{scrollLeft:(t=e(t)).pageXOffset,scrollTop:t.pageYOffset}}function s(t){return t?(t.nodeName||"").toLowerCase():null}function l(t){return((n(t)?t.ownerDocument:t.document)||window.document).documentElement}function u(t){return i(l(t)).left+c(t).scrollLeft}function f(t){return e(t).getComputedStyle(t)}function p(t){return t=f(t),/auto|scroll|overlay|hidden/.test(t.overflow+t.overflowY+t.overflowX)}function d(t,n,o){void 0===o&&(o=!1);var a,f=r(n);if(a=r(n)){var d=n.getBoundingClientRect();a=U(d.width)/n.offsetWidth||1,d=U(d.height)/n.offsetHeight||1,a=1!==a||1!==d}d=a,a=l(n),t=i(t,d),d={scrollLeft:0,scrollTop:0};var h={x:0,y:0};return(f||!f&&!o)&&(("body"!==s(n)||p(a))&&(d=n!==e(n)&&r(n)?{scrollLeft:n.scrollLeft,scrollTop:n.scrollTop}:c(n)),r(n)?((h=i(n,!0)).x+=n.clientLeft,h.y+=n.clientTop):a&&(h.x=u(a))),{x:t.left+d.scrollLeft-h.x,y:t.top+d.scrollTop-h.y,width:t.width,height:t.height}}function h(t){var e=i(t),n=t.offsetWidth,r=t.offsetHeight;return 1>=Math.abs(e.width-n)&&(n=e.width),1>=Math.abs(e.height-r)&&(r=e.height),{x:t.offsetLeft,y:t.offsetTop,width:n,height:r}}function m(t){return"html"===s(t)?t:t.assignedSlot||t.parentNode||(o(t)?t.host:null)||l(t)}function y(t){return 0<=["html","body","#document"].indexOf(s(t))?t.ownerDocument.body:r(t)&&p(t)?t:y(m(t))}function b(t,n){var r;void 0===n&&(n=[]);var o=y(t);return t=o===(null==(r=t.ownerDocument)?void 0:r.body),r=e(o),o=t?[r].concat(r.visualViewport||[],p(o)?o:[]):o,n=n.concat(o),t?n:n.concat(b(m(o)))}function g(t){return r(t)&&"fixed"!==f(t).position?t.offsetParent:null}function v(t){for(var n=e(t),o=g(t);o&&0<=["table","td","th"].indexOf(s(o))&&"static"===f(o).position;)o=g(o);if(o&&("html"===s(o)||"body"===s(o)&&"static"===f(o).position))return n;if(!o)t:{if(o=-1!==navigator.userAgent.toLowerCase().indexOf("firefox"),-1===navigator.userAgent.indexOf("Trident")||!r(t)||"fixed"!==f(t).position)for(t=m(t);r(t)&&0>["html","body"].indexOf(s(t));){var i=f(t);if("none"!==i.transform||"none"!==i.perspective||"paint"===i.contain||-1!==["transform","perspective"].indexOf(i.willChange)||o&&"filter"===i.willChange||o&&i.filter&&"none"!==i.filter){o=t;break t}t=t.parentNode}o=null}return o||n}function _(t){function e(t){r.add(t.name),[].concat(t.requires||[],t.requiresIfExists||[]).forEach((function(t){r.has(t)||(t=n.get(t))&&e(t)})),o.push(t)}var n=new Map,r=new Set,o=[];return t.forEach((function(t){n.set(t.name,t)})),t.forEach((function(t){r.has(t.name)||e(t)})),o}function w(t){var e;return function(){return e||(e=new Promise((function(n){Promise.resolve().then((function(){e=void 0,n(t())}))}))),e}}function E(t){return t.split("-")[0]}function O(t,e){var n=e.getRootNode&&e.getRootNode();if(t.contains(e))return!0;if(n&&o(n))do{if(e&&t.isSameNode(e))return!0;e=e.parentNode||e.host}while(e);return!1}function P(t){return a({},t,{left:t.x,top:t.y,right:t.x+t.width,bottom:t.y+t.height})}function S(t,r){if("viewport"===r){r=e(t);var o=l(t);r=r.visualViewport;var a=o.clientWidth;o=o.clientHeight;var s=0,p=0;r&&(a=r.width,o=r.height,/^((?!chrome|android).)*safari/i.test(navigator.userAgent)||(s=r.offsetLeft,p=r.offsetTop)),t=P(t={width:a,height:o,x:s+u(t),y:p})}else n(r)?((t=i(r)).top+=r.clientTop,t.left+=r.clientLeft,t.bottom=t.top+r.clientHeight,t.right=t.left+r.clientWidth,t.width=r.clientWidth,t.height=r.clientHeight,t.x=t.left,t.y=t.top):(p=l(t),t=l(p),a=c(p),r=null==(o=p.ownerDocument)?void 0:o.body,o=z(t.scrollWidth,t.clientWidth,r?r.scrollWidth:0,r?r.clientWidth:0),s=z(t.scrollHeight,t.clientHeight,r?r.scrollHeight:0,r?r.clientHeight:0),p=-a.scrollLeft+u(p),a=-a.scrollTop,"rtl"===f(r||t).direction&&(p+=z(t.clientWidth,r?r.clientWidth:0)-o),t=P({width:o,height:s,x:p,y:a}));return t}function x(t,e,o){return e="clippingParents"===e?function(t){var e=b(m(t)),o=0<=["absolute","fixed"].indexOf(f(t).position),i=o&&r(t)?v(t):t;return n(i)?e.filter((function(t){return n(t)&&O(t,i)&&"body"!==s(t)&&(!o||"static"!==f(t).position)})):[]}(t):[].concat(e),(o=(o=[].concat(e,[o])).reduce((function(e,n){return n=S(t,n),e.top=z(n.top,e.top),e.right=q(n.right,e.right),e.bottom=q(n.bottom,e.bottom),e.left=z(n.left,e.left),e}),S(t,o[0]))).width=o.right-o.left,o.height=o.bottom-o.top,o.x=o.left,o.y=o.top,o}function k(t){return t.split("-")[1]}function j(t){return 0<=["top","bottom"].indexOf(t)?"x":"y"}function T(t){var e=t.reference,n=t.element,r=(t=t.placement)?E(t):null;t=t?k(t):null;var o=e.x+e.width/2-n.width/2,i=e.y+e.height/2-n.height/2;switch(r){case"top":o={x:o,y:e.y-n.height};break;case"bottom":o={x:o,y:e.y+e.height};break;case"right":o={x:e.x+e.width,y:i};break;case"left":o={x:e.x-n.width,y:i};break;default:o={x:e.x,y:e.y}}if(null!=(r=r?j(r):null))switch(i="y"===r?"height":"width",t){case"start":o[r]-=e[i]/2-n[i]/2;break;case"end":o[r]+=e[i]/2-n[i]/2}return o}function I(t){return a({},{top:0,right:0,bottom:0,left:0},t)}function A(t,e){return e.reduce((function(e,n){return e[n]=t,e}),{})}function C(t,e){void 0===e&&(e={});var r=e;e=void 0===(e=r.placement)?t.placement:e;var o=r.boundary,c=void 0===o?"clippingParents":o,s=void 0===(o=r.rootBoundary)?"viewport":o;o=void 0===(o=r.elementContext)?"popper":o;var u=r.altBoundary,f=void 0!==u&&u;r=I("number"!=typeof(r=void 0===(r=r.padding)?0:r)?r:A(r,G)),u=t.rects.popper,c=x(n(f=t.elements[f?"popper"===o?"reference":"popper":o])?f:f.contextElement||l(t.elements.popper),c,s),u=P(a({},u,f=T({reference:s=i(t.elements.reference),element:u,strategy:"absolute",placement:e}))),s="popper"===o?u:s;var p={top:c.top-s.top+r.top,bottom:s.bottom-c.bottom+r.bottom,left:c.left-s.left+r.left,right:s.right-c.right+r.right};if(t=t.modifiersData.offset,"popper"===o&&t){var d=t[e];Object.keys(p).forEach((function(t){var e=0<=["right","bottom"].indexOf(t)?1:-1,n=0<=["top","bottom"].indexOf(t)?"y":"x";p[t]+=d[n]*e}))}return p}function R(){for(var t=arguments.length,e=Array(t),n=0;n<t;n++)e[n]=arguments[n];return!e.some((function(t){return!(t&&"function"==typeof t.getBoundingClientRect)}))}function M(t){void 0===t&&(t={});var e=t.defaultModifiers,r=void 0===e?[]:e,o=void 0===(t=t.defaultOptions)?W:t;return function(t,e,i){function c(){l.forEach((function(t){return t()})),l=[]}void 0===i&&(i=o);var s={placement:"bottom",orderedModifiers:[],options:a({},W,o),modifiersData:{},elements:{reference:t,popper:e},attributes:{},styles:{}},l=[],u=!1,f={state:s,setOptions:function(i){return i="function"==typeof i?i(s.options):i,c(),s.options=a({},o,s.options,i),s.scrollParents={reference:n(t)?b(t):t.contextElement?b(t.contextElement):[],popper:b(e)},i=function(t){var e=_(t);return V.reduce((function(t,n){return t.concat(e.filter((function(t){return t.phase===n})))}),[])}(function(t){var e=t.reduce((function(t,e){var n=t[e.name];return t[e.name]=n?a({},n,e,{options:a({},n.options,e.options),data:a({},n.data,e.data)}):e,t}),{});return Object.keys(e).map((function(t){return e[t]}))}([].concat(r,s.options.modifiers))),s.orderedModifiers=i.filter((function(t){return t.enabled})),s.orderedModifiers.forEach((function(t){var e=t.name,n=t.options;n=void 0===n?{}:n,"function"==typeof(t=t.effect)&&(e=t({state:s,name:e,instance:f,options:n}),l.push(e||function(){}))})),f.update()},forceUpdate:function(){if(!u){var t=s.elements,e=t.reference;if(R(e,t=t.popper))for(s.rects={reference:d(e,v(t),"fixed"===s.options.strategy),popper:h(t)},s.reset=!1,s.placement=s.options.placement,s.orderedModifiers.forEach((function(t){return s.modifiersData[t.name]=a({},t.data)})),e=0;e<s.orderedModifiers.length;e++)if(!0===s.reset)s.reset=!1,e=-1;else{var n=s.orderedModifiers[e];t=n.fn;var r=n.options;r=void 0===r?{}:r,n=n.name,"function"==typeof t&&(s=t({state:s,options:r,name:n,instance:f})||s)}}},update:w((function(){return new Promise((function(t){f.forceUpdate(),t(s)}))})),destroy:function(){c(),u=!0}};return R(t,e)?(f.setOptions(i).then((function(t){!u&&i.onFirstUpdate&&i.onFirstUpdate(t)})),f):f}}function D(t){var n,r=t.popper,o=t.popperRect,i=t.placement,c=t.variation,s=t.offsets,u=t.position,p=t.gpuAcceleration,d=t.adaptive,h=t.roundOffsets;if(t=t.isFixed,!0===h){h=s.y;var m=window.devicePixelRatio||1;h={x:U(s.x*m)/m||0,y:U(h*m)/m||0}}else h="function"==typeof h?h(s):s;h=void 0===(h=(m=h).x)?0:h,m=void 0===(m=m.y)?0:m;var y=s.hasOwnProperty("x");s=s.hasOwnProperty("y");var b,g="left",_="top",w=window;if(d){var E=v(r),O="clientHeight",P="clientWidth";E===e(r)&&"static"!==f(E=l(r)).position&&"absolute"===u&&(O="scrollHeight",P="scrollWidth"),"top"!==i&&("left"!==i&&"right"!==i||"end"!==c)||(_="bottom",m-=(t&&w.visualViewport?w.visualViewport.height:E[O])-o.height,m*=p?1:-1),"left"!==i&&("top"!==i&&"bottom"!==i||"end"!==c)||(g="right",h-=(t&&w.visualViewport?w.visualViewport.width:E[P])-o.width,h*=p?1:-1)}return r=a({position:u},d&&J),a({},r,p?((b={})[_]=s?"0":"",b[g]=y?"0":"",b.transform=1>=(w.devicePixelRatio||1)?"translate("+h+"px, "+m+"px)":"translate3d("+h+"px, "+m+"px, 0)",b):((n={})[_]=s?m+"px":"",n[g]=y?h+"px":"",n.transform="",n))}function L(t){return t.replace(/left|right|bottom|top/g,(function(t){return et[t]}))}function N(t){return t.replace(/start|end/g,(function(t){return nt[t]}))}function B(t,e,n){return void 0===n&&(n={x:0,y:0}),{top:t.top-e.height-n.y,right:t.right-e.width+n.x,bottom:t.bottom-e.height+n.y,left:t.left-e.width-n.x}}function H(t){return["top","right","bottom","left"].some((function(e){return 0<=t[e]}))}var z=Math.max,q=Math.min,U=Math.round,G=["top","bottom","right","left"],Z=G.reduce((function(t,e){return t.concat([e+"-start",e+"-end"])}),[]),K=[].concat(G,["auto"]).reduce((function(t,e){return t.concat([e,e+"-start",e+"-end"])}),[]),V="beforeRead read afterRead beforeMain main afterMain beforeWrite write afterWrite".split(" "),W={placement:"bottom",modifiers:[],strategy:"absolute"},Y={passive:!0},F={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(t){var n=t.state,r=t.instance,o=(t=t.options).scroll,i=void 0===o||o,a=void 0===(t=t.resize)||t,c=e(n.elements.popper),s=[].concat(n.scrollParents.reference,n.scrollParents.popper);return i&&s.forEach((function(t){t.addEventListener("scroll",r.update,Y)})),a&&c.addEventListener("resize",r.update,Y),function(){i&&s.forEach((function(t){t.removeEventListener("scroll",r.update,Y)})),a&&c.removeEventListener("resize",r.update,Y)}},data:{}},$={name:"popperOffsets",enabled:!0,phase:"read",fn:function(t){var e=t.state;e.modifiersData[t.name]=T({reference:e.rects.reference,element:e.rects.popper,strategy:"absolute",placement:e.placement})},data:{}},J={top:"auto",right:"auto",bottom:"auto",left:"auto"},X={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(t){var e=t.state,n=t.options;t=void 0===(t=n.gpuAcceleration)||t;var r=n.adaptive;r=void 0===r||r,n=void 0===(n=n.roundOffsets)||n,t={placement:E(e.placement),variation:k(e.placement),popper:e.elements.popper,popperRect:e.rects.popper,gpuAcceleration:t,isFixed:"fixed"===e.options.strategy},null!=e.modifiersData.popperOffsets&&(e.styles.popper=a({},e.styles.popper,D(a({},t,{offsets:e.modifiersData.popperOffsets,position:e.options.strategy,adaptive:r,roundOffsets:n})))),null!=e.modifiersData.arrow&&(e.styles.arrow=a({},e.styles.arrow,D(a({},t,{offsets:e.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:n})))),e.attributes.popper=a({},e.attributes.popper,{"data-popper-placement":e.placement})},data:{}},Q={name:"applyStyles",enabled:!0,phase:"write",fn:function(t){var e=t.state;Object.keys(e.elements).forEach((function(t){var n=e.styles[t]||{},o=e.attributes[t]||{},i=e.elements[t];r(i)&&s(i)&&(a(i.style,n),Object.keys(o).forEach((function(t){var e=o[t];!1===e?i.removeAttribute(t):i.setAttribute(t,!0===e?"":e)})))}))},effect:function(t){var e=t.state,n={popper:{position:e.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return a(e.elements.popper.style,n.popper),e.styles=n,e.elements.arrow&&a(e.elements.arrow.style,n.arrow),function(){Object.keys(e.elements).forEach((function(t){var o=e.elements[t],i=e.attributes[t]||{};t=Object.keys(e.styles.hasOwnProperty(t)?e.styles[t]:n[t]).reduce((function(t,e){return t[e]="",t}),{}),r(o)&&s(o)&&(a(o.style,t),Object.keys(i).forEach((function(t){o.removeAttribute(t)})))}))}},requires:["computeStyles"]},tt={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(t){var e=t.state,n=t.name,r=void 0===(t=t.options.offset)?[0,0]:t,o=(t=K.reduce((function(t,n){var o=e.rects,i=E(n),c=0<=["left","top"].indexOf(i)?-1:1,s="function"==typeof r?r(a({},o,{placement:n})):r;return o=(o=s[0])||0,s=((s=s[1])||0)*c,i=0<=["left","right"].indexOf(i)?{x:s,y:o}:{x:o,y:s},t[n]=i,t}),{}))[e.placement],i=o.x;o=o.y,null!=e.modifiersData.popperOffsets&&(e.modifiersData.popperOffsets.x+=i,e.modifiersData.popperOffsets.y+=o),e.modifiersData[n]=t}},et={left:"right",right:"left",bottom:"top",top:"bottom"},nt={start:"end",end:"start"},rt={name:"flip",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options;if(t=t.name,!e.modifiersData[t]._skip){var r=n.mainAxis;r=void 0===r||r;var o=n.altAxis;o=void 0===o||o;var i=n.fallbackPlacements,a=n.padding,c=n.boundary,s=n.rootBoundary,l=n.altBoundary,u=n.flipVariations,f=void 0===u||u,p=n.allowedAutoPlacements;u=E(n=e.options.placement),i=i||(u!==n&&f?function(t){if("auto"===E(t))return[];var e=L(t);return[N(t),e,N(e)]}(n):[L(n)]);var d=[n].concat(i).reduce((function(t,n){return t.concat("auto"===E(n)?function(t,e){void 0===e&&(e={});var n=e.boundary,r=e.rootBoundary,o=e.padding,i=e.flipVariations,a=e.allowedAutoPlacements,c=void 0===a?K:a,s=k(e.placement);0===(i=(e=s?i?Z:Z.filter((function(t){return k(t)===s})):G).filter((function(t){return 0<=c.indexOf(t)}))).length&&(i=e);var l=i.reduce((function(e,i){return e[i]=C(t,{placement:i,boundary:n,rootBoundary:r,padding:o})[E(i)],e}),{});return Object.keys(l).sort((function(t,e){return l[t]-l[e]}))}(e,{placement:n,boundary:c,rootBoundary:s,padding:a,flipVariations:f,allowedAutoPlacements:p}):n)}),[]);n=e.rects.reference,i=e.rects.popper;var h=new Map;u=!0;for(var m=d[0],y=0;y<d.length;y++){var b=d[y],g=E(b),v="start"===k(b),_=0<=["top","bottom"].indexOf(g),w=_?"width":"height",O=C(e,{placement:b,boundary:c,rootBoundary:s,altBoundary:l,padding:a});if(v=_?v?"right":"left":v?"bottom":"top",n[w]>i[w]&&(v=L(v)),w=L(v),_=[],r&&_.push(0>=O[g]),o&&_.push(0>=O[v],0>=O[w]),_.every((function(t){return t}))){m=b,u=!1;break}h.set(b,_)}if(u)for(r=function(t){var e=d.find((function(e){if(e=h.get(e))return e.slice(0,t).every((function(t){return t}))}));if(e)return m=e,"break"},o=f?3:1;0<o&&"break"!==r(o);o--);e.placement!==m&&(e.modifiersData[t]._skip=!0,e.placement=m,e.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}},ot={name:"preventOverflow",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options;t=t.name;var r=n.mainAxis,o=void 0===r||r,i=void 0!==(r=n.altAxis)&&r,c=void 0===(r=n.tether)||r,s=void 0===(r=n.tetherOffset)?0:r,l=C(e,{boundary:n.boundary,rootBoundary:n.rootBoundary,padding:n.padding,altBoundary:n.altBoundary}),u=E(e.placement),f=k(e.placement),p=!f,d=j(u);n="x"===d?"y":"x",r=e.modifiersData.popperOffsets;var m=e.rects.reference,y=e.rects.popper,b="number"==typeof(s="function"==typeof s?s(a({},e.rects,{placement:e.placement})):s)?{mainAxis:s,altAxis:s}:a({mainAxis:0,altAxis:0},s),g=e.modifiersData.offset?e.modifiersData.offset[e.placement]:null;if(s={x:0,y:0},r){if(o){var _,w="y"===d?"top":"left",O="y"===d?"bottom":"right",P="y"===d?"height":"width",S=(o=r[d])+l[w],x=o-l[O],T=c?-y[P]/2:0,I="start"===f?m[P]:y[P];f="start"===f?-y[P]:-m[P];var A=e.elements.arrow;A=c&&A?h(A):{width:0,height:0};var R=e.modifiersData["arrow#persistent"]?e.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0};w=R[w],O=R[O],A=z(0,q(m[P],A[P])),I=p?m[P]/2-T-A-w-b.mainAxis:I-A-w-b.mainAxis,p=p?-m[P]/2+T+A+O+b.mainAxis:f+A+O+b.mainAxis,P=(P=e.elements.arrow&&v(e.elements.arrow))?"y"===d?P.clientTop||0:P.clientLeft||0:0,T=null!=(_=null==g?void 0:g[d])?_:0,_=o+p-T,S=c?q(S,o+I-T-P):S,_=c?z(x,_):x,_=z(S,q(o,_)),r[d]=_,s[d]=_-o}var M;i&&(o="y"===n?"height":"width",_=(i=r[n])+l["x"===d?"top":"left"],l=i-l["x"===d?"bottom":"right"],u=-1!==["top","left"].indexOf(u),d=null!=(M=null==g?void 0:g[n])?M:0,M=u?_:i-m[o]-y[o]-d+b.altAxis,m=u?i+m[o]+y[o]-d-b.altAxis:l,M=c&&u?(M=z(M,q(i,m)))>m?m:M:z(c?M:_,q(i,c?m:l)),r[n]=M,s[n]=M-i),e.modifiersData[t]=s}},requiresIfExists:["offset"]},it={name:"arrow",enabled:!0,phase:"main",fn:function(t){var e,n=t.state,r=t.name,o=t.options,i=n.elements.arrow,c=n.modifiersData.popperOffsets,s=E(n.placement);if(t=j(s),s=0<=["left","right"].indexOf(s)?"height":"width",i&&c){o=I("number"!=typeof(o="function"==typeof(o=o.padding)?o(a({},n.rects,{placement:n.placement})):o)?o:A(o,G));var l=h(i),u="y"===t?"top":"left",f="y"===t?"bottom":"right",p=n.rects.reference[s]+n.rects.reference[t]-c[t]-n.rects.popper[s];c=c[t]-n.rects.reference[t],c=(i=(i=v(i))?"y"===t?i.clientHeight||0:i.clientWidth||0:0)/2-l[s]/2+(p/2-c/2),s=z(o[u],q(c,i-l[s]-o[f])),n.modifiersData[r]=((e={})[t]=s,e.centerOffset=s-c,e)}},effect:function(t){var e=t.state;if(null!=(t=void 0===(t=t.options.element)?"[data-popper-arrow]":t)){if("string"==typeof t&&!(t=e.elements.popper.querySelector(t)))return;O(e.elements.popper,t)&&(e.elements.arrow=t)}},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]},at={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(t){var e=t.state;t=t.name;var n=e.rects.reference,r=e.rects.popper,o=e.modifiersData.preventOverflow,i=C(e,{elementContext:"reference"}),c=C(e,{altBoundary:!0});n=B(i,n),r=B(c,r,o),o=H(n),c=H(r),e.modifiersData[t]={referenceClippingOffsets:n,popperEscapeOffsets:r,isReferenceHidden:o,hasPopperEscaped:c},e.attributes.popper=a({},e.attributes.popper,{"data-popper-reference-hidden":o,"data-popper-escaped":c})}},ct=M({defaultModifiers:[F,$,X,Q]}),st=[F,$,X,Q,tt,rt,ot,it,at],lt=M({defaultModifiers:st});t.applyStyles=Q,t.arrow=it,t.computeStyles=X,t.createPopper=lt,t.createPopperLite=ct,t.defaultModifiers=st,t.detectOverflow=C,t.eventListeners=F,t.flip=rt,t.hide=at,t.offset=tt,t.popperGenerator=M,t.popperOffsets=$,t.preventOverflow=ot,Object.defineProperty(t,"__esModule",{value:!0})},"object"==c(e)?i(e):(r=[e],void 0===(o="function"==typeof(n=i)?n.apply(e,r):n)||(t.exports=o))}},__webpack_module_cache__={};function __webpack_require__(t){var e=__webpack_module_cache__[t];if(void 0!==e)return e.exports;var n=__webpack_module_cache__[t]={exports:{}};return __webpack_modules__[t].call(n.exports,n,n.exports,__webpack_require__),n.exports}__webpack_require__.d=function(t,e){for(var n in e)__webpack_require__.o(e,n)&&!__webpack_require__.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},__webpack_require__.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),__webpack_require__.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var __webpack_exports__={};!function(){function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,r(o.key),o)}}function n(t,e,n){return(e=r(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function r(e){var n=function(e,n){if("object"!==t(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var o=r.call(e,"string");if("object"!==t(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"===t(n)?n:String(n)}var o=function(){function t(e,r){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),n(this,"callback",null),n(this,"delay",0),n(this,"timer",null),this.callback=e,this.delay=r}var r,o;return r=t,o=[{key:"setCallback",value:function(t){this.callback=t}},{key:"setDelay",value:function(t){this.delay=t}},{key:"call",value:function(){for(var t=this,e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];this._clearTimer(),this.timer=setTimeout((function(){t.callback.apply(t,n),t._clearTimer()}),this.delay)}},{key:"_clearTimer",value:function(){null!==this.timer&&(clearTimeout(this.timer),this.timer=null)}}],o&&e(r.prototype,o),Object.defineProperty(r,"prototype",{writable:!1}),t}(),i=o,a=__webpack_require__(869),c=__webpack_require__(977);function s(){return s=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},s.apply(this,arguments)}function l(t){return l="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},l(t)}var u=a.Z.register("AjaxTransition","#b66600"),f=!1,p={delayTime:1500,checkElement:null,checkContent:null,callback:null,warningTime:2e4,triggerOnReplace:!1},d=0,h=null,m=function(){return Date.now()/1e3},y=function(){if(m()-d>p.warningTime)return u("Unable to confirm page DOM loading within ".concat(p.warningTime,"ms"));h=setTimeout((function(){h=null,b()}),300)},b=function(){if(null!==p.checkElement&&null===document.querySelector(p.checkElement))return y();if(null!==p.checkContent){var t=document.querySelector(p.checkContent);if(null===t)return y();if(""===t.innerHTML.trim())return y()}if(null!==p.callback&&!0!==p.callback())return y();u("Restarting cbar.js"),g(),cbar_start()},g=function(){document.querySelectorAll('div[rule_id][id^="cbar_"]').forEach((function(t){t.remove()})),cbarApp.categoryProductsCache=null,cbarApp.fixReferrer=!0,cbar_alreadyrunflag=!1,cbar_url=window.location.href,cbar_url_en=encodeURIComponent(cbar_url),cbar_pur_pids=[],cbar_pur_qtys=[],cbar_w_anchor=[],cbar_crt="",cbar_crtn="",cbar_pur_mode=0,cbar_pid="",cbar_cid="",cbar_filter_val="",cbar_cname="",cbar_cids_p="",cbar_pid2cid="",cbar_oos_page=0,cbar_search="",cbar_home=!1,cbar_is_pur=!1,cbar_log="",cbar_userinfo={}},v=__webpack_require__(374);function _(t){return _="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_(t)}function w(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function E(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==_(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==_(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===_(o)?o:String(o)),r)}var o}function O(t,e){return O=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},O(t,e)}function P(t){return P=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},P(t)}var S=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&O(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=P(r);if(o){var n=P(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===_(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"setCss",value:function(t,e,n){var r,o=[].concat(function(t){if(Array.isArray(t))return w(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return w(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?w(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"border-radius: ".concat(n.borderRadius,"px;"),"z-index: ".concat(n.zIndex,";")]);""!==n.font&&o.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(o.push("font-size: ".concat(n.size,"px;")),o.push("line-height: ".concat(n.size,"px;"))),"0"===n.shadowHorizontal&&"0"===n.shadowVertical&&"0"===n.shadowBlur||o.push("box-shadow: ".concat(n.shadowHorizontal,"px ").concat(n.shadowVertical,"px ").concat(n.shadowBlur,"px ").concat(n.shadowColor,";")),this._setGeneralStyle(o,n.style),this._setGeneralPosition(o,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(o.join(" ")," } "),e.cssRules.length)}},{key:"inject",value:function(t,e,n){var r=document.createElement("span");r.classList.add(this._getClassName(t)),r.innerHTML=e,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",r)}}])&&E(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(v.Z),x=S;function k(t){return k="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},k(t)}function j(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function T(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==k(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==k(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===k(o)?o:String(o)),r)}var o}function I(t,e){return I=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},I(t,e)}function A(t){return A=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},A(t)}var C=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&I(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=A(r);if(o){var n=A(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===k(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"setCss",value:function(t,e,n){var r,o=this,i=function(e,r){var i=["color: "+n["line".concat(r,"color")]+";"];o._setGeneralStyle(i,n["line".concat(r,"style")]),""!==n["line".concat(r,"font")]&&i.push("font-family: "+o._getFontString(n["line".concat(r,"font")])+";"),""!==n["line".concat(r,"size")]&&(i.push("font-size: "+n["line".concat(r,"size")]+"px;"),i.push("line-height: "+n["line".concat(r,"size")]+"px;")),e.insertRule(".".concat(o._getClassName(t)," .line-").concat(r," { ").concat(i.join(" ")," } "),e.cssRules.length)},a=[].concat(function(t){if(Array.isArray(t))return j(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return j(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?j(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["background-color: ".concat(n.background,";"),"border-radius: 50%;","z-index: ".concat(n.zIndex,";"),"border-width: ".concat(n.borderSize,"px;"),"border-style: solid;","border-color: ".concat(n.borderColor,";"),"width: ".concat(n.size,"px;"),"height: ".concat(n.size,"px;"),"display: flex;","justify-content: center;","align-items: center;","overflow: hidden;","flex-direction: column;","line-height: 1em;"]);this._setGeneralPosition(a,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(a.join(" ")," } "),e.cssRules.length),i(e,1),i(e,2),i(e,3)}},{key:"inject",value:function(t,e,n){var r=document.createElement("span");r.classList.add(this._getClassName(t));var o=1;e.split("\n").forEach((function(t){if(!(o>3||""===t.trim())){var e=document.createElement("span");e.classList.add("line-".concat(o)),e.innerHTML=t,r.insertAdjacentElement("beforeend",e),o++}})),n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",r)}}])&&T(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(v.Z),R=C;function M(t){return M="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},M(t)}function D(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function L(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,q(r.key),r)}}function N(t,e){return N=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},N(t,e)}function B(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function H(t){return H=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},H(t)}function z(t,e,n){return(e=q(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function q(t){var e=function(t,e){if("object"!==M(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==M(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===M(e)?e:String(e)}var U=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&N(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=H(r);if(o){var n=H(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===M(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return B(t)}(this,t)});function a(){var t;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a);for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return z(B(t=i.call.apply(i,[this].concat(n))),"lastStyleshit",null),z(B(t),"lateRotationList",[]),t}return e=a,(n=[{key:"setCss",value:function(t,e,n){var r,o=this._getClassName(t),i=[].concat(function(t){if(Array.isArray(t))return D(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return D(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?D(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px 0;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"z-index: ".concat(n.zIndex,";"),"width: ".concat(n.width,"px;"),"text-align: center;"]),a=1==n.fillCorner;""!==n.font&&i.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(i.push("font-size: ".concat(n.size,"px;")),i.push("line-height: ".concat(n.size,"px;"))),a&&i.push("height: ".concat(n.width,"px;")),this._setGeneralStyle(i,n.style),this.lastStyleshit=e,e.insertRule(".".concat(o," { ").concat(i.join(" ")," } "),e.cssRules.length),e.insertRule(".".concat(o," > div { width: 100%; height: 100%; position: relative; } "),e.cssRules.length),!a||"nw"!==n.position&&"ne"!==n.position||e.insertRule(".".concat(o," > div > span { \n\t\t\t\tposition: absolute; \n\t\t\t\tbottom: 0; \n\t\t\t\twidth: 100%;\n\t\t\t\tdisplay: block;\n\t\t\t} "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=document.createElement("span");o.innerHTML=e;var i=document.createElement("div");i.insertAdjacentElement("beforeend",o);var a=document.createElement("span");a.classList.add(this._getClassName(t)),a.insertAdjacentElement("beforeend",i),n.style.position="relative",n.style.overflow="hidden",n.insertAdjacentElement("beforeend",a),this.lateRotationList.push({name:t,position:r.position,element:a,styleshit:this.lastStyleshit})}},{key:"lateRotation",value:function(){var t=this;this.lateRotationList=this.lateRotationList.map((function(t){return t.sizes=t.element.getBoundingClientRect(),t})),this.lateRotationList.forEach((function(e){var n=Math.sin(Math.PI/4)*(e.sizes.width-e.sizes.height)/2,r=Math.floor(n-e.sizes.width/2),o=Math.floor(n-e.sizes.height/2),i=[];switch(e.position){case"nw":i.push("top: ".concat(o,"px;")),i.push("left: ".concat(r,"px;")),i.push("transform: rotate(-45deg);");break;case"ne":i.push("top: ".concat(o,"px;")),i.push("right: ".concat(r,"px;")),i.push("transform: rotate(45deg);");break;case"sw":i.push("bottom: ".concat(o,"px;")),i.push("left: ".concat(r,"px;")),i.push("transform: rotate(45deg);");break;case"se":i.push("bottom: ".concat(o,"px;")),i.push("right: ".concat(r,"px;")),i.push("transform: rotate(-45deg);")}e.styleshit.insertRule(".".concat(t._getClassName(e.name)," { ").concat(i.join(" ")," } "),t.lastStyleshit.cssRules.length)}))}}])&&L(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(v.Z),G=U;function Z(t){return Z="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Z(t)}function K(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function V(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==Z(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==Z(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===Z(o)?o:String(o)),r)}var o}function W(t,e){return W=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},W(t,e)}function Y(t){return Y=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},Y(t)}var F=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&W(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=Y(r);if(o){var n=Y(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===Z(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"setCss",value:function(t,e,n){var r,o=[].concat(function(t){if(Array.isArray(t))return K(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return K(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?K(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"z-index: ".concat(n.zIndex,";")]);""!==n.width&&o.push("width: ".concat(n.width,"px;")),""!==n.height&&o.push("height: ".concat(n.height,"px;")),this._setGeneralPosition(o,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(o.join(" ")," } "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){if(""!==r.url.trim()){var o=document.createElement("img");o.classList.add(this._getClassName(t)),o.src=r.url,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",o)}}}])&&V(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(v.Z),$=F;function J(t){return J="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},J(t)}function X(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function Q(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,rt(r.key),r)}}function tt(t,e){return tt=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},tt(t,e)}function et(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function nt(t){return nt=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},nt(t)}function rt(t){var e=function(t,e){if("object"!==J(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==J(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===J(e)?e:String(e)}var ot=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&tt(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=nt(r);if(o){var n=nt(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===J(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return et(t)}(this,t)});function a(){var t,e,n;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a);for(var r=arguments.length,o=new Array(r),c=0;c<r;c++)o[c]=arguments[c];return e=et(t=i.call.apply(i,[this].concat(o))),null,(n=rt(n="lastStyleshit"))in e?Object.defineProperty(e,n,{value:null,enumerable:!0,configurable:!0,writable:!0}):e[n]=null,t}return e=a,(n=[{key:"setCss",value:function(t,e,n){var r,o=[].concat(function(t){if(Array.isArray(t))return X(t)}(r=this._getResetStyles())||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(r)||function(t,e){if(t){if("string"==typeof t)return X(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?X(t,e):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"z-index: ".concat(n.zIndex,";"),"letter-spacing: ".concat(n.letterSpacing,"px;")]);""!==n.font&&o.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(o.push("font-size: ".concat(n.size,"px;")),o.push("line-height: ".concat(n.size,"px;"))),"ver"===n.align&&(o.push("writing-mode: vertical-lr;"),o.push("text-orientation: upright;")),this._setGeneralStyle(o,n.style),this._setGeneralPosition(o,n),this.lastStyleshit=e,e.insertRule(".".concat(this._getClassName(t)," { ").concat(o.join(" ")," } "),e.cssRules.length)}},{key:"_setCapCss",value:function(t,e,n){var r=["content: '';","display: block;","position: absolute;","z-index: -1;"],o=n.getBoundingClientRect(),i=("ver"===e.align?o.width:o.height)/2,a=function(t,e,n){var r=i,o=2==e.ribonType?e.background:"transparent",a=2==e.ribonType?"transparent":e.background,c=n;1==e.ribonType&&(c={left:"right",right:"left",top:"bottom",bottom:"top"}[n],r*=2),t.push("border: ".concat(i,"px solid ").concat(o,";")),t.push("border-".concat(c,"-color: ").concat(a,";")),t.push("".concat(n,": -").concat(r,"px;"))};"ver"===e.align?(r.push("left: 0;"),"nw"===e.position||"ne"===e.position?a(r,e,"bottom"):a(r,e,"top")):(r.push("top: 0;"),"nw"===e.position||"sw"===e.position?a(r,e,"right"):a(r,e,"left")),this.lastStyleshit.insertRule(".".concat(this._getClassName(t),":after { ").concat(r.join(" ")," } "),this.lastStyleshit.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=document.createElement("span");o.classList.add(this._getClassName(t)),o.innerHTML=e,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",o),this._setCapCss(t,r,o)}}])&&Q(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(v.Z),it=ot;function at(t){return at="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},at(t)}function ct(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,lt(r.key),r)}}function st(t,e,n){return(e=lt(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function lt(t){var e=function(t,e){if("object"!==at(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==at(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===at(e)?e:String(e)}var ut=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),st(this,"ruleId",null),st(this,"renderers",null),st(this,"styleSheet",null),st(this,"styleNumber",0),this.ruleId=e,this.renderers={basic:new x,circle:new R,corner:new G,image:new $,ribon:new it}}var e,n;return e=t,(n=[{key:"inject",value:function(t,e,n){if(!this.renderers.hasOwnProperty(n.type))throw new Error("Wrong badge type ");var r="".concat(this.ruleId,"-").concat(this.styleNumber);null===this.styleSheet&&(this.styleSheet=(0,c.co)("cbar-badge-style-"+this.ruleId)),this.renderers[n.type].setCss(r,this.styleSheet,n),this.styleNumber++,this.renderers[n.type].inject(r,e,t,n)}},{key:"lateActions",value:function(){this.renderers.corner.lateRotation()}}])&&ct(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}(),ft=ut;function pt(t){return pt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},pt(t)}function dt(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,ht(r.key),r)}}function ht(t){var e=function(t,e){if("object"!==pt(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==pt(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===pt(e)?e:String(e)}var mt=function(){function t(e){var n,r;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),n=this,(r=ht(r="ruleId"))in n?Object.defineProperty(n,r,{value:0,enumerable:!0,configurable:!0,writable:!0}):n[r]=0,this.ruleId=e}var e,n;return e=t,(n=[{key:"setMessages",value:function(t){var e=this,n={};a.Z.register("BadgeInjector","#ffc9a7"),(0,c.R)().products.forEach((function(t){return n[t.productId]=t.element}));var r=new ft(this.ruleId);Object.keys(t).forEach((function(o){n.hasOwnProperty(o)?r.inject(n[o],t[o].text,t[o].template):e.logger("Unknown product key: ".concat(o))})),r.lateActions()}}])&&dt(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}(),yt=mt,bt=a.Z.register("Banner injection","#eaaaff"),gt=function(t,e,n){var r=null,o=0,i="",a=0===e;try{r=function(){var e=document.querySelector(t);if(null===e)throw new Error("No elements found for that selector");var n=window.getComputedStyle(e,null),r=window.getComputedStyle(e.parentNode,null);if("absolute"===n.getPropertyValue("position"))throw new Error("Absolute layout detected");if("auto"!==r.getPropertyValue("column-count"))throw new Error("Multi-column layout detected");if("left"===(i=n.getPropertyValue("float"))||"right"===i)return 3;var o=r.getPropertyValue("display");return"grid"===o||"inline-grid"===o?1:"flex"===o||"inline-flex"===o?2:"TD"===e.tagName?4:5}();var c=function(){for(var n,i,c,s=document.querySelectorAll(t),l=0,u=0,f=a?1:e,p=0;p<s.length;p++){var d=s[p],h=(void 0,void 0,void 0,n=d.getBoundingClientRect(),i=window.pageXOffset||document.documentElement.scrollLeft,c=window.pageYOffset||document.documentElement.scrollTop,{top:n.top+c,left:n.left+i});if(l<h.top){if(l=h.top,++u>f)return a?s[0]:s[p-1];o=0}if(4===r){var m=d.getAttribute("colspan"),y=null===m?1:parseInt(m);o+=y}else o++}return u===f?a?s[0]:s[s.length-1]:null}();if(null===c)throw new Error("Can not find required row (".concat(e,")"));!function(t){var e=a?"beforebegin":"afterend";if(4===r){var c=document.createElement("td");o>1&&c.setAttribute("colspan",o),c.id=n;var s=document.createElement("tr");return s.appendChild(c),void t.parentNode.insertAdjacentElement(e,s)}var l=document.createElement("div");if(l.style.width="100%",l.id=n,3===r&&(l.style.float=i),2===r){var u=window.getComputedStyle(t,null),f=parseInt(u.getPropertyValue("order"));f>0&&(l.style.order=a?-1:f)}t.insertAdjacentElement(e,l)}(c)}catch(t){bt(t.message)}},vt=__webpack_require__(412),_t={DOMAIN:"https://app.barilliance.com",KEY_DEBUG:"_barilliance_debug",KEY_ID:"_barilliance_id",KEY_GROUP:"_barilliance_group",KEY_GROUP_PARENT:"_barilliance_group_parent",KEY_EXP_192:"_barilliance_exp_192",EVENT_MONITOR_STOP:"cbar-cm-monitor-stop",EVENT_REPORT_STOP:"cbar-cm-report-stop",EVENT_GROUPS_ADDED:"cbar-cm-groups-added",REPORT_ACTIVATION_PARAM:"cbar_analytics_show",SESSION_TOKEN_KEY:"cbar-cm-report-token",IGNORE_CLASS:"cbar-cm-ignore",MODE_PREDICTION:0,MODE_OPTIMISATION:1,MODE_PERSONALISATION:2,MODE_PERSONALISATION_V2:4,MODE_HIGHLIGHT:8,MODE_MERCHANDISING:16},wt=__webpack_require__(552),Et="cbar-last-clicks-v3",Ot={},Pt={},St=null,xt=!1,kt=null,jt=function(){(xt||arguments.length>0&&void 0!==arguments[0]&&arguments[0])&&null===St&&(St=setTimeout((function(){var t=It();t.clicked=Pt.clicked,t.viewed=Pt.viewed,t.exp192=Pt.exp192,t.groupsCg=Pt.groupsCg,t.groupsOpt=Pt.groupsOpt,Gn.collect(t,"fastReport"),St=null,Pt.clicked=[],Pt.viewed={},Pt.groupsOpt={},Tt()}),2e3))},Tt=function(){wt.Z.session.create(Et,Pt)},It=function(){return{pageType:cbar_pagetype,url:document.location.href,viewed:{},clicked:[],lastClick:null,groups:{},groupsCg:{},groupsViewed:{},groupsOpt:{},exp192:{viewed:{},clicked:{}}}},At=function(){return wt.Z.session.get(Et,null)},Ct=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];Pt.groupsCg.hasOwnProperty(t)&&!n||(Pt.groupsCg[t]=e,Tt())},Rt={};!function(t){t.version="1.2.0";var e=function(){for(var t=0,e=new Array(256),n=0;256!=n;++n)t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=n)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1,e[n]=t;return"undefined"!=typeof Int32Array?new Int32Array(e):e}();t.table=e,t.bstr=function(t,n){for(var r=-1^n,o=t.length-1,i=0;i<o;)r=(r=r>>>8^e[255&(r^t.charCodeAt(i++))])>>>8^e[255&(r^t.charCodeAt(i++))];return i===o&&(r=r>>>8^e[255&(r^t.charCodeAt(i))]),-1^r},t.buf=function(t,n){if(t.length>1e4)return function(t,n){for(var r=-1^n,o=t.length-7,i=0;i<o;)r=(r=(r=(r=(r=(r=(r=(r=r>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])];for(;i<o+7;)r=r>>>8^e[255&(r^t[i++])];return-1^r}(t,n);for(var r=-1^n,o=t.length-3,i=0;i<o;)r=(r=(r=(r=r>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])];for(;i<o+3;)r=r>>>8^e[255&(r^t[i++])];return-1^r},t.str=function(t,n){for(var r,o,i=-1^n,a=0,c=t.length;a<c;)(r=t.charCodeAt(a++))<128?i=i>>>8^e[255&(i^r)]:r<2048?i=(i=i>>>8^e[255&(i^(192|r>>6&31))])>>>8^e[255&(i^(128|63&r))]:r>=55296&&r<57344?(r=64+(1023&r),o=1023&t.charCodeAt(a++),i=(i=(i=(i=i>>>8^e[255&(i^(240|r>>8&7))])>>>8^e[255&(i^(128|r>>2&63))])>>>8^e[255&(i^(128|o>>6&15|(3&r)<<4))])>>>8^e[255&(i^(128|63&o))]):i=(i=(i=i>>>8^e[255&(i^(224|r>>12&15))])>>>8^e[255&(i^(128|r>>6&63))])>>>8^e[255&(i^(128|63&r))];return-1^i}}(Rt);var Mt=Rt;function Dt(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null!=n){var r,o,i,a,c=[],s=!0,l=!1;try{if(i=(n=n.call(t)).next,0===e){if(Object(n)!==n)return;s=!1}else for(;!(s=(r=i.call(n)).done)&&(c.push(r.value),c.length!==e);s=!0);}catch(t){l=!0,o=t}finally{try{if(!s&&null!=n.return&&(a=n.return(),Object(a)!==a))return}finally{if(l)throw o}}return c}}(t,e)||function(t,e){if(t){if("string"==typeof t)return Lt(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Lt(t,e):void 0}}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function Lt(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function Nt(t,e){if(__webpack_require__.g.document)return!1;__webpack_require__.g.document=e.context||function(){for(var e=t;e.parent;)e=e.parent;return e}();var n=Object.getPrototypeOf(__webpack_require__.g.document);return Object.getOwnPropertyDescriptor(n,"childTags")||Object.defineProperty(n,"childTags",{enumerable:!0,get:function(){return this.children.filter((function(t){return"tag"===t.type||"script"===t.type||"style"===t.type}))}}),Object.getOwnPropertyDescriptor(n,"attributes")||Object.defineProperty(n,"attributes",{enumerable:!0,get:function(){var t=this.attribs,e=Object.keys(t),n=e.reduce((function(e,n,r){return e[r]={name:n,value:t[n]},e}),{});return Object.defineProperty(n,"length",{enumerable:!1,configurable:!1,value:e.length}),n}}),n.getAttribute||(n.getAttribute=function(t){return this.attribs[t]||null}),n.getElementsByTagName||(n.getElementsByTagName=function(t){var e=[];return Bt(this.childTags,(function(n){n.name!==t&&"*"!==t||e.push(n)})),e}),n.getElementsByClassName||(n.getElementsByClassName=function(t){var e=t.trim().replace(/\s+/g," ").split(" "),n=[];return Bt([this],(function(t){var r=t.attribs.class;r&&e.every((function(t){return r.indexOf(t)>-1}))&&n.push(t)})),n}),n.querySelectorAll||(n.querySelectorAll=function(t){var e=this,n=function(t){return t.split(" ").reverse().map((function(t,e){var n=0===e,r=Dt(t.split(":"),2),o=r[0],i=r[1],a=null,c=null;switch(!0){case/>/.test(o):c=function(t){return function(e){return e(t.parent)&&t.parent}};break;case/^\./.test(o):var s=o.substr(1).split(".");a=function(t){var e=t.attribs.class;return e&&s.every((function(t){return e.indexOf(t)>-1}))},c=function(t,e){return n?t.getElementsByClassName(s.join(" ")):"function"==typeof t?t(a):Ht(t,e,a)};break;case/^\[/.test(o):var l=Dt(o.replace(/\[|\]|"/g,"").split("="),2),u=l[0],f=l[1];a=function(t){return!(!(Object.keys(t.attribs).indexOf(u)>-1)||f&&t.attribs[u]!==f)},c=function(t,e){if(n){var r=[];return Bt([t],(function(t){a(t)&&r.push(t)})),r}return"function"==typeof t?t(a):Ht(t,e,a)};break;case/^#/.test(o):var p=o.substr(1);a=function(t){return t.attribs.id===p},c=function(t,e){if(n){var r=[];return Bt([t],(function(t,e){a(t)&&(r.push(t),e())})),r}return"function"==typeof t?t(a):Ht(t,e,a)};break;case/\*/.test(o):a=function(t){return!0},c=function(t,e){if(n){var r=[];return Bt([t],(function(t){return r.push(t)})),r}return"function"==typeof t?t(a):Ht(t,e,a)};break;default:a=function(t){return t.name===o},c=function(t,e){if(n){var r=[];return Bt([t],(function(t){a(t)&&r.push(t)})),r}return"function"==typeof t?t(a):Ht(t,e,a)}}if(!i)return c;var d=i.match(/-(child|type)\((\d+)\)$/),h=d[1],m=parseInt(d[2],10)-1,y=function(t){if(t){var e=t.parent.childTags;if("type"===h&&(e=e.filter(a)),e.findIndex((function(e){return e===t}))===m)return!0}return!1};return function(t){var e=c(t);return n?e.reduce((function(t,e){return y(e)&&t.push(e),t}),[]):y(e)&&e}}))}(t=t.replace(/(>)(\S)/g,"$1 $2").trim()),r=n.shift(),o=n.length;return r(this).filter((function(t){for(var r=0;r<o;){if(!(t=n[r](t,e)))return!1;r+=1}return!0}))}),n.contains||(n.contains=function(t){var e=!1;return Bt([this],(function(n,r){n===t&&(e=!0,r())})),e}),!0}function Bt(t,e){t.forEach((function(t){var n=!0;e(t,(function(){return n=!1})),t.childTags&&n&&Bt(t.childTags,e)}))}function Ht(t,e,n){for(;t.parent;){if(n(t=t.parent))return t;if(t===e)break}return null}function zt(t){for(var e=t.length,n=new Array(e),r=0;r<e;r++)n[r]=t[r];return n}function qt(t){return t&&t.replace(/['"`\\/:\?&!#$%^()[\]{|}*+;,.<=>@~]/g,"\\$&").replace(/\n/g,"A")}var Ut={attribute:function(t){return["style","data-reactid","data-react-checksum"].indexOf(t)>-1}};function Gt(t,e,n,r){var o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:e.parentNode,i=Zt(t,e,n);return!(!i||1!==o.querySelectorAll(i).length)&&(r.unshift(i),!0)}function Zt(t,e,n){for(var r=e.attributes,o=Object.keys(r).sort((function(e,n){var o=t.indexOf(r[e].name),i=t.indexOf(r[n].name);return-1===i||-1===o?-1===i?-1:1:o-i})),i=0,a=o.length;i<a;i++){var c=o[i],s=r[c],l=s.name,u=qt(s.value);if(!Ft(n[l]||n.attribute,l,u,Ut[l]||Ut.attribute)){var f="[".concat(l,'="').concat(u,'"]');if(!1===/\b\d/.test(u)&&("id"===l&&(f="#".concat(u)),"class"===l)){var p=u.trim().replace(/\s+/g,".");f=".".concat(p)}return f}}return null}function Kt(t,e,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:t.parentNode,o=Vt(t,e);return!(!o||1!==r.getElementsByTagName(o).length)&&(n.unshift(o),!0)}function Vt(t,e){var n=t.tagName.toLowerCase();return Ft(e.tag,null,n)?null:n}function Wt(t,e,n,r){for(var o=e.parentNode,i=o.childTags||o.children,a=0,c=i.length;a<c;a++){var s=i[a];if(s===e){var l=Yt(t,s,n);if(!l)return console.warn("\n          Element couldn't be matched through strict ignore pattern!\n        ",s,n,l);var u="> ".concat(l,":nth-child(").concat(a+1,")");return r.unshift(u),!0}}return!1}function Yt(t,e,n){var r=Zt(t,e,n);return r||(r=Vt(e,n)),r}function Ft(t,e,n,r){if(!n)return!0;var o=t||r;return!!o&&o(e,n,r)}function $t(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};if(Array.isArray(e)||(e=e.length?zt(e):[e]),!e.length||e.some((function(t){return 1!==t.nodeType})))throw new Error('Invalid input - to compare HTMLElements its necessary to provide a reference of the selected node(s)! (missing "elements")');var r=Nt(e[0],n),o=t.replace(/> /g,">").split(/\s+(?=(?:(?:[^"]*"){2})*[^"]*$)/);if(o.length<2)return Jt("",t,"",e);for(var i=[o.pop()];o.length>1;){var a=o.pop(),c=o.join(" "),s=i.join(" "),l="".concat(c," ").concat(s);document.querySelectorAll(l).length!==e.length&&i.unshift(Jt(c,a,s,e))}return i.unshift(o[0]),(o=i)[0]=Jt("",o[0],o.slice(1).join(" "),e),o[o.length-1]=Jt(o.slice(0,-1).join(" "),o[o.length-1],"",e),r&&delete __webpack_require__.g.document,o.join(" ").replace(/>/g,"> ").trim()}function Jt(t,e,n,r){if(t.length&&(t="".concat(t," ")),n.length&&(n=" ".concat(n)),/\[*\]/.test(e)){var o=e.replace(/=.*$/,"]"),i="".concat(t).concat(o).concat(n);if(Xt(document.querySelectorAll(i),r))e=o;else for(var a=document.querySelectorAll("".concat(t).concat(o)),c=function(){var o=a[s];if(r.some((function(t){return o.contains(t)}))){var c=o.tagName.toLowerCase();return i="".concat(t).concat(c).concat(n),Xt(document.querySelectorAll(i),r)&&(e=c),"break"}},s=0,l=a.length;s<l&&"break"!==c();s++);}if(/>/.test(e)){var u=e.replace(/>/,"");i="".concat(t).concat(u).concat(n),Xt(document.querySelectorAll(i),r)&&(e=u)}if(/:nth-child/.test(e)){var f=e.replace(/nth-child/g,"nth-of-type");i="".concat(t).concat(f).concat(n),Xt(document.querySelectorAll(i),r)&&(e=f)}if(/\.\S+\.\S+/.test(e)){for(var p=e.trim().split(".").slice(1).map((function(t){return".".concat(t)})).sort((function(t,e){return t.length-e.length}));p.length;){var d=e.replace(p.shift(),"").trim();if(!(i="".concat(t).concat(d).concat(n).trim()).length||">"===i.charAt(0)||">"===i.charAt(i.length-1)||">"===d)break;Xt(document.querySelectorAll(i),r)&&(e=d)}if((p=e&&e.match(/\./g))&&p.length>2){var h=document.querySelectorAll("".concat(t).concat(e)),m=function(){var o=h[s];if(r.some((function(t){return o.contains(t)}))){var a=o.tagName.toLowerCase();return i="".concat(t).concat(a).concat(n),Xt(document.querySelectorAll(i),r)&&(e=a),"break"}};for(s=0,l=h.length;s<l&&"break"!==m();s++);}}return e}function Xt(t,e){var n=t.length;return n===e.length&&e.every((function(e){for(var r=0;r<n;r++)if(t[r]===e)return!0;return!1}))}function Qt(t){return Qt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Qt(t)}function te(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(3===t.nodeType&&(t=t.parentNode),1!==t.nodeType)throw new Error('Invalid input - only HTMLElements or representations of them are supported! (not "'.concat(Qt(t),'")'));var n=Nt(t,e),r=function(t,e){var n=e.root,r=void 0===n?document:n,o=e.skip,i=void 0===o?null:o,a=e.priority,c=void 0===a?["id","class","href","src"]:a,s=e.ignore,l=void 0===s?{}:s,u=[],f=t,p=u.length,d=!1,h=i&&(Array.isArray(i)?i:[i]).map((function(t){return"function"!=typeof t?function(e){return e===t}:t})),m=function(t){return i&&h.some((function(e){return e(t)}))};if(Object.keys(l).forEach((function(t){"class"===t&&(d=!0);var e=l[t];"function"!=typeof e&&("number"==typeof e&&(e=e.toString()),"string"==typeof e&&(e=new RegExp(qt(e).replace(/\\/g,"\\\\"))),"boolean"==typeof e&&(e=e?/(?:)/:/.^/),l[t]=function(t,n){return e.test(n)})})),d){var y=l.attribute;l.attribute=function(t,e,n){return l.class(e)||y&&y(t,e,n)}}for(;f!==r;){if(!0!==m(f)){if(Gt(c,f,l,u,r))break;if(Kt(f,l,u,r))break;Gt(c,f,l,u),u.length===p&&Kt(f,l,u),u.length===p&&Wt(c,f,l,u)}f=f.parentNode,p=u.length}if(f===r){var b=Yt(c,f,l);u.unshift(b)}return u.join(" ")}(t,e),o=$t(r,t,e);return n&&delete __webpack_require__.g.document,o}function ee(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return t.length&&!t.name?function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(Array.isArray(t)||(t=zt(t)),t.some((function(t){return 1!==t.nodeType})))throw new Error("Invalid input - only an Array of HTMLElements or representations of them is supported!");var n=Nt(t[0],e),r=function(t){var e=(arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}).root,n=void 0===e?document:e,r=[];t.forEach((function(t,e){for(var o=[];t!==n;)t=t.parentNode,o.unshift(t);r[e]=o})),r.sort((function(t,e){return t.length-e.length}));for(var o=r.shift(),i=null,a=function(){var t=o[c];if(r.some((function(e){return!e.some((function(e){return e===t}))})))return"break";i=t},c=0,s=o.length;c<s&&"break"!==a();c++);return i}(t,e),o=te(r,e),i=function(t){var e=function(t){var e={classes:[],attributes:{},tag:null};return t.forEach((function(t){var n=e.classes,r=e.attributes,o=e.tag;if(void 0!==n){var i=t.getAttribute("class");i?(i=i.trim().split(" "),n.length?(n=n.filter((function(t){return i.some((function(e){return e===t}))}))).length?e.classes=n:delete e.classes:e.classes=i):delete e.classes}if(void 0!==r){var a=t.attributes,c=Object.keys(a).reduce((function(t,e){var n=a[e],r=n.name;return n&&"class"!==r&&(t[r]=n.value),t}),{}),s=Object.keys(c),l=Object.keys(r);s.length?l.length?(r=l.reduce((function(t,e){var n=r[e];return n===c[e]&&(t[e]=n),t}),{}),Object.keys(r).length?e.attributes=r:delete e.attributes):e.attributes=c:delete e.attributes}if(void 0!==o){var u=t.tagName.toLowerCase();o?u!==o&&delete e.tag:e.tag=u}})),e}(t),n=e.classes,r=e.attributes,o=e.tag,i=[];if(o&&i.push(o),n){var a=n.map((function(t){return".".concat(t)})).join("");i.push(a)}if(r){var c=Object.keys(r).reduce((function(t,e){return t.push("[".concat(e,'="').concat(r[e],'"]')),t}),[]).join("");i.push(c)}return i.length,[i.join("")]}(t)[0],a=$t("".concat(o," ").concat(i),t,e),c=zt(document.querySelectorAll(a));return t.every((function(t){return c.some((function(e){return e===t}))}))?(n&&delete __webpack_require__.g.document,a):console.warn("\n      The selected elements can't be efficiently mapped.\n      Its probably best to use multiple single selectors instead!\n    ",t)}(t,e):te(t,e)}var ne=a.Z.register("Click Monitor","#d77dea");function re(){return re=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},re.apply(this,arguments)}function oe(t){return function(t){if(Array.isArray(t))return ie(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(t){if("string"==typeof t)return ie(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?ie(t,e):void 0}}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function ie(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}var ae={addHierarchy:!1,maxHashingTime:1e3},ce=!1,se={},le={},ue="a",fe=[],pe={},de=null,he=null,me=null,ye=[],be=function(t){var e=Math.abs(Mt.str(t));return 2147483648&e&&(e^=4294967295,e+=1),e},ge=function(t){for(var e=t;null!==e;){if(""!==e.id)return"#"+e.id;e=e.parentNode}return""},ve=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[];return!!t.matches&&!![".cbar-wdes-title",".cbar-wdes-wrapper-border","."+_t.IGNORE_CLASS].concat(oe(e)).some((function(e){return t.matches(e)}))},_e=function(t){var e,n=[],r={},o=function t(e){if(e instanceof Element){if(e.hasOwnProperty(_t.KEY_ID)){var r=e[_t.KEY_ID];return n.push({type:e.tagName.toLowerCase(),hash:r,debug:e[_t.KEY_DEBUG]}),delete e[_t.KEY_ID],void delete se[r]}e.childNodes.forEach((function(e){return t(e)}))}},i=function(t){var o;switch(r.strategy=t,"il"!==t&&"ll"!==t||(n=n.reverse()),t){case"il":case"if":(o=n.find((function(t){return"img"===t.type||"picture"===t.type})))&&(e=o.hash,re(r,o.debug));break;case"ll":case"lf":(o=n.find((function(t){return"a"===t.type})))&&(e=o.hash,re(r,o.debug));break;default:var i=[],a=[];n.forEach((function(t){e+=t.hash,i.push.apply(i,oe(t.debug.hashes)),a.push(t.debug.finalHash)})),re(r,{hashes:i,finalHash:a.join(" + ")})}},a=[],c=[];return fe[t].elements.forEach((function(s,l){if(!s.hasOwnProperty(_t.KEY_ID)){if(e=0,n=[],r={},o(s),i(ue),0===e){var u="Unable to use strategy ".concat(ue," for group ").concat(t," element");"lf"!==ue&&(u+=". Falling back to default.",i("lf")),ne(u)}0===e?c.push(l):(e%=4294967295,s[_t.KEY_ID]=e,s[_t.KEY_DEBUG]=r,se[e]=s,a.push(s))}})),c.length>0&&c.reverse().forEach((function(e){delete fe[t].elements[e][_t.KEY_GROUP],delete fe[t].elements[e]})),a},we=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if(ye=[],null===t){var n=document.getElementsByTagName("body");if(0===n.length)return void ne("Can not find body element!");t=n.item(0)}else for(var r=t;null!==r;){if(r.hasOwnProperty(_t.KEY_ID)||ve(r))return[];if(null===(r=r.parentNode)||r===document.body)break;r.hasOwnProperty("tagName")&&ye.push(r.tagName)}var o=function(t,e){var n,r=0,o=0,i=[],a=function(){return performance.now()-n},c=function(t){var e="string"==typeof t.innerText?t.innerText.trim():"";return e.length>100&&(e=e.substr(0,100)),""===e&&(e="rnd-"+o),e};n=performance.now(),function t(n){var s="";if(e&&a()>ae.maxHashingTime)throw new Error("Hash performance exceeded maximum time of ".concat(ae.maxHashingTime,"ms"));r++;var l=n.tagName;if(n.nodeType===Node.ELEMENT_NODE&&"svg"!==l&&"g"!==l&&"path"!==l&&!n.hasOwnProperty(_t.KEY_ID)&&!ve(n))if(pe.hashTweak&&(s=pe.hashTweak(n)),""===s&&(s=function(t){if("IMG"===t.tagName)return"image:"+t.src;if("A"===t.tagName){var e=t.getAttribute("href");if((null===e||"#"!==e[0])&&""!==(e=t.href)){var n=new URL(e);me(n),e=n.href}if(""===e&&(e=ge(t)),""!==e)return"link:"+e}if("BUTTON"===t.tagName)return"button:"+c(t);if("INPUT"===t.tagName&&("submit"===t.type||"button"===t.type)){var r=t.value;if(""===r&&(r=ge(t)),""===r)return"button:"+c(t)}return"pointer"===window.getComputedStyle(t).cursor?"pointer:"+c(t):""}(n)),""!==s){o++,ae.addHierarchy&&(s="".concat(ye.join(">"),":").concat(s));var u=function(t){return le[t]||(le[t]=0),le[t]++,le[t]+"-"+t}(s),f=be(u);n[_t.KEY_ID]=f,n[_t.KEY_DEBUG]={hashes:[s],finalHash:u},se[f]=n,i.push(n)}else n.childNodes.forEach((function(e){var n=e.tagName||null;null!==n&&ye.push(n),t(e),null!==n&&ye.pop()}))}(t);var s=a();return s>100&&ne("Parsed elements: ".concat(r,"; Hash assign to ").concat(o," elements. Performance: ").concat(s,"ms")),i}(t,e);if(0===o.length)return o;var i=fe.length,a=[];!function(t){var e=[],n=[],r={},o=function(t){return t},i=function(t){var e=[];return function t(n,r){0!==r&&n.childNodes.forEach((function(n){n instanceof Element&&(e.push("".concat(r).concat(n.tagName)),t(n,r-1))}))}(t,1),e.length<2?null:"".concat(t.tagName,"- ").concat(e.join(","))},a=function(t){return 0===t.classList.length?null:t.tagName+"."+oe(t.classList).join(".")};cbarApp.clickMonitor.dubugSel=ee;var c=function(t,e,n,i){if(t.length>=4){var a=t[0].tagName,c=o("".concat(ee(n,r)," > ").concat(a)),s=be("".concat(c,"~").concat(e));fe.push({elements:t,hash:s,selector:c,parentElement:n});var l=fe.length;t.forEach((function(t){return t[_t.KEY_GROUP]=l})),ne("Group ".concat(l," keys: ").concat(i.join("; ")," | Selector: ").concat(c," | Hash: ").concat(s))}};pe.groupTweaks&&pe.groupTweaks.forEach((function(i){var a,s;i.pageType&&i.pageType!==cbar_pagetype||(i.ignoreElements&&(e=[].concat(oe(e),oe(i.ignoreElements))),i.skipElements&&(n=[].concat(oe(n),oe(i.skipElements))),i.manualGroups&&(a=i.manualGroups,s=0,a.forEach((function(e){s++,t.querySelectorAll(e.parent).forEach((function(t,n){var r=oe(t.querySelectorAll(e.selector));c(r,"c".concat(s,"-").concat(n),t,["Custom-".concat(s,"-").concat(n)])}))}))),i.selectorConfig&&(r=i.selectorConfig),i.selectorModificator&&(o=i.selectorModificator))}));var s=performance.now();!function t(r){var o=[],s=[];r.childNodes.forEach((function(t){if(t instanceof Element&&!t.hasOwnProperty(_t.KEY_GROUP)&&!(ve(t,e)||(s.push(t),n.length>0&&ve(t,n)))){var r=t.getBoundingClientRect();if(!(r.width<20||0===r.height)){var c=["".concat(t.tagName,"-").concat(Math.floor(r.width),"x").concat(Math.floor(r.height)),i(t),a(t)].filter((function(t){return null!==t}));o.some((function(e){var n=c.some((function(t){return e.keys.includes(t)}));if(n){e.elements.push(t);var r=[].concat(oe(e.keys),oe(c));e.keys=r.filter((function(t,e){return r.indexOf(t)===e}))}return n}))||o.push({keys:c,elements:[t]})}}}));for(var l=0;o.hasOwnProperty(l);){for(var u=o.length-1;u>l;u--)o[u].keys.some((function(t){return o[l].keys.includes(t)}))&&(o[l].elements=[].concat(oe(o[l].elements),oe(o[u].elements)),o.splice(u,1));l++}o.forEach((function(t,e){c(t.elements,e,r,t.keys)})),o=null,s.forEach((function(e){e.hasOwnProperty(_t.KEY_GROUP)||t(e)}))}(t);var l=performance.now()-s;l>100&&ne("Scan complete within ".concat(l,"ms. ").concat(fe.length," sets were found"))}(t);for(var c=o.length,s=i;s<fe.length;++s)o=o.concat(_e(s)),a.push(fe[s].hash);if(c!==o.length){var l=[];o.forEach((function(t){t.hasOwnProperty(_t.KEY_ID)&&l.push(t)})),o=l}if(null!==de)for(var u in o)if(o.hasOwnProperty(u)&&o[u][_t.KEY_ID]===de){ne("Detected highlighted element ".concat(de)),"function"==typeof he&&he(o[u]);break}if(a.length>0){var f=new CustomEvent(_t.EVENT_GROUPS_ADDED,{detail:{ids:a}});document.dispatchEvent(f)}return o},Ee=we,Oe=function(t){t=parseInt(t);var e=fe.find((function(e){return e.hash===t}));return void 0===e?null:e},Pe=function(){return fe};function Se(t){return Se="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Se(t)}function xe(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==Se(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==Se(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===Se(o)?o:String(o)),r)}var o}var ke=function(){function t(e,n,r){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.groupData=e,this.data=n,this.group=r,this.logMsg=""}var e,n;return e=t,(n=[{key:"optimise",value:function(){}},{key:"afterElementsMoved",value:function(t){var e,n;0===t.realChanges&&Ct(this.group.hash,2,!0),t.realChanges>0&&(e=this.group.hash,n=t.realChanges,Pt.groupsOpt[e]=n)}},{key:"getAvailableElements",value:function(){var t=this,e=[],n=this.getGroupPins(),r=0;return this.group.parentElement.childNodes.forEach((function(o,i){if(o.hasOwnProperty(_t.KEY_ID)){var a=o[_t.KEY_ID];t.groupData.elements.hasOwnProperty(a)&&(n.hasOwnProperty(a)||(e.push({id:a,element:o,position:r,realPosition:i,score:t.groupData.elements[a].score,limiter:t.groupData.elements[a].limiter}),r++))}})),e}},{key:"getGroupPins",value:function(){var t=this.group.hash;return this.data.pins.hasOwnProperty(t)?this.data.pins[t]:{}}}])&&xe(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}(),je=ke,Te=function(t){var e,n,r=-.00778489400243029,o=-.322396458041136,i=-2.40075827716184,a=-2.54973253934373,c=4.37466414146497,s=2.93816398269878,l=.00778469570904146,u=.32246712907004,f=2.445134137143,p=3.75440866190742;if(t<0||t>1)throw new Error("Argument out of range");return t<.02425?(((((r*(e=Math.sqrt(-2*Math.log(t)))+o)*e+i)*e+a)*e+c)*e+s)/((((l*e+u)*e+f)*e+p)*e+1):t<=.97575?(((((-39.6968302866538*(n=(e=t-.5)*e)+220.946098424521)*n-275.928510446969)*n+138.357751867269)*n-30.6647980661472)*n+2.50662827745924)*e/(((((-54.4760987982241*n+161.585836858041)*n-155.698979859887)*n+66.8013118877197)*n-13.2806815528857)*n+1):-(((((r*(e=Math.sqrt(-2*Math.log(1-t)))+o)*e+i)*e+a)*e+c)*e+s)/((((l*e+u)*e+f)*e+p)*e+1)};function Ie(t){return Ie="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Ie(t)}function Ae(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function Ce(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,Le(r.key),r)}}function Re(t,e){return Re=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},Re(t,e)}function Me(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function De(t){return De=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},De(t)}function Le(t){var e=function(t,e){if("object"!==Ie(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==Ie(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===Ie(e)?e:String(e)}var Ne=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&Re(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=De(r);if(o){var n=De(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===Ie(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return Me(t)}(this,t)});function a(){var t,e,n;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a);for(var r=arguments.length,o=new Array(r),c=0;c<r;c++)o[c]=arguments[c];return e=Me(t=i.call.apply(i,[this].concat(o))),!1,(n=Le(n="isSimulation"))in e?Object.defineProperty(e,n,{value:false,enumerable:!0,configurable:!0,writable:!0}):e[n]=false,t}return e=a,(n=[{key:"optimise",value:function(){this.isSimulation=this.groupData.hasOwnProperty("isSimulation"),this.logMsg=(this.isSimulation?"Simulating optimisation":"Optimising")+" group ".concat(this.group.hash,"\n");var t=this.getAvailableElements();t=this.filterElements(t);var e=this.moveElements(t);return this.isSimulation||this.afterElementsMoved(e),e.logMsg=this.logMsg,e}},{key:"filterElements",value:function(t){return t.filter((function(t){return t.score>0||t.limiter>=100}))}},{key:"moveElements",value:function(t){var e=this,n=this.getMaxMoveCount(t),r=this.group.parentElement;this.logMsg+="* Rearrangement of ".concat(n," pairs, found ").concat(t.length," elements in the group\n"),t.sort((function(t,e){return e.score===t.score?e.position-t.position:e.score-t.score})),t.forEach((function(t,e){t.optimalPosition=e,t.offsetFromOptimal=t.position-t.optimalPosition}));var o,i,a=[],c=[];t.sort((function(t,e){return e.offsetFromOptimal-t.offsetFromOptimal}));for(var s=0,l=0,u=t.length-1;l<n&&s<u-s;){var f=t[s],p=t[u-s],d=(o=this.isGoodSampleSize(f,p),i=2,function(t){if(Array.isArray(t))return t}(o)||function(t,e){var n=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null!=n){var r,o,i,a,c=[],s=!0,l=!1;try{if(i=(n=n.call(t)).next,0===e){if(Object(n)!==n)return;s=!1}else for(;!(s=(r=i.call(n)).done)&&(c.push(r.value),c.length!==e);s=!0);}catch(t){l=!0,o=t}finally{try{if(!s&&null!=n.return&&(a=n.return(),Object(a)!==a))return}finally{if(l)throw o}}return c}}(o,i)||function(t,e){if(t){if("string"==typeof t)return Ae(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Ae(t,e):void 0}}(o,i)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),h=d[0],m=d[1];h?(a.push(f),a.push(p),l++):this.logMsg+="- Elements ".concat(f.id," (score ").concat(f.score,") and ").concat(p.id," (score ").concat(p.score,") not swapped (").concat(m,")\n"),s++}a.forEach((function(t){return c.push(t.realPosition)}));var y={},b=0;return a.sort((function(t,e){return e.score-t.score})),c.sort((function(t,e){return t-e})),c.forEach((function(n){var o=a.shift(),i=t.find((function(t){return t.realPosition===n})),c="stayed in same position ".concat(o.position);if(i.position!==o.position&&(o.element[_t.KEY_EXP_192]=!0,c="moved to slot ".concat(i.position," from slot ").concat(o.position),!e.isSimulation)){var s=r.childNodes.hasOwnProperty(n)?r.childNodes[n]:null,l=o.element.nextSibling;s!==l&&(r.insertBefore(o.element,s),r.insertBefore(s,l)),b++}e.logMsg+="- Element ".concat(o.id," (score ").concat(o.score,") ").concat(c,"\n"),y[o.id]=[o.position,i.position]})),{movementsLog:y,realChanges:b}}},{key:"isGoodSampleSize",value:function(t,e){var n,r="",o=Math.min(t.score,e.score),i=Math.max(t.score,e.score);n=0===o?100:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:.95,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:.84,o=t+e*t;return Math.round(Math.pow(Te(n)+Te(r),2)*(t*(1-t)+o*(1-o))/Math.pow(t-o,2))}(o,(i-o)/o,.8);var a=t.limiter>=n&&e.limiter>=n;return a||(r="expected ".concat(n," sample size, but got ").concat(t.limiter," & ").concat(e.limiter)),[a,r]}},{key:"getMaxMoveCount",value:function(t){var e=t.length;return Math.min(10,parseInt(3+e/10),parseInt(e/2))}}])&&Ce(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(je),Be=Ne;function He(t){return He="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},He(t)}function ze(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==He(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==He(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===He(o)?o:String(o)),r)}var o}function qe(t,e){return qe=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},qe(t,e)}function Ue(t){return Ue=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},Ue(t)}function Ge(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null!=n){var r,o,i,a,c=[],s=!0,l=!1;try{if(i=(n=n.call(t)).next,0===e){if(Object(n)!==n)return;s=!1}else for(;!(s=(r=i.call(n)).done)&&(c.push(r.value),c.length!==e);s=!0);}catch(t){l=!0,o=t}finally{try{if(!s&&null!=n.return&&(a=n.return(),Object(a)!==a))return}finally{if(l)throw o}}return c}}(t,e)||function(t,e){if(t){if("string"==typeof t)return Ze(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Ze(t,e):void 0}}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function Ze(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}var Ke=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&qe(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=Ue(r);if(o){var n=Ue(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===He(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"optimise",value:function(){var t=this;this.logMsg="Predicting optimization for group ".concat(this.group.hash,"\n"),this.isSimulation=!0;var e=this.getAvailableElements();e=this.filterElements(e);var n=this.moveElements(e);n.report=null;var r=function(t){var e={},n=t.length,r=0,o=0,i=0,a=0;return t.forEach((function(t){var e=Ge(t,2),n=e[0],c=e[1];r+=n,o+=c,i+=n*c,a+=n*n})),e.slope=(n*i-r*o)/(n*a-r*r),e.intercept=(o-e.slope*r)/n,e}(e.map((function(t){return t.limiter})).sort((function(t,e){return e-t})).map((function(t,e){return[e,t]}))),o=0,i=0,a=0;return Object.keys(n.movementsLog).forEach((function(e){var c=t.groupData.elements[e].clicks;i+=c,a+=t.groupData.elements[e].limiter;var s=Ge(n.movementsLog[e],2),l=(s[0],s[1]),u=parseInt((l-1)*r.slope+r.intercept),f=parseInt(t.groupData.elements[e].score*u)-c,p=f>0?"+":"";o+=f,t.logMsg+="- Predicted click change for element ".concat(e,": ").concat(p).concat(f,"\n")})),this.logMsg+="Total predicted clicks change: ".concat(o,"\n"),o>0&&(n.report={groupHash:this.group.hash,newClicks:o,oldClicks:i,moveCount:this.getMaxMoveCount(e),totalViews:a}),n.logMsg=this.logMsg,n}}])&&ze(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(Be),Ve=Ke;function We(t){return We="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},We(t)}function Ye(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function Fe(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==We(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==We(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===We(o)?o:String(o)),r)}var o}function $e(){return $e="undefined"!=typeof Reflect&&Reflect.get?Reflect.get.bind():function(t,e,n){var r=function(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=Xe(t)););return t}(t,e);if(r){var o=Object.getOwnPropertyDescriptor(r,e);return o.get?o.get.call(arguments.length<3?t:n):o.value}},$e.apply(this,arguments)}function Je(t,e){return Je=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},Je(t,e)}function Xe(t){return Xe=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},Xe(t)}var Qe=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&Je(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=Xe(r);if(o){var n=Xe(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===We(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"optimise",value:function(){this.logMsg="Personalisation (Algorithm A) for group ".concat(this.group.hash,"\n");var t=this.getAvailableElements();t=this.filterElements(t);var e=this.moveElements(t);return this.afterElementsMoved(e),e.logMsg=this.logMsg,e}},{key:"filterElements",value:function(t){var e,n=this,r=Math.max.apply(Math,function(t){if(Array.isArray(t))return Ye(t)}(e=t.map((function(t){return t.score})))||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(e)||function(t,e){if(t){if("string"==typeof t)return Ye(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Ye(t,e):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}());return 0===r&&(r=.5),this.logMsg+="* Top score: ".concat(Hn.niceFloat(r),"\n"),t=t.map((function(t){var e="",o=0;t.isVirtual=!1;for(var i=0,a=n.data.personalisation.length;i<a;++i)if(t.id===n.data.personalisation[i][0]){o=r*(1-.05*i),e="viewedIndex=".concat(i);break}if(0===o)for(var c=!1,s=0,l=n.data.personalisation.length;s<l&&!c;++s)for(var u=1,f=n.data.personalisation[s].length;u<f&&!c;++u)if(t.id===n.data.personalisation[s][u]){var p=1-.15*s,d=1-.1*u;e="ctr=".concat(Hn.niceFloat(100*t.score),"; viewedIndex=").concat(s,"; linkIndex=").concat(u),o=t.score>0?t.score+1.5*t.score*p*d:.8*r*(1-.05*p)*d,c=!0}return o>t.score&&(n.logMsg+="- Assign virtual CTR ".concat(Hn.niceFloat(100*o)," to element ").concat(t.id," (").concat(e,")\n"),t.score=o,t.isVirtual=!0),t})),$e(Xe(a.prototype),"filterElements",this).call(this,t)}},{key:"isGoodSampleSize",value:function(t,e){return t.isVirtual||e.isVirtual?[!0,""]:[!1,"both are not personalization items"]}}])&&Fe(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(Be),tn=Qe,en="cbar-cm-personalisation-v2",nn="Personalisator (Algorithm B)",rn=function(){var t=null,e="",n=function(){null===t&&(t=wt.Z.local.get(en,{}),e=Hn.getCurrentPath())};return{getClicks:function(r){return n(),t.hasOwnProperty(e)||(t[e]={}),t[e].hasOwnProperty(r)||(t[e][r]=[]),t[e][r]},saveClick:function(r,o){n(),t[e].hasOwnProperty(r)||(t[e][r]=[]),t[e][r].push(o),wt.Z.local.create(en,t,604800)}}}(),on=function(t){var e=t.currentTarget;if(e.hasOwnProperty(_t.KEY_ID)&&e.hasOwnProperty(_t.KEY_GROUP)){var n=e[_t.KEY_ID],r=e[_t.KEY_GROUP],o=Pe()[r-1].hash;rn.saveClick(o,n),ne("".concat(nn,": click registered on element ").concat(n," in group ").concat(o))}else ne("".concat(nn,": element don't have hash ID or a group key"))},an=function(t,e){var n=rn.getClicks(t);if(0===n.length)throw new Error("Perosonalization data is empty");var r=function(t){t=parseInt(t);var e=fe.findIndex((function(e){return e.hash===t}));return-1===e?null:e+1}(t);if(null===r)throw new Error("Can not find group ID");for(var o=Pe()[r-1].parentElement,i=null,a=0;a<o.childNodes.length;a++){var c=o.childNodes[a];if(c.hasOwnProperty(_t.KEY_GROUP)&&c[_t.KEY_GROUP]==r){i=document.createElement("div"),c.insertAdjacentElement("beforebegin",i);break}}if(null===i)throw new Error("Group does not have a single element");var s={},l={},u=0;n.forEach((function(t){if(!s.hasOwnProperty(t)&&!e.hasOwnProperty(t)){s[t]=!0;var n=void 0===se[o=t]?null:se[o];n[_t.KEY_GROUP]==r&&(i.insertAdjacentElement("afterend",n),u++,l[t]=[u+1,u])}var o})),i.remove();var f="- No moves";return u>0&&(f="",Object.keys(l).forEach((function(t,e){return f+="- Element ".concat(t," moved to position ").concat(e+1,"\n")}))),{logMsg:f,movementsLog:l,realChanges:u}};function cn(t){return cn="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},cn(t)}function sn(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==cn(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==cn(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===cn(o)?o:String(o)),r)}var o}function ln(){return ln="undefined"!=typeof Reflect&&Reflect.get?Reflect.get.bind():function(t,e,n){var r=function(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=fn(t)););return t}(t,e);if(r){var o=Object.getOwnPropertyDescriptor(r,e);return o.get?o.get.call(arguments.length<3?t:n):o.value}},ln.apply(this,arguments)}function un(t,e){return un=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},un(t,e)}function fn(t){return fn=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},fn(t)}var pn=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&un(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=fn(r);if(o){var n=fn(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===cn(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(t,e){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.call(this,null,t,e)}return e=a,(n=[{key:"optimise",value:function(){var t,e,n;e=this.group.hash,null!==(n=Oe(e))&&(n.elements.forEach((function(t){return t.addEventListener("click",on)})),ne("".concat(nn,": adding to monitoring; group ID ").concat(e)));try{t=an(this.group.hash,this.getGroupPins()),this.afterElementsMoved(t)}catch(e){t={logMsg:"* No personalization: "+e.message,movementsLog:{},realChanges:0}}return t.logMsg="Personalization (Algorithm B) of group ".concat(this.group.hash,"\n").concat(t.logMsg),t}},{key:"afterElementsMoved",value:function(t){var e=this;this.data.pins.hasOwnProperty(this.group.hash)||(this.data.pins[this.group.hash]={}),Object.keys(t.movementsLog).forEach((function(t){return e.data.pins[e.group.hash][t]=1})),ln(fn(a.prototype),"afterElementsMoved",this).call(this,t)}}])&&sn(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(je),dn=pn;function hn(t){return hn="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},hn(t)}function mn(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==hn(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==hn(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===hn(o)?o:String(o)),r)}var o}function yn(t,e){return yn=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},yn(t,e)}function bn(t){return bn=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},bn(t)}var gn=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&yn(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=bn(r);if(o){var n=bn(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===hn(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(t,e,n,r){var o;return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),(o=i.call(this,t,e,n)).movements=o._movementsToArray(r),o}return e=a,(n=[{key:"optimise",value:function(){if(this.groupData.mode===_t.MODE_HIGHLIGHT){this.isSimulation=!0,this.logMsg="Simulating optimisation for highlighting for group ".concat(this.group.hash,"\n");var t=this.getAvailableElements();t=this.filterElements(t);var e=this.moveElements(t);this.movements=this._movementsToArray(e.movementsLog)}return this.logMsg+="Highlighting group ".concat(this.group.hash,", personalized elements: ").concat(this.movements.join(", "),"\n"),Highlighting.show(this.group.hash,this.movements,this.groupData.highlight),{logMsg:logMsg,movementsLog:[],realChanges:0}}},{key:"_movementsToArray",value:function(t){var e=[];return Object.keys(t).forEach((function(t){return e.push(t)})),e}}])&&mn(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(Be),vn=gn;function _n(t){return _n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_n(t)}function wn(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(void 0,o=function(t,e){if("object"!==_n(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==_n(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(r.key),"symbol"===_n(o)?o:String(o)),r)}var o}function En(){return En="undefined"!=typeof Reflect&&Reflect.get?Reflect.get.bind():function(t,e,n){var r=function(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=Pn(t)););return t}(t,e);if(r){var o=Object.getOwnPropertyDescriptor(r,e);return o.get?o.get.call(arguments.length<3?t:n):o.value}},En.apply(this,arguments)}function On(t,e){return On=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},On(t,e)}function Pn(t){return Pn=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(t){return t.__proto__||Object.getPrototypeOf(t)},Pn(t)}var Sn=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&On(t,e)}(a,t);var e,n,r,o,i=(r=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,e=Pn(r);if(o){var n=Pn(this).constructor;t=Reflect.construct(e,arguments,n)}else t=e.apply(this,arguments);return function(t,e){if(e&&("object"===_n(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}(this,t)});function a(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,a),i.apply(this,arguments)}return e=a,(n=[{key:"optimise",value:function(){this.logMsg="Merchandising for group ".concat(this.group.hash,"\n");var t=this.getAvailableElements(),e=this.moveElements(t);return this.afterElementsMoved(e),e.logMsg=this.logMsg,e}},{key:"afterElementsMoved",value:function(t){var e=this;if(En(Pn(a.prototype),"afterElementsMoved",this).call(this,t),this.data.hasOwnProperty("merchDebug"))if(this.logMsg+="\n\nDEBUGGING MERCHANDISING\n",this.data.merchDebug.hasOwnProperty(this.group.hash)){var n=this.data.merchDebug[this.group.hash];this.logMsg+="Merchandising config:\n",Object.keys(n.config).forEach((function(t){e.logMsg+="- ".concat(t,": ").concat(n.config[t],"%\n")})),this.logMsg+="Elements:\n",Object.keys(t.movementsLog).forEach((function(t){if(e.logMsg+="- Element ".concat(t,": "),n.elements.hasOwnProperty(t)){e.logMsg+="\n",e.logMsg+="   - Product ID: "+(n.elements[t].hasOwnProperty("productId")?n.elements[t].productId:"No product match")+"\n",e.logMsg+="   - Score: ".concat(e.data.data[e.group.hash].elements[t].score);var r=[];Object.keys(n.config).forEach((function(e){if(0!==n.config[e]){var o=n.elements[t][e]||0;r.push("".concat(e,"=").concat(o,"*").concat(n.config[e]))}})),r.length>0&&(e.logMsg+=" (".concat(r.join(" + "),")")),e.logMsg+="\n"}else e.logMsg+="No data for that element\n"}))}else this.logMsg+="* No group info in debugging data"}},{key:"isGoodSampleSize",value:function(t,e){return t.score===e.score?[!1,"same score"]:[!0,""]}}])&&wn(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),a}(Be),xn=Sn,kn=function(t,e){var n=e.groupData,r=e.data,o=e.group,i=e.movments;switch(t){case _t.MODE_PREDICTION:return new Ve(n,r,o);case _t.MODE_OPTIMISATION:return new Be(n,r,o);case _t.MODE_PERSONALISATION:return new tn(n,r,o);case _t.MODE_PERSONALISATION_V2:return new dn(r,o);case _t.MODE_HIGHLIGHT:return new vn(n,r,o,i);case _t.MODE_MERCHANDISING:return new xn(n,r,o)}},jn="Optimisator:",Tn="cbar-cm-groups-cg-v3",In=null,An=!1,Cn=null,Rn={},Mn=function(t,e){if(t.hasOwnProperty("ga")){var n={tracker:"",category:"Barilliance",action:t.ga.groupName,label:t.ga[e],nonInteraction:!0};ne("Optimisation reported to GA",n),(0,c.to)(n)}},Dn=function(t){if(ce){var e=[];Object.keys(t).forEach((function(n){var r=t[n],o=Oe(n);if(null!==o){if(r.hasOwnProperty("cg")&&Ln(n,r.cg))return ne("".concat(jn," Skip group ").concat(n," - control group")),void Mn(r,"onCg");if(0===r.mode){var i=kn(0,{groupData:r,data:In,group:o}).optimise();null!==i.report&&e.push(i.report)}var a=!1;[_t.MODE_PERSONALISATION_V2,_t.MODE_OPTIMISATION,_t.MODE_PERSONALISATION,_t.MODE_MERCHANDISING,_t.MODE_HIGHLIGHT].forEach((function(t){if(r.mode&t){Rn.hasOwnProperty(n)||(Rn[n]={});var e=kn(t,{groupData:r,data:In,group:o,movments:Rn[n]}).optimise();ne("".concat(jn," ").concat(e.logMsg)),Object.keys(e.movementsLog).forEach((function(t){return Rn[n][t]=e.movementsLog[t]})),e.realChanges>0&&(a=!0)}})),Mn(r,a?"onOptimisation":"onFailed"),delete In.data[n]}})),e.length>0&&Gn.reportOptimisation({report:e})}},Ln=function(t,e){var n="".concat(t,"-").concat(e);return null===Cn&&(Cn=wt.Z.local.get(Tn,{})),Cn.hasOwnProperty(cbar_pagetype)&&Cn[cbar_pagetype].hasOwnProperty(n)||function(){Cn.hasOwnProperty(cbar_pagetype)||(Cn[cbar_pagetype]={});var t=Math.round(100*Math.random());Cn[cbar_pagetype][n]=t>=e,wt.Z.local.create(Tn,Cn)}(),!Cn[cbar_pagetype][n]||(Ct(t),!1)},Nn=function(){var t=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];An=t;var e=function(t){null!==In&&t.detail.ids.some((function(t){return In.data.hasOwnProperty(t)}))&&Dn(In.data)};t?(null!==In&&Dn(In.data),document.addEventListener(_t.EVENT_GROUPS_ADDED,e)):(In=null,Rn={},document.removeEventListener(_t.EVENT_GROUPS_ADDED,e))},Bn=function(t){4===t.v?(In=t,An&&Dn(t.data)):ne("".concat(jn," Wrong protocol version, expected ").concat(4,", but received ").concat(t.v))},Hn={checkRequirements:function(){return"IntersectionObserver"in window&&"isIntersecting"in window.IntersectionObserverEntry.prototype},getCurrentPath:function(){return new URL(document.location.href).pathname},getNearestElement:function(t){for(;null!==t;){if(t.hasOwnProperty(_t.KEY_ID))return t;t=t.parentNode}return null},getUnixTime:function(){return Math.floor(Date.now()/1e3)},niceFloat:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:100;return parseInt(t*e)/e},stopMonitoring:function(){var t=new CustomEvent(_t.EVENT_MONITOR_STOP);document.dispatchEvent(t),function t(e){e.nodeType===Node.ELEMENT_NODE&&(e.hasOwnProperty(_t.KEY_ID)&&delete e[_t.KEY_ID],e.hasOwnProperty(_t.KEY_GROUP)&&delete e[_t.KEY_GROUP],e.childNodes.forEach((function(e){return t(e)})))}(document.body),Nn(!1),null!==St&&(clearTimeout(St),St=null),null!==kt&&(clearTimeout(kt),kt=null)},stopReporting:function(){var t=new CustomEvent(_t.EVENT_REPORT_STOP);document.dispatchEvent(t)}};function zn(){return zn=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t},zn.apply(this,arguments)}var qn,Un=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=new XMLHttpRequest,o=function(t){t.error&&ne("API error: "+t.error),"function"==typeof n&&n(t)};r.open("POST","".concat("https://www.barilliance.net/api/click-monitor/").concat(t,"/")),r.onreadystatechange=function(){if(r.readyState===XMLHttpRequest.DONE)if(200===r.status){var t=JSON.parse(r.responseText);o(t)}else o({error:"API request failed"})},zn(e,{version:18,siteId:cbar_sid}),r.send(JSON.stringify(e))},Gn={collect:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n="";"P"===cbar_pagetype&&(n=cbar_pid),"C"===cbar_pagetype&&(n=cbar_cid),Un("collect",{payload:t,current:{url:document.location.href,pageType:cbar_pagetype,objectId:n},userId:cbar_uid,collectMode:e,timeSync:Hn.getUnixTime()})},makeApiCall:Un,reportOptimisation:function(t){t.url=document.location.href,t.userId=cbar_uid,Un("report-prediction",t)}},Zn=null,Kn=function(t){var e=null;if(t.hasOwnProperty(_t.KEY_GROUP)){var n=t[_t.KEY_GROUP]-1;e=Pe()[n]}return e},Vn=function(t){var e=Hn.getNearestElement(t.target);if(null!==e){var n=Kn(e),r=null===n?null:n.hash,o=e.hasOwnProperty(_t.KEY_EXP_192);!function(t,e,n,r){var o={element:t,creative:e,groupId:n};Pt.clicked.push(o),Pt.lastClick=o,null!==kt&&clearTimeout(kt),kt=setTimeout((function(){Pt.lastClick=null}),6e4),r&&(Pt.exp192.clicked[t]=n),Tt(),jt(!0)}(e[_t.KEY_ID],function(t){if("IMG"===t.tagName)return t.src;var e="";return t.querySelectorAll("img").forEach((function(t){var n=t.getBoundingClientRect();n.height*n.width>0&&(e=t.src)})),e}(e),r,o)}},Wn=function(t){var e=[];t.forEach((function(t){var n=t.target;if(!e.includes(n)){e.push(n);var r=Ee(n);r.length>0&&Fn(r)}}))},Yn=function(t,e){t.forEach((function(t){if(t.isIntersecting){if(t.target.hasOwnProperty(_t.KEY_ID)){var n=Kn(t.target),r=null,o=t.target.hasOwnProperty(_t.KEY_EXP_192);null!==n&&function(t,e){Pt.groups.hasOwnProperty(t)||(Pt.groups[t]={selector:e,viewTime:Hn.getUnixTime()})}(r=n.hash,n.selector),function(t,e,n){Pt.viewed[t]=e,n&&(Pt.exp192.viewed[t]=e),null===e||Ot.hasOwnProperty(e)||(Pt.groupsViewed[e]=null,Ot[e]=!0),Tt(),jt()}(t.target[_t.KEY_ID],r,o)}e.unobserve(t.target)}}))},Fn=function(t){t.forEach((function(t){qn.observe(t)}))},$n=function(){"S"!==cbar_pagetype?(document.addEventListener("click",Vn),(Zn=new MutationObserver(Wn)).observe(document,{attributes:!1,childList:!0,subtree:!0}),qn=new IntersectionObserver(Yn,{threshold:.5}),Fn(Object.values(se)),document.addEventListener(_t.EVENT_MONITOR_STOP,(function(){ne("Monitoring disabled"),null!==Zn&&(Zn.disconnect(),Zn=null),null!==qn&&(qn.disconnect(),qn=null),document.removeEventListener("click",Vn)}))):ne("Monitoring disabled on search page")};function Jn(t){t||(t="");var e=t.match(/^(?:([^:\/?\#]+):)?(?:\/\/([^\/?\#]*))?([^?\#]*)(?:\?([^\#]*))?(?:\#(.*))?/);this.scheme=e[1]||null,this.authority=e[2]||null,this.path=e[3]||null,this.query=e[4]||null,this.fragment=e[5]||null}Jn.prototype.toString=function(){var t="";return this.scheme&&(t+=this.scheme+":"),this.authority&&(t+="//"+this.authority),this.path&&(t+=this.path),this.query&&(t+="?"+this.query),this.fragment&&(t+="#"+this.fragment),t},function(){var t=/\/((?!\.\.\/)[^\/]*)\/\.\.\//;function e(e){if(!e)return"";var n=e.replace(/\/\.\//g,"/");for(n=n.replace(/\/\.$/,"/");n.match(t);)n=n.replace(t,"/");for(n=n.replace(/\/([^\/]*)\/\.\.$/,"/");n.match(/\/\.\.\//);)n=n.replace(/\/\.\.\//,"/");return n}Jn.prototype.resolve=function(t){var n=new Jn;return this.scheme?(n.scheme=this.scheme,n.authority=this.authority,n.path=e(this.path),n.query=this.query):(this.authority?(n.authority=this.authority,n.path=e(this.path),n.query=this.query):(this.path?("/"===this.path.charAt(0)?n.path=e(this.path):(n.path=function(t,e){return t.authority&&!t.path?"/"+e:t.path.match(/^(.*)\//)[0]+e}(t,this.path),n.path=e(n.path)),n.query=this.query):(n.path=t.path,this.query?n.query=this.query:n.query=t.query),n.authority=t.authority),n.scheme=t.scheme),n.fragment=this.fragment,n}}();var Xn=!1,Qn=__webpack_require__(196),tr=__webpack_require__(738);function er(t){return er="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},er(t)}var nr,rr,or,ir,ar,cr,sr,lr,ur,fr,pr=!1,dr=!1,hr=!1,mr=[],yr={},br=(nr=null,rr=!1,or=!1,ir=function(t,e){or=!0,dr=t,pr=e,(0,c.LI)("cbar_mouse_exit",document,{back_button:t,mouseout:e})},function(){var t,e,n,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if("Android"===vt.Z.OS||"iPhone"===vt.Z.OS||"iPad"===vt.Z.OS){if(!r.hasOwnProperty("allowMobile")||!1===r.allowMobile)return;if(rr)return;rr=!0;var o=null===wt.Z.session.get("cbar-back-detection");!function(t){var e=function t(){window.removeEventListener("touchstart",t),window.removeEventListener("touchend",t),window.history.replaceState({cbarExitFlag:"exit"},""),window.history.pushState({cbarExitFlag:"normal"},"")};t&&(window.addEventListener("touchend",e),window.addEventListener("touchstart",e)),window.addEventListener("popstate",(function(t){t.state&&"exit"===t.state.cbarExitFlag&&(or?window.history.back():ir(!1,!1))}))}(o),o&&wt.Z.session.create("cbar-back-detection",!0),t=0,e=0,n=!1,window.addEventListener("scroll",(function r(){var o=window.pageYOffset||document.documentElement.scrollTop,i=o-t>15,a=t-o>15;i&&(n=!0),n&&(e>window.innerHeight&&a&&(window.removeEventListener("scroll",r),ir(!1,!1)),window.innerHeight>e&&(e=window.innerHeight)),t=i||a?o:t}))}else!function(){var t,e,n,r,o=!1,i=null;if(null===nr){pr=!1,nr=setInterval((function(){null!==i&&r==e&&r-i<-10&&e<80&&o&&ir(n+2*(t-n)<150,!0),i=r,n=t,r=e}),100);var a=document.getElementsByTagName("html")[0],c="mouseleave",s="mouseenter";"onmouseleave"in a||(c="mouseout",s="mouseover"),a.addEventListener(c,(function(){o=!0})),a.addEventListener(s,(function(){o=!1})),window.addEventListener("mousemove",(function(n){(n.clientX||n.clientY)&&(t=n.clientX,e=n.clientY)}))}}()}),gr=function(t,e){var n=null,r=function(){n=setTimeout((function(){vr(t)}),1e3*e)};window.addEventListener("scroll",(function(){null!==n&&clearTimeout(n),r()})),r()},vr=function t(e){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],o=0;return mr.forEach((function(i,a){i.ruleId===e&&(i.executed&&!n||"1"!=tr.Z.read("cbar_pc_"+e)&&"1"!=tr.Z.read("cbar_pc_"+cbar_sess+"_"+e)&&(r||yr.hasOwnProperty(e)?(0,c.FY)("trigger of "+e+" - muted"):_r(e),cbarApp.ruleSuppressed.hasOwnProperty(e)||(o++,mr[a].executed=!0,i.action(),t(e+"-after",n,!0))))})),o},_r=function(t){if(0!==t){var e=0;cbarApp.ruleVariations.hasOwnProperty(t)&&(e=cbarApp.ruleVariations[t]),(0,c.SM)(t),(0,c.mu)({a:"delayed",sid:cbar_sid,uid:cbar_uid,rid:t,varid:e}),(0,c.FY)("cbar rule "+t+" triggered")}},wr={add:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:[];cbar_suppress_rules.includes(t)||(mr.push({ruleId:t,action:e,executed:!1}),n.forEach((function(n){if("function"!=typeof n){var r="code",o=null;if("object"===er(n)){if(!n.hasOwnProperty("type"))return;r=n.type,o=n}else"string"!=typeof n&&(0,c.H)("Unknown delay condition for rule #"+t);switch(r){case"delayed":setTimeout((function(){vr(t)}),1e3*o.time);break;case"exit-v1":br(),window.addEventListener("beforeunload",(function(e){if(!hr)return function(t){return!1!==pr&&(!0!==dr||1==cbar_sess_pv)&&vr(t)>0}(t)&&(e.preventDefault(),""!==o.message)?(e.returnValue=o.message,o.message):void 0}));break;case"exit-v2":br(o),document.addEventListener("cbar_mouse_exit",(function(){hr||!1!==dr&&1!=cbar_sess_pv||vr(t)}));break;case"noactivity":new gr(t,o.time)}}else n(t,e)})))},remove:function(t){mr=mr.filter((function(e){return e.ruleId!=t}))},run:vr,reset:function(){return mr=[]},report:_r,tweak:function(t){switch(t){case"no-mouse-exit":hr=!0;break;case"skip-report":for(var e=arguments.length,n=new Array(e>1?e-1:0),r=1;r<e;r++)n[r-1]=arguments[r];yr[n[0]]=1}}},Er=__webpack_require__(889),Or="https://app.barilliance.com",Pr="cbar-emailcapture-debug-token",Sr=function(){var t=document.querySelector("body"),e=[],n=window.innerWidth*(window.innerWidth>1500?.3:.4);!function t(r,o){var i=[];if(!(r.getBoundingClientRect().width<n)){var a=0;if(r.childNodes.forEach((function(t){if(t instanceof Element){a++;var e=window.getComputedStyle(t);"hidden"!==e.visibility&&"none"!==e.display&&i.push({child:t,index:a})}})),i.length>=4){var c=e.length,s={};e[c]={elementSelector:o},i.forEach((function(t){0!==t.child.classList.length&&t.child.classList.forEach((function(e){var n=t.child.tagName.toLowerCase()+"."+e;s[n]||(s[n]=0),s[n]++}))})),e[c].items=s}""!==o&&(o+=" > "),i.forEach((function(e){var n=""!==e.child.id?"#"+e.child.id:o+e.child.tagName.toLowerCase()+":nth-child(".concat(e.index,")");t(e.child,n)}))}}(t,"");var r=0,o=null;return e.forEach((function(t){for(var e in t.items)t.items[e]>Math.max(3,r)&&(r=t.items[e],o=(""===t.elementSelector?"":t.elementSelector+" > ")+e)})),o},xr=a.Z.register("ListingPageBanner","#96a8b8"),kr=function(t,e){if(null===document.querySelector(t))var n=15,r=setInterval((function(){var o=null!==document.querySelector(t);(o||0===n)&&(o&&e(),n--,clearInterval(r),0===n&&xr("Required selector not found on the page. Selector to check: ".concat(t)))}),300);else e()},jr=a.Z.register("Realtime purchase messages","#ff8a55"),Tr=1,Ir=function(){var t="live-puchase-watched",e=[];return{init:function(){e=wt.Z.session.get(t,[])},getItems:function(){return e},addItem:function(n){e.push(n),wt.Z.session.create(t,e)},clearAll:function(){e=[],wt.Z.session.remove(t)}}}(),Ar=function(){Cr()},Cr=function t(){if(0!==lr.length){var e=lr.pop();sr.message=[e.text],sr.image=e.image,sr.url=e.url,cbarShowLiveMessage(sr),Ir.addItem(e.id),setTimeout(Ar,1e3*cr)}else n=function(){0===lr.length?(setTimeout(Ar,6e4*Tr),Tr*=2):(t(),Tr=1)},function(t,e){var n=new XMLHttpRequest;n.open("POST","https://www.barilliance.net/api/live/get-realtime-messages/"),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&e(JSON.parse(n.responseText))},n.send(JSON.stringify(t))}({siteId:cbar_sid,userId:cbar_uid,ruleId:ur,abCode:fr,watchedMessages:Ir.getItems().join(",")},(function(t){Ir.clearAll(),lr=t.items,n()}));var n},Rr=[{name:".cbar-popup-label",rules:["display: block","position: absolute","bottom: 5px","top: auto","right: 5px","font-size: 8px","cursor: pointer"]},{name:".cbar-popup-label a",rules:["color: gray","margin-right: 10px","text-align: right"]},{name:".cbar-iframe-popup-label",rules:["color: gray","position: absolute","font-size: 9px","right: 10px","bottom: 10px"]},{name:".cbar-trust-message",rules:["float: right","font-size: 80%","opacity: 0.6","cursor: pointer"]},{name:".cbar-preview-wrapper",rules:["position: fixed","bottom: 20px","z-index: 2147483647","cursor: all-scroll"]},{name:".cbar-preview-box",rules:["font-size: 16px","padding: 10px","border: 1px solid gray","font-weight: bold","color: red","background: rgba(255, 255, 255, 0.9)","text-align: center"]},{name:".cbar-preview-msg",rules:["font-size: 11px","color: gray","width: 100%","line-height: 9px"]},{name:".cbar-preview-msg code",rules:["font-family: monospace","background-color: #fee","color: #e01e5a"]},{name:".cbar-preview-close",rules:["font-size: 15px","background: #1f86c8","color: #ddd","padding: 3px","cursor: pointer"]},{name:".cbar-overlay-image-box",rules:["height: 0","width: 0","margin: 0","padding: 0","z-index: 2147483646","display: inline","border: none","position: absolute","visibility: visible","overflow: visible"]},{name:".cbar-overlay-image-box img",rules:["position: relative","border: none","margin: 0","padding: 0"]},{name:".cbar-underlay",rules:["display: block","position: fixed","background: none repeat scroll 0% 0% rgb(17, 17, 17)","top: 0","left: 0"]},{name:".cbar-close-button",rules:["position: absolute","cursor: pointer","border: none","width: auto"]},{name:".cbar-wpask-hint",rules:["position: fixed","background-color: white","z-index: 9999999","top: 90px","left: 50%","padding: 25px","font-size: 18px","box-shadow: 0 0 50px black"]}],Mr=function(t,e){var n=(0,c.co)(e);t.forEach((function(t){var e=t.name+" {";t.rules.forEach((function(t){e+=t+";"})),e+="}",n.insertRule(e,n.cssRules.length)}))},Dr={renderDefaultStyles:function(){Mr(Rr,"cbar-main-styles")},renderStyles:Mr},Lr=__webpack_require__(228);function Nr(t){return Nr="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},Nr(t)}function Br(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function Hr(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function zr(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?Hr(Object(n),!0).forEach((function(e){qr(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):Hr(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function qr(t,e,n){return(e=Gr(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function Ur(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,Gr(r.key),r)}}function Gr(t){var e=function(t,e){if("object"!==Nr(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==Nr(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===Nr(e)?e:String(e)}var Zr=function(t){return cbarApp.cbarTooltip.filter((function(e){return t.target==document.querySelector(e.selector)||t.target==e.iconElement}))[0]},Kr=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),void 0===cbarApp.cbarTooltip&&(cbarApp.cbarTooltip=[])}var e,n;return e=t,(n=[{key:"_injectCSS",value:function(){if(null==document.getElementById("cbar-tooltips-styles")){var t=(0,c.co)("cbar-tooltips-styles");[".cbar-tooltip {\n\t\t\t\tz-index:100;\n\t\t\t\tbackground-color: #FFFFFF;\n\t\t\t\tpadding: 0px;\n\t\t\t\tborder-radius: 4px;\n\t\t\t\tfont-size: 13px;\n\t\t\t\tdisplay:none;\n\t\t\t}",".cbar-tooltip .cbar-tooltip-content{\n\t\t\t\tpadding:10px;\n\t\t\t\tcolor:#000000;\n\t\t\t}",".cbar-tooltip[data-show] {\n\t\t\t\tdisplay: block;\n\t\t\t}",".cbar-tooltip #arrow{\n\t\t\t\tvisibility: hidden;\n\t\t\t\tposition: absolute;\n\t\t\t\twidth: 8px;\n\t\t\t\theight: 8px;\n\t\t\t\tbackground: inherit;\n\t\t\t}",".cbar-tooltip #arrow::before {\n\t\t\t\tvisibility: visible;\n\t\t\t\tcontent: '';\n\t\t\t\tposition: absolute;\n\t\t\t\twidth: 8px;\n\t\t\t\theight: 8px;\n\t\t\t\tbackground: inherit;\n\t\t\t\ttransform: rotate(45deg);\n\t\t\t}",".cbar-tooltip[data-popper-placement^='top'] > #arrow{\n\t\t\t\tbottom: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='bottom'] > #arrow {\n\t\t\t\ttop: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='left'] > #arrow {\n\t\t\t\tright: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='right'] > #arrow {\n\t\t\t\tleft: -4px;\n\t\t\t}",".cbar-tooltip p{\n\t\t\t\tcolor:#000000;\n\t\t\t\tpadding:0;\n\t\t\t\tmargin:0;\n\t\t\t}",".cbar-tooltip-icon{\n\t\t\t\tz-index: 10;\n\t\t\t\tposition:absolute;\n\t\t\t}"].forEach((function(e){t.insertRule(e)}))}}},{key:"applyChanges",value:function(t){var e=this;this._injectCSS(),t.changes.forEach((function(t){var n=document.querySelector(t.selector);if(null!==n){void 0===cbarApp.cbarTooltip[t.index]&&(-1==t.index&&(t.index=Object.keys(cbarApp.cbarTooltip).length),cbarApp.cbarTooltip.splice(t.index,0,{icon:null,iconElement:null,iconPopper:null,tooltip:null,tooltipPopper:null,closeIcon:null,closeIconPosition:"tr",closeIconCss:{width:10,height:10,margin:0},eventType:"onmouseover",placement:{offset:[0,0],position:"auto",strategy:"absolute"}}));var r=cbarApp.cbarTooltip[t.index];r.selector=t.selector;var o=n.dataset.tooltipsChanges?JSON.parse(n.dataset.tooltipsChanges):{css:{}};if(t.hasOwnProperty("destroy"))e._destroyTooltip(n,r),["tooltipsHtmlChange","tooltipsIconChange","tooltipsCloseIconChange","tooltipsCloseIconCssChange","tooltipsCloseIconPositionChange","tooltipsPlacementChange","tooltipsChanges","tooltipsEventTypeChange","displayChanged","positionChanged"].forEach((function(t){void 0!==n.dataset[t]&&delete n.dataset[t]})),cbarApp.cbarTooltip.splice(t.index,1);else{if(t.hasOwnProperty("html")&&(e.createTooltipElement(n,t.html,r),n.dataset.tooltipsHtmlChange=1),t.hasOwnProperty("icon")&&(o.hasOwnProperty("icon")||(o.icon=t.icon),null==t.icon.src?e._removeIconElement(n,!0,r):e._createIconElement(n,t,r),r.icon=t.icon,r.icon.hasOwnProperty("positionRelative")&&"relative"==r.icon.strategy&&e._setIconRelativePosition(r,t.icon.positionRelative),n.dataset.tooltipsIconChange=1),n.dataset.tooltipsHtmlChange&&e._initTooltip(n,r),null!=r.tooltip){var i=r.tooltip;if(t.hasOwnProperty("eventType")?(o.hasOwnProperty("eventType")||(o.eventType=r.eventType),e.setEventChanges(n,t.eventType,r),r.eventType=t.eventType,n.dataset.tooltipsEventTypeChange=1):e.setEventChanges(n,r.eventType,r),t.hasOwnProperty("closeIcon"))if(o.hasOwnProperty("closeIcon")||(o.closeIcon=i.getAttribute("closeIcon")),"none"==t.closeIcon)null!=r.closeIcon&&(i.removeChild(r.closeIcon),delete r.closeIcon,n.dataset.tooltipsCloseIconChange=1);else{if(null==r.closeIcon){var a=document.createElement("img");a.style.position="absolute",i.insertBefore(a,i.firstChild),a.addEventListener("click",(function(t){t.target.parentElement.removeAttribute("data-show")})),r.closeIcon=a}r.closeIcon.src=t.closeIcon.src,n.dataset.tooltipsCloseIconChange=1}if(null!=r.closeIcon&&(t.hasOwnProperty("closeIconCss")&&(o.hasOwnProperty("closeIconCss")||(o.closeIconCss=r.closeIconCss),t.closeIconCss.forEach((function(t){r.closeIconCss[t.what]=t.value,r.closeIcon.style[t.what]=t.value.toString().length>0?t.value+"px":"initial"})),n.dataset.tooltipsCloseIconCssChange=1),t.hasOwnProperty("closeIconPosition"))){var c=["auto","auto","auto","auto"];switch(t.closeIconPosition){case"tl":c[0]=0,c[3]=0;break;case"tr":c[0]=0,c[1]=0;break;case"bl":c[2]=0,c[3]=0;break;case"br":c[1]=0,c[2]=0}r.closeIcon.style.inset=c.join(" "),o.hasOwnProperty("closeIconPosition")||(o.closeIconPosition=r.closeIconPosition),r.closeIcon.setAttribute("data-position",t.closeIconPosition),r.closeIconPosition=t.closeIconPosition,n.dataset.tooltipsCloseIconPositionChange=1}var s=parseInt(t.css.hasOwnProperty("border-radius")?t.css["border-radius"]:window.getComputedStyle(i,null).getPropertyValue("border-radius"));if(t.hasOwnProperty("placement")&&(r.tooltipPopper.setOptions({placement:t.placement.position,strategy:t.placement.strategy,modifiers:[{name:"offset",options:{offset:t.placement.offset}},{name:"arrow",options:{padding:e.getArrowPadding(s,t.placement.position)}}]}),r.placement=t.placement,n.dataset.tooltipsPlacementChange=1),t.css.hasOwnProperty("border-radius")){var l=t.hasOwnProperty("placement")?t.placement.position:r.tooltipPopper.state.options.placement;r.tooltipPopper.setOptions((function(t){return zr(zr({},t),{},{modifiers:[].concat((n=t.modifiers,function(t){if(Array.isArray(t))return Br(t)}(n)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(n)||function(t,e){if(t){if("string"==typeof t)return Br(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?Br(t,e):void 0}}(n)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),[{name:"arrow",options:{padding:e.getArrowPadding(s,l)}}])});var n}))}var u=i.querySelector(".cbar-tooltip-content");Object.keys(t.css).forEach((function(e){o.css.hasOwnProperty(e)||(o.css[e]=parseInt(window.getComputedStyle(["background-color","opacity","border-radius"].includes(e)?i:u,null).getPropertyValue(e))),"border-radius"==e?i.style.setProperty(e,t.css[e]+"px","important"):["background-color","opacity","z-index"].includes(e)?(i.style.setProperty(e,t.css[e],"important"),i.querySelector("#arrow").style.setProperty(e,t.css[e],"important")):(u.style.setProperty(e,t.css[e],"important"),0==["text-align","text-decoration-line","padding-right","padding-left","padding-top","padding-bottom"].includes(e)&&u.querySelectorAll("*").forEach((function(n){0==("STRONG"==n.tagName&&"font-weight"==e)&&0==("EM"==n.tagName&&"font-style"==e)&&(n.style.setProperty(e,t.css[e],"important"),n.style.setProperty("line-height",t.css[e],"important"))})))}))}n.dataset.tooltipsChanges=JSON.stringify(o)}}}))}},{key:"_destroyTooltip",value:function(t,e){this._removeIconElement(t,!1,e),null!=e.tooltipPopper&&(e.tooltipPopper.destroy(),e.tooltipPopper=null),null!=e.tooltip&&(e.tooltip.parentNode.removeChild(e.tooltip),e.tooltip=null)}},{key:"_removeIconElement",value:function(t,e,n){if(null!=n.iconElement&&(null!=n.iconPopper&&n.iconPopper.destroy(),void 0!==t.dataset.displayChanged&&(t.style.display=t.dataset.displayChanged),void 0!==t.dataset.positionChanged&&(t.style.position=t.dataset.positionChanged),n.iconElement.parentNode.removeChild(n.iconElement),n.iconElement=null,n.iconPopper=null,e&&null!=n.tooltipPopper)){var r=n.tooltipPopper.state.options;n.tooltipPopper.destroy(),n.tooltipPopper=(0,Lr.createPopper)(null!=n.iconElement?n.iconElement:t,n.tooltip,r)}}},{key:"_setIconRelativePosition",value:function(t,e){if(null!=t.iconElement){Object.keys(e).forEach((function(n){t.iconElement.style[n]=e[n]}));var n=t.iconElement.getBoundingClientRect();!function t(e){if("BODY"!=e.tagName){var r=e.getBoundingClientRect();return(n.left<r.left||n.right>r.right||n.top<r.top||n.bottom>r.left)&&"hidden"==window.getComputedStyle(e).overflow&&"hidden"!=e.style.overflow&&(e.style.overflow="visible"),t(e.parentNode)}}(document.querySelector(t.selector))}}},{key:"_createIconElement",value:function(t,e,n){var r;if(null==n.iconElement?(r=document.createElement("img")).className="cbar-tooltip-icon":r=n.iconElement,r.src=e.icon.src,r.style.maxWidth=r.style.width=e.icon.width+"px",r.style.maxHeight=r.style.height=e.icon.height+"px","relative"==e.icon.strategy){var o=window.getComputedStyle(t);r.style.transform="initial",r.style.inset="initial",r.style.position="absolute",r.style.cssText+=" ","static"==o.position&&(t.setAttribute("data-position-changed",t.style.position),t.style.position="relative"),"inline"==o.display&&(t.setAttribute("data-display-changed",t.style.display),t.style.display="inline-block"),t.prepend(r)}else t.parentNode.appendChild(r,null!=t.nextSibling?t.nextSibling:t),null!=n.iconPopper&&n.iconPopper.destroy(),n.iconPopper=(0,Lr.createPopper)(t,r,{placement:e.icon.positionAbsolute,strategy:e.icon.strategy,padding:5,modifiers:[{name:"offset",options:{offset:[parseInt(e.icon.offsetSkidding),parseInt(e.icon.offsetDistance)]}},{name:"flip",enabled:!1}]}),this.refreshTooltip(t,n);n.iconElement=r}},{key:"refreshTooltip",value:function(t,e){if(void 0!==e&&null!=e.tooltipPopper){var n=null!=e.iconElement?e.iconElement:t;e.tooltipPopper.destroy(),e.tooltipPopper=(0,Lr.createPopper)(n,e.tooltip,{placement:e.placement.position,strategy:e.placement.strategy,padding:5,resize:!0,modifiers:[{name:"offset",options:{offset:e.placement.offset}}]})}}},{key:"createTooltipElement",value:function(t,e,n){var r;null!=n.iconElement&&n.iconElement,null==n.tooltip?((r=document.createElement("div")).className="cbar-tooltip",r.setAttribute("role","tooltip"),r.innerHTML='<div class="cbar-tooltip-content"></div><div id="arrow" data-popper-arrow></div>',document.querySelector("body").append(r),n.tooltip=r):r=n.tooltip,r.querySelector(".cbar-tooltip-content").innerHTML=e}},{key:"_initTooltip",value:function(t,e){var n=null!=e.iconElement?e.iconElement:t;e.tooltipPopper=(0,Lr.createPopper)(n,e.tooltip,{placement:e.placement.position,padding:5,resize:!0,modifiers:[{name:"offset",options:{offset:e.placement.offset}}]})}},{key:"getArrowPadding",value:function(t,e){var n={};return["top-start","bottom-start"].includes(e)&&(n.right=t),["top-end","bottom-end"].includes(e)&&(n.left=t),n}},{key:"focusHandler",value:function(t){var e=Zr(t);e.tooltip.setAttribute("data-show",""),e.tooltipPopper.update()}},{key:"blurHandler",value:function(t){var e=Zr(t);e.tooltip.removeAttribute("data-show"),e.tooltipPopper.update()}},{key:"clickHandler",value:function(t){var e=Zr(t),n=e.tooltip;null!=n.getAttribute("data-show")?n.removeAttribute("data-show"):n.setAttribute("data-show",""),e.tooltipPopper.update()}},{key:"cleanEvents",value:function(t,e){Object.keys(e).forEach((function(n){t.removeEventListener(n,e[n])}))}},{key:"setEventChanges",value:function(t,e,n){var r=this;n.eventType=e,n.tooltip.removeAttribute("data-show");var o=null!=n.iconElement?n.iconElement:t;this.cleanEvents(t,{mouseenter:this.focusHandler,focus:this.focusHandler,mouseleave:this.blurHandler,blur:this.blurHandler,click:this.clickHandler}),null!=n.iconElement&&this.cleanEvents(n.iconElement,{mouseenter:this.focusHandler,focus:this.focusHandler,mouseleave:this.blurHandler,blur:this.blurHandler,click:this.clickHandler}),"onmouseover"==e&&(["mouseenter","focus"].forEach((function(t){o.addEventListener(t,r.focusHandler)})),["mouseleave","blur"].forEach((function(t){o.addEventListener(t,r.blurHandler)}))),"onclick"==e&&o.addEventListener("click",this.clickHandler)}}])&&Ur(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}(),Vr=null,Wr=null,Yr="",Fr=null,$r=!1,Jr=function(){"denied"===Notification.permission||$r||Xr(Vr,Wr)},Xr=function(t,e){var n="cbar-notification-request-"+t;if("granted"!==Notification.permission||null===wt.Z.local.get(n))switch(wt.Z.local.create(n,1),e){case"popup":case"bar":cbarApp.delayed.run(t),window["cbarButtonClick_"+t]=function(){Qr()};break;default:Qr()}},Qr=function(){var t=oo("BKa-Jie9g05OWheBVdtSqkP4ESYZJKDLpvsE4JRxuDcjOsyVsfdcVa3VAuLObZxpf5GNfSax9fzxtt3i52nC93g");to(!0),Fr.pushManager.subscribe({userVisibleOnly:!0,applicationServerKey:t}).then((function(t){eo("grant",t),$r=!0})).catch((function(t){t.name&&"NotAllowedError"===t.name?eo("not-allowed"):(0,c.FY)("Error subscribing to notifications: "+t.message)})).finally((function(){to(!1)})),no("show-permission")},to=function(t){var e="cbar-wpask-hint";if(""!==Yr)if(t){var n=document.createElement("div");n.classList.add("cbar-wpask-hint"),n.id=e,n.innerHTML=Yr,document.getElementsByTagName("body")[0].appendChild(n),n.style.marginLeft=parseInt(n.clientWidth/2*-1)+"px"}else{var r=document.getElementById(e);null!==r&&r.parentNode.removeChild(r)}},eo=function(t,e){ro("token",{siteId:cbar_sid,userId:cbar_uid,ruleId:Vr,action:t,token:JSON.stringify(e)})},no=function(t){ro("stats",{ruleId:Vr,siteId:cbar_sid,action:t})},ro=function(t,e){e.variationId=cbarApp.ruleVariations[e.ruleId]||0;var n=cbar_dynamic_url+"api/web-push/"+t;fetch(n,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:(0,c.ng)(e)})},oo=function(t){for(var e=(t+"=".repeat((4-t.length%4)%4)).replace(/\-/g,"+").replace(/_/g,"/"),n=window.atob(e),r=new Uint8Array(n.length),o=0;o<n.length;++o)r[o]=n.charCodeAt(o);return r};function io(t){return io="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},io(t)}function ao(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,so(r.key),r)}}function co(t,e,n){return(e=so(e))in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function so(t){var e=function(t,e){if("object"!==io(t)||null===t)return t;var n=t[Symbol.toPrimitive];if(void 0!==n){var r=n.call(t,"string");if("object"!==io(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(t)}(t);return"symbol"===io(e)?e:String(e)}var lo=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),co(this,"config",null),co(this,"originalTitle",null),co(this,"interval",null),this.config=e,this.config.currentIndex=0,this.originalTitle=document.title,this.config.rotateOriginal&&this.config.messages.push(this.originalTitle),this._initHandler()}var e,n;return e=t,n=[{key:"_runInterval",value:function(t){t.currentIndex++,t.currentIndex>t.messages.length-1&&(t.currentIndex=0),document.title=t.messages[t.currentIndex]}},{key:"_initHandler",value:function(){var t=this;cbar_listen("visibilitychange",document,(function(){"visible"==document.visibilityState?(document.title=t.originalTitle,null!=t.interval&&(clearInterval(t.interval),t.interval=null)):(document.title=t.config.messages[t.config.currentIndex],t.config.rotatePeriod>0&&t.config.messages.length>1&&(t.interval=setInterval(t._runInterval,1e3*t.config.rotatePeriod,t.config)))}))}}],n&&ao(e.prototype,n),Object.defineProperty(e,"prototype",{writable:!1}),t}(),uo=lo,fo=__webpack_require__(208);window.cbarApp.DraggableElement=Er.Z,window.cbarApp.DebounceCall=i,window.cbarApp.delayed=wr,window.cbarApp.storage=wt.Z,window.cbarRequestPushToken=function(t){var e;if(Vr=parseInt(t.ruleId),Wr=t.type,Yr=t.hint,""!==t.workerPath&&(e=t.workerPath,"serviceWorker"in navigator&&"PushManager"in window&&navigator.serviceWorker.register(e).then((function(t){(Fr=t).pushManager.getSubscription().then((function(t){var e="web-push-"+(($r=!(null===t))?1:0);null===wt.Z.session.get(e)&&(eo($r?"update":"delete",t),wt.Z.session.create(e,1)),Jr()}))})).catch((function(t){(0,c.FY)("Service Worker Error: "+t.message)}))),parseInt(cbar_preview_rules)===Vr){var n=document.querySelector("#".concat(cbarApp.previewBoxId," .cbar-preview-msg"));null!==n&&function(t){t.innerHTML+='<br><br>Use user id <code class="cbar-dont-drag">'.concat(cbar_uid,"</code> to test the setup")}(n)}},window.cbarStartRealtimeMessages=function(t){return(t.version||0)>2?jr("Client-server desync, versions mismatch"):(ar=t.startDelay,cr=t.showInterval,ur=t.ruleId,fr=t.abCode,lr=t.initialItems||[],sr=t.messageConfig||null,cr+=sr.time,0===ur?jr("Rule ID unset"):null===sr?jr("Message config unset"):(Ir.init(),void setTimeout(Ar,1e3*ar)))},window.cbarVisualEditorChanges=function(t){t.changes.forEach((function(t){cbar_waitforelement(t.selector,(function(){var e=document.querySelector(t.selector),n=e.dataset.veChanges?JSON.parse(e.dataset.veChanges):{css:{},attr:{}};Object.keys(t.css).forEach((function(r){n.css.hasOwnProperty(r)||(n.css[r]=window.getComputedStyle(e,null).getPropertyValue(r)),e.style.setProperty(r,t.css[r],"important")})),Object.keys(t.attr).forEach((function(r){n.attr.hasOwnProperty(r)||(n.attr[r]=e.getAttribute(r)),e.setAttribute(r,t.attr[r])})),t.hasOwnProperty("html")&&(n.hasOwnProperty("html")||(n.html=e.innerHTML),e.innerHTML=t.html,e.dataset.veHtmlChange=1),e.dataset.veChanges=JSON.stringify(n)}))}))},window.cbarTooltipsEditorChanges=function(t){(new Kr).applyChanges(t)},window.cbarApp.badjeInjector=yt,window.cbarApp.bannerInjector=gt,window.cbarApp.productElementDetetor=Sr,window.cbarApp.listingPageBanner=function(t,e){1===t.version?"lpb-embedded"===t.flavor?function(t,e){kr(t.selectorToCheck,(function(){var n=document.querySelector(t.selector),r="cbar_banner_place_".concat(t.ruleId),o=document.createElement("div");o.id=r,"replace"===t.position&&(n.innerHTML="",t.position="afterbegin"),n.insertAdjacentElement(t.position,o),e(r)}))}(t,e):function(t,e){var n=function(n){t.afterLines.forEach((function(r){var o="cbar_banner_place_".concat(t.ruleId,"_").concat(r);new gt(n,parseInt(r),o),null!==document.getElementById(o)&&e(o)}))};null===t.selector?(t.selector=Sr(),n(t.selector)):kr(t.selectorToCheck,(function(){return n(t.selector)}))}(t,e):xr("Unexpected configuration version ".concat(t.version,", expected ").concat(1))},window.cbarApp.clickMonitor.run=function(){if(Xn&&Hn.stopMonitoring(),!Hn.checkRequirements())return ne("Requirement check failed"),{};if(function(){var t=(0,c.re)(_t.REPORT_ACTIVATION_PARAM);if(""!==t&&wt.Z.session.create(_t.SESSION_TOKEN_KEY,t),null!==wt.Z.session.get(_t.SESSION_TOKEN_KEY)){var e=Date.now();return(0,c.GP)("https://www.gstatic.com/charts/loader.js","js",(function(){(0,c.GP)(_t.DOMAIN+"/assets/css/click-monitor-report.css?r="+e,"css"),(0,c.GP)(_t.DOMAIN+"/assets/js/dist/click-monitor-report.min.js?r="+e,"js")})),!0}return!1}())return{};ne("enabled"),Xn=!0;try{se={},le={},fe=[],de=null,he=null,pe=cbarApp.clickMonitor.customConfig||{},ue=cbarApp.clickMonitor.groupingStrategy,t=[],e=!0,r=function(e){e.forEach((function(e){e.pages.includes(cbar_pagetype)&&e.params.forEach((function(e){return t.push(e)}))}))},(n=cbarApp.clickMonitor.hashingConfig||{}).hasOwnProperty("addHierarchy")&&n.addHierarchy&&(ae.addHierarchy=!0),pe.urlFilter?me=pe.urlFilter:(n.hasOwnProperty("allowParams")&&r(n.allowParams),0===t.length&&n.hasOwnProperty("disallowParams")&&(e=!1,r(n.disallowParams)),me=t.length>0?function(n){n.searchParams.forEach((function(r,o){t.includes(o)!==e&&n.searchParams.delete(o)}))}:function(t){t.search="",t.hash=""}),we(null,!0),ce=!0}catch(t){return ne("Module stopped: "+t.message),cbar_log_error("CIO error: "+t.message),{}}var t,e,n,r,o,i,a;return null!==At()&&Gn.collect(At()),Pt=It(),xt=cbarApp.clickMonitor.fastReport,Tt(),$n(),cbarApp.clickMonitor.hasOwnProperty("customConfig")&&cbarApp.clickMonitor.customConfig.hasOwnProperty("simulation")&&(i=cbarApp.clickMonitor.customConfig.simulation,a=document.location.pathname,null===In&&(In={v:4,pins:{},data:{},personalisation:{}}),i.filter((function(t){return t.path===a})).forEach((function(t){In.data[t.groupId]={mode:_t.MODE_OPTIMISATION,cg:t.cg,elements:{},isSimulation:!0}}))),Nn(),{groups:(o={},fe.forEach((function(t){o[t.hash]=[],t.elements.forEach((function(e){return o[t.hash].push(e[_t.KEY_ID])}))})),o)}},window.cbarApp.clickMonitor.setOptimisationData=Bn,window.cbarApp.emailCaptureDebug.run=function(){var t=function(t){var e=Date.now(),r={token:n,sid:cbar_sid,uid:cbar_uid};fetch("https://www.barilliance.net/api/email-capture-debug/debug?r="+e,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:(0,c.ng)(r)}).then((function(t){return t.json()})).then(t)},e=(0,c.re)("cbar_emailcapture_show");""!==e&&wt.Z.session.create(Pr,e);var n=wt.Z.session.get(Pr);if(null!==n){var r=cbarApp.emailCaptureDebug;t((function(e){if(0==e.status)return alert(e.error),void clearInterval(r.interval);var n=Date.now();(0,c.GP)(Or+"/assets/css/email-capture-debug.css?r="+n,"css"),(0,c.GP)(Or+"/assets/js/dist/email-capture-debug.min.js?r="+n,"js"),r.interval=setInterval((function(){null!=r.handler&&(clearInterval(r.interval),r.handler.render(e,t))}),1e3)}))}},window.cbarApp.tabAbandomentMessage=uo,window.cbar_BrowserDetect=vt.Z,window.cbarApp.activateAjaxTransition=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;if(!f){switch(f=!0,l(t)){case"function":p.callback=t;break;case"object":null!==t&&s(p,t);break;case"string":p.checkElement=t}var e,n;e=new i((function(){null!==h&&(clearTimeout(h),h=null),u("URL change detected"),d=m(),b()}),p.delayTime),n=function(t){var e=history[t];history[t]=function(){for(var t=arguments.length,n=new Array(t),r=0;r<t;r++)n[r]=arguments[r];e.apply(history,n),(0,c.LI)("cbar-pushstate",document,n)}},n("pushState"),p.triggerOnReplace&&n("replaceState"),document.addEventListener("cbar-pushstate",(function(){return e.call()})),window.addEventListener("popstate",(function(){return e.call()}))}},window.cbarApp.styles=Dr,window.cbar_createCookie=tr.Z.create,window.cbar_readCookie=tr.Z.read,window.cbarApp.reportClick=Qn.lq,window.cbarApp.popup=fo.Z,[c.ZP,Qn.ZP].forEach((function(t){Object.keys(t).forEach((function(e){return window[e]=t[e]}))}))}()})();

	// data from server
	function cbar_data_returned() {
		if (cbar_widget && cbar_widget_show) {
			if (typeof cbar_after_load === 'function') {
				cbar_after_load('widget');
			}
			if(typeof cbar_data_returned_widget === 'function'){
				cbar_data_returned_widget(false);
			}
		}
		
		return 1;
	}
	
	function cbar_em_com(com) {
		var str = '';
		if (cbar_ipuid_get) {
			str += "&ipuidget=true";
		}
		if (cbar_ipuid_save) {
			str += "&ipuidsave=true";
		}
		
		cbarLoadData({
			sid: cbar_sid,
			uid: cbar_uid,
			ec: (com ? '1' : '0')
		}, str);
	}

	function cbar_em_optout(opt, optionalemail) {
		var str = '';
		if (cbar_ipuid_get) {
			str += "&ipuidget=true";
		}
		if (cbar_ipuid_save) {
			str += "&ipuidsave=true";
		}
		
		cbarLoadData({
			a: 'opt',
			sid: cbar_sid,
			uid: cbar_uid,
			opt: (opt ? '1' : '0'),
			optionalemail: encodeURIComponent(optionalemail)
		}, str);
	}

	// called from input box change event or directly
	function cbar_em_change(e) {
		var value = '';

		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}

		if (typeof e === 'string') {
			value = e;
		} else {
			// from event
			var targ;
			if (!e) {
				e = window.event;
			}
			if (e.target) {
				targ = e.target;
			} else if (e.srcElement) {
				targ = e.srcElement;
			}
			if (targ.nodeType == 3) {
				targ = targ.parentNode; //safari
			}

			if (typeof targ.value === 'string') {
				value = targ.value;
			} else if (typeof this.value === 'string') {
				value = this.value;
			} else {
				return;
			}
		}

		if (value !== cbar_e_last) {
			if (value.match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !== null) {
				cbarLoadData({
					sid: cbar_sid,
					uid: cbar_uid,
					e: encodeURIComponent(value),
					e_com: cbar_e_com ? 'true' : ''
				});
			}
		}

		cbar_e_last = value;
	}

	function cbar_em_listen(input_element) {
		input_element.addEventListener('blur', cbar_em_change);
		input_element.addEventListener('keyup', cbar_em_change);
		setTimeout(function() {
			if (input_element.value != '') {
				cbar_em_change(input_element.value);
			}
		}, 1000);
	}

	function cbar_optin_send(data_type, value, comment) {
		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}
		if (typeof window.cbar_globals['optin_wait'] === 'undefined') {
			window.cbar_globals['optin_wait'] = 0;
		}
		if (window.cbar_globals['optin_wait'] > 0) {
			setTimeout(function() { 
				cbar_optin_send(data_type, value, comment);
			}, 300);
			return;
		}

		window.cbar_globals['optin_wait']++; // will be -- from the script output

		cbarLoadData({
			a: 'optinout',
			sid: cbar_sid,
			uid: cbar_uid,
			dt: data_type,
			v: Boolean(value),
			co: encodeURIComponent(comment)
		});

		setTimeout(function() { 
			cbar_em_check_sending(false);
		}, 800);
	}

	// data_type - general_optin, gdpr_optin, triggered_optin, marketing_optin, cookie_optin
	function cbar_optin_listen_checkbox(dataType, element, comment, updateDefault) {
		
		if (typeof updateDefault !== 'undefined' && updateDefault === true ){
			cbar_optin_send(dataType, element.checked, comment);
		}
		
		var eventListener = function() {
			cbar_optin_send(dataType, element.checked, comment);
			document.removeEventListener('cbar_pageview_complete', eventListener);
		};
			
		element.addEventListener('click', eventListener);
		
		if (element.checked) {
			document.addEventListener('cbar_pageview_complete', eventListener);
		}
	}

	function cbar_optin_listen_radio(data_type, yes_element, no_element, comment) {
		yes_element.addEventListener('change', function() { 
			cbar_optin_send(data_type, true, comment);
		});
		no_element.addEventListener('change', function() { 
			cbar_optin_send(data_type, false, '');
		});
	}

	function cbar_optin_listen_cookie(data_type, cookie_name, cookie_values) {
		setInterval(function() {
			var val = cbar_readCookie(cookie_name);
			var prevval = cbarApp.storage.local.get(cookie_name);
			if (val === null) {
				return;
			}
			
			if (val != prevval) {
				cbarApp.storage.local.create(cookie_name, val);
				if (cookie_values.includes(val)) {
					cbar_optin_send(data_type, true, 'cookie ' + cookie_name + ' value:' + val);
				} else {
					cbar_optin_send(data_type, false, 'cookie ' + cookie_name + ' exists but optin values not found');
				}
			}
		}, 1000);
	}

	function cbar_optin_listen_input(type, input_element, required_and, required_or, comment, on_focus_callback) {
		
		
		input_element.addEventListener('blur', function() {
			window.cbar_globals[type] = input_element.value; 
			if (typeof cbar_optin_carry_email !== 'undefined' && cbar_optin_carry_email) {
				cbar_createCookie('cbar_' + type, input_element.value, 10 / (24 * 60));
			}
			cbar_em_check_sending(false);
		});
		
		input_element.addEventListener('keyup', function() {
			window.cbar_globals[type] = input_element.value; 
			try {
				clearTimeout(window.cbar_globals['timer']);
			} catch(e) {
				return null;
			}
			window.cbar_globals['timer'] = setTimeout(function() { 
				
				cbar_em_check_sending(false);
			}, 500);
		});
		
		if (typeof on_focus_callback === 'function'){
			input_element.addEventListener('focus', function() {
			on_focus_callback();
			window.cbar_globals[type + '_required_and'] = required_and; 
			window.cbar_globals[type + '_required_or'] = required_or; 
			window.cbar_globals[type + '_comment'] = comment;
		 });
		} else { // legacy
			window.cbar_globals[type + '_required_and'] = required_and; 
			window.cbar_globals[type + '_required_or'] = required_or; 
			window.cbar_globals[type + '_comment'] = comment;
		}
	}

	function cbar_optin_listen_submit(submit_button) {
		window.cbar_globals['submit_required'] = true;
		submit_button.addEventListener('mousedown', function() {  
			cbar_em_check_sending(true);
		});
	}

	function cbar_em_check_sending(submit_click) {
		if ((typeof window.cbar_globals['submit_required'] !== 'undefined') && !submit_click) {
			return;
		}
		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}

		if (window.cbar_globals['optin_wait'] > 0) {
			setTimeout(function() { 
				cbar_em_check_sending(submit_click);
			}, 300);
			return;
		}
		
		['em', 'ph'].map(function(dtype) {
			if (typeof window.cbar_globals[dtype + '_required_and'] !== 'undefined') {
				for (var i = 0; i < window.cbar_globals[dtype + '_required_and'].length; i++) {
					if (
						typeof window.cbar_globals[window.cbar_globals[dtype + '_required_and'][i]] === 'undefined' || 
						window.cbar_globals[window.cbar_globals[dtype + '_required_and'][i]] != true
					) {
						return;
					}
				}

				var passed = window.cbar_globals[dtype + '_required_or'].length === 0;
				
				for (var i = 0; i < window.cbar_globals[dtype + '_required_or'].length; i++) {
					if (
						typeof window.cbar_globals[window.cbar_globals[dtype + '_required_or'][i]] !== 'undefined' && 
						window.cbar_globals[window.cbar_globals[dtype + '_required_or'][i]] == true
					) {
						passed = true;
					}
				}
				if (!passed) {
					return;
				}

				if (
					typeof cbar_optin_carry_email !== 'undefined' && 
					cbar_optin_carry_email && 
					typeof window.cbar_globals[dtype] === 'undefined'
				) {
					window.cbar_globals[dtype] = cbar_readCookie('cbar_' + dtype);
				}

				if (
					dtype == 'em' && 
					typeof window.cbar_globals['em'] !== 'undefined' && 
					window.cbar_globals['em'] != null && 
					window.cbar_globals['em'].match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !== null
				) {
					cbarLoadData({
						sid: cbar_sid,
						uid: cbar_uid,
						e: encodeURIComponent(window.cbar_globals['em']),
						co: encodeURIComponent(window.cbar_globals['em_comment'])
					});
				}

				if (dtype == 'ph' && typeof window.cbar_globals['ph'] !== 'undefined' && window.cbar_globals['ph'] != null) {
					cbarLoadData({
						sid: cbar_sid,
						uid: cbar_uid,
						ph: encodeURIComponent(window.cbar_globals['ph']),
						co: encodeURIComponent(window.cbar_globals['ph_comment'])
					});
				}
			}
		});
	}

	function cbar_div_popup_show(
		rule_id, popup_width, popup_height, popup_top, img_url, 
		html, img_is_background, img_width, img_height, token, 
		replace_encoded, embed_data, popup_close, border, bordercol, 
		backg, darken, corner, close_butt_pos, close_butt_id, 
		close_butt_size, close_butt_offset,close_custom
	) {
		if (typeof img_is_background !== 'boolean') {
			return; // remove this. only used temporarily to suppress old cached cbar.js until changes are cached.
		}

		if (cbar_suppress_rules.includes(rule_id)) {
			return; // allow suppressing by js action
		}

		// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
		if (
			(cbar_preview_rules == '') && 
			(cbar_readCookie('cbar_pc_' + rule_id) == '1' || cbar_readCookie('cbar_pc_' + cbar_sess + '_'+ rule_id) == '1')
		) {
			return;
		}

		if (img_is_background) {
			popup_width = img_width + 'px';
			popup_height = img_height + 'px';
		}

		var popupDiv = window.document.createElement('div');
		popupDiv.id = 'cbar_popup_' + rule_id;
		popupDiv.className = 'cbar_popup';
		popupDiv.setAttribute('rule_id', rule_id);
		var clientheight = document.body.clientHeight;

		if (popup_width == '') {
			popup_width = 'auto';
		}
		if (popup_width == parseInt(popup_width)) {
			popup_width = popup_width + 'px';
		}
		popupDiv.style.width = popup_width;
		
		popupDiv.popup_close = popup_close;

		if (popup_height == '')	{
			popup_height = 'auto';
		}
		if (popup_height == parseInt(popup_height)) {
			popup_height = popup_height + 'px';
		}
		popupDiv.style.height = popup_height;

		if (popup_top == '') {
			popup_top = '100px';
		}
		if (popup_top == parseInt(popup_top)) {
			popup_top = popup_top + 'px';
		}
		popupDiv.style.top = popup_top;

		if (img_is_background) {
			popupDiv.style.background = "transparent url('" + cbar_userimages + img_url + "') no-repeat left top";
		} else {
			popupDiv.style.background = backg;
		}

		popupDiv.style.boxSizing = 'content-box';
		popupDiv.style.border = border + 'px solid ' + bordercol;
		popupDiv.style.zIndex = cbar_zindex ;

		if (corner > 0) {
			popupDiv.style.borderRadius = corner + 'px';
			popupDiv.style.MozBorderRadius = corner + 'px';
			popupDiv.style.WebkitBorderRadius = corner + 'px';
		}
		var popup_html = '';
		
		var css_position = '';
		
		if (close_butt_pos != '') {
			if (close_butt_pos.search('t') > -1) {
				css_position += 'top: 1px; bottom: auto;'; 
			}
			if (close_butt_pos.search('b') > -1) {
				css_position += 'top: auto; bottom: 1px;'; 
			}
			if (close_butt_pos.search('l') > -1) {
				css_position += 'left: 1px; right: auto;';
			}
			if (close_butt_pos.search('r') > -1) {
				css_position += 'left: auto; right: 1px;';
			}
		} else {
			css_position += 'top: -15px; right: -15px;';
		}
		
		var close_icon;
		if (typeof close_custom !== 'undefined' && close_custom != null) {
			close_icon = close_custom.url;
			if (close_custom.size != '') {
				css_position = 'width:' + close_custom.size + 'px;';
			}

		} else if (close_butt_id > -1 && close_butt_size > -1) {
			close_icon = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
		} else {
			close_icon = cbar_static_url + 'img/common/dialog_close.png';
		}

		popup_html += '<img src="' + close_icon + '" class="cbar-close-button" style="' + css_position + 
			'margin: ' + close_butt_offset + 'px;" onclick="cbar_close_popup(' + rule_id + ');">';
		
		var img_html = (img_url != '') ? '<img src="' + cbar_userimages + img_url + '" style="border:none">' : '';
		if (img_is_background) {
			img_html = '';
		}

		popup_html += '<div style="width: auto; margin: 0 0 0 0; height: auto; background: transparent; display: block;">' +
			img_html + cbarApp.cleanString(html);

		if (token != '') {
			// dynamic token. used in 'Get Coupon button' switch button token with html
			popup_html = popup_html.replace(token, cbarApp.cleanString(replace_encoded));
		}

		// embed external forms in the popup
		if  (embed_data !== false) {
			var noscroll = embed_data.scrollbars == 'on' ? '' : 'scrolling="no"';
			var embed_html = '<iframe src="' + embed_data.url + '" width="' + embed_data.width + '" height="' + 
				embed_data.height + '" frameborder="0" ' + noscroll + ' allowTransparency="true"></iframe>';
			popup_html = popup_html.replace('%embed_form%', embed_html);
		}

		popup_html += ' </div>';

		if (!cbarApp.isWhiteLable) {
			popup_html += ' <div class="cbar-popup-label"><a href="http://www.barilliance.com">powered by Barilliance</a></div>';
		}

		popupDiv.innerHTML = popup_html;
		popupDiv.style.display = 'block';
		popupDiv.style.visibility = 'visible';

		// reset inherited CSS
		loadjscssfile(cbar_static_url + 'popup.css', 'css');
		window.document.body.appendChild(popupDiv);

		// darken under popup
		if (darken > 0) {
			var cbar_underlay = window.document.createElement('div');
			var clientwidth = document.body.clientWidth;
			
			cbar_underlay.id = 'cbar_underlay_' + rule_id;
			cbar_underlay.className = 'cbar-underlay';
			cbar_underlay.style.opacity = darken;
			cbar_underlay.style.zIndex = cbar_zindex - 1;
			cbar_underlay.style.height = clientheight + 'px';
			cbar_underlay.style.width = clientwidth + 'px';
			cbar_underlay.onclick = function() {
				cbar_close_popup(rule_id);
				return false;
			};

			window.document.body.appendChild(cbar_underlay);
		}

		cbar_popups.push(popupDiv);
		cbar_popups_position();
		popupDiv.addEventListener('click', function(evt) {
			if (evt.target.tagName == 'A' && evt.target.className != 'cbar-close-button') {
				cbar_click2(null, null, 'bannerPopupEtc', rule_id);
			}
		});
		//window.addEventListener('scroll', cbar_popup_scroll_event);
		window.addEventListener('resize', cbar_popups_position);
	}

	function draw_close_button(ruleId, ruleType) {
		var closebtn = cbarApp.closeButtons[ruleId + '|' + ruleType];
		var cssPosition = '';
		if (closebtn.pos != '') {
			if (closebtn.pos.search('t') > -1) {
				cssPosition += 'top: 1px; bottom: auto;'; 
			}
			if (closebtn.pos.search('b') > -1) {
				cssPosition += 'top: auto; bottom: 1px;'; 
			}
			if (closebtn.pos.search('l') > -1) {
				cssPosition += 'left: 1px; right: auto;';
			}
			if (closebtn.pos.search('r') > -1) {
				cssPosition += 'left: auto; right: 1px;';
			}
		} else {
			cssPosition += 'top: -15px; right: -15px;';
		}
		
		var closeIcon = cbar_static_url + 'img/common/dialog_close.png';
		if (typeof closebtn.custom !== 'undefined' && closebtn.custom != null && closebtn.custom.url != '') {
			closeIcon = closebtn.custom.url;
			if (closebtn.custom.size != '') {
				cssPosition += 'width:' + closebtn.custom.size + 'px;';
			}
		} else if (closebtn.icon > -1 && closebtn.size > -1) {
			closeIcon = cbar_static_url + 'img/close_buttons/close' + closebtn.icon + '_' + closebtn.size + '.png';
		}
		let onClickString = 'cbar_close_popup2(' + ruleId + ', \'' + ruleType + '\');';
		if (ruleType === 'POP') {
			onClickString = 'cbar_close_popup(' + ruleId + ');';
		}
		return '<img src="' + closeIcon + '" class="cbar-close-button" style="z-index: 1; ' + cssPosition + ' margin: ' + 
			closebtn.offset + 'px;" onclick="' + onClickString + 'e = window.event || e; e.stopPropagation(); return false;">';
	}

	function cbar_close_popup(rule_id) {				
		if (typeof rule_id === 'undefined') { 
			// close currently open if no rule_id
			var popups = document.getElementsByClassName("cbar_popup");
			if (popups.length == 0) {
				return;
			}
			rule_id = popups[0].id.replace('cbar_popup_', '');
		}

		var popup = document.getElementById('cbar_popup_' + rule_id);		
		
		if (popup == null) {
			return;
		}

		// close popup cookie
		if ((typeof popup.popup_close === 'undefined') || isNaN(parseInt(popup.popup_close))) {
			popup.popup_close = 365;
		}		
		if ((popup.popup_close != -1) && (cbar_preview_rules == '')) {
			cbar_createCookie('cbar_pc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id, 1, parseInt(popup.popup_close));
		}
		popup.parentNode.removeChild(popup); // for v1 popups	
		var underlay = document.getElementById('cbar_underlay_' + rule_id);		
		
		if (underlay == null) {
			return;
		}
		underlay.parentNode.removeChild(underlay);// for v1 popups	
	}

	function cbar_close_popup2(rule_id, rule_type) {
		if(['POP2','MSG2','OVERLAY','LPB'].includes(rule_type)){
			cbarApp.popup.get(rule_id, rule_type).closePopup();
			return;
		}
		var opts = cbarApp.closeButtons[rule_id + '|' + rule_type];
		var popId = 'cbar_' + rule_type + '_' + (rule_type == 'banner' ? opts.banner_id : rule_id);
		var popup = document.getElementById(popId);
		if (popup == null) {
			return;
		}

		if (typeof popup.popup_close === 'undefined' || isNaN(parseInt(popup.popup_close))) {
			popup.popup_close = 365;
		}
		
		var cookie_name;
		if (rule_type == 'banner') {
			window['cbar_b_no_click_' + rule_id] = true; 
			popup.setAttribute('hidden_banner', '1'); 
			popup.style.display = 'none';
			cookie_name = 'cbar_bc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id;
		} else {
			var pop2cls = (
				document.getElementById('cbar_parent_' + rule_type + '_' + rule_id) !== null
			) ? document.getElementById('cbar_parent_' + rule_type + '_' + rule_id) : popup;
			pop2cls.parentNode.removeChild(pop2cls);
			
			var styleElement = document.getElementById('cbar_style_' + rule_type + '_' + rule_id);
			if (styleElement !== null) {
				styleElement.parentNode.removeChild(styleElement);
			}
			
			cookie_name = 'cbar_pc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id;
			if (
				typeof window.execute_on_close !== 'undefined' &&
				typeof window.execute_on_close[rule_id + rule_type] !== 'undefined'
			) {
				window.execute_on_close[rule_id + rule_type]();
			}
		}
		
		if (popup.popup_close != -1 && cbar_preview_rules == '' && typeof opts.nocookie === 'undefined') {
			cbar_createCookie(cookie_name, 1, parseInt(popup.popup_close));
		}
	}

	function cbar_close_offerzone(rule_id, days) {
		var oz = document.querySelector("div[rule_id='" + rule_id + "']");
		if (oz !== null) {
			oz.parentNode.removeChild(oz);
		}
		if (cbar_preview_rules == '') {
			cbar_createCookie('cbar_oz_' + rule_id, 1, parseInt(days));
		}
	}

	function cbar_iframe_popup_show(
		rule_id, popup_url, popup_width, popup_height, popup_top, 
		img_w, img_h, img_url, popup_close, close_butt_pos, 
		close_butt_id, close_butt_size, close_butt_offset, darken,custom_close
	) {
		if (cbar_suppress_rules.includes(rule_id)) {
			return; // allow suppressing by js action
		}

		// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
		if (
			(cbar_preview_rules == '') && 
			(cbar_readCookie('cbar_pc_' + rule_id) == '1' || cbar_readCookie('cbar_pc_' + cbar_sess + '_' + rule_id) == '1')
		) {
			return;
		}

		var popupDiv = window.document.createElement('div');
		popupDiv.id = 'cbar_popup_' + rule_id;
		popupDiv.className = 'cbar_popup';
		
		var iframe_width = '';
		var iframe_height = '';

		if (popup_width == '') {
			popup_width = iframe_width = 'auto';
		}
		if (popup_width != 'auto') {
			iframe_width = (popup_width - 8) + 'px'; 
			popup_width += 'px';
		}
		popupDiv.style.width = popup_width;

		popupDiv.popup_close = popup_close;

		if (popup_height == '')	{
			popup_height = iframe_height = 'auto';
		}
		if (img_h == '') {
			img_h = 0;
		}
		if (popup_height != 'auto') {
			iframe_height = (popup_height - parseInt(img_h) - 8) + 'px'; 
			popup_height += 'px';
		}
		popupDiv.style.height = popup_height;

		if (popup_top == '') {
			popup_top = '100px';
		}
		if (popup_top == parseInt(popup_top)) {
			popup_top = popup_top + 'px';
		}
		
		popupDiv.style.top = popup_top;
		popupDiv.style.background = 'white';
		popupDiv.style.border = '4px solid silver';
		popupDiv.style.zIndex = cbar_zindex;
		popupDiv.setAttribute('rule_id', rule_id);
		popupDiv.style.boxSizing = 'content-box';

		var img_html = (img_url != '') ? "<img src='" + cbar_userimages + img_url + "' style='border: none'>" : '';
		var popup_html = '';
		var css_position = '';
		
		if (close_butt_pos != '') {
			if (close_butt_pos.search('t') > -1) {
				css_position += 'top: 1px; bottom: auto;'; 
			}
			if (close_butt_pos.search('b') > -1) {
				css_position += 'top: auto; bottom: 1px;'; 
			}
			if (close_butt_pos.search('l') > -1) {
				css_position += 'left: 1px; right: auto;';
			}
			if (close_butt_pos.search('r') > -1) {
				css_position += 'left: auto; right: 1px;';
			}
		} else {
			css_position += 'top: -15px; right: -15px;';
		}
		
		var close_butt;
		if (typeof custom_close !== 'undefined' && custom_close != null) {
			close_butt = custom_close.url;
			if (custom_close.size != '') {
				css_position += 'width:' + custom_close.size + 'px;';
			}
		} else if (close_butt_id > -1 && close_butt_size > -1) {
			close_butt = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
		} else {
			close_butt = cbar_static_url + 'img/common/dialog_close.png';
		}

		popup_html += "<img src='" + close_butt + "' class='cbar-close-button' style='" + css_position + 
			"margin: " + close_butt_offset + "px;' onclick=\"cbar_close_popup(" + rule_id + ");\">";

		popup_html += img_html + "<iframe style='margin:5px;' src='" + popup_url + "' width='" + iframe_width + 
			"' height='" + iframe_height + "' frameborder='0'></iframe>";

		if (!cbarApp.isWhiteLable) {
			popup_html += '<a class="cbar-iframe-popup-label" href="https://www.barilliance.com">powered by Barilliance</a>';
		}

		popupDiv.innerHTML = popup_html;
		popupDiv.style.display = 'block';
		popupDiv.style.visibility = 'visible';
		window.document.body.appendChild(popupDiv);
		
		// darken under popup
		if (darken!='') {
			var cbar_underlay = window.document.createElement('div');
			var clientwidth = document.body.clientWidth;
			var clientheight = document.body.clientHeight;
			cbar_underlay.id = 'cbar_underlay_' + rule_id;
			cbar_underlay.className = 'cbar-underlay';			
			cbar_underlay.style.cssText = 'background-color:' + darken + ';z-index:' + (cbar_zindex - 1) + 
				';height:' + clientheight + 'px;width:' + clientwidth + 'px;';			
			cbar_underlay.onclick = function() {
				cbar_close_popup(rule_id);
				return false;
			};
			window.document.body.appendChild(cbar_underlay);
		}
		
		cbar_popups.push(popupDiv);
		cbar_popups_position();

		//window.addEventListener('scroll', cbar_popup_scroll_event);
		window.addEventListener('resize', cbar_popups_position);
	}

//	function cbar_popup_scroll_event() {// must be here for ie6
//		if (cbar_pop_scrolltimeout > 0) {
//			window.clearTimeout(cbar_pop_scrolltimeout);
//		}
//		cbar_pop_scrolltimeout = window.setTimeout('cbar_popups_position()', 300);
//	}

	//position all available popups
	function cbar_popups_position() {
		var clientheight = document.body.clientHeight;
		var clientwidth = document.body.clientWidth;

		for (var i = 0; i < cbar_popups.length; i++) {
			if (cbar_popups[i].getAttribute('dont_reposition') !== null) {
				continue; // tender #2425
			}

			cbar_popups[i].style.position = 'fixed';
			var width = cbar_popups[i].scrollWidth;
			cbar_popups[i].style.left = parseInt((clientwidth / 2) - (width / 2)) + 'px';
		}

		// underlay resize
		var underlays = document.querySelectorAll('div.cbar-underlay');
		if (underlays.length > 0) {
			for (var i = 0; i < underlays.length; i++) {
				underlays[i].style.width = clientwidth + 'px';
				underlays[i].style.height = clientheight + 'px';
			}
		}
	}

	window.addEventListener('message', function(event) {
		if (
			typeof event.data !== 'undefined' &&
			event.data !== null &&
			typeof event.data.action !== 'undefined' && 
			event.origin == 'https://www.barilliance.net'
		) {
			if (event.data.action === 'cbarAfterEmailSubmitCallback' && typeof cbarAfterEmailSubmitCallback === 'function') {
				cbarAfterEmailSubmitCallback(event.data.status, event.data.rule_id);
			}
			if (event.data.action === 'cbar_coupon_get'){
				window.parent.cbar_coupon_get(event.data.type,event.data.rule_id, false);
			}
		}
	});

	//Legacy function
	function cbar_trust_message(msg_data) {
		cbarShowLiveMessage(JSON.parse(msg_data));
	}

	function cbarShowLiveMessage(msg_data) {
		var questionmark = '<a class="cbar-trust-message" onclick="cbar_trust_popup(); return false;"><img src="' + 
			cbar_static_url + 'img/common/information-outline.png"></a>';
		if (cbarApp.isWhiteLable || (typeof msg_data.infoicon != 'undefined' && msg_data.infoicon === false)) {
			questionmark = '';
		}
		
		// embedded messages
		if (typeof msg_data.embed_pt !== 'undefined') {
			var ref_elements = document.querySelectorAll("[cbar_live_insert]");
			
			for (var index in msg_data.message) {
				if (!msg_data.message.hasOwnProperty(index)) {
					continue;
				}
				
				if (typeof ref_elements[index] === 'undefined') {
					continue;
				}

				var op = ref_elements[index].getAttribute('cbar_live_insert');
				var msg = "<div class='cbar_trust' style='" + cbar_trust_outdiv_css + "'><span style='" +
					msg_data.embedcss + "'>" + msg_data.message[index] + questionmark + "</span></div>";

				if (op == 'append') {
					ref_elements[index].insertAdjacentHTML('beforeend', msg);
				}
				if (op == 'prepend') {
					ref_elements[index].insertAdjacentHTML('afterbegin', msg);
				}
				if (op == 'before') {
					ref_elements[index].insertAdjacentHTML('beforebegin', msg);
				}
				if (op == 'after') {
					ref_elements[index].insertAdjacentHTML('afterend', msg);
				}
			}
			
			return;
		}
		
		// non embedded messages
		if (typeof cbar_trust_message_show === 'function') {
			msg_data = cbar_trust_message_show(msg_data);
		}

		var v_margin = parseInt(msg_data.margin) * msg_data.count;
		for (var i = 1; i < msg_data.count; i++) {
			var bubble = document.querySelector("div#cbar_trust_" + msg_data.rule_id + "_" + i);
			if (bubble !== null) {
				v_margin += bubble.scrollHeight;
			}
		}

		var top = 'auto', bottom = 'auto', left = 'auto', right = 'auto', height = 'auto';
		var dynamic_css = ' border: none; ';

		if (msg_data.type == 'bar' || msg_data.type == 'pbar') {
			if (msg_data.type == 'pbar') {
				msg_data.barpos = 't';
			}

			if (msg_data.barpos == 'b') {
				bottom = '0px';  
			} else {
				top = '0px';
			}

			if (msg_data.borderw > 0) {
				dynamic_css += ' border-top: ' + msg_data.borderw + 'px solid ' + msg_data.border + '; ';
				if (msg_data.barpos == 't') {
					dynamic_css = dynamic_css.replace('border-top', 'border-bottom');
				}
			}

			if (msg_data.shadow > 0) {
				dynamic_css += " box-shadow:" + msg_data.shadow + "px 0px " + msg_data.shadow + "px #888888; ";
				if (msg_data.barpos == 'b') {
					dynamic_css = dynamic_css.replace('box-shadow:', 'box-shadow:-');
				}
			}
		} else if (msg_data.type == 'side') {
			bottom = '200px';
			right = '-500px';
		} else {
			if (msg_data.pos[0] == 't') {
				top = v_margin + 'px';
			}
			if (msg_data.pos[0] == 'b') {
				bottom = v_margin + 'px';
			}
			if (msg_data.pos[1] == 'r') {
				right = msg_data.margin + 'px';
			}
			if (msg_data.pos[1] == 'l') {
				left = msg_data.margin + 'px';
			}
		}

		var div = document.createElement('div');
		if (msg_data.type == 'bubble' || msg_data.type == 'side') {
			var content;
			if (msg_data.image == '') {
				content = msg_data.message[0] + questionmark;
			} else {
				content = "<span style='display:table-row'><span style='display:table-cell; padding:5px;'><img class='cbar_bubble_img' onclick='window.location.href = \"" +
					cbarApp.cleanString(msg_data.url) + "\"; return false;' style='max-width:" +
					parseInt(msg_data.width / 4) + "px; max-height:" + parseInt(msg_data.width / 4) +
					"px; width:auto; height:auto;' src='" + cbarApp.cleanString(msg_data.image) +
					"'/></span><span style='display:table-cell; padding:5px; vertical-align:middle;'>" +
					msg_data.message[0] + questionmark + "</span></span>";
			}

			div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_" + msg_data.rule_id + "_" + 
				msg_data.count + "' style='position:fixed; width:" + msg_data.width + "px; height:" + height + 
				"; right:" + right + "; left:" + left + "; top:" + top + "; bottom:" + bottom +
				"; opacity:0.1; background:" + msg_data.bg + ";   color:" + msg_data.txtcolor + "; border: " +
				msg_data.borderw + "px solid " + msg_data.border + "; border-radius:" + msg_data.round +
				"px; padding:5px; box-shadow: " + msg_data.shadow + "px " + msg_data.shadow + 
				"px 10px #888888; text-align:" + msg_data.align + "; font:" + msg_data.font + "; z-index:2000000; " +
				msg_data.extracss + "'>" + content + "</div>";
		} else { // top bar
			div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_" + msg_data.rule_id + "_" + 
				msg_data.count + "' style=' position:fixed; width:100%; height:" + height + "; right:" + right + 
				"; left:" + left + "; top:" + top + "; bottom:" + bottom + "; opacity:0.1; background:" + msg_data.bg + 
				"; " + dynamic_css + " color:" + msg_data.txtcolor + "; border-radius:0px; padding:10px; text-align:center; font:" +
				msg_data.font + "; z-index:2000000; " + msg_data.extracss + "'><div style='margin:" + 
				msg_data.barmargin + "px;'>" + msg_data.message[0] + questionmark + " </div></div>";
		}
		
		var bubble = div.firstChild;	
		bubble.setAttribute('rule_id', msg_data.rule_id);
		window.document.body.appendChild(bubble);
		
		var isLinkColor = (typeof msg_data.linkcolor !== 'undefined' && msg_data.linkcolor != '');
		var isLinkUnderline = (typeof msg_data.linkunderline !== 'undefined' &&  msg_data.linkunderline == true);		
		if (isLinkColor ||  isLinkUnderline) {
			var links = bubble.querySelectorAll('a');
			for (var i = 0; i < links.length; i++) {
				if (isLinkColor){
					links[i].style.color = msg_data.linkcolor;			
				}
				if (isLinkUnderline){
					links[i].style.textDecoration = 'underline';	
				}
			}
		}
		var children = bubble.querySelectorAll('*');
		for (var i = 0; i < children.length; i++) {
			children[i].setAttribute('rule_id', msg_data.rule_id);
		}
		bubble.addEventListener('click', function(event) {
			cbar_click2(null, null, 'bannerPopupEtc', event.target.getAttribute('rule_id'));
		});

		if (msg_data.type == 'pbar') {
			document.body.style.marginTop = bubble.scrollHeight + 'px';
		}

		if (msg_data.type == 'side') {
			// slide in/out
			bubble.style.opacity = 1;

			msg_data.margin = parseInt(msg_data.margin);
			msg_data.width = parseInt(msg_data.width);
			bubble.cbar_rightpos = -(msg_data.width + msg_data.margin);
			var myVar = setInterval(function() {
				bubble.cbar_rightpos = (msg_data.margin - (msg_data.margin - bubble.cbar_rightpos) * 0.7);
				bubble.style.right = bubble.cbar_rightpos + 'px';
				if (Math.abs(bubble.cbar_rightpos - msg_data.margin) > 5) {
					return;
				}
				clearInterval(myVar);

				// slide out
				setTimeout(function() {
					var myVar = setInterval(function() {
						bubble.cbar_rightpos -= 20;
						bubble.style.right = bubble.cbar_rightpos + 'px';
						if (bubble.cbar_rightpos > -300) {
							return;
						}
						bubble.style.display = 'none';
						clearInterval(myVar);
					}, 40);
				}, msg_data.time * 1000);
			}, 40);
		} else {
			// fade in
			var myVar = setInterval(function() {
				bubble.style.opacity = parseFloat(bubble.style.opacity) + 0.05;

				if (bubble.style.opacity < 1) {
					return;
				}
				clearInterval(myVar);

				// fade out
				setTimeout(function() {
					var myVar = setInterval(function() {
						bubble.style.opacity = parseFloat(bubble.style.opacity) - 0.05;

						if (bubble.style.opacity > 0.05) {
							return;
						}
						clearInterval(myVar);
						bubble.style.display = 'none';
					}, 40);

					if (msg_data.type == 'pbar') {
						var myVar2 = setInterval(function() {
							var newmargin = parseInt(document.body.style.marginTop) * 0.7;
							document.body.style.marginTop = newmargin + 'px';
							if (newmargin > 5) {
								return;
							}
							clearInterval(myVar2);
							document.body.style.marginTop = '0px';
						}, 150);
					}
				},  msg_data.time * 1000);
			}, 40);
		}
	}

	function cbar_trust_popup() {
		loadjscssfile(cbar_dynamic_url + 'cbar_trust_popup.js.php?action=wrapper&sid=' + cbar_sid, 'js');
	}

	function cbar_trust_store_cart_message(pid_orig, message) {
		cbar_createCookie('cbar_trust_cartmsg_' + pid_orig, message, 0);
	}

	function cbar_offerzone_show(x, align, width, frm_col, html, h_html, h_col, offerzone_id, rule_id, preview) {
		if (cbar_suppress_rules.includes(rule_id)) {
			return; // allow suppressing by js action
		}

		if (!preview && (cbar_readCookie('cbar_oz_' + rule_id) == '1')) {
			return;
		}

		var rand = '';
		if (preview) {
			rand = '?rnd=' + Math.ceil(1000 * Math.random());
		}
		var reset_style = ' margin: 0 0 0 0; padding: 0 0 0 0; border: 0px solid white; line-height: 1em; font-size: 1em; text-align: left;';
		var template = "<div onmouseover=\"var tmp=document.getElementById('tooltip_" + offerzone_id + 
			"'); if (tmp) tmp.style.display='block';\" onmouseout=\"var tmp=document.getElementById('tooltip_" + 
			offerzone_id + "'); if (tmp) tmp.style.display='none';\" style='" + reset_style + " width:" + width +
			"px; height:auto; background:#" + h_col + ";'>";
	
		if (h_html.length > 0) {
			template += "<div id='tooltip_" + offerzone_id + "' style='" + reset_style + " height:auto; width:" + 
				width + "px; display:none;'><div style='" + reset_style + " padding:4px; display:block;'>" +
				cbarApp.cleanString(h_html) + "</div></div>";
		}
		template += "<div style='" + reset_style + " height:13px; width:" + width + 
			"px; background:url(https://d2lafqfdp6zd0i.cloudfront.net/" + rule_id + "_top.png" + rand + 
			") no-repeat bottom'></div><div style='" + reset_style + " height:auto; width:" + width + 
			"px; padding-bottom:2px;background:url(https://d2lafqfdp6zd0i.cloudfront.net/" + rule_id + 
			"_middle.png" + rand + ") repeat-y'><div style='" + reset_style + 
			" margin-left:12px; margin-right:12px; padding 0 0 0 0;'>" + cbarApp.cleanString(html) +
			"</div><div style='clear:both; height:2px;'>&nbsp;</div></div></div>";

		var offerzoneDiv = window.document.createElement('div');
		offerzoneDiv.className = 'cbar_offerzone';
		offerzoneDiv.id = 'cbar_offerzone_' + offerzone_id;
		offerzoneDiv.setAttribute('rule_id', rule_id);
		offerzoneDiv.style.zIndex = '80000';
		offerzoneDiv.innerHTML = template;
		
		// get the html of cbar_banner
		var tmp_div = window.document.createElement('div');
		tmp_div.appendChild(offerzoneDiv);
		var offerzone_outerHTML = tmp_div.innerHTML;

		// store all offerzone data as banner for repositioning.
		var banner = {
			id: 'cbar_offerzone_' + offerzone_id,  
			position: 'f',
			overlay: '', 
			align: align, 
			lrmargin: x, 
			tbmargin: 0, 
			html_item: '', 
			width: width, 
			height: 'auto', 
			banner_html: offerzone_outerHTML
		};
		cbar_banners[cbar_banners.length] = banner;

		offerzoneDiv.style.position = 'fixed';

		window.document.body.appendChild(offerzoneDiv);
		cbar_banner_position(cbar_banners.length - 1);
	}

	function cbar_MSG_show(
		rule_id, position, backgroundcolor, bordercolor, borderwidth, 
		shadowsize, extracss, html,	animation, close_butt, 
		close_butt_pos,	close_butt_size, close_butt_offset, close_butt_id, divid, 
		popup_close, autohide_secs, countdown_timer,close_custom
	) {
		if (cbar_suppress_rules.includes(rule_id)) {
			return; // allow suppressing by js action
		}

		if (typeof peekABar === 'undefined') {
			peekABar = {};
		}
		
		if ((cbar_preview_rules == '') && (cbar_readCookie('cbar_mc_' + rule_id ) == '1')) {
			return; 
		}

		if (extracss != '') {
			var style = document.createElement('style');
			style.type = 'text/css';
			style.innerHTML = cbarApp.cleanString(extracss);
			document.getElementsByTagName('head')[0].appendChild(style);
		}

		var cbar_banner_html = '<div id="cbar_msgzone_content">' + cbarApp.cleanString(html) + 
			'</div><div id="email_capture_ajax_msg" style="display: none"></div>';
	
		if (close_butt != '') {
			var close_css = '';	
			if (close_butt_pos.search('t') > -1) {
				close_css += "top: 1px; bottom: auto;";
			} else {
				close_css += "top: auto; bottom: 1px;"; 
			}
			if (close_butt_pos.search('l') > -1) {
				close_css += "left: 1px; right: auto;";       
			} else {
				close_css += "right: 1px; left: auto;";
			}
			var url = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
			if (typeof close_custom !== 'undefined' && close_custom != null) {
				url = close_custom.url;
				if (close_custom.size != '') {
					close_css += "width:" + close_custom.size + "px;";
				}			
			}				
			cbar_banner_html += '<img src="' +url+ '" style="position: absolute; cursor: pointer; cursor: hand; border: none; ' +
				close_css + 'margin: ' + close_butt_offset + 'px;" onclick=\'peekABar.' + divid + ".hide(); popup_close=this.getAttribute(\"popup_close\"); if ((typeof popup_close ==\"undefined\") || isNaN(parseInt(popup_close)) ) popup_close=365; if ((popup_close != -1) && (cbar_preview_rules ==\"\")) cbar_createCookie(\"cbar_mc_\"+this.getAttribute(\"rule_id\") ,1, parseInt(popup_close)); return false;' popup_close=\"" + popup_close + '" rule_id="' + rule_id + '">';
		}

		var shadow = (position == 'bottom') ? '0 -' + shadowsize + 'px ' + shadowsize + 'px 0' : '0 ' + shadowsize +
			'px ' + shadowsize + 'px 0';

		var callPeekABar = function() {
			peekABar[divid] = new cbar_peekABar({	
				position: (position == 'toppush') ? 'top' : position,  
				backgroundColor: backgroundcolor,
				padding: '5px ' + (parseInt(close_butt_size) + (parseInt(close_butt_offset) * 2)) + 'px',
				html: cbar_banner_html,
				cssClass: divid,
				autohide: autohide_secs > 0,
				delay: autohide_secs * 1000,
				onShow: function() {
					var el = document.querySelector('.' + divid);
					el.style.cssText += 'z-index: ' + (cbar_zindex - 10) + ' !important; border: solid ' + 
						borderwidth + 'px ' + bordercolor + '; box-shadow: ' + shadow + ';';
					el.setAttribute('popup_close', popup_close);
					el.setAttribute('id', divid);

					if (position == 'toppush') {
						window['body_margin_top'] = document.body.style.marginTop;
						setTimeout(function() {
							window['cbar_msg_bar_resize_handler'] = function() {
								if (typeof jQuery !== 'undefined') {
									jQuery('body').animate({
										marginTop: jQuery('.' + divid).outerHeight() + 'px'
									}, 150);
								} else {
									document.body.style.marginTop = window.getComputedStyle(document.querySelector('.' + divid)).height;
								}
							};
							window.addEventListener('resize', window['cbar_msg_bar_resize_handler']);
							window['cbar_msg_bar_resize_handler']();
						}, 500);
					}
					
					if (countdown_timer == 'on') {
						cbar_countdown_timer(rule_id);
					}
					cbar_firecustomevent('cbar_show', document, rule_id);
					el.addEventListener('click', function(event) {
						if (['A','BUTTON'].indexOf(event.target.tagName) > -1) {
							cbar_click2(null, null, 'bannerPopupEtc', rule_id);
						}
					});
				},
				onHide: function() {
					document.body.style.marginTop = window['body_margin_top'];
					if (window.removeEventListener) {
						window.removeEventListener('resize', window['cbar_msg_bar_resize_handler']);// W3C DOM
					} else if (window.detachEvent) {
						document.detachEvent('onresize', window['cbar_msg_bar_resize_handler']);// IE DOM
					}
					window['cbar_b_no_click_' + rule_id] = true; 
					cbar_firecustomevent('cbar_close', document, rule_id);
				},
				animation: {
					type: animation,
					duration: 300
				}
			});
			peekABar[divid].show();
		};
		
		if (typeof cbar_peekABar === 'undefined') {
			loadjscssfile(cbar_static_url + 'peekABar/jquery.peekabar.css', 'css');
			loadjscssfile_callback(cbar_static_url + 'peekABar/cbar_peekabar.js', 'js', callPeekABar);
		} else {
			callPeekABar();
		}
	}

	function cbar_FBMSG_show(
		rule_id, site_id, app_id, page_id, size, 
		skin, e_loc, e_id, e_class, center_align,
		inline_css, css, rule_preview
	) {
		var cbar_fbmsg_optin = function() {
			if (typeof cbar_send_messenger !== 'undefined') {
				FB.AppEvents.logEvent('MessengerCheckboxUserConfirmation', null, cbar_send_messenger);
			}
		};
		
		var cbar_draw_fb_checkbox = function() {
			var fchkb = document.createElement('template');
			fchkb.innerHTML = '<div class="fb-messenger-checkbox" origin=' + window.location.href + ' page_id=' + 
				page_id + ' messenger_app_id=' + app_id + ' user_ref=' + site_id + '.' + rule_id + '.' + cbar_uid +
				'.' + rule_preview + '.' + (new Date()).getTime() + ' prechecked=true allow_login=true size=' + 
				size + ' skin=' + skin + ' center_align=' + center_align + ' ' + 
				((inline_css == 'true' && css.length) ? 'style="' + decodeURIComponent(css) + '"' : '') + '></div>';
		
			if (e_loc == 'b') {
				cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild, cbar_target_e);
			} else {
				cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild, cbar_target_e.nextSibling);
			}
			FB.init({
				appId: app_id, 
				xfbml: false, 
				version: 'v2.10'
			});
			FB.Event.subscribe('messenger_checkbox', function(e) {
				if (e.event == 'checkbox' && e.state == 'checked') {
					cbar_send_messenger = {
						app_id: app_id,
						page_id: page_id,
						user_ref: e.user_ref
					}; 
				} else {
					delete cbar_send_messenger; 
				}
			});
			cbar_target_e.addEventListener('click', cbar_fbmsg_optin);
			FB.XFBML.parse();
		};
		
		if (window.FB) {
			if (document.getElementById('facebook-jssdk') !== null) {
				document.getElementById('facebook-jssdk').remove();
			}
			if (document.getElementById('fb-root') !== null) {
				document.getElementById('fb-root').remove();
			}
			fb_root = document.createElement('div');
			fb_root.setAttribute('id', 'fb-root');
			document.body.appendChild(fb_root);
			delete FB;
		}
		
		var cbar_target_e = document.querySelector((e_id.length > 0) ? '#' + e_id : '.' + e_class);
		if (cbar_target_e !== null) {
			loadjscssfile_callback('https://connect.facebook.net/en_US/sdk.js', 'js', function() { 
				setTimeout(function() { 
					cbar_draw_fb_checkbox(); 
				}, 2000); 
			});
		}
	}

	function cbar_msgzone_email_capture(script, uid, sid, rid) {
		var script_url = script + '?s=' + sid + '&r=' + rid + '&u=' + uid + '&user_email=' + 
			document.getElementById('cbar_getemail_input').value;

		loadjscssfile_callback(script_url, 'js', function() {
			document.getElementById('cbar_msgzone_content').style.display = 'none';
			
			var ecam_div = document.getElementById('email_capture_ajax_msg');
			ecam_div.style.display = 'block';
			ecam_div.innerHTML = result_eca.message;
			if (result_eca.error) {
				ecam_div.innerHTML += ' <a href="javascript://" onclick="document.getElementById(\'email_capture_ajax_msg\').style.display=\'none\';document.getElementById(\'cbar_msgzone_content\').style.display=\'block\';">' + result_eca.backlnk + '</a>';
			}
		});
	}

	function cbar_banner_show(
		img_url, width, height, clk_url, align, 
		position, lrmargin, tbmargin, html_item, zindex, 
		overlay, newwin, banner_id, close_butt_pos, onclick, 
		mouseover, mouseout, rule_id, extra_html, close_butt_id, 
		close_butt_size, close_butt_offset, popup_close,custom_close
	) {
		if (cbar_suppress_rules.includes(rule_id)) {
			return; // allow suppressing by js action
		}
		if (
			(cbar_preview_rules == '') && 
			(
				cbar_readCookie('cbar_bc_' + rule_id ) == '1' || 
				cbar_readCookie('cbar_bc_' + cbar_sess + '_'+ rule_id ) == '1'
			)
		) {
			return; // stops both banner and thumbnail
		}

		// if the banner should replace html - check that the element to be replace exists. if not run again later
		if ((position == 'html') && (overlay == 'r' || overlay == 'rp' || overlay == 'in')) {
			if (document.querySelector(html_item) === null ) {
				var args = arguments;
				window.setTimeout(function() {
					cbar_banner_show.apply(window, args);
				}, 600);
				return;
			}
		}
		
		function replaceElement(banners_index) {
			var banner_data = cbar_banners[banners_index];
			var ele = document.querySelector(banner_data.html_item);
			if (banner_data.overlay == 'rp') {
				ele = ele.parentNode;
			}
			if (ele != null) {
				ele.innerHTML = banner_data.banner_html;
			}
			return document.getElementById(banner_data.id);
		}

		// delete banner if it already exists
		var existing = document.getElementById('cbar_banner_' + banner_id);
		if (existing) {	
			existing.parentNode.removeChild(existing);	
		}

		var banner = window.document.createElement('div');
		banner.className = 'cbar_banner';
		banner.id = 'cbar_banner_' + banner_id;
		banner.setAttribute('rule_id', rule_id);
		banner.popup_close = popup_close;
		banner.rule_id = rule_id;
		var target_str = newwin ? ' _blank' : '';
		banner.style.zIndex = (zindex != '') ? zindex : cbar_zindex;
		
		var tmp = '';
		if (onclick || (clk_url != '')) {
			tmp = 'cursor: pointer; cursor: hand; ';
		}

		// img_url can be an image in cbar_userimages or full image url
		if ((img_url.search('http') !== 0) && (img_url.search('//') !== 0)) {
			img_url = cbar_userimages + img_url;
		}

		var banner_html = '<img src="' + img_url + '" style="border: none; ' + tmp + '"> ';

		if (close_butt_pos !='') {		
			cbarApp.closeButtons[rule_id + '|banner'] = {
				pos: close_butt_pos,
				icon: close_butt_id,
				size: close_butt_size,
				offset: close_butt_offset,
				banner_id: banner_id,
				custom: custom_close
			};
			banner_html += draw_close_button(rule_id, 'banner');
		}

		if (extra_html.length>0)  {
			banner_html += cbarApp.cleanString(extra_html);
		}

		if (clk_url.length>0) {
			banner_html = '<a href="' + clk_url + '" target="' + target_str + '" style="border: none;">' + 
				banner_html + '</a>';
		}
		banner.style.width = 'auto';
		banner.style.height = 'auto';
		banner.style.top = '0';
		banner.style.left = '0';
		banner.style.display = 'block';
		banner.style.margin = '0 0 0 0';
		banner.style.position = 'relative'; //position cant be static, so close button will appear inside
		banner.style.visibility = 'visible';
		banner.innerHTML = banner_html;
		
		// get the html of cbar_banner
		var tmp_div = window.document.createElement('div');
		tmp_div.appendChild(banner);
		var banner_outerHTML = tmp_div.innerHTML;

		// store all banner data for repositioning.
		var banner_info = {
			id: 'cbar_banner_' + banner_id,  
			position: position, 
			overlay: overlay, 
			align: align, 
			lrmargin: lrmargin, 
			tbmargin: tbmargin, 
			html_item: html_item, 
			width: width, 
			height: height,
			banner_html: banner_outerHTML
		};
		cbar_banners[cbar_banners.length] = banner_info;

		//get cbar_banner again because it is generated by injecting innerhtml and therefore its not the original dom object
		if ((position == 'html') && (overlay == 'r' || overlay == 'rp')) {
			// overwrite existing HTML element content
			banner = replaceElement(cbar_banners.length - 1);
		}
		
		if (position == 'html' && overlay == 'in') { 
			// insert into
			var ele = document.querySelector(html_item);
			if (ele) {
				var firstchild = ele.firstChild;
				if (firstchild) {
					ele.insertBefore(banner,firstchild);
				} else {
					ele.appendChild(banner);
				}
			}
		}

		if (banner != null) {
			banner.addEventListener('click', function() {
				cbar_click2(null, null, 'bannerPopupEtc', rule_id);
			});
			if (onclick) {
				banner.addEventListener('click', eval('cbar_banner_onclick_' + banner_id));
			}
			if (mouseover) {
				banner.addEventListener('mouseover', eval('cbar_banner_mouseover_' + banner_id));
			}
			if (mouseout) {
				banner.addEventListener('mouseout', eval('cbar_banner_mouseout_' + banner_id));
			}
		}

		if ((position == 'html') && (overlay == 'r' || overlay == 'rp' || overlay == 'in')) {
			return; // overwrite existing HTML element content
		}

		// css position
		if (position == 'html') {
			banner.style.position = 'absolute';
			window.addEventListener('scroll', cbar_banner_scroll_event);
			window.addEventListener('resize', cbar_banner_resize_event);
		} else {
			banner.style.position = (position == 'f') ? 'fixed' : 'absolute';
		}

		window.document.body.appendChild(banner);
		cbar_banner_position(cbar_banners.length - 1);
	}

	function cbar_banner_resize_event() {// # 227
		if (cbar_ban_resizetimeout > 0) {
			window.clearTimeout(cbar_ban_resizetimeout);
		}
		cbar_ban_resizetimeout = window.setTimeout("cbar_banners_position()", 100);
	}

	function cbar_banner_scroll_event() { // must be here for ie6
		if (cbar_ban_scrolltimeout > 0) {
			window.clearTimeout(cbar_ban_scrolltimeout);
		}
		cbar_ban_scrolltimeout = window.setTimeout("cbar_banners_position()", 300);
	}

	// all banners position
	function cbar_banners_position() {
		for (var i = 0; i < cbar_banners.length; i++) {
			cbar_banner_position(i);
		}
	}

	// single banner position
	function cbar_banner_position(banners_index) {
		var banner_data = cbar_banners[banners_index];
		
		var banner = document.getElementById(banner_data.id);
		if (banner === null) {
			return;
		}
		
		if (banner.getAttribute('hidden_banner') !== null) {
			return;
		}

		if ((banner_data.position == 'html') && (banner_data.overlay == 'f')) { // float over html element
			var ele = document.querySelector(banner_data.html_item);
			if (ele !== null) {
				var rect = ele.getBoundingClientRect();				
				if (rect.width > 0 && rect.height > 0) {
					if (banner_data.align === 'c') {
						var clientwidth = document.body.clientWidth;
						banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';
					} else {
						if (banner_data.align.search('t') > -1) {
							banner.style.top = window.scrollY+rect.top + banner_data.tbmargin + 'px';
						}
						if (banner_data.align.search('b') > -1) {
							banner.style.top = (rect.bottom+window.scrollY - banner_data.tbmargin-banner_data.height) + 'px';
						}
						if (banner_data.align.search('l') > -1) {
							banner.style.left = window.scrollX+rect.left + banner_data.lrmargin + 'px';
						}
						if (banner_data.align.search('r') > -1) {
							banner.style.right = (window.document.body.scrollWidth-rect.right  + banner_data.lrmargin) + 'px';
							banner.style.left = 'auto';
						}
						if (banner_data.align.search('c') > -1) {
							banner.style.left = Math.floor((rect.width / 2) + banner_data.lrmargin - (banner_data.width / 2)+rect.left) + 'px';
						}
					}
					banner.style.display = 'block';
				} else {
					cbar_log_console('cbar error: dont use hidden div ' + banner_data.html_item + ' for floating banner position');
					banner.style.display = 'none';
				}
			} else {
				banner.style.display = 'none';
				window.setTimeout('cbar_banner_position(' + banners_index + ')', 600);
			}
			return;
		}

		var clientheight = document.body.clientHeight;
		var clientwidth = document.body.clientWidth;

		if (!((banner_data.position == 'html') && (banner_data.overlay == 'r'))) { // dont reposition banner if its replacing content
			if (banner_data.align.search('t') > -1) {
				banner.style.top = banner_data.tbmargin + 'px'; 
			}
			if (banner_data.align.search('b') > -1) {
				banner.style.bottom = banner_data.tbmargin + 'px'; 
				banner.style.top = 'auto';
			}
			if (banner_data.align.search('l') > -1) {
				banner.style.left = banner_data.lrmargin + 'px'; 
			}
			if (banner_data.align.search('r') > -1) {
				banner.style.right = banner_data.lrmargin + 'px'; 
				banner.style.left = 'auto';
			}
			if (banner_data.align == 'c') {
				banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';  
				banner.style.top = Math.floor((clientheight / 2) + banner_data.tbmargin - (banner_data.height / 2)) + 'px'; 
			} else if (banner_data.align.search('c') > -1) {
				banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';
			}
		}
	}

	// COUPONS

	function cbar_coupon_get(type, rule_id, close) {
		if (typeof close === 'undefined') {
			close = true;
		}
		
		var banpop = '';
		if (type == 1) {
			var banner = document.querySelector('div[rule_id="' + rule_id + '"]');
			if (banner !== null) {
				banpop = banner.id;
			}
		} else if (type == 2) {
			banpop = 'cbar_popup_' + rule_id;
		} else if (type == 3) {
			var oz = document.querySelector('div[rule_id="' + rule_id + '"]');
			if (oz !== null) {
				banpop = oz.id;
			}
		} else if (type == 4) {
			banpop = 'cbar_POP2_' + rule_id;
		}else if (type == 5) {
			banpop = 'cbar_MSG2_' + rule_id;
		}
		
		var usertime = Math.round(new Date().getTime() / 1000);
		// update coupons list
		var cur_coupons = cbar_readCookie('cbar_co');
		// remove old appearance
		if (cur_coupons == null) {
			cur_coupons = '';
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", 'gi');
		cur_coupons = cur_coupons.replace(regExp, '');

		if (cur_coupons.length > 3) {
			cur_coupons += '_';
		}
		// add coupon
		cur_coupons += rule_id + '~' + usertime;
		cbar_createCookie('cbar_co', cur_coupons, 365);
		
		// hide all active tooltips
		if (typeof cbar_coups[0] !== 'undefined') {
			var tt = document.querySelector('div[rule_id="' + cbar_coups[0].rule + '"]');
			if (tt !== null) {
				tt.parentNode.removeChild(tt);
			}
		}
		
		var cbar_str = '';
		if (cbar_preview_rules > 0) {
			cbar_str += cbarGetPreviewParams();
		}

		if (cbar_md) {
			cbar_str += '&md=1';
		}

		if (typeof screen.width !== 'undefined') {
			cbar_str += '&scw=' + screen.width + '&sch=' + screen.height;
		}

		if (cbar_cou_in_cart && (cbar_cou_input != '')) {
			cbar_str += '&cou_inj=true'; // experimnetal
		}
		
		cbarLoadData({
			a: 'ca',
			sid: cbar_sid,
			uid: cbar_uid,
			r: rule_id,
			cou: cur_coupons,
			bp: banpop,
			ut: usertime,
			br: cbar_BrowserDetect.browser,
			v: cbar_BrowserDetect.version,
			os: cbar_BrowserDetect.OS,
			url: cbar_url_en
		}, cbar_str);
	
		// hide coupon offer banner or popup (if any)
		
		if (close === true && banpop != '') {
			var tmp = document.getElementById(banpop);
			if (tmp !== null) {
				tmp.style.display = 'none';
				tmp.setAttribute('hidden_banner', '1');
			}
		}
	
		// hide coupon popup (if any)		
		if (close === true) {
			if (type == 4){
				cbar_close_popup2(rule_id,'POP2');
			}else if(type==5){
				cbar_close_popup2(rule_id,'MSG2');
			} else {
				cbar_close_popup(rule_id);
			}			
		}
		
		if (typeof cbar_coupon_given === 'function') {			
			cbar_coupon_given(rule_id);
		}
	}

	function cbar_cou_th_anim(rule_id, pop_ban_id, animstep, image_name, image_w, image_h, align, sx, sy, tx, ty) {
		var totalsteps = 30;
		var tmp;

		if (animstep == 0) {
			tmp = document.getElementById(pop_ban_id);

			var scrolltop = document.body.scrollTop || document.documentElement.scrollTop;
			var clientheight = document.body.clientHeight;
			var clientwidth = document.body.clientWidth;

			sx = tmp.offsetLeft;
			sy = tmp.offsetTop + scrolltop;

			ty = (align.search('t') > -1) ? scrolltop : clientheight + scrolltop - image_h;
			tx = (align.search('l') > -1) ? 0 : clientwidth - image_w;

			var element = window.document.createElement('img');
			element.id = 'randomid';
			element.style.position = 'absolute';
			element.style.display = 'block';
			element.style.zIndex = '30000';
			element.src = cbar_userimages + image_name;
			window.document.body.appendChild(element);
		}
		
		tmp = document.getElementById('randomid');
		if (tmp !== null) {
			element = tmp;
			element.style.left = Math.round(sx + (tx - sx) * (animstep / totalsteps)) + 'px';
			element.style.top = Math.round(sy + (ty - sy) * (animstep / totalsteps)) + 'px';
		}
		
		if (animstep < totalsteps) {
			setTimeout('cbar_cou_th_anim(' + rule_id + ", '" + pop_ban_id + "', " + (animstep + 1) + ", '" + image_name +
				"', '" + image_w + "', '" + image_h + "', '" + align + "', " + sx + ", " + sy + ", " + tx + ", " +
				ty + "); ", 50);
		} else {
			element.style.display = 'none';

			// hide coupon banner (if any)
			tmp = document.getElementById(pop_ban_id);
			if (tmp !== null) {
				tmp.style.display = 'none';
				tmp.setAttribute('hidden_banner', '1');
			}
			cbar_close_popup(rule_id);
		}
	}

	function cbar_cou_tooltip(rule_id, banner_id, show, prompt) {
		if (show && (prompt == '')) {
			return;
		}

		var tooltip_tmp = document.querySelector('div#cbar_tooltip_' + rule_id);
		var tooltip;

		if (tooltip_tmp === null) {
			var thumbnail = document.querySelector('div#cbar_banner_' + banner_id);
			var tmp = window.document.createElement('div');
			var xoffset = 0;
			var yoffset = 0;
			if (thumbnail.offsetLeft > 100) {
				xoffset =- 220; 
			} else {
				xoffset = thumbnail.clientWidth + 20;
			}
			if (thumbnail.offsetTop > 100) {
				yoffset =- 100; 
			} else {
				yoffset = thumbnail.clientHeight + 20;
			}

			tmp.innerHTML = '<div id="cbar_tooltip_' + rule_id + '" style="position: absolute; top: ' + yoffset + 
				'px; left: ' + xoffset + 'px; bottom: auto; right: auto; z-index: 30010; display: block; ' +
				'position: absolute; font-size: 12px; width: 213px; height: 94px; border: none; background: url(' + 
				cbar_static_url + 'img/coupons/tooltip_1.png) no-repeat left top; font-weight: normal; color: #333333; ' + 
				'text-align: center"><div style="margin: 10px;">' + cbarApp.cleanString(prompt) + 
				'</div></div>';
			tooltip = tmp.childNodes[0];
			thumbnail.appendChild(tooltip);
		} else {
			tooltip = tooltip_tmp;
		}

		tooltip.style.display = show ? 'block' : 'none';
	}

	function cbar_hide_coupon_box() {
		var cont = true;
		if (typeof cbar_before_hide_coupon_box === 'function') {
			cont = cbar_before_hide_coupon_box();
		}

		if (cont && (typeof window.hide_message !== 'undefined')) {
			var myElement = window.document.createElement('span');
			myElement.innerHTML = '<span style="background: white">' + cbarApp.cleanString(window.hide_message) + '</span>';
			cbar_cou_input.parentNode.insertBefore(myElement, cbar_cou_input);
			cbar_cou_input.style.width = '0px';
			cbar_cou_input.style.padding = '0pt';
			cbar_cou_input.style.margin = '0pt';
			cbar_cou_input.style.border = 'none';
			cbar_cou_input.style.backgroundColor = 'transparent';
		}
	}

	function cbar_cou_inj(cou_code, hide_message) {
		window.cbar_coupon_code = cou_code;
		window.hide_message = hide_message;
		
		var dont_inj_coupon;

		if (typeof cbar_before_cou_inj === 'function') {
			dont_inj_coupon = cbar_before_cou_inj(cbar_cou_input);
		}

		if ((typeof window.hide_message !== 'undefined') && (window.hide_message != '')) {
			cbar_hide_coupon_box();
		}

		if (dont_inj_coupon === false) {
			cbar_log_console('cbar: coupon not injected');
			return;
		}

		cbar_cou_input.value = cou_code;

		if (typeof cbar_after_cou_inj === 'function') {
			cbar_after_cou_inj(cbar_cou_input);
		}
	}

	function cbar_cou_tick() {
		for (var i = 0; i < cbar_coups.length; i++) {
			// find the countdown div
			if (cbar_coups[i].div == null) {
				var tmp = document.querySelector('div#' + cbar_coups[i].id); 
				if (tmp !== null) {
					cbar_coups[i].div = tmp;
				}
			};

			if (cbar_coups[i].secs_left < 1) {
				if (cbar_coups[i].div !== null) {
					cbar_coups[i].div.innerHTML = cbarApp.cleanString(cbar_coups[i].coupon_expired);
				}
				return;
			}

			var hours = Math.floor(cbar_coups[i].secs_left / 3600);
			var minutes= Math.floor((cbar_coups[i].secs_left % 3600) / 60);
			var seconds= Math.floor(cbar_coups[i].secs_left % 60);
			var days = 0;
			var dayshtml = '';
			if (cbar_coups[i].showdays == true) {
				days = parseInt(hours / 24);
				hours -= days * 24;
				if (days > 0) {
					dayshtml = days + cbar_coups[i].daysword + ' ';
				}
			}

			if (cbar_coups[i].div !== null) {
				cbar_coups[i].div.innerHTML = dayshtml + (hours < 10 ? ' 0' : ' ') + hours + (minutes < 10 ? ':0' : ':') +
					minutes + (seconds < 10 ? ':0' : ':') + seconds;
			}
			cbar_coups[i].secs_left--;
		}
	}

	function cbar_cou_reset(rule_id) {
		// remove from to coupons list
		var cur_coupons = cbar_readCookie('cbar_co');
		if (cur_coupons == null) {
			return;
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", "gi");
		cur_coupons = cur_coupons.replace(regExp, '');

		cbar_createCookie('cbar_co', cur_coupons, 365);
	}

	function cbar_cou_expire(rule_id) {
		var cur_coupons = cbar_readCookie('cbar_co');
		// remove old appearance
		if (cur_coupons == null) {
			cur_coupons = '';
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", "gi");
		cur_coupons = cur_coupons.replace(regExp, '');

		if (cur_coupons.length > 3) {
			cur_coupons += '_';
		}
		
		// add coupon
		cur_coupons += rule_id + '~12345678'; // past (hard coded value)
		cbar_createCookie('cbar_co', cur_coupons, 365);
	}

	var windowResizeDebounce = new cbarApp.DebounceCall(function() {  
		cbar_firecustomevent('cbar_resize' , document, {}); 
	}, 200);
	window.addEventListener('resize', function() {
		windowResizeDebounce.call();
	});
	document.addEventListener('cbar_pageview_complete', function() {
		cbarApp.isPageviewCompleted = true;
	});

	// add to cart asyncronuosly
	function cbar_add_to_cart(pid, qty, pur_mode) {
		var cbar_str = '&' + cbarApp.var2urlParam.cbar_log + '=' + encodeURIComponent(cbar_log);
		
		cbarLoadData({
			a: 'cartu',
			sid: cbar_sid,
			uid: cbar_uid,
			pur: 1,
			pid0: encodeURIComponent(pid),
			qty0: qty,
			pur_mode: pur_mode,
			pur_add: 'true',
			url: encodeURIComponent(window.location.href),
			crt: cbar_crt,
			crtn: cbar_crtn
		}, cbar_str);
	}

	// empty cart asyncronuosly
	function cbar_empty_cart() {
		cbar_add_to_cart('deletecart', 0, 0);
	}

	function cbar_late_update(fieldname, get_value_function, once) {
		if (cbar_ro) {
			return;
		}
		
		var hashCode = function(s) {
			return s.split("").reduce(function(a, b) {
				a = ((a << 5) - a) + b.charCodeAt(0);
				return a & a;
			}, 0);
		};

		var fieldNameCleaned = fieldname.replace(' ', '');
		var cachedValue = null;
		var tmp = cbarApp.storage.session.get('cbar_data_' + fieldNameCleaned);
		if (tmp !== null) {
			cachedValue = tmp;
		}
		
		var retries = 0;
		var timerHandler = setInterval(function() {
			var retval = get_value_function();
			if (!cbarApp.isPageviewCompleted || retval === false || (typeof retval === 'undefined')) {
				return;
			}

			var retvalHashed = hashCode(retval);

			if (cachedValue === null || retvalHashed !== cachedValue) {
				cachedValue = retvalHashed;
				cbarApp.storage.session.create('cbar_data_' + fieldNameCleaned, retvalHashed);
				if (cbarApp.var2urlParam.hasOwnProperty(fieldNameCleaned)) {
					cbar_str = '&' + cbarApp.var2urlParam[fieldNameCleaned] + "=" + encodeURIComponent(retval);
				} else {
					cbar_str = '&' + fieldname + "=" + encodeURIComponent(retval);
				}
				
				cbarLoadData({
					a: 'datau',
					sid: cbar_sid,
					uid: cbar_uid,
					pid: cbar_pid
				}, cbar_str);
				
				retries++;

				if (retries > 20 || once) {
					clearInterval(timerHandler);
				}
			}
		}, 550);
	}

	function cbar_bindReady() {
		if (cbar_readyBound) {
			return;
		}
		
		cbar_readyBound = true;

		if(document.readyState==='complete'){
			cbar_dom_ready();
			return;
		}
		// Use the handy event callback
		document.addEventListener('DOMContentLoaded', function() {
			document.removeEventListener('DOMContentLoaded', arguments.callee, false);
			cbar_dom_ready();
		});

		// A fallback to window.onload, that will always work
		window.addEventListener('load', cbar_dom_ready);
	}	

	function cbar_start() {
		var initAjaxCart = function() {
			if (cbarApp.cartMonitorInitiated) {
				return;
			}

			if (typeof cbar_check_cart !== 'function') {
				return;
			}

			cbarApp.cartMonitorInitiated = true;

			var cartChecksum = false;

			var tmp = cbar_readCookie('cbar_cart_checksum');
			if (tmp !== null) {
				cartChecksum = unescape(tmp);
			}

			setInterval(function() {
				var retval = cbar_check_cart();
				if (retval === false) {
					return;
				}

				if (retval !== cartChecksum) {
					// something changed in ajax cart
					cartChecksum = retval;
					cbar_createCookie('cbar_cart_checksum', escape(retval), 0);

					// scrape cart
					if (typeof cbar_scrape_ajax_cart === 'function') {
						var cbar_str = '';
						cbar_pur_pids = [];
						cbar_pur_qtys = [];
						cbar_pur_imgs = [];
						cbar_pur_names = [];
						cbar_pur_urls = [];
						cbar_pur_prices = [];
						cbar_pur_subttls = [];
						cbar_pur_xtr1s = [];
						cbar_pur_xtr2s = [];
						cbar_pur_xtr3s = [];
						cbar_pur_xtr4s = [];

						cbar_userinfo = {};
						cbar_user_attribute = {};
						cbar_user_attributes = {};

						cbar_crt = ''; 
						cbar_crtn = '';

						var proceed = cbar_scrape_ajax_cart();

						if (proceed === false) {
							return;
						}

						if (cbar_pur_pids.length > 0 && cbar_pur_pids.length < 25) {
							for (var i = 0; i < cbar_pur_pids.length; i++) {
								cbar_str += '&pid' + i + '=' + encodeURIComponent(cbar_pur_pids[i]);
								cbar_str += '&qty' + i + '=' + ((typeof cbar_pur_qtys[i] === "undefined") ? 1 : cbar_pur_qtys[i]);

								if (cbar_pur_mode == 3) {
									if (typeof cbar_pur_imgs[i] !== 'undefined') {
										cbar_str += '&img' + i + '=' + encodeURIComponent(cbar_pur_imgs[i]);
									}
									if (typeof cbar_pur_names[i] !== 'undefined') {
										cbar_str += '&name' + i + '=' + encodeURIComponent(cbar_pur_names[i]);
									}
									if (typeof cbar_pur_urls[i] !== 'undefined') {
										cbar_str += '&url' + i + '=' + encodeURIComponent(cbar_pur_urls[i]);
									}
									if (typeof cbar_pur_prices[i] !== 'undefined') {
										cbar_str += '&price' + i + '=' + encodeURIComponent(cbar_pur_prices[i]);
									}
									if (typeof cbar_pur_subttls[i] !== 'undefined') {
										cbar_str += '&subttl' + i + '=' + encodeURIComponent(cbar_pur_subttls[i]);
									}
									if (typeof cbar_pur_xtr1s[i] !== 'undefined') {
										cbar_str += '&xtr1' + i + '=' + encodeURIComponent(cbar_pur_xtr1s[i]);
									}
									if (typeof cbar_pur_xtr2s[i] !== 'undefined') {
										cbar_str += '&xtr2' + i + '=' + encodeURIComponent(cbar_pur_xtr2s[i]);
									}
									if (typeof cbar_pur_xtr3s[i] !== 'undefined') {
										cbar_str += '&xtr3' + i + '=' + encodeURIComponent(cbar_pur_xtr3s[i]);
									}
									if (typeof cbar_pur_xtr4s[i] !== 'undefined') {
										cbar_str += '&xtr4' + i + '=' + encodeURIComponent(cbar_pur_xtr4s[i]);
									}
								}
							}
						}

						cbar_str += '&' + cbarApp.var2urlParam.cbar_crt + '=' + cbar_crt + '&' + cbarApp.var2urlParam.cbar_crtn + '=' + 
							cbar_crtn + '&' + cbarApp.var2urlParam.cbar_log + '=' + encodeURIComponent(cbar_log);

						cbarLoadData({
							a: 'cartu',
							sid: cbar_sid,
							uid: cbar_uid,
							pur: 1,
							pur_mode: cbar_pur_mode,
							pur_add: cbar_pur_add,
							url: encodeURIComponent(window.location.href)
						}, cbar_str + 
							'&' + cbar_any2url('attu', cbar_user_attributes) + 
							'&' + cbar_any2url('attu1', cbar_user_attribute) + 
							'&' + cbar_any2url('attrecs', cbarApp.recsAttributes) +
							'&' + cbar_any2url('uinf', cbar_userinfo)
						);
					}
				}
			}, 600);
		};
		
		try {
			var wait = false;

			if (typeof cbar_hold_execution === 'function') {
				wait = cbar_hold_execution();
			}

			if (wait) {
				cbar_log_console('cbar wait');
				window.setTimeout(function() {
					cbar_start();
				}, 500);
				return;
			}
			
			if (cbar_alreadyrunflag) {
				return;
			}

			cbar_alreadyrunflag = true;

			// cookie domain (starts with dot)
			if (!cbar_cookiedomain) {
				if (document.location.host.substring(0, 4) === 'www.') {
					cbar_cookiedomain = '.' + document.location.host.substring(4);
				} else {
					cbar_cookiedomain = '.' + document.location.host;
				}
			}
			
			// bots
			if (typeof navigator.userAgent !== 'undefined') {
				if (navigator.userAgent.search('Googlebot') > -1) {
					return;
				}
				if (navigator.userAgent.search('BrowserMob') > -1) {
					return;
				}				
			}
			
			//--> IF WAITING IS NOT REQUIRED PLESAE REMOVE THE BELOW COMMENT BLOCK <--//

/**/

cbar_sid 			= 88893;

cbar_widget 		= true;
cbar_num_widgets	= 3;

//cbar_catmode 		= 2;
cbar_encode 		= '';

// General associating variables
var cbar_temp		= '';
var cbar_temp2 		= '';
var cbar_match		= '';
var cbar_pattern 	= '';
var cbar_arr 		= '';
cbar_c_from_p		= true;
cbar_oos			= 2; 


cbar_cookiedomain	= '.kikocosmetics.co.il';	//replace  domain.com with actual site domain
cbar_use_cookies=true;
if (window.location.href.match(/(:\/\/[0-9.]+)\//) !=null) cbar_ro=1;
if (window.location.href.search('localhost') >-1 ) cbar_ro=1;
if (document.location.hostname.toLowerCase().search('kikocosmetics.co.il') == -1) cbar_ro = true;


if(cbar_url.toLowerCase().search('translate.googleusercontent.com')>-1) cbar_ro=true;
var cbar_google_translated = cbar_Sizzle("html.translated-ltr, html.translated-rtl");
if(cbar_google_translated.length > 0) {
	cbar_ro = true;
}


// to show 3 items in the responsive
var cbar_temp = cbar_gup("widget_show2");
if (cbar_temp == "true") {
    cbar_createCookie("cbar_widget_show2", "true");
} else if (cbar_temp == "false") {
    cbar_createCookie("cbar_widget_show2", "false");
}
cbar_widget_show2 = false;
if (cbar_readCookie("cbar_widget_show2") == "true") {       
    cbar_widget_show2 = true;
}


//Adding tab sliding widget in preview mode
var cbar_widget_tab_sliding = false;
if(cbar_gup("widget_tab_sliding") == "true")
{
	cbar_createCookie("cbar_widget_tab_sliding","true");
}
else if(cbar_gup("widget_tab_sliding") == "false")
{
	cbar_createCookie("cbar_widget_tab_sliding","false");
}

if(cbar_readCookie("cbar_widget_tab_sliding") == "true")
{
	cbar_widget_tab_sliding = true;
}

//Adding tab sliding widget in preview mode
var cbar_recv3_widget_show = false;
if(cbar_gup("cbar_recv3_widget_show") == "true")
{
	cbar_createCookie("cbar_recv3_widget_show","true");
}
else if(cbar_gup("cbar_recv3_widget_show") == "false")
{
	cbar_createCookie("cbar_recv3_widget_show","false");
}

if(cbar_readCookie("cbar_recv3_widget_show") == "true")
{
	cbar_recv3_widget_show = true;
}

if(cbar_recv3_widget_show == true){
    cbar_widget_show	= false;
}else{
    cbar_widget_show	= true;
}
// Widget titles
cbar_recstep_titles = []; // required temporarily
cbar_recstep_titles[1]		= "Customers Also Viewed";
cbar_recstep_titles[2]		= "Top Sellers";
cbar_recstep_titles[3]		= "Recently Viewed"
cbar_recstep_titles[4]		= "Customers Who Bought This Product Also Bought";
cbar_recstep_titles[5]		= "You Might Also Like";
cbar_recstep_titles[6]		= "Recommended For You";
cbar_recstep_titles[7]		= "Customers Who Bought This Product Also Bought";
cbar_recstep_titles[8]		= "Best Sellers";
cbar_recstep_titles[9]		= "Customers With Similar Searches Also Viewed";
cbar_recstep_titles[10]		= "Customers Who Bought Products You Own Also Bought";
cbar_recstep_titles[11]		= "Recommended For You";
cbar_recstep_titles[12]		= "Top Sellers From Recent Categories You Visited";
cbar_recstep_titles[13]		= "Recommendations Based On Your Google Search";
cbar_recstep_titles[19]		= "What Other Customers Are Buying Right Now";
cbar_recstep_titles[18]		= "What do customers ultimately buy after viewing this item?";
cbar_recstep_titles[99]		= "Our Recommendations";
cbar_recstep_titles[100]	= "You Might Also Like";


// recently viewed widget flow
// cbar_flow="H0:1,4,3,13,10.0.0.0.0.1,5.9,12,8;H1:1,0,0,0,0;P0:1,2,3,13,1,5,2;P1:1,2,4.4,4.2,2;C0:1,2,3,13,5.0,2.0;C1:1,0,0,0,0;Sc0:1,2,3,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0";
//standard flow
if(cbar_widget_show2){
	cbar_flow="H0:1-1,4-15,8;H1:1-1,1-12,10.0.0.99.0.1,5.9.0.99,12.0.0.99,19.0.0.99;P0:1-1,4-8,1,22.0.0.1.9,5.0.0.1,2.0.0.1;P1:1,1,3;P2:1-1,4-12,4.4,4.2,1.4.0.5,1.2.0.5;C0:1-1,4-8,5.7,2.7,5.6,2.6,5.0,2.0;C1:1,0,0,0,0;Sc0:1-1,4-8,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0;S0:1,4-12,9,5.9;O0:1,4-8,5.9.0.0.6,12.0.0.6,8;";
}
else{
	cbar_flow="H0:1-1,4-15,8;H1:1-1,1-12,10.0.0.99.0.1,5.9.0.99,12.0.0.99,19.0.0.99;H2:1,1-10,3;P0:1-1,4-8,1,5.0.0.1,2.0.0.1,22.0.0.1;P1:1-1,4-12,4.4,4.2,1.4.0.5,1.2.0.5;P2:1,1-10,3;C0:1-1,4-8,5.7,2.7,5.6,2.6,5.0,2.0;C1:1,0,0,0,0;C2:1,1-10,3;Sc0:1-1,4-8,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0;Sc2:1,1-10,3;S0:1,4-12,9,5.9;S2:1,1-10,3;O0:1,4-8,5.9.0.0.6,12.0.0.6,8;";
}


cbar_after_load = function(cbar_mode) {

	if (cbar_mode == 'widget') {
		for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++) {
			for (var t=0; t < cbar_results[group_ctr].length ; t++) {
				//decode and trim spaces in extra vars
				cbar_results[group_ctr][t][16] = decodeURIComponent(cbar_results[group_ctr][t][16]).replace(/^\s+|\s+$/g,'');
				cbar_results[group_ctr][t][17] = decodeURIComponent(cbar_results[group_ctr][t][17]).replace(/^\s+|\s+$/g,'');
				cbar_results[group_ctr][t][18] = decodeURIComponent(cbar_results[group_ctr][t][18]).replace(/^\s+|\s+$/g,'');
				cbar_results[group_ctr][t][21] = decodeURIComponent(cbar_results[group_ctr][t][21]).replace(/^\s+|\s+$/g,'');

				// xtr1 - original price

				// xtr2 - parent_id

				// xtr3 - short description
				
				// xtr4 - uenc It is generated by base64 encoding of (fixed url + product_id + forward slash) and replace = with , in encoded string
				cbar_results[group_ctr][t][23] = btoa('https://www.kikocosmetics.co.il/checkout/cart/add/uenc/aHR0cHM6Ly93d3cua2lrb2Nvc21ldGljcy5jby5pbC8%2C/product/'+cbar_results[group_ctr][t][17]+'/').replace(/=/g, ',');
		
        		if(cbar_results[group_ctr][t][21] !== ''){
        		    cbar_results[group_ctr][t][21] = cbar_results[group_ctr][t][21] +' '+'OFF';
        		}
        		
			}
		}
		
		
		//send widget viewed events
		if (cbar_widget_show) {
			for (var group_ctr = 0; group_ctr < cbar_results.length; group_ctr++) {
				if (cbar_w_anchor[group_ctr] && cbar_results[group_ctr].length) { // if the widget is actually displayed
					var type = '';
					if (cbar_pagetype == 'P') type = "Product " + (group_ctr + 1);
					if (cbar_pagetype == 'H') type = "Home";
                                        if (cbar_pagetype == 'Sc') type = "Cart";
					if (cbar_pagetype == 'C') type = "Category";
					if (cbar_pagetype == 'S') { type = "Search"; }
					 
					/* Pausing the Viewed Event */
					cbar_ga_eventtrack(null, 'Barilliance', type + " - Viewed", ''); 
				}
			}
		}
	}
}

cbar_after_show = function(mode) {
	if (mode == 'widget') {
		cbar_has_recs = false;
		
		for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++) {
			for (var t=0; t < cbar_results[group_ctr].length; t++) {
				cbar_has_recs = true;

				//display old price if any in extra1 var
				if (cbar_results[group_ctr][t][16] != "") { //if extra1 is not empty
					tmp = cbar_Sizzle('#cbar_w'+ group_ctr +'_'+t+'_item_xtr1_s');
					if(tmp.length) {
						tmp[0].style.display = '';
					}
					if(group_ctr==2){
					    jQuery('#cbar_w'+ group_ctr +'_'+t+'_item_price_s').css('color','#ff696c');
					}
				}

				//display short description if any in extra3 var
				if (cbar_results[group_ctr][t][18] != "") { //if extra1 is not empty
					tmp = cbar_Sizzle('div#cbar_w'+ group_ctr +'_'+t+'_item_xtr3_s');
					if(tmp.length) {
						tmp[0].style.display = '';
					}
				}
				
				//display Discount% if any in xtxt var
				if (cbar_results[group_ctr][t][21] != "") {                             //if xtxt is not empty
				    
			
					tmp = cbar_Sizzle('div#cbar_w'+ group_ctr +'_'+t+'_discount_wrapper');					
					if(tmp.length){
						tmp[0].style.display="";
					}
				}
				
				
				
				
				//fixing slick items showing resized issue
				if(cbar_pagetype == "H" || cbar_pagetype == "B" || cbar_pagetype == "P" || cbar_pagetype == "O" || cbar_pagetype == "Sc" || cbar_pagetype == "Pu")
				{
					cbar_temp = cbar_Sizzle('#cbar_widget'+group_ctr);
					if(cbar_temp.length > 0){ 
						cbar_temp[0].style.visibility="hidden";
					}
				}
				
				
				//display tab if there are results
				cbarShowTabWidget = false;
				 if(cbar_pagetype == "H" || cbar_pagetype == "C" || cbar_pagetype == "P" || cbar_pagetype == "Sc" || cbar_pagetype == "S" || cbar_pagetype == "4U")
				{
					if(cbar_results[2].length > 0 )
					{	
						cbarShowTabWidget = true;
					}	
				}
				
				if( cbarShowTabWidget === true )
				{
					var cbar_temp = cbar_Sizzle("div#bariSlidingWidgetContainer");
					if( cbar_temp.length > 0 )
					{
						cbar_temp[0].style.display="";
					}
				}
				
				
				
				
				
			}

			//hide default widget if any
			if(cbar_widget_show == true && cbar_results[group_ctr].length) {

				if (cbar_pagetype == 'P') {
					// Hide widget1
					tmp = cbar_Sizzle('.idus-slider-id_13');
					if(tmp.length>0 && group_ctr==0) {
						tmp[0].style.display="none";
					}
				}
			}
		}
		
		
		// Initialize slick
		if (cbar_results != null && cbar_widget_show && cbar_has_recs && (cbar_pagetype == "H" || cbar_pagetype == "B" || cbar_pagetype == "P" || cbar_pagetype == "O" || cbar_pagetype == "Sc" || cbar_pagetype == "Pu")) {
			var cbar_slickSliderInterval = window.setInterval(function() {
				if (typeof(jQuery) != "undefined" && typeof(jQuery.fn.slick) == "function") {
					window.clearInterval(cbar_slickSliderInterval);
					for(var group_ctr = 0; group_ctr < cbar_results.length; group_ctr++) {
					    if(group_ctr != 2){
						    cbar_init_slick_slider("#cbar_w"+group_ctr+"_items_s:not(.slick-initialized)");
					    }
						 
					}
				} else {
					if (window.console) console.log("waiting for slick");
				}
			}, 100);
		}
		
		//fixing slick items showing resized issue
		if(cbar_pagetype == "H" || cbar_pagetype == "B" || cbar_pagetype == "P" || cbar_pagetype == "O" || cbar_pagetype == "Sc" || cbar_pagetype == "Pu")
		{
			setTimeout(function() {
				for (var k=0; k <cbar_results.length; k++){
					cbar_temp = cbar_Sizzle('#cbar_widget'+k);					
					if(cbar_temp.length > 0){
						cbar_temp[0].style.visibility="";
					}
				}
			}, 200);
		}
		
		
		//Open/Close tab slider widget on barilliance page
		if(cbar_pagetype == "H" || cbar_pagetype == "P" || cbar_pagetype == "Sc" || cbar_pagetype == "S" || cbar_pagetype == "C" || cbar_pagetype == "4U")
		{
			if(cbar_widget_tab_sliding){
				document.getElementById("bari-sliding-handle").addEventListener("click", function() {
				  var element = document.getElementById("bariSlidingWidgetContainer");
				  element.classList.toggle("contentSlide");
				});
            }
		}
		
		
		//owl slider
		if(cbar_results != null && cbar_widget_show && cbar_has_recs && (cbar_pagetype == "C" || cbar_pagetype == "S"))
		{
			
			cbar_owlCarouselInterval = window.setInterval(function(){
				
				for (var w=0; w <cbar_results.length; w++){
					if('function' == typeof(jQuery.fn.owlCarousel))
					{								
						cbar_init_owl('.cbar_carousel_'+w, w);
						
						window.clearInterval(cbar_owlCarouselInterval);
								
					}
					else
					{
						if(window.console) console.log("waiting for owlCarousel");
					}
				}	
				
			},100);		
		
		}
		
		 if(cbar_results != null && cbar_results.length > 0)
		{
		
			if(cbar_pagetype == "4U")				
			{	
			 if(cbar_results[0].length > 0)
				{
					cbar_temp = cbar_Sizzle(".products-list");
						if(cbar_temp.length>0)
						{ 	
						  cbar_temp[0].style.display = "none";
						}
						
				}
			}
		}
		
	
		
	}
} //end

cbarWidgetOnError = function (error) {}

cbarWidgetOnInit = function () {}

cbarWidgetOnShow = function () {
    //Cart Page POPUP
    if(this.ruleId == 36252) {
        for(var j=0; j<this.products.length;j++){
            // for moving add to cart button and wishList out of the a tag
            cbar_temp = jQuery("#cbar_iframe_POP2_36252").contents().find(".cbar_btn_wrap");
            cbar_temp2 =  jQuery("#cbar_iframe_POP2_36252").contents().find(".cbar-wdes-item-box"); 
            if (cbar_temp.length>0 && cbar_temp2.length > 0) {
                if (cbar_temp2[j]) {
                    cbar_insert_html(cbar_temp2[j], 'beforeEnd', cbar_temp[j].innerHTML);
                    cbar_temp[j].innerHTML = '';
                } 
            }
        }
        jQuery("#cbar_iframe_POP2_36252").contents().find(".cbar-wdes-item-box").css({"position":"relative","height":"100%"});
        //jQuery("#cbar_iframe_POP2_36252 form").css({"position": "absolute", "top": "90%", "right": "70%"});
    }
    
    //POPUP Widget 42944 Product Page
    if (jQuery(window).width() <= 599) {  
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-section-0 .cbar-wdes-image").css({"width":"70%"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-section-1").css({"font-size":"35px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-section-2").css({"font-size":"40px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-section-3").css({"font-size":"40px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-section-4").css({"font-size":"40px","margin-top":'15px',"margin-bottom":'15px'});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-title").css({"font-size":"60px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".action.primary.tocart.is__ajax").css({"height":"90px","font-size":"35px",'max-width':"250px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-slider").css({"height":"50px","width":"50px"});
        jQuery("#cbar_iframe_POP2_42944").contents().find(".cbar-wdes-wrapper-border").css({"border":"unset","border-radius":"unset"});
        jQuery("#cbar_POP2_42944").find(".cbar-close-button").css({"width":"50px","height":"50px","padding-top":"27px","padding-right":"10px"});
    }
    
    if(cbar_recv3_widget_show == true){
        if(typeof jQuery != 'undefined'){
            //product page
            if(cbar_results[0] != null && cbar_results[0].length > 0){
                if(cbar_pagetype == 'P'){
                    cbar_temp = document.querySelectorAll('#js_widget594');
                    if (cbar_temp.length > 0){
                        cbar_temp[0].style.display = 'none';
                    }
                }
            }
        }
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-1' ,'font-weight:700;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-2' ,'font-weight:400;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-3' ,'font-weight:400;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-4' ,'font-weight:400;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-4' ,'font-weight:400;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-title' ,'font-weight:200;text-transform: uppercase !important;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-slider' ,'background: black;width: 32px;height:32px;display:flex;align-items:center;justify-content:center;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-slider-arrow' ,'height:16px',0);
    }
    
    //NEW SUBPRODUCTS WIDGET
    if(this.ruleId != 36252 && this.ruleId != 42944){
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-item-box' ,'position: relative !important:',0);
        //HIDE BROKEN IMAGES
        var cbar_sp = jQuery('.cbar-wdes-subproduct img');
        for(i=0; i< cbar_sp.length; i++){
            if(jQuery(cbar_sp[i]).attr('src') == ''){
                jQuery(cbar_sp[i]).attr('src', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Stop.svg/1024px-Stop.svg.png');
            }
        }
        //if sp length > 7 add + btn and hide rest sp and show on button click
        var cbar_items =  jQuery('#cbar_widget_'+this.ruleId+' .cbar-wdes-item-box');
        for(i=0; i< cbar_items.length; i++){
            cbar_subProd = jQuery(cbar_items[i]).find('.cbar-wdes-subproduct');
            //HIDE COLOUR IF THERE IS ONLY ONE    
            if(cbar_subProd.length == 1){
                jQuery(cbar_subProd[0]).hide();
            }
            //HIDE MORE THAN 7 SUBPRODUCTS BY DEFAULT
            if(cbar_subProd.length > 7){
                jQuery(cbar_items[i]).find('.cbar-wdes-section-1').after('<button style = "border: none; margin: 0px 0px 10px 0px; margin-left: 40%; color: #000; font-size: 20px; padding: 5px 10px; background: #ddd;"  class="bari-button">+</button>');
                for(j=7; j< cbar_subProd.length; j++){
                    jQuery(cbar_subProd[j]).hide();
                }
            }
        }
        //SHOW EXTRA SUBPRODUCTS ON BUTTON CLICK 
        var bari_btn = jQuery('.bari-button');
        jQuery(bari_btn).on('click', function(){
            var e = event||window.event;
            e.preventDefault();
            e.stopImmediatePropagation();
            cbar_tmp = jQuery(this).parent().find('.cbar-wdes-subproduct');
            for(index=0; index< cbar_tmp.length; index++){
                if(jQuery(cbar_tmp[index]).css('display') == 'none'){
                    jQuery(cbar_tmp[index]).css('display', 'block');
                }
            }
            //HIDE BUTTON
            jQuery(this).hide();
        });
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-subproduct:active' ,'box-shadow: 0px 0px 2px 2px #a5a5a5; border-radius: 100%;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-subproduct' ,'width:30px;height:30px;margin:1px;',0);
        // cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-1' ,'max-width:75%;margin-inline:auto;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-1' ,'min-height: 40px;direction: rtl; margin-inline:auto;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-1 .swatch-more' ,'width:23px;height:23px;display:flex;align-items:center;justify-content:center;margin-top:1.5px;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-1 .swatch-more span' ,'z-index:99999999 !important;font-size: 1.5rem;font-family: "kiko","idus";font-style: normal;font-weight: 600;',0);
        cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .bari-content-items-wrap' ,'position:relative;',0);
        // cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-2 .cbar-wdes-subproduct' ,'width:38px;height:38px;margin-bottom:2px;',0);
        // cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-2' ,'position: absolute;left: 0;right: 0;bottom:0px;display: flex;justify-content: flex-start;flex-flow: row wrap;align-items: center;align-content: flex-start;overflow-y: auto;padding: 1rem 1.3rem 3rem;margin: auto;max-height:178px;width: calc(100% - 2.5rem);background: #fff;animation: slideUp .5s cubic-bezier(.1,.9,0,1);box-shadow: 1px 1px 5px 5px #bfbfbf;border-radius: 10px;',0);
        // cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-section-2.hide' ,'display:none;',0);
        for(var j=0; j<this.products.length;j++){
            if(typeof jQuery != "undefined") {
            //product-item-addtocart
            cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-item' ,'height:unset;',0);
            cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-item-box .product-item-addtocart.product_addtocart' ,'direction: rtl; display:flex;align-items:center;justify-content:center;width:100%;',0);
            cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget_'+this.ruleId+' .cbar-wdes-item-box .action.primary.tocart.is__ajax' ,'max-width:80%;',0);
            }
        }
    }
}   

//Add to cart
var cbar_form_key = "";
// scrape form key for add to cart functionality
cbar_waitforelement("input[name='form_key']", function (elements) {
    var cbar_temp = cbar_Sizzle("input[name='form_key']");
    if (cbar_temp.length > 0) {
        cbar_form_key = cbar_temp[0].value;
    }
});
  
cbar_sendReq = function (productId, event) {
   
   //STOP REDIRECT ON BUTTON CLICK
   var e = event||window.event;
   e.stopImmediatePropagation();
   
    return jQuery.ajax({
        
        url: 'https://www.kikocosmetics.co.il/checkout/cart/add/product/'+ productId +'/',
        type: 'post',
        data: { "product": productId, "form_key": cbar_form_key },
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
            'x-kl-ajax-request': 'Ajax_Request'
        },
        dataType: 'json',
        success: function (res) {

            if (res.success) {
                
                //SHOW SUCCESS MESSAGE
                idus.setMessages(jQuery.mage.__('Product successfully added to cart'), 'success cart-add');

            }
        }
    });
}

//popup add to cart functionality 
cbar_popup_sendReq = function (productId, event,ruleId) {
   
   //STOP REDIRECT ON BUTTON CLICK
   var e = event||window.event;
   e.stopImmediatePropagation();
   
    return jQuery.ajax({
        
        url: 'https://www.kikocosmetics.co.il/checkout/cart/add/product/'+ productId +'/',
        type: 'post',
        data: { "product": productId, "form_key": cbar_form_key },
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
            'x-kl-ajax-request': 'Ajax_Request'
        },
        dataType: 'json',
        success: function (res) {

            if (res.success) {
                
                //SHOW SUCCESS MESSAGE
                idus.setMessages(jQuery.mage.__('Product successfully added to cart'), 'success cart-add');
                cbar_close_popup2(ruleId, 'POP2');

            }
        }
    });
}

func = function(){
    var e = event||window.event;
    e.preventDefault();
    e.stopImmediatePropagation();
}

// Initialized the slider/carousel on widgets
cbar_init_slick_slider = function(selector) {
	slidesToShow = 4;
	if (cbar_pagetype == "Sc") {
		slidesToShow = 5;
	}
	rslidesToShow = 4;

	jQuery(selector).slick({
		rtl: true,
		focusOnSelect: false,
		infinite: true,
		//lazyLoad: 'progressive',
		autoplay: false,
		autoplaySpeed: 5000,
		fade: false,
		dots: false,
		arrows: true,
		slidesToShow: slidesToShow,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1366,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 979,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: cbar_widget_show2 ? 3 : 2,
					slidesToScroll: 1
				}
			},
		]
	});
}

cbar_init_owl = function(selector, widget_no) {
	
	responsiveItems = {0: {items: 2},479: {items: 3}, 768: {items: 3},992: {items: 4}};
	
	
	
	jQuery(selector).owlCarousel({
		loop:false,
		dots:false,
		nav: true,
		slideBy:4,
		rtl: true,
		navText:['<button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous</button>','<button class="slick-next slick-arrow" aria-label="Next" type="button">Next</button>'],
		
		
		responsive : responsiveItems,
		onInitialized :afterInit,
	
	});
	
	function afterInit(event)
	{
		jQuery(selector+" .owl-prev, "+selector+" .owl-next").css({'background':'transparent','padding':'15px 3px 10px','margin':'0','opacity':'1','border-radius':'0'});
		jQuery(selector+" .owl-prev").css({'position':'absolute','top':'40%','left':'0'});
		jQuery(selector+" .owl-next").css({'position':'absolute','top':'40%','right':'0'});
		
		
	}
	
	
}

cbar_ga_eventtrack = function(link, category, action, opt_label) {
	if (typeof(ga) != 'undefined') {
		var tracker = ga.getAll()[0].get('name') + '.send';
		ga(tracker,'event', category, action, opt_label);
		return;
	} else if (typeof(_gaq) != 'undefined') {
		_gaq.push(['_trackEvent', category, action, opt_label]);
		return;
	}
}


// Reset CART on new session
var cbar_pagev = parseInt(cbar_readCookie('cbar_sess_pv'));
if (isNaN(cbar_pagev)) {
    cbar_completed = function() {
        cbar_empty_cart();
    }
}


// Home page scraping
if (document.location.pathname == '/') {
    cbar_home = true;
}


// Category page scraping . Scrape for cid and cname(optional)
cbar_temp = cbar_Sizzle('body.catalog-category-view');
if (cbar_temp.length > 0) {
	cbar_temp = cbar_Sizzle('.product-items [data-role="tocart-form"]');
	if (cbar_temp.length) {
		cbar_temp = cbar_temp[0].getAttribute('data-product-sku');
        if (cbar_temp.length) {
            cbar_pid2cid = cbar_temp.toLowerCase();
        }
	}
}


// Product page scraping
cbar_temp = cbar_Sizzle('body.catalog-product-view');
if (cbar_temp.length > 0) {
    //pid
    cbar_temp = cbar_Sizzle('div.product-page-sku');
    if (cbar_temp.length > 0) {
        cbar_pid = cbar_temp[0].innerHTML.toLowerCase().replace(/^\s+|\s+$/g, '');
    }
}


//Search page scraping
if ((cbar_url.toLowerCase().search('/catalogsearch/result') > -1) && (cbar_url.toLowerCase().search('q=') > -1)) {
    cbar_search = cbar_gup('q'); //scrape the search keyword. generally from url parameter
}

//Personalization recommendation page scraping
cbar_4U     = false;
if(cbar_url.toLowerCase().search('/just-for-you') > -1 ){
   
   cbar_4U     = true;
   cbar_flow = "4U0:1-1,1-32,5.9,12,8,19;4U1:1-1,4-8,0,4U2:1,1-10,3;";
}


//we only want this to run on known pages
if (cbar_home || cbar_pid2cid || cbar_pid || cbar_search || cbar_4U) {
    cbar_check_cart = function () {
        var key = localStorage.getItem("mage-cache-storage");
        if (key == null) return false;
        else key = JSON.parse(key);
        try {
            var count = 0;
            if (key.cart) {
                for (var i = 0; i < key.cart.items.length; i++) {
                    count += key.cart.items[i].qty;
                }
            }
            return count;
        } catch {
            return false;
        }
    }
}


// This function scrapes the cart info from mage-cache-storage
cbar_scrape_ajax_cart = function() {
    if (document.location.pathname.toLowerCase() == "/checkout/cart/") {
        cbar_scrape_cart();
    } else {
        var key = localStorage.getItem("mage-cache-storage");
        if (key == null) return false;
        else key = JSON.parse(key);

        cbar_pur_pids = [];
        cbar_pur_qtys = [];

        if (key.cart) {
            for (var i = 0; i < key.cart.items.length; i++) {
                cbar_pur_pids.push(key.cart.items[i].product_sku.toLowerCase());
                cbar_pur_qtys.push(key.cart.items[i].qty);
            }
        } 
    }
}

// This function scrapes the cart info from cart page table added as fallback
// for this site because on editing any cart item the mage-chche-storage gets removed
cbar_scrape_cart = function () {
    cbar_pur_pids = [];
    cbar_pur_qtys = [];

    cbar_temp = cbar_Sizzle("#shopping-cart .product-cart:not(.pre_init) .item-sku");
    cbar_temp2 = cbar_Sizzle("#shopping-cart .product-cart:not(.pre_init) select.item-qty");
    if (cbar_temp.length && cbar_temp2.length && cbar_temp.length == cbar_temp2.length) {
        for (var i = 0; i < cbar_temp.length; i++) {
            if (cbar_temp[i].style.display != "none") {
                tmp = cbar_temp[i].textContent.replace(/^\s+|\s+$/g, '').toLowerCase();
                if (tmp) {
                    cbar_pur_pids.push(tmp);
                    cbar_pur_qtys.push(cbar_temp2[i].value);
                }
            }
        }
    }
}


// Shopping Cart scraping.
if (document.location.pathname.toLowerCase() == "/checkout/cart/" || document.location.pathname.toLowerCase() == "/checkout/cart") {

    //cbar_pur_mode    = 1;    //Turn this on when sending items list by product names, instead of product ids (recommended)

    cbar_is_pur = 1;

    cbar_scrape_cart(); // we just call this function to set the cart variable.

    //coupon code handling...
    cbar_temp = cbar_Sizzle('input[name="coupon_code"]');
    if (cbar_temp.length > 0) {
        cbar_cou_input = cbar_temp[0];
    }

} //end shopping cart



// scrape first name token from checkout page
if(cbar_url.toLowerCase().search('/checkout/') > -1 && cbar_url.toLowerCase().search('/checkout/cart') < 0 && cbar_url.toLowerCase().search('checkout/onepage/success') < 0){
    
    cbar_temp1= cbar_Sizzle(".mini-wrapper.mini-customer.loggedin");
    cbar_temp2 = cbar_Sizzle(".customer-welcome .customer-name.action span.text");
    
        if(cbar_temp1.length> 0 && cbar_temp1[0].style.display != "none"){
            if(cbar_temp2.length>0 && typeof cbar_temp2[0].innerHTML != "undefined"){
                cbar_userinfo['first_name']= cbar_temp2[0].innerHTML.split(",").pop().trim();
            }
            
            
            cbar_late_update('uinf[first_name]',function() {
    		var cbar_temp = cbar_Sizzle(".customer-welcome .customer-name.action span.text");
    		if(cbar_temp.length > 0)
    		{
    			return cbar_temp[0].innerHTML.split(",").pop().trim();
    		}
    		else
    		{
    			return false;
    		}
    		
    	},false);
    }
    
    else{
        cbar_late_update('uinf[first_name]',function() {
    		var cbar_temp = cbar_Sizzle(".shipping_info .firstname input[name='firstname']");
    		if(cbar_temp.length > 0)
    		{
    			return cbar_temp[0].value.trim();
    		}
    		else
    		{
    			return false;
    		}
    		
    	},false);   
    }
	
	//coupon code handling...
    cbar_temp = cbar_Sizzle('input[name="coupon_code"]');
    if (cbar_temp.length > 0) {
        cbar_cou_input = cbar_temp[0];
    }
}


//coupon code callbacks

// ONLY USE WHEN THERE IS PAGE REFRESH IN COUPON SUBMISSION
cbar_before_cou_inj = function (input){
	
	//If you want to perform any action before applying coupon like open the toggle panel you can write here.  
     
   
	//BELOW CODE ONLY USE WHEN THERE IS PAGE REFRESH IN COUPON SUBMISSION
	
    /* 
	
		//to avoid infinite loop when injecting coupon causes page refresh	
	
		var coupon_injected = cbar_readCookie('cbar_cou_inj' );
		if ( (coupon_injected==null) || (coupon_injected=="false") ) { 
			cbar_createCookie('cbar_cou_inj',true );
			return true;
		}
		else {
			cbar_createCookie('cbar_cou_inj',false );
			return false; // don't inject
		} 
	
	*/

}


cbar_after_cou_inj = function(input) {
    //window.onbeforeunload=null;  // prevent leaving page events by the coupon apply page refresh (use only when coupon refreshes page)
    tmp = cbar_Sizzle('button.action.apply.primary');
    if (tmp.length > 0) {
        tmp[0].click();
    }
}
//end coupon code callbacks


// email

// checkout page
cbar_waitforelement("input#shipping_email",function(elements){
	if(elements.length) {
		cbar_optin_listen_input ('em', elements[0], ['general_optin'],[], 'Checkout page email input',
		function (){
			cbar_temp1 = cbar_Sizzle("input#checkout-newsletter");
			if(cbar_temp1.length > 0){
				cbar_optin_listen_checkbox ('general_optin', cbar_temp1[0], "Checkout page checkbox ", true); 
			}
		}); 
	}
});


// newsletter email input
cbar_temp = cbar_Sizzle(".idus-newsletter .idus-newsletter-field.field.email input[name='email']");
if(cbar_temp.length > 0) {
cbar_optin_listen_input ('em', cbar_temp[0], ['general_optin'],[], 'Footer newsletter email input',
function (){
	cbar_temp1 = cbar_Sizzle(".idus-newsletter .idus-newsletter-confirm.field input[name='confirm']");
	if(cbar_temp1.length > 0){
		cbar_optin_listen_checkbox ('general_optin', cbar_temp1[0], "Footer newsletter checkbox ", true); 
	}
}); 
}

// login popup only updates email. not opt in status
cbar_waitforelement("input#email-login",function(elements){
	if(elements.length) {
	    cbar_optin_listen_input ('em', elements[0], ['general_optin'],[], 'Login email box'); 
	}
});

// register popup
cbar_waitforelement("input#register_email_address",function(elements){
	if(elements.length) {
		cbar_optin_listen_input ('em', elements[0], ['general_optin'],[], 'Register Popup email input',
		function (){
			cbar_temp1 = cbar_Sizzle("input#is_subscribed");
			if(cbar_temp1.length > 0){
				cbar_optin_listen_checkbox ('general_optin', cbar_temp1[0], "Register popup checkbox ", true); 
			}
		}); 
	}
});


//end email


// Thank You Page scraping. (possible only after purchase is made)
if (cbar_url.search('/success') > -1) {
    cbar_is_pur = 1;
    cbar_pur_com = true; //actual buy took place
} // end thank you


// Widgets Begin

//common widget variables
cbar_w_title_len	= 50;	//max length of product titles displayed on widget.

var cbar_form_key = cbar_readCookie('form_key');

//added for media queries
cbar_temp = document.getElementById('cbar_mq_css');
if (cbar_temp) {
	cbar_temp.parentNode.removeChild(cbar_temp);
}
cbar_mq_css = (function(id) {
	// Create the <style> tag
	var style = document.createElement("style");

	// Add a media (and/or media query) here if you'd like!
	// style.setAttribute("media", "screen")
	//style.setAttribute("media", "@media only screen and (max-width : 1024px)")
	
	style.setAttribute('id',id);
	//style.setAttribute("media", media_query)

	// WebKit hack :(
	style.appendChild(document.createTextNode(""));

	// Add the <style> element to the page
	document.head.appendChild(style);
	
	return style.sheet;
})('cbar_mq_css');

cbar_mq_addCSSRule = function(sheet, selector, rules, index) {
	if(typeof index=='undefined')index=0;
	try {
		if(sheet.insertRule) {
			sheet.insertRule(selector + "{" + rules + "}", index);
		} else {
			sheet.addRule(selector, rules, index);
		}
	} catch(e) {
		if(window.console) console.log('Bari: Failed to add CSS');
		//alert("Failed"+ e.message);
	}
}
cbar_mq_addCSSRule(cbar_mq_css,'@media only screen and (max-width: 1024px) {.cbar-slider.idus-slider.is__dynamic:not(.is__vertical) .slick-arrow', 'opacity: 1;}');
/*
 * This function is for generating a carousel widget HTML dynamically based on widget index
 * @param index (integer) - The id of widget 0, 1, 2...
 * @param cbar_ev_src (string) - The source page Home, Category, Product...
 * @param cbar_page_class (string) - widget class bari-widget-h, bari-widget-p...
 */
function cbar_generate_widget_html(index, cbar_ev_src, cbar_page_class) {
    
    
    //RESPONSIVE BADGE
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget'+index+' .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 4px !important;}');
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget'+index+' .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.8rem !important; font-weight: 500 !important; padding: 0.4rem 0.2rem !important;}');

    
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget'+index+' .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 5px !important;}');
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget'+index+' .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.9rem !important; font-weight: 600 !important; padding: 0.3rem 0.3rem !important;}');
      
    
    //widget head
	cbar_w_template_head[index] = '<div id="cbar_widget'+index+'" style="' + window['cbar_w'+index+'_wrap_s'] + '" class="idus-slider-wrapper"><div class="container_spacing"><div id="cbar_w'+index+'_header_s" style="' + window['cbar_w'+index+'_header_s'] + '" class="idus-slider-content right_c"><div class="idus-slider-content-title" dir="ltr"><span class="html"><p>%group_title%</p></span></div></div>' +
		'<div id="cbar_w'+index+'_items_s" style="' + window['cbar_w'+index+'_items_s'] + '" class="idus-slider is__dynamic">';

	cbar_w_item_template[index] = '<div id="cbar_w'+index+'_%t%_item_s" style="'+window['cbar_w'+index+'_item_s']+'" class="idus-slider-slide padding_hf_t padding_hf_b padding_r padding_l">'+
		'<div class="idus-slider-slide-inner position_r">'+
			'<div id="product_carousel_%xtr2%" data-id="%xtr2%" data-productid="%xtr2%" class="product-item" data-listview="" page="">'+
				'<form data-role="tocart-form" product_id="%xtr2%" data-product-sku="%pid%" action="https://www.kikocosmetics.co.il/checkout/cart/add/uenc/aHR0cHM6Ly93d3cua2lrb2Nvc21ldGljcy5jby5pbC8%2C/product/%xtr2%/" method="post" product_outofstock="false" novalidate="novalidate">'+
					'<input type="hidden" name="product" value="%xtr2%">'+
					'<input type="hidden" name="uenc" value="%xtr4%">'+
					'<input name="form_key" type="hidden" value="'+cbar_form_key+'">'+
					'<div class="product details product-item-details_%xtr2%">'+
						'<div class="prod_image">'+
						    //'<div class="cbar-item-badge">%xtxt%</div>'+
						    '<div  id="cbar_w'+index+'_%t%_discount_wrapper" class="cbar-discount-wrapper" style=" display:none; position:absolute;left:0;"><span dir="ltr" class="cbar-discount-badge" style="font-size: 16px; font-weight: 700; color: #fff; background-color: #000; padding: 0.2rem 0.5rem;">%xtxt%</span></div>'+
							'<div class="product-item-photo-shop">'+
								'<a id="cbar_w'+index+'_%t%_item_a_s" style="'+window['cbar_w'+index+'_item_a_s']+'" onclick="cbar_ga_eventtrack(this, \'Barilliance\', \''+cbar_ev_src+'\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%" class="action product_link" tabindex="0" title="%title%">'+
									'<span class="product-item-image product-image-container">'+
										'<span class="product-image-wrapper">'+
											'<img id="cbar_w'+index+'_%t%_item_img_s" style="'+window['cbar_w'+index+'_item_img_s']+'"  src="%picture%" class="product-image-photo" alt="%title%">'+
										'</span>'+
									'</span>'+
								'</a>'+
							'</div>'+
							'<div class="product-mylist-actions mylist-wishlist">'+
								'<a aria-controls="list_status_%xtr2%" class="mylist_action towishlist wishlist init" action="add" action-switch="remove" href="javascript:void(0);" mylist="wishlist" list_name_default="General" product_id="%xtr2%" product_data="{&quot;name&quot;:&quot;%title%&quot;,&quot;image&quot;:&quot;%picture%&quot;,&quot;url&quot;:&quot;%url%&quot;}" style="" aria-label="הוסף למועדפים" tabindex="0">'+
									'<span aria-live="polite" id="list_status_%xtr2%" class="text" switch="Remove from wishlist" text="Add to wishlist">Add to wishlist</span>'+
								'</a>'+
								'<ul class="lists" style="display: none;"><li>General</li></ul>'+
							'</div>'+
							'%live_notifications%'+
						'</div>'+
						'<div id="cbar_w'+index+'_%t%_item_perc_pur_s" style="'+window['cbar_w'+index+'_item_perc_pur_s']+'">%perc_purchased%% buy:</div>'+ // % purchased this item
						'<div id="cbar_w'+index+'_%t%_item_perc_pur2_s" style="'+window['cbar_w'+index+'_item_perc_pur2_s']+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
						'<div class="prod_content" style="min-height:0px;flex-grow:0;">'+
							'<div id="cbar_w'+index+'_%t%_item_title_s" style="'+window['cbar_w'+index+'_item_title_s']+'" dir="ltr" class="product-carousel-name product-name">%title%</div>'+
							'<div id="cbar_w'+index+'_%t%_item_xtr3_s" style="'+window['cbar_w'+index+'_item_xtr3_s']+'" dir="rtl" class="product-carousel-short_description product-short_description">'+
								'<span id="cbar_w'+index+'_%t%_item_xtr3_in_s" style="'+window['cbar_w'+index+'_item_xtr3_in_s']+'">%xtr3%</span>'+
							'</div>'+
						'</div>'+
						'<div class="prod_bottom" style="margin-top:0px;">'+
							'<div style="border: 0;" class="tocart_box">'+
								'<div style="display: none;" class="product-item-addtocart product_addtocart" product_outofstock="false">'+
									'<button data-id="%xtr2%" type="submit" title="הוספה לסל" data-title="הוספה לסל" data-adding="מוסיף..." data-success="נוסף" class="action primary tocart is__ajax" tabindex="0">'+
										'<span>הוספה לסל</span>'+
									'</button>'+
								'</div>'+
								// '<div id="cbar_w'+index+'_%t%_item_oos_s" style="'+window['cbar_w'+index+'_item_oos_s']+'" dir="rtl" class="product-carousel-stampa_outofstock product_stampa_outofstock"><span id="cbar_w'+index+'_%t%_item_oos_in_s" style="'+window['cbar_w'+index+'_item_oos_in_s']+'">%xtr3%</span></div>'+
								'<div style="width: 100%; border: 0;" class="product_carousel_price product_price">'+
									'<div class="price-box has_special_price price-final_price" data-role="priceBox" data-product-id="%xtr2%" data-price-box="product-id-%xtr2%">'+
										'<span id="cbar_w'+index+'_%t%_item_price_s" style="'+window['cbar_w'+index+'_item_price_s']+'" class="normal-price">'+
											'<span class="price-container price-final_price tax weee">'+
												//'<span class="price-label">נמוך כמו</span>'+
												'<span id="product-price-%xtr2%" data-price-amount="%price_clean%" data-price-type="finalPrice" class="price-wrapper "><span id="cbar_w'+index+'_%t%_item_price_in_s" style="'+window['cbar_w'+index+'_item_price_in_s']+'" dir="ltr" class="price">%price%</span></span>'+
											'</span>'+
										'</span>'+
										'<span id="cbar_w'+index+'_%t%_item_xtr1_s" style="'+window['cbar_w'+index+'_item_xtr1_s']+'" class="old-price sly-old-price no-display">'+
											'<span class="price-container price-final_price tax weee">'+
												'<span class="price-label">מחיר רגיל</span>'+
												'<span id="old-price-%xtr2%" data-price-amount="%xtr1%" data-price-type="oldPrice" class="price-wrapper "><span id="cbar_w'+index+'_%t%_item_xtr1_in_s" style="'+window['cbar_w'+index+'_item_xtr1_in_s']+'" dir="ltr" class="price">%xtr1%</span></span>'+
											'</span>'+
										'</span>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</form>'+
			'</div>'+
		'</div>'+
	'</div>';

	//widget footer
	cbar_w_template_bottom[index] = '</div></div></div>';
}

//New tab sliding (Recently Viewed) widget for all barilliance known pages.
function cbar_tab_sliding_widget(cbar_ev_src) {
	
	widget_wrap = 'position:fixed;white-space: nowrap;Bottom: 15%;margin-left: 10px;z-index: 12301;left: calc(100% - 10px);max-width: 90vw;-webkit-transition: -webkit-transform 0.5s;transition: -webkit-transform 0.5s;transition: transform 0.5s;transition: transform 0.5s, -webkit-transform 0.5s;background: #000000;padding: 10px 0 10px 0;border-radius: 10px 0 0 10px;';
	
	heading ='position: absolute;-webkit-transform: translate(-50%, -50%) rotate(-90deg);transform: translate(-50%, -50%) rotate(-90deg);left: -13px;top: 50%;padding: 0 18px;background: #000000;color: white;font-size: 14px;line-height: 26px;letter-spacing: 2px;text-align: center;cursor: pointer;';
	
	var cbar_body_element = cbar_Sizzle('body');
	if(cbar_body_element.length > 0) {
		
		var cbar_tmp_html = '<div id="bariSlidingWidgetContainer" style="display:none;'+ widget_wrap +'">'+
								'<div id="bari-sliding-handle" class="bari-sliding-handle" style="'+ heading +'"><div class="bari-heading-text" style="overflow: hidden;max-width: 150px;text-overflow: ellipsis;">Recently Viewed</div></div>'+
							'</div>';
		
		var cbar_new_element = document.createElement('div');
		cbar_new_element.setAttribute('id', 'barilliance-Recently-viewed-widget');
		cbar_new_element.innerHTML = cbar_tmp_html;
		
		cbar_body_element[0].appendChild(cbar_new_element);
		
	}
	
	
    cbar_mq_addCSSRule(cbar_mq_css,'.contentSlide', '-webkit-transform: translate(calc(-100% + 20px), 0);');
	
	
	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('#bariSlidingWidgetContainer');
	if (cbar_temp.length>0){
		cbar_w_anchor[2]=cbar_temp[0];
	}
	
	cbar_w_insert_where[2] 	= 2; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	
	cbar_numicons3		 	= 5; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)	
	
	
	
	// styles
	cbar_w2_wrap_s				= '';
	cbar_w2_header_s			= '';
	cbar_w2_items_s				= 'max-width: calc(100vw - 30px);overflow-x: auto;overflow-y: hidden;padding-right: 30px;margin-left: 10px;display: flex;white-space: nowrap;';
	cbar_w2_item_s				= 'width: 140px;margin:0 7px;';
	cbar_w2_item_a_s			= '';
	cbar_w2_item_img_s			= 'margin-bottom:10px;';
	cbar_w2_item_perc_pur_s		= '';
	cbar_w2_item_perc_pur2_s	= '';
	cbar_w2_item_title_s		= 'max-width: 130px;margin: 0 auto;color: #fff;padding: 0px 0px 3px;font-size: 12px;font-weight: 400;line-height: 1;text-align: center;overflow: hidden;text-overflow: ellipsis;direction:ltr;';
	cbar_w2_item_xtr1_s			= 'font-size: 12px;color: #ccc;text-align: center;font-weight: 400;direction:ltr;text-decoration: line-through;margin-left: 5px;';
	cbar_w2_item_xtr1_in_s		= '';
	cbar_w2_item_price_s		= 'font-size: 12px;color: #ccc;text-align: center;font-weight: 400;direction:ltr;';
	cbar_w2_item_price_in_s		= '';
	cbar_w2_item_xtr2_s			= '';
	cbar_w2_item_xtr2_in_s		= '';
	cbar_w2_item_xtr3_s			= '';
	cbar_w2_item_xtr3_in_s		= '';
	
	
	//html	
	
	
	//widget head
	cbar_w_template_head[2]='<div  id="cbar_widget2" class="bari-widget" style="'+cbar_w2_wrap_s+'">'+
	'<div id="cbar_w2_items_s" style="'+cbar_w2_items_s+'">';

	//widget items
	cbar_w_item_template[2]='<div id="cbar_w2_%t%_item_s" style="'+cbar_w2_item_s+'">'+
	        '<a id="cbar_w2_%t%_item_a_s" style="'+cbar_w2_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \''+cbar_ev_src+'\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%">'+
	        '<img id="cbar_w2_%t%_item_img_s" style="'+cbar_w2_item_img_s+'"  src="%picture%">'+
			'%live_notifications%'+
	        '<div  id="cbar_w2_%t%_item_perc_pur_s"  style="display:none; '+cbar_w2_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
	        '<div  id="cbar_w2_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w2_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
	        '<div  id="cbar_w2_%t%_item_title_s"  style="'+cbar_w2_item_title_s+'">%title%</div></a>'+
	        '<div class="cbar-item-prices-wrapper" style="text-align: center;display: flex;justify-content: center;">'+
	            '<div  id="cbar_w2_%t%_item_xtr1_s"  style="display:none; '+cbar_w2_item_xtr1_s+'"><span id="cbar_w2_%t%_item_xtr1_in_s" style="'+cbar_w2_item_xtr1_in_s+'">%xtr1%</span></div>'+
	            '<div  id="cbar_w2_%t%_item_price_s"  class= "relatedprice" style="'+cbar_w2_item_price_s+'"><span id="cbar_w2_%t%_item_price_in_s" style="'+cbar_w2_item_price_in_s+'">%price%</span></div>'+
	        '</div>'+
	        '<div  id="cbar_w2_%t%_item_xtr2_s"  style=" display:none;'+cbar_w2_item_xtr2_s+'"><span id="cbar_w2_%t%_item_xtr2_in_s" style="'+cbar_w2_item_xtr2_in_s+'">%xtr2%</span></div>'+
	        //'<div  id="cbar_w2_%t%_item_xtr3_s"  style="display:none; '+cbar_w2_item_xtr3_s+'"><span id="cbar_w2_%t%_item_xtr3_in_s"  style="'+cbar_w2_item_xtr3_in_s+'">%xtr3%</span></div>'+
	        '</div>';
	
	//widget footer
	cbar_w_template_bottom[2]='</div></div>';
	
	
	
}

//for multiline widgets use:
//cbar_w_linebreak_template[0]='<br style="clear:both"/>';
//cbar_w_iconsperline[0]=4;


load_owl_js_css = function(){

   loadjscssfile('https://d2iq7kcocq4ytp.cloudfront.net/owlcarousel2-2.2.0/owl.carousel.min.js','js');
	loadjscssfile('https://d2iq7kcocq4ytp.cloudfront.net/owlcarousel2-2.2.0/assets/owl.carousel.min.css','css');
	loadjscssfile('https://d2iq7kcocq4ytp.cloudfront.net/owlcarousel2-2.2.0/assets/owl.theme.default.min.css','css'); 
}

//Home Page Widget
if (cbar_home) {
	//Scrape anchor element, around which the widget displays itself on the page
	/* cbar_temp = cbar_Sizzle('.idus-slider-id_8');*/
	/* cbar_temp = cbar_Sizzle('div[data-banner-id="11"]'); */
	cbar_temp = cbar_Sizzle('.idus-slider-id_32');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}

	cbar_w_insert_where[0] = 0;	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor	
	
	cbar_w_numshowicons[0] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)
	
	// styles
	cbar_w0_wrap_s = '';
	cbar_w0_header_s = 'text-transform: uppercase;';
	cbar_w0_items_s = 'margin: 25px;';
	cbar_w0_item_s = '';
	cbar_w0_item_a_s = '';
	cbar_w0_item_img_s = '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s = '';
	cbar_w0_item_xtr1_s = 'display:none;';
	cbar_w0_item_xtr1_in_s = '';
	cbar_w0_item_price_s = '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s = 'display:none;';
	cbar_w0_item_xtr2_in_s = '';
	cbar_w0_item_xtr3_s = 'display:none;';
	cbar_w0_item_xtr3_in_s = '';

	//html
	cbar_generate_widget_html(0, 'Home - clicked', 'bari-widget-h'); // 0 - First Widget
	
	//Second Widget
	cbar_temp = cbar_Sizzle('.idus_popup[action="idus_popup_widget_newsletter_popup"]'); //cbar_temp = cbar_Sizzle('.idus-slider-layout-custom_instagram');
	if (cbar_temp.length>0) {
		cbar_w_anchor[1] = cbar_temp[0];
	}

	cbar_w_insert_where[1] = 1;	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor	
	
	cbar_w_numshowicons[1] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons2		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)
	
	// styles
	cbar_w1_wrap_s = '';
	cbar_w1_header_s = 'text-transform: uppercase;';
	cbar_w1_items_s = 'margin: 25px;';
	cbar_w1_item_s = '';
	cbar_w1_item_a_s = '';
	cbar_w1_item_img_s = '';
	cbar_w1_item_perc_pur_s = 'display:none;';
	cbar_w1_item_perc_pur2_s = 'display:none;';
	cbar_w1_item_title_s = '';
	cbar_w1_item_xtr1_s = 'display:none;';
	cbar_w1_item_xtr1_in_s = '';
	cbar_w1_item_price_s = '';
	cbar_w1_item_price_in_s = '';
	cbar_w1_item_xtr2_s = 'display:none;';
	cbar_w1_item_xtr2_in_s = '';
	cbar_w1_item_xtr3_s = 'display:none;';
	cbar_w1_item_xtr3_in_s = '';

	//html
	cbar_generate_widget_html(1, 'Home - clicked', 'bari-widget-h'); // 1 - Second Widget
	
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('Home - clicked');
	}
	
}

// Category Page Widget
if ((cbar_cid || cbar_pid2cid) && !cbar_pid) {
	
	load_owl_js_css();

	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.column.main');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 2; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[0] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)
	
	cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget0 .owl-theme .owl-prev .slick-prev.slick-arrow', 'left:0 !important;');
	cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget0 .owl-theme .owl-next .slick-next.slick-arrow', 'right:0 !important;');
	
	// styles
	cbar_w0_wrap_s 			= 'padding-bottom: 2rem;';
	cbar_w0_header_s 		= 'text-transform: uppercase;';
	cbar_w0_items_s 		= '';
	cbar_w0_item_s 			= '';
	cbar_w0_item_a_s 		= '';
	cbar_w0_item_img_s		= '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s 	= '';
	cbar_w0_item_xtr1_s 	= 'display:none;';
	cbar_w0_item_xtr1_in_s 	= '';
	cbar_w0_item_price_s 	= '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s 	= 'display:none;';
	cbar_w0_item_xtr2_in_s 	= '';
	cbar_w0_item_xtr3_s 	= 'display:none;';
	cbar_w0_item_xtr3_in_s 	= '';


   //RESPONSIVE BADGE
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 4px !important;}');
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.8rem !important; font-weight: 500 !important; padding: 0.4rem 0.2rem !important;}');

    
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 5px !important;}');
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.9rem !important; font-weight: 600 !important; padding: 0.3rem 0.3rem !important;}');


	//html
	cbar_w_template_head[0]= '<div id="cbar_widget0" style="'+cbar_w0_wrap_s+'" class="idus-slider-wrapper"><div class="container_spacing"><div id="cbar_w0_header_s" style="'+cbar_w0_header_s+'" class="idus-slider-content right_c"><div class="idus-slider-content-title" dir="ltr"><span class="html"><p>%group_title%</p></span></div></div>' +
		'<div id="cbar_w0_items_s" class="cbar_carousel_0 owl-carousel owl-theme idus-slider is__dynamic" style="'+cbar_w0_items_s+'">';

	cbar_w_item_template[0] = '<div id="cbar_w0_%t%_item_s" style="'+cbar_w0_item_s+'" class="idus-slider-slide padding_hf_t padding_hf_b padding_r padding_l">'+
		'<div class="idus-slider-slide-inner position_r">'+
			'<div id="product_carousel_%xtr2%" data-id="%xtr2%" data-productid="%xtr2%" class="product-item" data-listview="" page="">'+
				'<form data-role="tocart-form" product_id="%xtr2%" data-product-sku="%pid%" action="https://www.kikocosmetics.co.il/checkout/cart/add/uenc/aHR0cHM6Ly93d3cua2lrb2Nvc21ldGljcy5jby5pbC8%2C/product/%xtr2%/" method="post" product_outofstock="false" novalidate="novalidate">'+
					'<input type="hidden" name="product" value="%xtr2%">'+
					'<input type="hidden" name="uenc" value="%xtr4%">'+
					'<input name="form_key" type="hidden" value="'+cbar_form_key+'">'+
					'<div class="product details product-item-details_%xtr2%">'+
						'<div class="prod_image">'+
						  		  '<div  id="cbar_w0_%t%_discount_wrapper" class="cbar-discount-wrapper" style=" display:none; position:absolute;left:0;"><span dir="ltr" class="cbar-discount-badge" style="font-size: 16px; font-weight: 700; color: #fff; background-color: #000; padding: 0.2rem 0.5rem;">%xtxt%</span></div>'+

							'<div class="product-item-photo-shop">'+
								'<a id="cbar_w0_%t%_item_a_s" style="'+cbar_w0_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \'Category\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%" class="action product_link" tabindex="0" title="%title%">'+
									'<span class="product-item-image product-image-container">'+
										'<span class="product-image-wrapper">'+
											'<img id="cbar_w0_%t%_item_img_s" style="'+cbar_w0_item_img_s+'"  src="%picture%" class="product-image-photo" alt="%title%">'+
										'</span>'+
									'</span>'+
								'</a>'+
							'</div>'+
							'<div class="product-mylist-actions mylist-wishlist">'+
								'<a aria-controls="list_status_%xtr2%" class="mylist_action towishlist wishlist init" action="add" action-switch="remove" href="javascript:void(0);" mylist="wishlist" list_name_default="General" product_id="%xtr2%" product_data="{&quot;name&quot;:&quot;%title%&quot;,&quot;image&quot;:&quot;%picture%&quot;,&quot;url&quot;:&quot;%url%&quot;}" style="" aria-label="הוסף למועדפים" tabindex="0">'+
									'<span aria-live="polite" id="list_status_%xtr2%" class="text" switch="Remove from wishlist" text="Add to wishlist">Add to wishlist</span>'+
								'</a>'+
								'<ul class="lists" style="display: none;"><li>General</li></ul>'+
							'</div>'+
							'%live_notifications%'+
						'</div>'+
						'<div id="cbar_w0_%t%_item_perc_pur_s"  style="display:none; '+cbar_w0_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
						'<div id="cbar_w0_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w0_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
						'<div class="prod_content" style="min-height:0px;flex-grow:0;">'+
							'<div id="cbar_w0_%t%_item_title_s"  style="'+cbar_w0_item_title_s+'" dir="ltr" class="product-carousel-name product-name">%title%</div>'+
							'<div id="cbar_w0_%t%_item_xtr3_s"  style="display:none; '+cbar_w0_item_xtr3_s+'" dir="rtl" class="product-carousel-short_description product-short_description">'+
								'<span id="cbar_w0_%t%_item_xtr3_in_s"  style="'+cbar_w0_item_xtr3_in_s+'">%xtr3%</span>'+
							'</div>'+
						'</div>'+
						'<div class="prod_bottom" style="margin-top:0px;">'+
							'<div style="border: 0;" class="tocart_box">'+
								'<div style="display: none;" class="product-item-addtocart product_addtocart" product_outofstock="false">'+
									'<button data-id="%xtr2%" type="submit" title="הוספה לסל" data-title="הוספה לסל" data-adding="מוסיף..." data-success="נוסף" class="action primary tocart is__ajax" tabindex="0">'+
										'<span>הוספה לסל</span>'+
									'</button>'+
								'</div>'+
								// '<div id="cbar_w'+index+'_%t%_item_oos_s" style="'+window['cbar_w'+index+'_item_oos_s']+'" dir="rtl" class="product-carousel-stampa_outofstock product_stampa_outofstock"><span id="cbar_w'+index+'_%t%_item_oos_in_s" style="'+window['cbar_w'+index+'_item_oos_in_s']+'">%xtr3%</span></div>'+
								'<div style="width: 100%; border: 0;" class="product_carousel_price product_price">'+
									'<div class="price-box has_special_price price-final_price" data-role="priceBox" data-product-id="%xtr2%" data-price-box="product-id-%xtr2%">'+
										'<span id="cbar_w0_%t%_item_price_s" style="'+cbar_w0_item_price_s+'" class="normal-price">'+
											'<span class="price-container price-final_price tax weee">'+
												//'<span class="price-label">נמוך כמו</span>'+
												'<span id="product-price-%xtr2%" data-price-amount="%price_clean%" data-price-type="finalPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_price_in_s" style="'+cbar_w0_item_price_in_s+'" dir="ltr" class="price">%price%</span></span>'+
											'</span>'+
										'</span>'+
										'<span id="cbar_w0_%t%_item_xtr1_s"  style="display:none; '+cbar_w0_item_xtr1_s+'" class="old-price sly-old-price no-display">'+
											'<span class="price-container price-final_price tax weee">'+
												'<span class="price-label">מחיר רגיל</span>'+
												'<span id="old-price-%xtr2%" data-price-amount="%xtr1%" data-price-type="oldPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_xtr1_in_s" style="'+cbar_w0_item_xtr1_in_s+'" dir="ltr" class="price">%xtr1%</span></span>'+
											'</span>'+
										'</span>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</form>'+
			'</div>'+
		'</div>'+
	'</div>';

	//widget footer
	cbar_w_template_bottom[0] = '</div></div></div>';
	
	//tab widget
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('Category - clicked');
	}
}

// Product Page Widget
if (cbar_pid && !cbar_oos_page) {
	

	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.product-bottom');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 1; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[0] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)
	
	// styles
	cbar_w0_wrap_s 			= '';
	cbar_w0_header_s 		= 'text-transform: uppercase;';
	cbar_w0_items_s 		= 'margin: 25px;';
	cbar_w0_item_s 			= '';
	cbar_w0_item_a_s 		= '';
	cbar_w0_item_img_s 		= '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s 	= '';
	cbar_w0_item_xtr1_s 	= 'display:none;';
	cbar_w0_item_xtr1_in_s 	= '';
	cbar_w0_item_price_s 	= '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s 	= 'display:none;';
	cbar_w0_item_xtr2_in_s 	= '';
	cbar_w0_item_xtr3_s 	= 'display:none;';
	cbar_w0_item_xtr3_in_s 	= '';

	//html
	cbar_generate_widget_html(0, 'Product 1 - clicked', 'bari-widget-p'); // 0 - First Widget


	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.product-bottom');
	if (cbar_temp.length>0) {
		cbar_w_anchor[1] = cbar_temp[0];
	}
	
	cbar_w_insert_where[1] 	= 1; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[1] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons2		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)
	
	// styles
	cbar_w1_wrap_s 			= '';
	cbar_w1_header_s 		= 'color: #000; text-align: center; font-weight: 200; font-size: 2.3rem; text-transform: uppercase;';
	cbar_w1_items_s 		= 'margin: 25px;';
	cbar_w1_item_s 			= '';
	cbar_w1_item_a_s 		= '';
	cbar_w1_item_img_s 		= '';
	cbar_w1_item_perc_pur_s = 'display:none;';
	cbar_w1_item_perc_pur2_s = 'display:none;';
	cbar_w1_item_title_s 	= '';
	cbar_w1_item_xtr1_s 	= 'display:none;';
	cbar_w1_item_xtr1_in_s 	= '';
	cbar_w1_item_price_s 	= '';
	cbar_w1_item_price_in_s 	= '';
	cbar_w1_item_xtr2_s 	= 'display:none;';
	cbar_w1_item_xtr2_in_s 	= '';
	cbar_w1_item_xtr3_s 	= 'display:none;';
	cbar_w1_item_xtr3_in_s 	= '';

	//html
	cbar_generate_widget_html(1, 'Product 2 - clicked', 'bari-widget-p'); // 0 - First Widget
	
	//tab widget
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('Product 3 - clicked');
	}
}

// Search Page Widget
if (cbar_search) {

	load_owl_js_css();

	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.column.main');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 2; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[0] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)	
	
	// styles
	cbar_w0_wrap_s = '';
	cbar_w0_header_s = 'text-transform: uppercase;';
	cbar_w0_items_s = '';
	cbar_w0_item_s = '';
	cbar_w0_item_a_s = '';
	cbar_w0_item_img_s = '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s = '';
	cbar_w0_item_xtr1_s = 'display:none;';
	cbar_w0_item_xtr1_in_s = '';
	cbar_w0_item_price_s = '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s = 'display:none;';
	cbar_w0_item_xtr2_in_s = '';
	cbar_w0_item_xtr3_s = 'display:none;';
	cbar_w0_item_xtr3_in_s = '';
	
	cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget0 .owl-theme .owl-prev .slick-prev.slick-arrow', 'left:0 !important;');
	cbar_mq_addCSSRule(cbar_mq_css,'#cbar_widget0 .owl-theme .owl-next .slick-next.slick-arrow', 'right:0 !important;');
	
	
	
//RESPONSIVE BADGE
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 4px !important;}');
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.8rem !important; font-weight: 500 !important; padding: 0.4rem 0.2rem !important;}');

    
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 5px !important;}');
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.9rem !important; font-weight: 600 !important; padding: 0.3rem 0.3rem !important;}');

	
	//html
	cbar_w_template_head[0]= '<div id="cbar_widget0" style="'+cbar_w0_wrap_s+'" class="idus-slider-wrapper"><div class="container_spacing"><div id="cbar_w0_header_s" style="'+cbar_w0_header_s+'" class="idus-slider-content right_c"><div class="idus-slider-content-title" dir="ltr"><span class="html"><p>%group_title%</p></span></div></div>' +
		'<div id="cbar_w0_items_s" class="cbar_carousel_0 owl-carousel owl-theme idus-slider is__dynamic" style="'+cbar_w0_items_s+'">';

	cbar_w_item_template[0] = '<div id="cbar_w0_%t%_item_s" style="'+cbar_w0_item_s+'" class="idus-slider-slide padding_hf_t padding_hf_b padding_r padding_l">'+
		'<div class="idus-slider-slide-inner position_r">'+
			'<div id="product_carousel_%xtr2%" data-id="%xtr2%" data-productid="%xtr2%" class="product-item" data-listview="" page="">'+
				'<form data-role="tocart-form" product_id="%xtr2%" data-product-sku="%pid%" action="https://www.kikocosmetics.co.il/checkout/cart/add/uenc/aHR0cHM6Ly93d3cua2lrb2Nvc21ldGljcy5jby5pbC8%2C/product/%xtr2%/" method="post" product_outofstock="false" novalidate="novalidate">'+
					'<input type="hidden" name="product" value="%xtr2%">'+
					'<input type="hidden" name="uenc" value="%xtr4%">'+
					'<input name="form_key" type="hidden" value="'+cbar_form_key+'">'+
					'<div class="product details product-item-details_%xtr2%">'+
						'<div class="prod_image">'+
	   						    '<div  id="cbar_w0_%t%_discount_wrapper" class="cbar-discount-wrapper" style=" display:none; position:absolute;left:0;"><span dir="ltr" class="cbar-discount-badge" style="font-size: 16px; font-weight: 700; color: #fff; background-color: #000; padding: 0.2rem 0.5rem;">%xtxt%</span></div>'+

							'<div class="product-item-photo-shop">'+
								'<a id="cbar_w0_%t%_item_a_s" style="'+cbar_w0_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \'Search\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%" class="action product_link" tabindex="0" title="%title%">'+
									'<span class="product-item-image product-image-container">'+
										'<span class="product-image-wrapper">'+
											'<img id="cbar_w0_%t%_item_img_s" style="'+cbar_w0_item_img_s+'"  src="%picture%" class="product-image-photo" alt="%title%">'+
										'</span>'+
									'</span>'+
								'</a>'+
							'</div>'+
							'<div class="product-mylist-actions mylist-wishlist">'+
								'<a aria-controls="list_status_%xtr2%" class="mylist_action towishlist wishlist init" action="add" action-switch="remove" href="javascript:void(0);" mylist="wishlist" list_name_default="General" product_id="%xtr2%" product_data="{&quot;name&quot;:&quot;%title%&quot;,&quot;image&quot;:&quot;%picture%&quot;,&quot;url&quot;:&quot;%url%&quot;}" style="" aria-label="הוסף למועדפים" tabindex="0">'+
									'<span aria-live="polite" id="list_status_%xtr2%" class="text" switch="Remove from wishlist" text="Add to wishlist">Add to wishlist</span>'+
								'</a>'+
								'<ul class="lists" style="display: none;"><li>General</li></ul>'+
							'</div>'+
							'%live_notifications%'+
						'</div>'+
						'<div id="cbar_w0_%t%_item_perc_pur_s"  style="display:none; '+cbar_w0_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
						'<div id="cbar_w0_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w0_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
						'<div class="prod_content" style="min-height:0px;flex-grow:0;">'+
							'<div id="cbar_w0_%t%_item_title_s"  style="'+cbar_w0_item_title_s+'" dir="ltr" class="product-carousel-name product-name">%title%</div>'+
							'<div id="cbar_w0_%t%_item_xtr3_s"  style="display:none; '+cbar_w0_item_xtr3_s+'" dir="rtl" class="product-carousel-short_description product-short_description">'+
								'<span id="cbar_w0_%t%_item_xtr3_in_s"  style="'+cbar_w0_item_xtr3_in_s+'">%xtr3%</span>'+
							'</div>'+
						'</div>'+
						'<div class="prod_bottom" style="margin-top:0px;">'+
							'<div style="border: 0;" class="tocart_box">'+
								'<div style="display: none;" class="product-item-addtocart product_addtocart" product_outofstock="false">'+
									'<button data-id="%xtr2%" type="submit" title="הוספה לסל" data-title="הוספה לסל" data-adding="מוסיף..." data-success="נוסף" class="action primary tocart is__ajax" tabindex="0">'+
										'<span>הוספה לסל</span>'+
									'</button>'+
								'</div>'+
								// '<div id="cbar_w'+index+'_%t%_item_oos_s" style="'+window['cbar_w'+index+'_item_oos_s']+'" dir="rtl" class="product-carousel-stampa_outofstock product_stampa_outofstock"><span id="cbar_w'+index+'_%t%_item_oos_in_s" style="'+window['cbar_w'+index+'_item_oos_in_s']+'">%xtr3%</span></div>'+
								'<div style="width: 100%; border: 0;" class="product_carousel_price product_price">'+
									'<div class="price-box has_special_price price-final_price" data-role="priceBox" data-product-id="%xtr2%" data-price-box="product-id-%xtr2%">'+
										'<span id="cbar_w0_%t%_item_price_s" style="'+cbar_w0_item_price_s+'" class="normal-price">'+
											'<span class="price-container price-final_price tax weee">'+
												//'<span class="price-label">נמוך כמו</span>'+
												'<span id="product-price-%xtr2%" data-price-amount="%price_clean%" data-price-type="finalPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_price_in_s" style="'+cbar_w0_item_price_in_s+'" dir="ltr" class="price">%price%</span></span>'+
											'</span>'+
										'</span>'+
										'<span id="cbar_w0_%t%_item_xtr1_s"  style="display:none; '+cbar_w0_item_xtr1_s+'" class="old-price sly-old-price no-display">'+
											'<span class="price-container price-final_price tax weee">'+
												'<span class="price-label">מחיר רגיל</span>'+
												'<span id="old-price-%xtr2%" data-price-amount="%xtr1%" data-price-type="oldPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_xtr1_in_s" style="'+cbar_w0_item_xtr1_in_s+'" dir="ltr" class="price">%xtr1%</span></span>'+
											'</span>'+
										'</span>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</form>'+
			'</div>'+
		'</div>'+
	'</div>';

	//widget footer
	cbar_w_template_bottom[0] = '</div></div></div>';
	
	//tab widget
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('Search - clicked');
	}
}

// Shopping Cart Widget
if (cbar_url.toLowerCase().search('checkout/cart')>-1) {

	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.column.main');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 2; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	cbar_w_numshowicons[0] 	= 8; 	//number of items displayed in the scroll at a time
	cbar_numicons1		 	= 8; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)	
	
	// styles
	cbar_w0_wrap_s = '';
	cbar_w0_header_s = 'color: #000; text-align: center; font-weight: 200; font-size: 2.3rem; text-transform: uppercase;';
	cbar_w0_items_s = 'margin: 25px;';
	cbar_w0_item_s = '';
	cbar_w0_item_a_s = '';
	cbar_w0_item_img_s = '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s = '';
	cbar_w0_item_xtr1_s = 'display:none;';
	cbar_w0_item_xtr1_in_s = '';
	cbar_w0_item_price_s = '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s = 'display:none;';
	cbar_w0_item_xtr2_in_s = '';
	cbar_w0_item_xtr3_s = 'display:none;';
	cbar_w0_item_xtr3_in_s = '';
	
	//html
	cbar_generate_widget_html(0, 'Cart - clicked', 'bari-widget-sc'); // 0 - First Widget
	
	//tab widget
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('Cart - clicked');
	}
}

//Just for you widget
if (cbar_4U) {
	
	

	//Scrape anchor element, around which the widget displays itself on the page
	cbar_temp = cbar_Sizzle('.column.main');
	if (cbar_temp.length>0) {
		cbar_w_anchor[0] = cbar_temp[0];
	}
	
	cbar_w_insert_where[0] 	= 2; 	//determines the position of widget with reference to anchor element possible values 0 = after the anchor, 1= before the anchor, 2= inside the anchor
	
	
	cbar_numicons1		 	= 32; 	//tells how many items are actually in the widget	(for first scrolling widget you suffix the the variable with 1, for second widget, suffix with 2)	
	
	// styles
	cbar_w0_wrap_s = '';
	cbar_w0_header_s = 'text-transform: uppercase;display:none;';
	cbar_w0_items_s = '';
	cbar_w0_item_s = '';
	cbar_w0_item_a_s = '';
	cbar_w0_item_img_s = '';
	cbar_w0_item_perc_pur_s = 'display:none;';
	cbar_w0_item_perc_pur2_s = 'display:none;';
	cbar_w0_item_title_s = '';
	cbar_w0_item_xtr1_s = 'display:none;';
	cbar_w0_item_xtr1_in_s = '';
	cbar_w0_item_price_s = '';
	cbar_w0_item_price_in_s = '';
	cbar_w0_item_xtr2_s = 'display:none;';
	cbar_w0_item_xtr2_in_s = '';
	cbar_w0_item_xtr3_s = 'display:none;';
	cbar_w0_item_xtr3_in_s = '';
	
	//RESPONSIVE BADGE
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 4px !important;}');
     cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 320px) and (max-width: 330px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.8rem !important; font-weight: 500 !important; padding: 0.4rem 0.2rem !important;}');

    
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper', 'position: absolute !important; left: 0px !important;  top: 5px !important;}');
      cbar_mq_addCSSRule(cbar_mq_css, '@media only screen and (min-width: 331px) and (max-width: 414px) {#cbar_widget0 .cbar-discount-wrapper .cbar-discount-badge', 'font-size: 0.9rem !important; font-weight: 600 !important; padding: 0.3rem 0.3rem !important;}');

	
	//html
	cbar_w_template_head[0]= '<div id="cbar_widget0" style="'+cbar_w0_wrap_s+'"><div class="container_spacing"><div id="cbar_w0_header_s" style="'+cbar_w0_header_s+'" class="idus-slider-content right_c"><div class="idus-slider-content-title" dir="ltr"><span class="html"><p>%group_title%</p></span></div></div>' +
		'<div id="cbar_w0_items_s" class="grid_4 grid_gap sp_grid_1" style="'+cbar_w0_items_s+'">';

	cbar_w_item_template[0] = '<div id="cbar_w0_%t%_item_s" style="'+cbar_w0_item_s+'">'+
		'<div>'+
			'<div id="product_carousel_%xtr2%" data-id="%xtr2%" data-productid="%xtr2%" class="product-item" data-listview="" page="">'+
				'<form data-role="tocart-form" product_id="%xtr2%" data-product-sku="%pid%" action="https://www.kikocosmetics.co.il/checkout/cart/add/uenc/aHR0cHM6Ly93d3cua2lrb2Nvc21ldGljcy5jby5pbC8%2C/product/%xtr2%/" method="post" product_outofstock="false" novalidate="novalidate">'+
					'<input type="hidden" name="product" value="%xtr2%">'+
					'<input type="hidden" name="uenc" value="%xtr4%">'+
					'<input name="form_key" type="hidden" value="'+cbar_form_key+'">'+
					'<div class="product details product-item-details_%xtr2%">'+
						'<div class="prod_image">'+
						    '<div  id="cbar_w0_%t%_discount_wrapper" class="cbar-discount-wrapper" style=" display:none; position:absolute;left:0;"><span dir="ltr" class="cbar-discount-badge" style="font-size: 16px; font-weight: 700; color: #fff; background-color: #000; padding: 0.2rem 0.5rem;">%xtxt%</span></div>'+
							'<div class="product-item-photo-shop">'+
								'<a id="cbar_w0_%t%_item_a_s" style="'+cbar_w0_item_a_s+'"  onclick="cbar_ga_eventtrack(this, \'Barilliance\', \'4U\', \'%title%\'); return cbar_click3(this, \'%url%\', %rectype%, %idx%,\'%pid%\');" href="%url%" class="action product_link" tabindex="0" title="%title%">'+
									'<span class="product-item-image product-image-container">'+
										'<span class="product-image-wrapper">'+
											'<img id="cbar_w0_%t%_item_img_s" style="'+cbar_w0_item_img_s+'"  src="%picture%" class="product-image-photo" alt="%title%">'+
										'</span>'+
									'</span>'+
								'</a>'+
							'</div>'+
							'<div class="product-mylist-actions mylist-wishlist">'+
								'<a aria-controls="list_status_%xtr2%" class="mylist_action towishlist wishlist init" action="add" action-switch="remove" href="javascript:void(0);" mylist="wishlist" list_name_default="General" product_id="%xtr2%" product_data="{&quot;name&quot;:&quot;%title%&quot;,&quot;image&quot;:&quot;%picture%&quot;,&quot;url&quot;:&quot;%url%&quot;}" style="" aria-label="הוסף למועדפים" tabindex="0">'+
									'<span aria-live="polite" id="list_status_%xtr2%" class="text" switch="Remove from wishlist" text="Add to wishlist">Add to wishlist</span>'+
								'</a>'+
								'<ul class="lists" style="display: none;"><li>General</li></ul>'+
							'</div>'+
							'%live_notifications%'+
						'</div>'+
						'<div id="cbar_w0_%t%_item_perc_pur_s"  style="display:none; '+cbar_w0_item_perc_pur_s+'">%perc_purchased%% buy:</div>'+ // % purchased this item
						'<div id="cbar_w0_%t%_item_perc_pur2_s"  style="display:none; '+cbar_w0_item_perc_pur2_s+'">%perc_purchased%% buy the item featured on this page:</div>'+ // % purchased item on this page
						'<div class="prod_content" style="min-height:0px;flex-grow:0;">'+
							'<div id="cbar_w0_%t%_item_title_s"  style="'+cbar_w0_item_title_s+'" dir="ltr" class="product-carousel-name product-name">%title%</div>'+
							'<div id="cbar_w0_%t%_item_xtr3_s"  style="display:none; '+cbar_w0_item_xtr3_s+'" dir="rtl" class="product-carousel-short_description product-short_description">'+
								'<span id="cbar_w0_%t%_item_xtr3_in_s"  style="'+cbar_w0_item_xtr3_in_s+'">%xtr3%</span>'+
							'</div>'+
						'</div>'+
						'<div class="prod_bottom" style="margin-top:0px;">'+
							'<div style="border: 0;" class="tocart_box">'+
								'<div style="display: none;" class="product-item-addtocart product_addtocart" product_outofstock="false">'+
									'<button data-id="%xtr2%" type="submit" title="הוספה לסל" data-title="הוספה לסל" data-adding="מוסיף..." data-success="נוסף" class="action primary tocart is__ajax" tabindex="0">'+
										'<span>הוספה לסל</span>'+
									'</button>'+
								'</div>'+
								// '<div id="cbar_w'+index+'_%t%_item_oos_s" style="'+window['cbar_w'+index+'_item_oos_s']+'" dir="rtl" class="product-carousel-stampa_outofstock product_stampa_outofstock"><span id="cbar_w'+index+'_%t%_item_oos_in_s" style="'+window['cbar_w'+index+'_item_oos_in_s']+'">%xtr3%</span></div>'+
								'<div style="width: 100%; border: 0;" class="product_carousel_price product_price">'+
									'<div class="price-box has_special_price price-final_price" data-role="priceBox" data-product-id="%xtr2%" data-price-box="product-id-%xtr2%">'+
										'<span id="cbar_w0_%t%_item_price_s" style="'+cbar_w0_item_price_s+'" class="normal-price">'+
											'<span class="price-container price-final_price tax weee">'+
												//'<span class="price-label">נמוך כמו</span>'+
												'<span id="product-price-%xtr2%" data-price-amount="%price_clean%" data-price-type="finalPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_price_in_s" style="'+cbar_w0_item_price_in_s+'" dir="ltr" class="price">%price%</span></span>'+
											'</span>'+
										'</span>'+
										'<span id="cbar_w0_%t%_item_xtr1_s"  style="display:none; '+cbar_w0_item_xtr1_s+'" class="old-price sly-old-price no-display">'+
											'<span class="price-container price-final_price tax weee">'+
												'<span class="price-label">מחיר רגיל</span>'+
												'<span id="old-price-%xtr2%" data-price-amount="%xtr1%" data-price-type="oldPrice" class="price-wrapper "><span id="cbar_w0_%t%_item_xtr1_in_s" style="'+cbar_w0_item_xtr1_in_s+'" dir="ltr" class="price">%xtr1%</span></span>'+
											'</span>'+
										'</span>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</form>'+
			'</div>'+
		'</div>'+
	'</div>';

	//widget footer
	cbar_w_template_bottom[0] = '</div></div></div>';
	
	//tab widget
	if(cbar_widget_tab_sliding){
		cbar_tab_sliding_widget('4U - clicked');
	}
	
}

function cbar_check_ref(domain) { // example : xxxxxxxx.com	
	var cbar_temp_ref = '';
	var regex = /([^\?]*)/;
	var result = regex.exec(document.referrer); // Remove parameters
	if ( result!=null && result[1]!=null ) 
		cbar_temp_ref = result[1];
	else
		cbar_temp_ref = document.referrer;
	if (cbar_temp_ref.search(domain) == -1) {
		cbar_ro = true;
		return 1; // Didn't come from the domain
	}
	else return 0; // Came from the domain
}						
			//Render cbar CSS
			cbarApp.styles.renderDefaultStyles();

			// check cookiedomain
			if (
				(typeof cbar_cookiedomain !== 'undefined') && 
				(document.location.host.search(cbar_cookiedomain.substring(1)) === -1)
			) {
				cbar_log_console('cbar_cookiedomain not set properly');
				return;
			}

			// trim pid to 64 bytes
			if (typeof cbar_pid === 'string') {
				cbar_pid = cbar_pid.substring(0, 63);
			}

			// if unsupported browser
			var supportedBrowsers = ['Explorer', 'Safari', 'Firefox', 'Chrome', 'Mozilla', 'Opera', 'Edge'];
			if (!supportedBrowsers.includes(cbar_BrowserDetect.browser)) {
				return; 
			}

			// Opera allowed only on android
			if ((cbar_BrowserDetect.browser === 'Opera') && (cbar_BrowserDetect.OS !== 'Android')) {
				return;
			}

			// Error detection:
			// cookiedomain setting - does cbar_uid appear more than once in cookie
			var tmp = document.cookie.split(' cbar_uid'); //space required. other cookies may inc cbar_uid
			if (tmp.length > 2) {
				cbar_elog = 'cookiedomain_problem';
			}

			// check for user cookie
			cbar_uid = cbar_readCookie('cbar_uid');
			if (typeof cbar_uid_override === 'function') {
				cbar_uid_override();
			}

			if (cbar_uid == null) {
				cbar_uid = Math.ceil(10000000000000 * Math.random());
				cbar_createCookie('cbar_uid', cbar_uid, 365);

				// check cookies support
				cbar_uid = cbar_readCookie('cbar_uid');

				if ((typeof cbar_uid === 'undefined') || cbar_uid == null || isNaN(cbar_uid)) {
					cbar_log_console('cbar cookies disabled or cookiedomain problem');
					return;
				}
			} else {
				cbar_createCookie('cbar_uid', cbar_uid, 365); // refresh
			}

			var test_modes = [
				'cbar_debug_show',
				'cbar_widget_show',
				'cbar_facebook_show',
				'cbar_shortlist_show',
				'cbar_catper_show',
				'cbar_preview_live', 
				'cbar_cp_show',
				'cbar_analytics_show',
				'cbar_emailcapture_show'
			];
			for (var ii = 0; ii < test_modes.length; ii++) {
				if (cbar_gup(test_modes[ii]) != "") {
					if (cbar_gup(test_modes[ii]) == 'true') {
						cbarApp.storage.local.create(test_modes[ii], 'true');
					} else {
						cbarApp.storage.local.remove(test_modes[ii]);
					}
				}
				// set the variable
				if (cbarApp.storage.local.get(test_modes[ii]) !== null) {
					eval(test_modes[ii] + " = " + cbarApp.storage.local.get(test_modes[ii]) + ";");					
				}
			}
			
			// for backward compatibility. its replaced by cbar_widget_show. remove in the future
			if (cbar_gup('widget_show') == "true") {
				cbar_createCookie('cbar_widget_show', 'true', 365);
			}
			if (cbar_gup('widget_show') == "false") {
				cbar_createCookie('cbar_widget_show', 'false', 365);
			}
			if (cbar_readCookie('cbar_widget_show') == 'true') {
				cbar_widget_show = true;
			}
			
			//Preview rule/s
			var temp = cbar_gup('cbar_preview_rules');
			if (temp !== '') {
				// if prev rules changed
				if (temp === 'false') {
					temp = '';
				}
				if (temp === 'true') {
					temp = '1';
				}
				cbar_createCookie('cbar_preview_rules', temp, 0);
				cbar_createCookie('cbar_preview_variation', cbar_gup('cbar_preview_variation'), 0);
				cbar_createCookie('cbar_preview_sid', cbar_gup('cbar_preview_sid'), 0);
				cbar_createCookie('cbar_preview_widgets', '', 0);
			}

			cbar_preview_rules = cbar_readCookie('cbar_preview_rules');
			cbar_preview_sid = cbar_readCookie('cbar_preview_sid');
			cbar_preview_variation = cbar_readCookie('cbar_preview_variation');
			if (cbar_preview_rules === null) {
				cbar_preview_rules = '';
				cbar_preview_sid = '';
				cbar_preview_variation = '';
			}
			
			if (cbar_preview_rules > 1) {
				var temp2 = cbar_gup('cbar_preview_widgets');
				if (temp2 !== '') {
					cbar_createCookie('cbar_preview_widgets', temp2, 0);
				}
				cbar_preview_widgets = cbar_readCookie('cbar_preview_widgets');
			}

			if (cbar_readCookie('cbar_ro') == 'true') {
				cbar_ro = true;
			}
			
			//Visual Editor
			var veToken = cbar_gup('cbar_ve_token');
			if (veToken !== '') {
				cbarApp.storage.session.create('cbar_ve_token', veToken);
			} else {
				veToken = cbarApp.storage.session.get('cbar_ve_token', '');
			}
			if (veToken !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/visual-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/visual-editor-injector.min.js?2', 'js');
			}

			//Tooltips Editor
			var tooltipsToken = cbar_gup('cbar_tooltips_token');
			if (tooltipsToken !== '') {
				cbarApp.storage.session.create('cbar_tooltips_token', tooltipsToken);
			} else {
				tooltipsToken = cbarApp.storage.session.get('cbar_tooltips_token', '');
			}
			if (tooltipsToken !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/tooltips-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/tooltips-editor-injector.min.js?2', 'js');
			}
			
			//Element selector widget
			var token = cbar_gup('cbar_esw_token');
			if (token !== '') {
				cbarApp.storage.session.create('cbar_esw_token', token);
			} else {
				token = cbarApp.storage.session.get('cbar_esw_token', '');
			}
			if (token !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/visual-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/element-selector-widget.min.js', 'js');
			}
			
			//if there was a click on widget in the previous page view, report it
			var clk = cbarApp.storage.local.get('cp_wid_clk');
			if (clk) {
				cbar_data_params += "&CP_clk=" + encodeURIComponent(clk.w + "~" + clk.c + "~" + clk.i + ((typeof clk.r !== 'undefined') ? "~" + clk.r : ""));
				cbarApp.storage.local.create('cp_wid_clk', "");
				// write global to be able to report to google analytics by finding it
				window.cbar_cp_just_clicked = true;
			}
			
			
			if (cbarApp.noPageReload){
				cbarApp.fixReferrer = true;
				cbarApp.cleanDom();
			}
			
			// Automatic OOS - if there was a click and its not a product page report OOS page
			if (cbar_auto_oos) {
				if ((typeof cbar_pid === 'undefined') || (cbar_pid.length == 0)) {
					// not a product page
					var data = cbar_readCookie('cbar_rec_clk');
					if (data !== null) {
						if ((data.originalProductId || 0) !== 0) {
							// cbar_click3 implemented so we have original pid
							cbar_pid = cbarApp.cleanString(data.originalProductId);
							cbar_oos_page = true;
							cbar_oos = 1;
							cbarApp.storage.session.remove('cbar_rec_clk');
						}
					}
				}
			}

			if (cbar_home) {
				cbar_pagetype = "H";
			}
			if (cbar_4U) {
				cbar_pagetype = "4U";
			}
			if (cbar_other) {
				cbar_pagetype = "O";
			}
			if (cbar_pid) {
				cbar_pagetype = "P";
			}
			if ((cbar_cid || cbar_pid2cid) && !cbar_pid) { 
				cbar_pagetype = "C"; 
			}
			if (cbar_brand) {
				cbar_pagetype = "B";
			}
			if (cbar_is_pur) {
				cbar_pagetype = "Sc";
			}
			if (cbar_is_checkout) {
				cbar_pagetype = "Co";
			}
			if (cbar_pur_com) {
				cbar_pagetype = "Pu";
			}
			if (cbar_search != '') {
				cbar_pagetype = "S";
			}
			if (cbar_oos_page) {
				cbar_pagetype = "OOS";
			}
			
			//Click monitoring
			var pageviewPostData = {};
			if (cbarApp.clickMonitor.enabled === true) {
				pageviewPostData.clickMonitor = cbarApp.clickMonitor.run();
			}

			//EmailCapture debug
			if (typeof cbarApp.emailCaptureDebug.run === 'function') {
				cbarApp.emailCaptureDebug.run();
			}

			// update the server on product, home, cat or cart page
			if (
				cbar_cid || cbar_pid2cid || cbar_pid || cbar_home || cbar_brand || cbar_4U || cbar_is_pur || 
				cbar_is_checkout || cbar_search || cbar_pagetype == 'U' || cbar_pagetype == 'O' || cbar_pagetype == 'OOS'
			) {
								if (cbar_widget_show == true) {
					cbar_w_init();
				}
				
				var cbar_str = '';

				if (cbar_encode) {
					cbar_str += '&enc=' + cbar_encode;
				}
				if (cbar_c_from_p) {
					cbar_str += '&cfp=1';
				}
				if (cbar_block_bt) {
					cbar_str += '&blockbt=1';
				}
				if (cbar_is_pur) {
					if (cbar_pur_pid_add) {
						cbar_str += '&pid_add=' + encodeURIComponent(cbar_pur_pid_add);
					}
					if (cbar_pur_qty_add) {
						cbar_str += '&qty_add=' + encodeURIComponent(cbar_pur_qty_add);
					}
					if ((typeof cbar_pid !== 'undefined') && (cbar_pid.length > 0)) {
						cbar_pur_pids.push(cbar_pid);
						cbar_pur_qtys.push(cbar_qty);
					}
					if (cbar_pur_com == true) {
						cbar_str += '&pur_com=true';
					}
					if (cbar_pur_pids.length >0) {
						for (var i = 0; i < cbar_pur_pids.length; i++) {
							cbar_str += '&pid' + i + '=' + encodeURIComponent(cbar_pur_pids[i]);
							cbar_str += "&qty" + i + "=" + ((typeof cbar_pur_qtys[i] === "undefined") ? 1 : cbar_pur_qtys[i]);

							if (cbar_pur_mode == 3) {
								if (typeof cbar_pur_imgs[i] !== 'undefined') {
									cbar_str += '&img' + i + '=' + encodeURIComponent(cbar_pur_imgs[i]);
								}
								if (typeof cbar_pur_names[i] !== 'undefined') {
									cbar_str += '&name' + i + '=' + encodeURIComponent(cbar_pur_names[i]);
								}
								if (typeof cbar_pur_urls[i] !== 'undefined') {
									cbar_str += '&url' + i + '=' + encodeURIComponent(cbar_pur_urls[i]);
								}
								if (typeof cbar_pur_prices[i] !== 'undefined') {
									cbar_str += '&price' + i + '=' + encodeURIComponent(cbar_pur_prices[i]);
								}
								if (typeof cbar_pur_subttls[i] !== 'undefined') {
									cbar_str += '&subttl' + i + '=' + encodeURIComponent(cbar_pur_subttls[i]);
								}
								if (typeof cbar_pur_xtr1s[i] !== 'undefined') {
									cbar_str += '&xtr1' + i + '=' + encodeURIComponent(cbar_pur_xtr1s[i]);
								}
								if (typeof cbar_pur_xtr2s[i] !== 'undefined') {
									cbar_str += '&xtr2' + i + '=' + encodeURIComponent(cbar_pur_xtr2s[i]);
								}
								if (typeof cbar_pur_xtr3s[i] !== 'undefined') {
									cbar_str += '&xtr3' + i + '=' + encodeURIComponent(cbar_pur_xtr3s[i]);
								}
								if (typeof cbar_pur_xtr4s[i] !== 'undefined') {
									cbar_str += '&xtr4' + i + '=' + encodeURIComponent(cbar_pur_xtr4s[i]);
								}
							}
						}
					}

					cbar_str += '&pur=1&pur_mode=' + cbar_pur_mode + '&pur_add=' + cbar_pur_add;
				}

				var cbar_lvt = cbar_readCookie('cbar_lvt');
				cbar_str += '&lvt=' + cbar_lvt;
				var usertime = Math.round(cbar_date.getTime() / 1000);
				cbar_createCookie('cbar_lvt', usertime, 365);

				cbar_str += '&ut=' + usertime;

				var session_reset = false;
				if (cbar_lvt != null && (usertime - parseInt(cbar_lvt)) > 3600) {
					session_reset = true;
				}

				cbar_sess = cbar_readCookie('cbar_sess');
				if ((cbar_sess == null) || (null == cbar_readCookie('cbar_sess_pv')) ||  session_reset) {
					if (cbar_sess == null) {
						cbar_sess = 0;
					}
					cbar_sess = parseInt(cbar_sess) + 1;
					cbar_createCookie('cbar_sess', cbar_sess, 365);
				}

				cbar_str += '&ses=' + cbar_sess;

				cbar_sess_pv = parseInt(cbar_readCookie('cbar_sess_pv'));
				if (isNaN(cbar_sess_pv) || session_reset) {
					cbar_sess_pv = 1;
				}
				cbar_createCookie('cbar_sess_pv', cbar_sess_pv + 1, 0);
				cbar_str += '&spv=' + cbar_sess_pv;

				if (cbar_cat_level !== 0) {
					cbar_str += '&cl=' + cbar_cat_level;
				}

				if (cbar_cids_cur != '') {
					cbar_str += "&cids_cur=" + encodeURIComponent(cbar_cids_cur);
				}
				if (cbar_cids_p != '') {
					cbar_str += "&cids_p=" + encodeURIComponent(cbar_cids_p);
				}
				for (var c = 0; c < cbar_cats_l.length; c++) {
					cbar_str += '&cids_l' + c + '=' + encodeURIComponent(cbar_cats_l[c]);
				}
				for (var c = 0; c < cbar_cats_c.length; c++) {
					cbar_str += '&cids_c' + c + '=' + encodeURIComponent(cbar_cats_c[c]);
				}

				cbar_str += "&oos=" + cbar_oos;
				if (cbar_norecs != null) {
					cbar_str += "&norecs=" + cbar_norecs;
				}
				if (cbar_fl1 != null) {
					cbar_str += "&fl1=" + cbar_fl1;
				}
				if (cbar_md) {
					cbar_str += "&md=1";
				}
				if (cbar_ro) {
					cbar_str += "&ro=1";
				}
				if (cbarApp.isWhiteLable) {
					cbar_str += "&wl=1";
				}
				if (cbar_force_li) {
					cbar_str += "&fli=1";
				}
				if (cbar_ctr1 > 0) {
					cbar_str += "&ctr1=" + cbar_ctr1;
				}
				if (cbar_ctr2 > 0) {
					cbar_str += "&ctr2=" + cbar_ctr2;
				}
				if (cbar_ctr3 > 0) {
					cbar_str += "&ctr3=" + cbar_ctr3;
				}
				if (cbar_liX != 1) {
					cbar_str += "&liX=" + cbar_liX;
				}
				if (cbar_liP != 1) {
					cbar_str += "&liP=" + cbar_liP;
				}
				if (cbar_liL != 1) {
					cbar_str += "&liL=" + cbar_liL;
				}

				if (cbar_flow != '') {
					cbar_str +="&flow=" + cbar_flow;
				}

				if (cbar_search != '') {
					cbar_str += '&se=' + encodeURIComponent(cbar_search);
				}
				if (cbar_cname != '') {
					cbar_str += '&cname=' + encodeURIComponent(cbar_cname);
				}

				cbarShowPopup();

				if (cbar_preview_live == true ) {
					cbar_str += '&prev_li=1';
				}
				if (cbar_preview_rules > 0) {
					cbar_str += cbarGetPreviewParams();
				}

				// control group data
				var cg = cbarApp.storage.local.get('cbar_cg');
				if (cg != null) {
					cbar_data_params += cg;
				}

				cbar_rules_str = cbar_readCookie('cbar_rules');
				if (cbar_rules_str != null) {
					cbar_str += "&rul=" + cbar_rules_str;
				} else {
					cbar_rules_str = '';
				}

				cbar_cou_str = cbar_readCookie('cbar_co');
				if (cbar_cou_str != null) {
					cbar_str += "&cou=" + cbar_cou_str;
				}

				if (cbar_cou_input != '') {
					cbar_str += '&cou_inj=true';
				}
				
				cbar_str += '&ref=' + encodeURIComponent(cbarApp.getReferrer());
									
				cbar_str += "&br=" + cbar_BrowserDetect.browser + "&v=" + cbar_BrowserDetect.version + "&os=" + 
					cbar_BrowserDetect.OS;
			
				if (typeof screen.width !== 'undefined') {
					cbar_str += "&scw=" + screen.width + "&sch=" + screen.height;
				}

				if (cbar_ipuid_get) {
					cbar_str += "&ipuidget=true";
				}
				if (cbar_ipuid_save) {
					cbar_str += "&ipuidsave=true";
				}

				cbar_str += "&th=" + cbar_date.getHours();
				cbar_str += "&tm=" + cbar_date.getMinutes();
				cbar_str += "&tdw=" + cbar_date.getDay();
				cbar_str += "&tdm=" + cbar_date.getDate();

				for (var cbar_param in cbarApp.var2urlParam) {
					// dont send empty or 0 values
					if (window[cbar_param] != '') {
						cbar_str += '&' + cbarApp.var2urlParam[cbar_param] + "=" + encodeURIComponent(window[cbar_param]); 
					}
				}

				if (cbar_lnk != 5) {
					cbar_str += "&lnk=" + cbar_lnk;
				}
				if (cbar_num_widgets != 2) {
					cbar_str += "&nw=" + cbar_num_widgets;
				}
				
				if (typeof cbar_js_loaded === 'function') {
					cbar_js_loaded();
				}

				// check for custom trust message in cart page
				if (cbar_pagetype === "Sc") {
					// is there a custom message for any of the cart products
					if (cbar_pur_pids.length > 0) {
						for (var i = 0; i < cbar_pur_pids.length; i++) {
							var msg = cbar_readCookie('cbar_trust_cartmsg_' + cbar_pur_pids[i]);
							if (msg != null) {
								cbar_str += "&trustcmsg=" + encodeURIComponent(msg);
								break;
							}
						}
					}
				}

				if (typeof cbar_viewed_cnt !== 'undefined') {
					cbar_str += "&vcnt=" + cbar_viewed_cnt;
				}
				if (cbar_debug_show) {
					cbar_str += "&dbg";
				}
				
				var pageProducts = [];
				cbarGetCategoryProducts().products.forEach(function(item) {
					pageProducts.push(item.productId);
				});
				pageviewPostData.productIds = pageProducts;
				
				cbarApp.isPageviewCompleted = false;

				cbarLoadData({
					a: 'pv',
					sid: cbar_sid,
					uid: cbar_uid,
					pid: encodeURIComponent(cbar_pid),
					url: cbar_url_en,
					cm: cbar_catmode,
					pt: cbar_pagetype
				}, cbar_str + cbar_data_params + 
					'&' + cbar_any2url('attu', cbar_user_attributes) + 
					'&' + cbar_any2url('attu1', cbar_user_attribute) + 
					'&' + cbar_any2url('attrecs', cbarApp.recsAttributes) +
					'&' + cbar_any2url('attp', cbar_product_attributes) + 
					'&' + cbar_any2url('attud', cbar_del_user_attributes) + 
					'&' + cbar_any2url('attpd', cbar_del_product_attributes) + 
					'&' + cbar_any2url('uinf', cbar_userinfo),
					initAjaxCart, pageviewPostData
				);

				if (typeof cbar_e_input[0] !== 'undefined') {
					for (var ww = 0; ww < cbar_e_input.length; ww++) {
						cbar_em_listen(cbar_e_input[ww]);
					}
				}

				if (typeof cbar_e_checkbox[0] !== 'undefined') {
					if (cbar_e_checkbox[0].checked) {
						cbar_em_com(true); 
					} else {
						cbar_em_com(false); // default value
					}
					// track changes
					cbar_e_checkbox[0].addEventListener('click', function() {
						if (typeof event !== 'undefined' && typeof event.srcElement !== 'undefined') {
							cbar_em_com(event.srcElement.checked);
						} else {
							cbar_em_com(this.checked); 
						}
					}); 
				}
			}
		} catch (err) {
			setTimeout(function() { 
				cbar_log_console('cbar error on start: ' + err.message + err.stack);
			}, 8000); // allow page to finish loading before reporting
		};

		if (!cbarApp.isWhiteLable) {
			if (!cbar_quiet) {
				try { 
					window.console && console.info(
						"%cPersonalization by https://www.BARILLIANCE.com | For support email support@barilliance.com. Your site id is " + cbar_sid, 
						'color: green; font-weight: bold'
					); 
				} catch (err) {
					//NOP
				};
			}
		}
	}
	
	function cbarShowPopup() {
		if (
			document.location.href.indexOf('cbar_iframe_preview') !== -1 ||
			document.getElementById(cbarApp.previewBoxId) !== null ||
			(
				cbar_preview_rules == 0 && 
				cbar_preview_live != 'true'
			)
		) {
			return;
		}
		
		var popupWidth = 300;
		var previewMessageWrapper = document.createElement('div');
		var msg = '';
		var disableLinks = [];
		
		previewMessageWrapper.id = cbarApp.previewBoxId;
		previewMessageWrapper.className = 'cbar-preview-wrapper';
		previewMessageWrapper.style.width = popupWidth + 'px';
		previewMessageWrapper.style.left = Math.floor((window.innerWidth - popupWidth) / 2) + 'px';
		
		new cbarApp.DraggableElement({
			movable: previewMessageWrapper,
			mover: previewMessageWrapper,
			exceptionClass: 'cbar-dont-drag'
		});

		if (!cbarApp.isWhiteLable) {
			msg += "<img src='//static.barilliance.com/img/barilliance_logo_150x30_w.png'><br>";
		}

		if (cbar_preview_rules == 1) {
			msg += 'RULES PREVIEW MODE';
			disableLinks.push('cbar_preview_rules=false');
		} 
		
		if (cbar_preview_rules > 1) {
			if (cbar_preview_widgets === 'true') {
				msg += 'WIDGETS PREVIEW MODE<br/>' + 
					'<span style="font-size:60%">YOU MAY NEED TO NAVIGATE TO THE RIGHT PAGE</span><br>' + 
					'Rules: <span id="cbar-widget-preview-ids"></span>';
			} else {
				msg += 'PREVIEWING RULE ' + cbar_preview_rules + '<div class="cbar-preview-msg">' +
					'Single rule preview runs the rule action.<br> It does not require the segment to match</div> ';
			}
			disableLinks.push('cbar_preview_rules=false');
		}

		if (cbar_preview_live == true) {
			msg += "LIVE PREVIEW MODE";
		}

		msg += '<br><span class="cbar-preview-close cbar-dont-drag" onclick="location.href = \'' +
			cbar_url.replace(/cbar_preview.*/g, "") + (document.location.search ? '&' : '?') +
			disableLinks.join('&') + '\'">Click here to exit</span>';

		previewMessageWrapper.innerHTML = '<div class="cbar-preview-box">' + msg + '</div>';

		window.document.body.appendChild(previewMessageWrapper);
	}

	// call cbar_start - this must be after cbar_start definition due to FF issue
	function cbar_dom_ready() {
		if (!cbar_isReady) {
			cbar_isReady = true;
			cbar_start();
		}
	}
	
	// echo startearly code if any
	

cbar_startearly = true;

cbar_hold_execution = function() {
	if(typeof(jQuery) == "undefined") {
		return true;
	}

	return false;
}

	// end startearly code

	if (cbar_startearly) {
		cbar_start();
	} else {
		cbar_bindReady();
	}

	if (typeof cbar_scraper_start == 'function') {
		cbar_scraper_start();
	}
} catch(err) {
	if (err.name !== 'dontsend') {
		// allow page to finish loading before reporting.
		setTimeout(function() { 
			cbar_log_error('cbar error: ' + err.message, err.stack);
		}, 8000); 
	}
};
