@keyframes scale-rotate {
  0% {
    transform: scale(0) rotate(0deg);
  }
  100% {
    transform: scale(1) rotate(360deg);
  }
}

div {
  animation-name: scale-rotate;
  animation-duration: 2s;
}