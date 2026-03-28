#Use nginx to serve the HTML file
FROM nginx:alpine

# Copy your HTML file into the nginx web root
COPY index.html /usr/share/nginx/html/index.html

# Expose port 80
EXPOSE 80