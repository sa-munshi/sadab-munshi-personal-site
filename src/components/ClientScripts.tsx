"use client";

import { useEffect } from "react";

export default function ClientScripts() {
  useEffect(() => {
    const keys: string[] = [];

    // --- Easter egg: "sm" keypress sequence ---
    function handleKeydown(e: KeyboardEvent) {
      keys.push(e.key.toLowerCase());
      if (keys.length > 2) keys.shift();

      if (keys.join("") === "sm") {
        showToast("You found the secret. Stay curious. ✨");
        keys.length = 0;
      }
    }

    function showToast(message: string) {
      const toast = document.querySelector<HTMLElement>(".toast");
      if (!toast) return;

      toast.textContent = message;
      toast.classList.add("show");

      setTimeout(() => {
        toast.classList.remove("show");
      }, 3000);
    }

    // --- Header hide/show on scroll ---
    let lastScrollY = window.scrollY;
    const header = document.querySelector<HTMLElement>(".header");

    function handleScroll() {
      const currentScrollY = window.scrollY;

      if (currentScrollY > lastScrollY && currentScrollY > 80) {
        header?.classList.add("header--hidden");
      } else {
        header?.classList.remove("header--hidden");
      }

      lastScrollY = currentScrollY;
    }

    // --- External links: open in new tab ---
    const hostname = window.location.hostname;
    const externalLinks = document.querySelectorAll<HTMLAnchorElement>(
      'a[href^="http"]'
    );

    externalLinks.forEach((link) => {
      if (!link.href.includes(hostname)) {
        link.setAttribute("target", "_blank");
        link.setAttribute("rel", "noopener noreferrer");
      }
    });

    // --- Console greeting ---
    console.log("Hello, curious one 👋");
    console.log("Looking at the source? I like your style.");
    console.log("— Sadab");

    // --- Smooth scroll for anchor links ---
    function handleAnchorClick(e: MouseEvent) {
      const target = e.currentTarget as HTMLAnchorElement;
      const hash = target.getAttribute("href");

      if (!hash || !hash.startsWith("#")) return;

      const el = document.querySelector(hash);
      if (el) {
        e.preventDefault();
        el.scrollIntoView({ behavior: "smooth" });
      }
    }

    const anchorLinks = document.querySelectorAll<HTMLAnchorElement>(
      'a[href^="#"]'
    );
    anchorLinks.forEach((link) => {
      link.addEventListener("click", handleAnchorClick);
    });

    // Attach global listeners
    window.addEventListener("keydown", handleKeydown);
    window.addEventListener("scroll", handleScroll, { passive: true });

    // Cleanup
    return () => {
      window.removeEventListener("keydown", handleKeydown);
      window.removeEventListener("scroll", handleScroll);
      anchorLinks.forEach((link) => {
        link.removeEventListener("click", handleAnchorClick);
      });
    };
  }, []);

  return null;
}
