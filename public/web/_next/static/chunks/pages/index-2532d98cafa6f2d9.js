(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
    [405],
    {
        8312: function (e, t, n) {
            (window.__NEXT_P = window.__NEXT_P || []).push([
                "/",
                function () {
                    return n(4186);
                },
            ]);
        },
        4186: function (e, t, n) {
            "use strict";
            n.r(t),
                n.d(t, {
                    __N_SSP: function () {
                        return b;
                    },
                });
            var i = n(5893),
                l = n(7294),
                o = n(5152),
                a = n.n(o),
                s = n(4012),
                r = n(35),
                d = n(6810),
                c = n(5135),
                u = n(4717);
            let f = a()(
                    () =>
                        Promise.resolve()
                            .then(n.bind(n, 753))
                            .then((e) => e.FeaturedEstates),
                    { loadableGenerated: { webpack: () => [753] } }
                ),
                p = a()(
                    () =>
                        Promise.resolve()
                            .then(n.bind(n, 3044))
                            .then((e) => e.EstatesForSale),
                    { loadableGenerated: { webpack: () => [3044] } }
                ),
                h = a()(
                    () =>
                        Promise.resolve()
                            .then(n.bind(n, 1169))
                            .then((e) => e.EstatesForRent),
                    { loadableGenerated: { webpack: () => [1169] } }
                ),
                m = a()(
                    () =>
                        Promise.resolve()
                            .then(n.bind(n, 8163))
                            .then((e) => e.EstatesCompleted),
                    { loadableGenerated: { webpack: () => [8163] } }
                ),
                v = (e) => {
                    var t;
                    let { estates: n, profile: o, configuration: a } = e,
                        { blogs: v } = (0, u.L)(),
                        b = (0, l.useMemo)(
                            () =>
                                n
                                    .filter((e) => 1 !== e.completed)
                                    .filter(
                                        (e) =>
                                            e.operationType === d.C8.sale ||
                                            e.operationType === d.C8.rentalSale
                                    ),
                            [n]
                        ),
                        g = (0, l.useMemo)(
                            () =>
                                n
                                    .filter((e) => 1 !== e.completed)
                                    .filter(
                                        (e) =>
                                            e.operationType === d.C8.rental ||
                                            e.operationType === d.C8.rentalSale
                                    ),
                            [n]
                        ),
                        x = (0, l.useMemo)(
                            () =>
                                n.filter(
                                    (e) => 1 !== e.completed && e.featured
                                ),
                            [n]
                        ),
                        w = (0, l.useMemo)(
                            () => n.filter((e) => 1 === e.completed),
                            [n]
                        ),
                        _ = (0, l.useMemo)(
                            () =>
                                o.files.find(
                                    (e) =>
                                        e.fileType === d.U9.image && e.featured
                                ),
                            [o]
                        ),
                        { useGetCommunication: j, useGetIp: E } = (0, c.wo)(),
                        T = async () => {
                            let { ip: e } = await E(),
                                t = {
                                    ip: e,
                                    agent: navigator.userAgent,
                                    url:
                                        window.location.host +
                                        window.location.pathname,
                                    pixel: a.fbPixel,
                                    conversationalToken: a.fbConversionToken,
                                };
                            try {
                                a.fbConversionToken.length > 0 &&
                                    a.fbPixel.length > 0 &&
                                    (await j(t));
                            } catch (n) {
                                console.log(n);
                            }
                        };
                    return (
                        (0, l.useEffect)(() => {
                            T();
                        }, []),
                        console.log(a),
                        (0, i.jsxs)(i.Fragment, {
                            children: [
                                o &&
                                    (0, i.jsx)(s.h_, {
                                        title: "".concat(
                                            (null == a ? void 0 : a.title)
                                                ? null == a
                                                    ? void 0
                                                    : a.title
                                                : "Agente Inmobiliario"
                                        ),
                                        description:
                                            null == o ? void 0 : o.description,
                                        image: {
                                            url:
                                                (null == _ ? void 0 : _.path) ||
                                                "",
                                            description:
                                                null == o
                                                    ? void 0
                                                    : o.description,
                                        },
                                        fbDomainVerification:
                                            null == a
                                                ? void 0
                                                : a.fbDomainVerification,
                                    }),
                                (0, i.jsxs)("div", {
                                    children: [
                                        (0, i.jsx)(r.eb, {
                                            profile: o,
                                            configuration: a,
                                        }),
                                        (0, i.jsx)("div", {
                                            id: "propiedades",
                                            className:
                                                "w-full h-32 flex items-center justify-center",
                                            children: (0, i.jsx)("h2", {
                                                className:
                                                    "uppercase text-subheading-01 md:text-heading-01 text-center font-semibold text-principal",
                                                children:
                                                    (null ===
                                                        (t =
                                                            a.mainTitleEstate) ||
                                                    void 0 === t
                                                        ? void 0
                                                        : t.length) > 0
                                                        ? a.mainTitleEstate
                                                        : "As\xed vendo mis propiedades",
                                            }),
                                        }),
                                        x.length > 0 &&
                                            (0, i.jsx)(f, { estates: x }),
                                        b.length > 0 &&
                                            (0, i.jsx)(p, { estates: b }),
                                        g.length > 0 &&
                                            (0, i.jsx)(h, { estates: g }),
                                        w.length > 0 &&
                                            (0, i.jsx)(m, { estates: w }),
                                        (0, i.jsx)(r.jn, { estates: n }),
                                        (null == a ? void 0 : a.guide) &&
                                            (null == a
                                                ? void 0
                                                : a.guide.length) > 0 &&
                                            (0, i.jsx)(r.fD, { profile: o }),
                                        (0, i.jsx)(r.IG, {
                                            profile: o,
                                            configuration: a,
                                        }),
                                        v &&
                                            (null == v ? void 0 : v.length) >
                                                0 &&
                                            (0, i.jsx)(r.V_, {}),
                                    ],
                                }),
                            ],
                        })
                    );
                };
            var b = !0;
            t.default = v;
        },
    },
    function (e) {
        e.O(0, [774, 888, 179], function () {
            return e((e.s = 8312));
        }),
            (_N_E = e.O());
    },
]);
