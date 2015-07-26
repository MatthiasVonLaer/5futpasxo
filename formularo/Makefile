all: lua

pdf:
	pdflatex rolulformularo

lua:
	lualatex rolulformularo

todo: 
	grep -R -s -n TODO *.tex

clean:
	rm -f *.aux *.log *.dvi *.pdf *.bbl *.blg *.ilg *.ind *.toc *.idx *.out

distclean: clean
	git clean -f
