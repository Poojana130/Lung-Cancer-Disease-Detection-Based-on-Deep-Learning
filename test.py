import tensorflow as tf
import numpy as np
from tensorflow.keras.preprocessing.image import load_img, img_to_array
import os

# Define the test image path and the trained model path
test_image_path = "D:/PROJECT/5.png"  # Replace with the path to your test image
model_path = "ct_scan_cnn_model.h5"

# Load the trained model
model = tf.keras.models.load_model(model_path)

# Fetch class names from the training directory
train_dir = "D:/PROJECT/dataset"  # Replace with your train folder path
class_names = sorted(os.listdir(train_dir))
print(f"Class names: {class_names}")

# Load and preprocess the test image
def preprocess_image(image_path):
    image = load_img(image_path, target_size=(150, 150))  # Resize to match model input size
    image_array = img_to_array(image)  # Convert to numpy array
    image_array = np.expand_dims(image_array, axis=0)  # Add batch dimension
    image_array /= 255.0  # Normalize pixel values
    return image_array

# Preprocess the test image
test_image = preprocess_image(test_image_path)

# Predict the class
predictions = model.predict(test_image,verbose=0)
predicted_class_index = np.argmax(predictions)
predicted_class_name = class_names[predicted_class_index]

print(f"Predicted class: {predicted_class_name}")
