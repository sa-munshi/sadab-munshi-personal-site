import "@/styles/globals.css";

import { Newsreader, Manrope, JetBrains_Mono } from "next/font/google";
import type { Metadata } from "next";

import { siteConfig } from "@/lib/config";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import ClientScripts from "@/components/ClientScripts";

const newsreader = Newsreader({
  subsets: ["latin"],
  weight: ["400", "500", "600"],
  style: ["normal", "italic"],
  variable: "--font-heading",
  display: "swap",
});

const manrope = Manrope({
  subsets: ["latin"],
  weight: ["400", "500", "600"],
  variable: "--font-body",
  display: "swap",
});

const jetbrainsMono = JetBrains_Mono({
  subsets: ["latin"],
  weight: ["400"],
  variable: "--font-mono",
  display: "swap",
});

export const metadata: Metadata = {
  metadataBase: new URL(siteConfig.url),
  title: {
    default: "Sadab Munshi — Student, Builder",
    template: "%s — Sadab Munshi",
  },
  description: siteConfig.description,
  authors: [{ name: siteConfig.author }],
  openGraph: {
    siteName: siteConfig.name,
    locale: "en_US",
    type: "website",
    images: [
      {
        url: "/assets/images/og-image.png",
        width: 1200,
        height: 630,
      },
    ],
  },
  twitter: {
    card: "summary_large_image",
    site: siteConfig.twitterHandle,
    creator: siteConfig.twitterHandle,
  },
  icons: {
    icon: [
      { url: "/assets/images/favicon.ico" },
      {
        url: "/assets/images/favicon-32x32.png",
        sizes: "32x32",
        type: "image/png",
      },
      {
        url: "/assets/images/favicon-16x16.png",
        sizes: "16x16",
        type: "image/png",
      },
    ],
    apple: "/assets/images/apple-touch-icon.png",
  },
  manifest: "/manifest.json",
  other: {
    "theme-color": siteConfig.themeColor,
  },
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html
      lang="en"
      className={`${newsreader.variable} ${manrope.variable} ${jetbrainsMono.variable}`}
    >
      <body>
        <div className="page">
          <Header />
          <main className="main">{children}</main>
          <Footer />
        </div>
        <div className="toast" aria-live="polite"></div>
        <ClientScripts />
      </body>
    </html>
  );
}
