/** Site configuration — single source of truth for all site-wide settings */
export const siteConfig = {
  name: "Sadab Munshi",
  tagline: "Personal Website",
  description:
    "Personal space of Sadab Munshi. Exploring ideas, building useful things, and sharing what I learn along the way.",
  url: "https://www.sadabmunshi.online",
  author: "Sadab Munshi",

  email: "contact@sadabmunshi.online",
  resumeFile: "/resume/Sadab-Munshi-Resume.pdf",

  social: {
    twitter: "https://twitter.com/SadabMunshi",
    github: "https://github.com/sa-munshi",
    linkedin: "https://linkedin.com/in/sadab-munshi",
    instagram: "https://instagram.com/heysadab",
  },

  navItems: [
    { url: "/", label: "Home" },
    { url: "/about", label: "About" },
    { url: "/now", label: "Now" },
    { url: "/blog", label: "Blog" },
    { url: "/projects", label: "Projects" },
    { url: "/contact", label: "Contact" },
  ],

  themeColor: "#FAF9F6",
  twitterHandle: "@SadabMunshi",
} as const;
