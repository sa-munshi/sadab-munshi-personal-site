import { NextRequest, NextResponse } from "next/server";

export async function POST(req: NextRequest) {
  const body = await req.json();
  const { name, email, message } = body;

  if (!name || !email || !message) {
    return NextResponse.json(
      { success: false, message: "Please fill in all fields." },
      { status: 400 },
    );
  }

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    return NextResponse.json(
      { success: false, message: "Please enter a valid email." },
      { status: 400 },
    );
  }

  if (message.length < 10) {
    return NextResponse.json(
      { success: false, message: "Message must be at least 10 characters." },
      { status: 400 },
    );
  }

  // In production, add email sending or database storage here
  return NextResponse.json({
    success: true,
    message: "Thank you! Your message has been received.",
  });
}
