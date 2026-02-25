# Windows 11 Local Account Bypass Guide

## 📌 Purpose
This guide explains how to create a Local Account during Windows 11 setup when it forces you to sign in with a Microsoft account.

---

## 🛠 Steps

1. On the Microsoft Sign-in screen, press:

   Ctrl + Shift + J

2. If nothing appears, press the **J key multiple times**
   (keep holding Ctrl + Shift and tap J repeatedly).

3. When the console appears, type:

   WinJS.Application.restart("ms-cxh:localonly")

4. Press **Enter**.

5. Press **Escape (Esc)**.

6. The Local Account setup screen should appear.

---

## ✅ Result
You can now create a Local Account without signing in with a Microsoft account.

---

⚠ Notes
- This may only work on certain Windows 11 versions.
- If it does not work, use the `OOBE\BYPASSNRO` method instead.
