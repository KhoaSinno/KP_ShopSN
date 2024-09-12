<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title}}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="864c5d2f-38f3-4f8c-859b-d24d7c9f0337">
    try {
        (function(w, d) {
            ! function(j, k, l, m) {
                if (j.zaraz) console.error("zaraz is loaded twice");
                else {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz._v = "5796";
                    j.zaraz.q = [];
                    j.zaraz._f = function(n) {
                        return async function() {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
                }
            }(w, d, "zarazData", "script");
            window.zaraz._p = async bv => new Promise((bw => {
                if (bv) {
                    bv.e && bv.e.forEach((bx => {
                        try {
                            const by = d.querySelector("script[nonce]"),
                                bz = by?.nonce || by?.getAttribute("nonce"),
                                bA = d.createElement("script");
                            bz && (bA.nonce = bz);
                            bA.innerHTML = bx;
                            bA.onload = () => {
                                d.head.removeChild(bA)
                            };
                            d.head.appendChild(bA)
                        } catch (bB) {
                            console.error(`Error executing script: ${bx}\n`, bB)
                        }
                    }));
                    Promise.allSettled((bv.f || []).map((bC => fetch(bC[0], bC[1]))))
                }
                bw()
            }));
            zaraz._p({
                "e": ["(function(w,d){})(window,document)"]
            });
        })(window, document)
    } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
    };
</script>