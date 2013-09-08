.PHONY: assets/css/custom.css

all: css

css: assets/css/custom.css

assets/css/custom.css: assets/less/app.less
	lessc assets/less/app.less > temp.css
	java -jar yui.jar temp.css -o assets/css/custom.css
	rm -f temp.css

clean:
	rm -f assets/css/custom.css
