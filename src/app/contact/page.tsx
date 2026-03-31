import type { Metadata } from "next";
import ContactForm from "@/components/ContactForm";

export const metadata: Metadata = {
  title: "Contact",
  description:
    "Get in touch. I am always open to interesting conversations and new connections.",
  robots: { index: false, follow: false },
};

export default function ContactPage() {
  return <ContactForm />;
}
