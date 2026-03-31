"use client";

import { useState } from "react";
import Link from "next/link";
import { usePathname } from "next/navigation";
import { siteConfig } from "@/lib/config";

export default function Header() {
  const [menuOpen, setMenuOpen] = useState(false);
  const pathname = usePathname();

  const isActive = (url: string) =>
    pathname === url || (url !== "/" && pathname.startsWith(url));

  return (
    <header className="header">
      <nav className="nav">
        <a href="/" className="nav__logo">
          <img
            src="/assets/images/logo-S.M.png"
            className="nav__logo-img"
            alt="Sadab Munshi"
            onError={(e) => {
              const target = e.currentTarget;
              target.style.display = "none";
              const text = document.createElement("span");
              text.textContent = "S.M.";
              target.parentElement?.appendChild(text);
            }}
          />
        </a>

        <ul className={`nav__links${menuOpen ? " active" : ""}`}>
          {siteConfig.navItems.map((item) => (
            <li key={item.url}>
              <Link
                href={item.url}
                className={isActive(item.url) ? "nav__link--active" : ""}
                onClick={() => setMenuOpen(false)}
              >
                {item.label}
              </Link>
            </li>
          ))}
        </ul>

        <button
          className="nav__menu-btn"
          aria-label="Toggle menu"
          aria-expanded={menuOpen}
          onClick={() => setMenuOpen((prev) => !prev)}
        >
          <svg
            className="nav__menu-icon nav__menu-icon--open"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          >
            <line x1="3" y1="12" x2="21" y2="12" />
            <line x1="3" y1="6" x2="21" y2="6" />
            <line x1="3" y1="18" x2="21" y2="18" />
          </svg>
          <svg
            className="nav__menu-icon nav__menu-icon--close"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          >
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button>
      </nav>
    </header>
  );
}
