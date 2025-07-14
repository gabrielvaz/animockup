# Animockup - Free Version

Create stunning product teasers with animated mockups! 🔥

A powerful tool to create stunning animated mockups with **all premium features unlocked for free**.

## ✨ Features

- 📹 Add videos or images of your products
- 📱 Choose from 20+ device mockups and frames
- ✂️ Crop and reposition your content
- 🎨 Customize backgrounds with gradients
- ✏️ Add text and images
- 🪄 Multiple animation presets
- ⏱ Customizable duration and easing
- 🎚️ Export in multiple formats (MP4, GIF, WEBM)
- 🔓 **All premium features unlocked!**

## 🚀 Deploy to Vercel

[![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/gabrielvaz/animockup)

## 🛠️ Development

```bash
# Clone the repository
git clone https://github.com/gabrielvaz/animockup.git
cd animockup

# Start local server
python3 -m http.server 3000 --directory src

# Open http://localhost:3000
```

## 📦 Project Structure

```
├── src/                 # Frontend files
│   ├── index.html      # Main application
│   ├── styles.css      # Styling
│   ├── js/            # JavaScript files
│   └── assets/        # Images and mockups
├── api/               # Serverless functions
│   └── subscription.php
└── vercel.json        # Vercel configuration
```

## 🔧 Firebase Setup (Optional)

If you want to use Firebase authentication:

1. Create a Firebase project
2. Update the Firebase config in `src/index.html` (lines 424-431)
3. Configure Firebase Authentication

## 📝 Changes from Original

- ✅ Removed Paddle subscription system
- ✅ Unlocked all premium features
- ✅ Removed payment integration
- ✅ Optimized for Vercel deployment
- ✅ Updated API structure

## 📄 License

This project is for educational and creative purposes.

## 🤝 Contributing

Feel free to submit issues and pull requests!