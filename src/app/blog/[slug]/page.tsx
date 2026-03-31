import { blogPosts, getPostBySlug, formatDate } from "@/lib/posts";
import { notFound } from "next/navigation";
import { getBlogContent } from "@/lib/blog-content";
import type { Metadata } from "next";

export function generateStaticParams() {
  return blogPosts.map((post) => ({ slug: post.slug }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}): Promise<Metadata> {
  const { slug } = await params;
  const post = getPostBySlug(slug);
  if (!post) return { title: "Post Not Found" };
  return {
    title: post.title,
    description: post.excerpt,
    openGraph: {
      type: "article",
      publishedTime: post.date,
      modifiedTime: post.modified || post.date,
    },
  };
}

export default async function BlogPostPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  const post = getPostBySlug(slug);
  if (!post) notFound();
  const content = getBlogContent(slug);
  if (!content) notFound();

  return (
    <div className="container page-content">
      {content}
    </div>
  );
}
