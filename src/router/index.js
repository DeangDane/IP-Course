import { createRouter, createWebHistory } from "vue-router";
import Layout from "@/views/Layout.vue";
import Page1 from "@/components/Page1.vue";
import Page2 from "@/components/Page2.vue";
import Page3 from "@/components/Page3.vue";
import Section from "@/components/Section.vue";

const routes = [
  {
    path: "/",
    component: Layout,
    children: [
      {
        path: "page1",
        component: Page1,
        children: [
          { path: "section1", component: Section, props: { sectionTitle: "Section 1 of Page 1" } },
          { path: "section2", component: Section, props: { sectionTitle: "Section 2 of Page 1" } },
          { path: "section3", component: Section, props: { sectionTitle: "Section 3 of Page 1" } },
          { path: "section4", component: Section, props: { sectionTitle: "Section 4 of Page 1" } },
        ],
      },
      {
        path: "page2",
        component: Page2,
        children: [
          { path: "section1", component: Section, props: { sectionTitle: "Section 1 of Page 2" } },
          { path: "section2", component: Section, props: { sectionTitle: "Section 2 of Page 2" } },
          { path: "section3", component: Section, props: { sectionTitle: "Section 3 of Page 2" } },
          { path: "section4", component: Section, props: { sectionTitle: "Section 4 of Page 2" } },
        ],
      },
      {
        path: "page3",
        component: Page3,
        children: [
          { path: "section1", component: Section, props: { sectionTitle: "Section 1 of Page 3" } },
          { path: "section2", component: Section, props: { sectionTitle: "Section 2 of Page 3" } },
          { path: "section3", component: Section, props: { sectionTitle: "Section 3 of Page 3" } },
          { path: "section4", component: Section, props: { sectionTitle: "Section 4 of Page 3" } },
        ],
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;