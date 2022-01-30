import cv2
images=cv2.imread('rumahkita3.jpeg')
resize=cv2.resize(images,(824,464))
cv2.imwrite('rumahkita3-resized.jpeg',resize)
