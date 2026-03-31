import { siteConfig } from "@/lib/config";

export default function Footer() {
  return (
    <footer className="footer">
      <div className="container">
        <a href="/" className="footer__logo-link">
          <img
            src="/assets/images/logo-S.M.png"
            className="footer__logo-img"
            alt="Sadab Munshi"
          />
        </a>
        <div className="footer__bottom">
          <p>
            &copy; {new Date().getFullYear()} {siteConfig.name}
          </p>
        </div>
      </div>
    </footer>
  );
}
